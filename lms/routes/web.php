<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FacultyController;


Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'students/trash/{id}',
    [StudentController::class, 'trash']
) -> name('students.trash');

Route::get(
    'students/trashed',
    [StudentController::class, 'trashed']
) -> name('students.trashed');

Route::get(
    'students/restore/{id}',
    [StudentController::class, 'restore']
) -> name('students.restore') -> middleware('auth');


Route::resource('/students', StudentController::class);

Route::get(
    'students/destroy/{id}',
    [StudentController::class, 'destroy']
) -> name('students.destroy');

// Courses 

Route::get('courses', function () {
    return view('');
});

Route::get(
    'courses/trash/{id}',
    [CourseController::class, 'trash']
)->name('courses.trash');

Route::get(
    'courses/trashed',
    [CourseController::class, 'trashed']
)->name('courses.trashed');

Route::get(
    'courses/restore/{id}',
    [CourseController::class, 'restore']
)->name('courses.restore');

Route::resource('/courses', CourseController::class);
Route::resource('/faculties', FacultyController::class);

Route::get(
    'courses/destroy/{id}',
    [CourseController::class, 'destroy']
)->name('courses.destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
