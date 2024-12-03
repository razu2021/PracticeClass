<?php

use App\Http\Controllers\form\formController;
use App\Http\Controllers\frontend\StudentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/about ', function () {
    return view('frontend.pages.about');
});
Route::get('/service', function () {
    return view('frontend.pages.service');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});




// form submit route 
Route::post('submit-form1',[formController::class,'insert']);


// basic form route 
Route::view('basic','frontend.fromall.basic');
Route::post('basic-form',[formController::class, 'basic']);



// route group route prefix . name route . controller group 

Route::controller(StudentController::class)->prefix('student/all')->name('student.')->group(function(){
    route::get('/index','index')->name('index');
    route::get('/login','login')->name('login');
    route::get('/register','register')->name('register');
    route::get('/profile','profile')->name('profile');
});













// this route for form validation only 
Route::view('form-validation','frontend.fromall.form_validation');
Route::post('from_validation',[formController::class,'from_validation']);


































Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
