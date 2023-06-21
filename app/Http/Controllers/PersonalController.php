<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\About;
use App\Models\Intro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PersonalController extends Controller
{
    public function index($username)
    {
        $intro = Intro::where('username', )->first();
        return view('settings.view');
    }

    public function intro($username)
    {
        $intro = Intro::where('username', $username)->first();
        return view('personal-portofolio.intro', ['intro' => $intro]);
    }

    

    
}