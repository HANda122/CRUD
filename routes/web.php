<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', function () {
    return view('user');
});

Route::get('/mind', function () {
    return view('partials.default');
});

Route::get('students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('students/{id}/edit', [StudentController::Class, 'edit'])->name('students.edit');

Route::put('students/{id}', [StudentController::Class, 'update'])->name('students.update');

Route::get('students/{id}/delete', [StudentController::Class, 'delete'])->name('students.delete');






require __DIR__.'/auth.php';



