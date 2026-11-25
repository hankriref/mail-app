<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::post('/envoyer', [MailController::class, 'envoyer'])
    ->middleware('auth')
    ->name('mail.envoyer');

require __DIR__.'/auth.php';
Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth'])->name('dashboard');