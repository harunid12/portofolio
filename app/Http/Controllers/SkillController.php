<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\SkillType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($username)
    {
        $skill = Skill::with('skill_type')->where('username', $username)->get();
        return view('skill.view', ['skill' => $skill]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $skill_type = SkillType::select('id', 'nama')->get();
        return view('skill.create', ['skill_type' => $skill_type]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'skill_type_id' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'nama' => 'required|max:100',
        ]);

         // upload foto
         $image = $request->file('image');
         $image->storeAs('skill', $image->hashName());

         // create to database
        Skill::create([
            'username' => Auth::user()->username,
            'skill_type_id' => $request->skill_type_id,
            'image' => $image->hashName(),
            'nama' => $request->nama
        ]);

        return redirect(Auth::user()->username.'/skills')->with('toast_success', 'Create Skills Successfully!');
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
        $skill = Skill::with('skill_type')->findOrFail($id);
        $skill_type = SkillType::where('id', '!=', $skill->skill_type_id)->get();
        return view('skill.edit', ['skill' => $skill, 'skill_type' => $skill_type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:1024',
            'nama' => 'max:100',
        ]);

        $skill = Skill::findOrFail($id);

        // check file is uploaded
        if($request->hasFile('image')){
            // upload new image
            $image = $request->file('image');
            $image->storeAs('skill',$image->hashName());

            // delete old file
            Storage::delete('skill/'.$skill->image);


            // update post with new file
            $skill->update([
                'image' => $image->hashName(),
                'skill_type_id' => $request->skill_type_id,
                'nama' => $request->nama
            ]);
        }else{
            // update without file
            $skill->update([
                'skill_type_id' => $request->skill_type_id,
                'nama' => $request->nama
            ]);
        }
        return redirect(Auth::user()->username.'/skills')->with('toast_success', 'Update Skill Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill = Skill::findOrFail($id);

        // delete file
        Storage::delete('skill/'.$skill->image);

        // delete skill
        $skill->delete();

        return redirect(Auth::user()->username.'/skills');
    }
}
