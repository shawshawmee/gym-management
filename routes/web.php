<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class, 'index'])->name('index');
Route::post('/createmember', [MemberController::class, 'create'])->name('createmember');
Route::get('/editmember/{id}', [MemberController::class, 'edit'])->name('editmember');
Route::post('/updatemember', [MemberController::class, 'update'])->name('updatemember');
Route::get('/deletemember/{id}', [MemberController::class, 'delete'])->name('deletemember');


