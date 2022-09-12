<?php

use App\Http\Controllers\WebController;
use App\Models\Job;
use App\Models\Person;
use App\Models\Web;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view(
        'index',
        [
            "title" => "Home",
            "profiles" => Person::getProfile(),
            "portofolios" => Job::all(),
            "skill_languages" => Person::getSkillLanguages(),
            "skill_apps" => Person::getSkillApps(),
            "skill_tools" => Person::getSkillTools(),
        ]
    );
});

Route::get('/about', function () {
    return view(
        'about',
        ["title" => "About"]
    );
});


Route::get('/portfolio/web-programming', [WebController::class, 'index']);

Route::get('/portfolio/web-programming/{web:slug}', [WebController::class, 'show']);
