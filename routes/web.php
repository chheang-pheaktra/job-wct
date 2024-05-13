<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/job',[UserController::class,'job'])->name('job');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
    Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');

    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
    Route::get('/admin/career', [AdminController::class, 'career'])->name('admin/career');
    Route::get('admin/job/create',[AdminController::class,'create'])->name('admin/job/create');
    Route::post('/admin/job/post',[\App\Http\Controllers\CareerController::class,'store'])->name('admin/job/post');
    Route::get('/admin/job/show/{id}',[\App\Http\Controllers\AdminController::class,'show'])->name('admin/job/show/{id}');
    Route::get('/admin/job/edit/{id}',[\App\Http\Controllers\CareerController::class,'edit'])->name('admin/job/edit');
    Route::post('/admin/update/job/{id}',[\App\Http\Controllers\CareerController::class,'update'])->name('admin/update/job/{id}');
    Route::get('/admin/destroy/job/{id}',[\App\Http\Controllers\CareerController::class,'destroy'])->name('admin/destroy/job/{id}');

    Route::get('/admin/category',[AdminController::class,'category'])->name('admin/category');
    Route::post('/admin/category/create',[\App\Http\Controllers\CategoryControll::class,'create'])->name('admin/category');
    Route::get('/admin/category/delete/{id}',[\App\Http\Controllers\CategoryControll::class,'delete'])->name('admin/category');
    Route::post('/admin/category/update/{id}',[\App\Http\Controllers\CategoryControll::class,'update'])->name('admin/category');

    Route::get('/admin/apply/index',[AdminController::class,'index'])->name('Admin/apply/view');

});
