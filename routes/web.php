<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {   
    return view('index');
});

Route::get('index', action: [App\Http\Controllers\Controller::class, 'index'])->name('index');

Route::get('form1', action: [App\Http\Controllers\Controller::class, 'form1'])->name('form1');

Route::get('form2', action: [App\Http\Controllers\Controller::class, 'form2'])->name('form2');

Route::get('enrollment', action: [App\Http\Controllers\Controller::class, 'enrollment'])->name('enrollment');

Route::get(uri: 'classes', action: [App\Http\Controllers\Controller::class, 'classes'])->name('classes');

Route::get(uri: 'redirect', action: [App\Http\Controllers\Controller::class, 'redirect'])->name('redirect');

Route::get(uri: 'dashboard', action: [App\Http\Controllers\Controller::class, 'dashboard'])->name('dashboard');

Route::get(uri: 'tables', action: [App\Http\Controllers\Controller::class, 'tables'])->name('tables');

Route::get(uri: 'approval', action: [App\Http\Controllers\Controller::class, 'approvalview'])->name('approval');


// Storing Student Information Route // 

Route::post('/form1', [App\Http\Controllers\Controller::class, 'store'])->name('students.store');

Route::get('edit/{Student_ID}', [App\Http\Controllers\Controller::class, 'edit'])->name('edit');

Route::post('edit/{Student_ID}', [App\Http\Controllers\Controller::class, 'updateDocuments'])->name('updateDocuments');
