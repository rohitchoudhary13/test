<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index']);
Route::get('/view/user', [UserController::class, 'view']);
Route::post('/add/user', [UserController::class, 'register']);
Route::get('/view/user', [UserController::class, 'show']);
Route::get('/view/task', [TaskController::class, 'show']);
