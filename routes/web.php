<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\ExpereinceController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SertificationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SosmedController;
use App\Http\Controllers\TelpController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// frontend
// Route::get('/', function () {
//     return view('welcome');
// });

// backend
Route::middleware('guest')->group(function (){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/auth', [AuthController::class, 'authenticating']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function(){
    
    Route::middleware('only-admin')->group(function() {
        // dashboard admin
        Route::get('/dashboard', [DashboardController::class, 'index']);
        
        // users
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/user-edit/{username}', [UserController::class, 'edit']);
        Route::put('/user-update/{username}', [UserController::class, 'update']);
        Route::get('/user-delete/{username}', [UserController::class, 'destroy']);
    });

    Route::middleware('only-user')->group(function () {
        Route::get('/{username}/intro', [PersonalController::class, 'intro']);

        // about
        Route::get('/{username}/about', [AboutController::class, 'about']);
        Route::put('/about-update/{username}', [AboutController::class, 'aboutUpdate']);

        // skill
        Route::get('/{username}/skills', [SkillController::class, 'index']);
        Route::get('/{username}/skill-create', [SkillController::class, 'create']);
        Route::post('/{username}/skill-save', [SkillController::class, 'store']);
        Route::get('/skill-edit/{id}', [SkillController::class, 'edit']);
        Route::put('/skill-update/{id}', [SkillController::class, 'update']);
        Route::get('/skill-delete/{id}', [SkillController::class, 'destroy']);

        // intro
        Route::get('/{username}/intro', [IntroController::class, 'index']);

        // education
        Route::get('/{username}/education', [EducationController::class, 'index']);
        Route::get('/{username}/education-create', [EducationController::class, 'create']);
        Route::post('/{username}/education-save', [EducationController::class, 'store']);
        Route::get('/education-edit/{id}', [EducationController::class, 'edit']);
        Route::put('/education-update/{id}', [EducationController::class, 'update']);
        Route::get('/education-delete/{id}', [EducationController::class, 'destroy']);

        // sertification
        Route::get('/{username}/sertification', [SertificationController::class, 'index']);
        Route::get('/{username}/sertification-create', [SertificationController::class, 'create']);
        Route::post('/{username}/sertification-save', [SertificationController::class, 'store']);
        Route::get('/sertification-edit/{id}', [SertificationController::class, 'edit']);
        Route::put('/sertification-update/{id}', [SertificationController::class, 'update']);
        Route::get('/sertification-delete/{id}', [SertificationController::class, 'destroy']);
        
        // expereince
        Route::get('/{username}/experience', [ExperienceController::class, 'index']);
        Route::get('/{username}/experience-create', [ExperienceController::class, 'create']);

        // sosmed
        Route::get('/{username}/sosmed', [SosmedController::class, 'index']);
        Route::get('/{username}/sosmed-create', [SosmedController::class, 'create']);
        Route::post('/{username}/sosmed-save', [SosmedController::class, 'store']);
        Route::get('/sosmed-edit/{id}', [SosmedController::class, 'edit']);
        Route::put('/sosmed-update/{id}', [SosmedController::class, 'update']);
        Route::get('/sosmed-delete/{id}', [SosmedController::class, 'destroy']);

        // telp
        Route::get('/{username}/telp', [TelpController::class, 'index']);
        Route::get('/{username}/telp-create', [TelpController::class, 'create']);
        Route::post('/{username}/telp-save', [TelpController::class, 'store']);
        Route::get('/telp-edit/{id}', [TelpController::class, 'edit']);
        Route::put('/telp-update/{id}', [TelpController::class, 'update']);
        Route::get('/telp-delete/{id}', [TelpController::class, 'destroy']);
    });
    
    // profile
    Route::get('/profile/{username}', [ProfileController::class, 'profile']);
    Route::put('/profile-update/{username}', [ProfileController::class, 'update']);

    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::get('/{username}', [WelcomeController::class, 'index']);
Route::get('/404', [ErrorController::class, 'index']);