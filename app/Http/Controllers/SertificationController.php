<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sertification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username)
    {
        $sertification = Sertification::where('username', $username)->get();
        return view('sertification.view', ['sertification' => $sertification]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sertification.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $username)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'link' => 'required|max:255',
            'judul' => 'required|max:255',
            'deskripsi' => 'required',
            'tahun' => 'required',
        ]);

        // upload foto
        $image = $request->file('image');
        $image->storeAs('sertification', $image->hashName());

        // create to database
        Sertification::create([
            'username' => $username,
            'image' => $image->hashName(),
            'link' => $request->link,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tahun' => $request->tahun
        ]);

        return redirect(Auth::user()->username.'/sertification')->with('toast_success', 'Create Sertification Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sertification = Sertification::findOrFail($id);
        return view('sertification.edit', ['sertification' => $sertification]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'link' => 'max:255',
            'judul' => 'max:255',
            'deskripsi' => 'max:255',
            'tahun' => 'max:4',
        ]);

        $sertification = Sertification::findOrFail($id);

        // check file is uploaded
        if($request->hasFile('image')){
            // upload new image
            $image = $request->file('image');
            $image->storeAs('sertification',$image->hashName());

            // delete old file
            Storage::delete('sertification/'.$sertification->image);


            // update post with new file
            $sertification->update([
                'image' => $image->hashName(),
                'link' => $request->link,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun
            ]);
        }else{
            // update without file
            $sertification->update([
                'link' => $request->link,
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'tahun' => $request->tahun
            ]);
        }
        return redirect(Auth::user()->username.'/sertification')->with('toast_success', 'Update Sertification Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sertifikasi = Sertification::findorFail($id);

        // delete file
        Storage::delete('sertification/'.$sertifikasi->image);

        // delete edu
        $sertifikasi->delete();

        return redirect(Auth::user()->username.'/sertification');
    }
}
