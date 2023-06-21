<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username)
    {
        $edu = Education::where('username', $username)->get();
        return view('education.view', ['edu' => $edu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'lokasi' => 'required|max:100',
            'gelar' => 'required|max:100',
            'ipk' => 'required',
        ]);

        // upload foto
        $image = $request->file('image');
        $image->storeAs('education', $image->hashName());

        // create to database
        Education::create([
            'username' => Auth::user()->username,
            'image' => $image->hashName(),
            'lokasi' => $request->lokasi,
            'gelar' => $request->gelar,
            'ipk' => $request->ipk
        ]);

        return redirect(Auth::user()->username.'/education')->with('toast_success', 'Create Education Successfully!');

        
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
    public function edit($id)
    {
        $edu = Education::findOrFail($id);
        return view('education.edit', ['edu' => $edu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'lokasi' => 'max:100',
            'gelar' => 'max:100',
            'ipk' => 'max:10',
        ]);

        $edu = Education::findOrFail($id);

        // check file is uploaded
        if($request->hasFile('image')){
            // upload new image
            $image = $request->file('image');
            $image->storeAs('education',$image->hashName());

            // delete old file
            Storage::delete('education/'.$edu->image);


            // update post with new file
            $edu->update([
                'image' => $image->hashName(),
                'lokasi' => $request->lokasi,
                'gelar' => $request->gelar,
                'ipk' => $request->ipk
            ]);
        }else{
            // update without file
            $edu->update([
                'lokasi' => $request->lokasi,
                'gelar' => $request->gelar,
                'ipk' => $request->ipk
            ]);
        }
        return redirect(Auth::user()->username.'/education')->with('toast_success', 'Update Education Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $edu = Education::findorFail($id);

        // delete file
        Storage::delete('education/'.$edu->image);

        // delete edu
        $edu->delete();

        return redirect(Auth::user()->username.'/education');
    }
}
