<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Education;
use App\Models\Sertification;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\Telp;
use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index($username)
    {
        $user = User::where('username', $username)->select('name')->first();
        $about = About::where('username', $username)->first();
        $skills = Skill::with('skill_type')->where('username', $username)->get();
        $edu = Education::where('username',$username)->get();
        $serti = Sertification::where('username',$username)->get();
        $sosmed = SocialMedia::where('username', $username)->get();
        $telpAbout = Telp::where('username', $username)->first();
        $telp = Telp::where('username', $username)->get();
        return view('index.view', [
            'user' => $user,
            'about' => $about,
            'skill' => $skills,
            'edu' => $edu,
            'sertification' => $serti,
            'telpAbout' => $telpAbout,
            'sosmed' => $sosmed,
            'telp' => $telp
        ]);
    }
}
