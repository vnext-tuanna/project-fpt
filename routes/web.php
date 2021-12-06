<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryJobController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CategoryNewsController;
use App\Http\Controllers\NewsController;

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
Route::get('login', [LoginController::class, 'loginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function (){

        Route::get('/dashboard', function () {
            $users = \App\Models\User::all();
            $jobs = \App\Models\Job::all();
            $posts = \App\Models\Post::all();
            $cv = \App\Models\CV::all();
            return view('admin.index', compact('users', 'jobs', 'posts', 'cv'));
        })->name('dashboard');
        Route::prefix('dashboard/category')->group(function (){
            Route::get('/', [CategoryJobController::class, 'index'])->name('category');
            Route::get('/add',[CategoryJobController::class, 'create'])->name('category.add');
            Route::post('/add',[CategoryJobController::class, 'store']);
            Route::get('/edit/{id}', [CategoryJobController::class, 'edit'])->name('category.edit');
            Route::post('/edit/{id}', [CategoryJobController::class, 'update']);
            Route::get('/delete/{id}', [CategoryJobController::class, 'destroy'])->name('category.delete');
        });
        Route::prefix('dashboard/job')->group(function (){
            Route::get('/', [JobController::class, 'index'])->name('job');
            Route::get('/add', [JobController::class, 'create'])->name('job.add');
            Route::post('/add', [JobController::class, 'store']);
            Route::get('/edit/{id}', [JobController::class, 'edit'])->name('job.edit');
            Route::post('/edit/{id}', [JobController::class, 'update']);
            Route::get('/delete/{id}', [JobController::class, 'destroy'])->name('job.delete');
        });
        Route::prefix('dashboard/news-category')->group(function (){
            Route::get('/', [CategoryNewsController::class, 'index'])->name('news-category');
            Route::get('/add', [CategoryNewsController::class, 'create'])->name('news-category.add');
            Route::post('/add', [CategoryNewsController::class, 'store']);
            Route::get('/edit/{id}', [CategoryNewsController::class, 'edit'])->name('news-category.edit');
            Route::post('/edit/{id}', [CategoryNewsController::class, 'update']);
            Route::get('/delete/{id}', [CategoryNewsController::class, 'destroy'])->name('news-category.delete');
        });
        Route::prefix('dashboard/news')->group(function (){
            Route::get('/', [NewsController::class, 'index'])->name('news');
            Route::get('/add', [NewsController::class, 'create'])->name('news.add');
            Route::post('/add', [NewsController::class, 'store']);
            Route::get('/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
            Route::post('/edit/{id}', [NewsController::class, 'update']);
            Route::get('/delete/{id}',[NewsController::class, 'destroy'] )->name('news.delete');
        });
        Route::prefix('dashboard/user')->group(function (){
            Route::get('/', [UserController::class, 'index'])->name('user');
            Route::get('/add',[UserController::class, 'create'])->name('user.add');
            Route::post('/add', [UserController::class, 'store']);
            Route::get('/edit/{id}', [UserController::class, 'edit'] )->name('user.edit');
            Route::post('/edit/{id}', [UserController::class, 'update'] );
            Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
        });
        Route::prefix('dashboard/cv')->group(function (){
            Route::get('/', [\App\Http\Controllers\CvController::class, 'index'])->name('cv');
            Route::get('/delete/{id}', [\App\Http\Controllers\CvController::class, 'destroy'])->name('cv.delete');
        });
});
