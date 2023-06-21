<?php

namespace App\Http\Controllers;

use App\Models\Telp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TelpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username)
    {
        $telp = Telp::where('username', $username)->get();
        return view('telp.view', ['telp' => $telp]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('telp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $username)
    {
        $request->validate([
            'telp' => 'required|max:14',
        ]);

        // create to database
        Telp::create([
            'username' => $username,
            'telp' => $request->telp,
        ]);
        
        return redirect($username.'/telp')->with('toast_success', 'Create Telp Successfully!');
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
        $telp = Telp::findOrFail($id);
        return view('telp.edit', ['telp' => $telp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $telp = Telp::findOrFail($id);

        $request->validate([
            'telp' => 'max:14',
        ]);

        // create to database
        $telp->update([
            'telp' => $request->telp
        ]);
        
        return redirect(Auth::user()->username.'/telp')->with('toast_success', 'Update Telp Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $telp = Telp::findOrFail($id);
        $telp->delete();

        return redirect(Auth::user()->username."/telp");
    }
}
