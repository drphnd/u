<?php

use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

// setelah controller dipisahkan ke dalam folder controller
Route::get('/', [ProjectController::class,'index']);

Route::get('/detail/{code}', [ProjectController::class,'show']);

Route::get('/detailWid/{id}', [ProjectController::class,'find']);


// sebelum controller dipisahkan ke dalam folder controller

// Route::get('/detail/{code}', function ($code) {
//     return view('detail',[
//         "pagetitle" => "Detail Data",
//         'projects' => Project::dataWithCode($code)
//     ]);
// });

Route::get('/home', function () {
    return view('home', [
        "name" => "Darren",
        "email" => "darren@gmail.com",
        "line" => "drphnd"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "pagetitle" => "ABOUT ME"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "pagetitle" => "CONTACT ME"
    ]);
});





// Route::get('/students', function () {
//     return view('students');
// });
// Route::get('/hai', function () {
//     return view('Hello');
// });
// Route::get('/My Project', function () {
//     return view('My Project');
// });
