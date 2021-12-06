<?php
Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/job', [\App\Http\Controllers\JobController::class, 'listJob'])->name('list.job');
Route::get('/job/{id}',[\App\Http\Controllers\JobController::class, 'show'])->name('job.detail');
Route::post('/job/{id}',[\App\Http\Controllers\JobController::class, 'sendMail']);
Route::get('/news', [\App\Http\Controllers\NewsController::class, 'listPost'])->name('list.news');
Route::get('/news/{id}',[\App\Http\Controllers\NewsController::class, 'show'])->name('news.detail');
Route::get('/qa', function (){
    return view('client.qa');
})->name('qa');
Route::get('/choose', function (){
    return view('client.choose');
})->name('choose');
Route::get('/contact', function (){
    return view('client.contact');
})->name('contact');

