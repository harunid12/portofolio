<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Intro;
use App\Models\Sertification;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\Telp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('role_id', 2)->get();
        return view('admin.users.view', ['users' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($username)
    {
        $user = User::where('username', $username)->first();
        return view('admin.users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $username)
    {
        $user = User::where('username', $username)->first();

        // $request->validate([
        //     'username' => 'unique:abouts,educations,experiences,intros,sertifications,skills,social_media,telp'
        // ]);
        
        $user->update([
            'status' => $request->status
        ]);
                About::create([
                    'username' => $request->username
                ]);

                Intro::create([
                    'username' => $request->username
                ]);

        return redirect('/users')->with('toast_success', 'User Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($username)
    {
        $deletedUser = User::where('username', $username)->first();
        $deletedAboutUser = About::where('username', $username)->first();
        $deletedEducationUser = Education::where('username', $username)->first();
        $deletedExperienceUser = Experience::where('username', $username)->first();
        $deletedIntroUser = Intro::where('username', $username)->first();
        $deletedSertificationUser = Sertification::where('username', $username)->first();
        $deletedSkillUser = Skill::where('username', $username)->first();
        $deletedSosmedUser = SocialMedia::where('username', $username)->first();
        $deletedTelpUser = Telp::where('username', $username)->first();

        // delete image
        Storage::delete('users/'.$deletedUser->image);

        // delete user
        $deletedUser->delete();
        $deletedAboutUser->delete();
        $deletedEducationUser->delete();
        $deletedExperienceUser->delete();
        $deletedIntroUser->delete();
        $deletedSertificationUser->delete();
        $deletedSkillUser->delete();
        $deletedSosmedUser->delete();
        $deletedTelpUser->delete();

        return redirect('/users');

    }
}
