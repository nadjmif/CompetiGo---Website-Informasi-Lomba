<?php
use App\Http\Controllers\LombaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lomba', [LombaController::class, 'index']);