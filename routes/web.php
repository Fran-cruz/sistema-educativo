<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\AcademicPeriodController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrrollmentController;
use App\Http\Controllers\GradeController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/faculty', [FacultyController::class, 'index'])->name('faculties.index');
    Route::get('/teacher', [TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/academic_period', [AcademicPeriodController::class, 'index'])->name('periods.index');
    Route::get('/course', [CourseController::class, 'index'])->name('courses.index');
    Route::get('/enrollment', [EnrrollmentController::class, 'index'])->name('enrollments.index');
    Route::get('/grade', [GradeController::class, 'index'])->name('grades.index');
});

require __DIR__.'/auth.php';
