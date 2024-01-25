<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

// ...



// ...

Route::resource('students', StudentsController::class);


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
    return view('welcome');
});