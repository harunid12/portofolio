<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SosmedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username)
    {
        $sosmed = SocialMedia::where('username', $username)->get();
        return view('sosmed.view', ['sosmed' => $sosmed]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sosmed.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $username)
    {
        $request->validate([
            'link_icon' => 'required|max:255',
            'link_sosmed' => 'required|max:255',
        ]);

        // create to database
        SocialMedia::create([
            'username' => $username,
            'link_icon' => $request->link_icon,
            'link_sosmed' => $request->link_sosmed
        ]);
        
        return redirect($username.'/sosmed')->with('toast_success', 'Create Sosmed Successfully!');
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
        $sosmed = SocialMedia::findOrFail($id);
        return view('sosmed.edit', ['sosmed' => $sosmed]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sosmed = SocialMedia::findOrFail($id);

        $request->validate([
            'link_icon' => 'max:255',
            'link_sosmed' => 'max:255',
        ]);

        // create to database
        $sosmed->update([
            'link_icon' => $request->link_icon,
            'link_sosmed' => $request->link_sosmed
        ]);
        
        return redirect(Auth::user()->username.'/sosmed')->with('toast_success', 'Update Sosmed Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sosmed = SocialMedia::findorFail($id);

        // delete sosmed
        $sosmed->delete();

        return redirect(Auth::user()->username.'/sosmed');
    }
}
