<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

// Home

Route::get('/', [HomeController::class, 'index']);

// Registration

Route::get('registration', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);

// Login

Route::get('login', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);

// Logout

Route::get('logout', [AuthController::class, 'logout']);

// Forgot

Route::get('forgot', [AuthController::class, 'forgot']);
Route::post('forgot_post', [AuthController::class, 'forgot_post']);
Route::get('reset/{token}', [AuthController::class, 'getReset']);
Route::post('reset_post/{token}', [AuthController::class, 'postReset']);

// Super Admin

Route::group(['middleware' => 'superadmin'], function () {
    Route::get('superadmin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('superadmin/user/list', [SuperAdminController::class, 'user_list']);
    Route::get('superadmin/user/delete/{id}', [SuperAdminController::class, 'user_delete']);
    // Students
    Route::get('superadmin/students/list', [StudentController::class, 'index']);
    Route::get('superadmin/students/add', [StudentController::class, 'add']);
    Route::post('superadmin/students/add', [StudentController::class, 'store']);
    Route::get('superadmin/students/edit/{id}', [StudentController::class, 'edit']);
    Route::post('superadmin/students/edit/{id}', [StudentController::class, 'update']);
    Route::get('superadmin/students/delete/{id}', [StudentController::class, 'destroy']);
    // Teachers
    Route::get('superadmin/teachers/list', [TeacherController::class, 'index']);
    Route::get('superadmin/teachers/add', [TeacherController::class, 'add']);
    Route::post('superadmin/teachers/add', [TeacherController::class, 'store']);
    Route::get('superadmin/teachers/edit/{id}', [TeacherController::class, 'edit']);
    Route::post('superadmin/teachers/edit/{id}', [TeacherController::class, 'update']);
    Route::get('superadmin/teachers/delete/{id}', [TeacherController::class, 'destroy']);
    // Subjects
    Route::get('superadmin/subjects/list', [SubjectController::class, 'index']);
    Route::get('superadmin/subjects/add', [SubjectController::class, 'add']);
    Route::post('superadmin/subjects/add', [SubjectController::class, 'store']);
    Route::get('superadmin/subjects/edit/{id}', [SubjectController::class, 'edit']);
    Route::post('superadmin/subjects/edit/{id}', [SubjectController::class, 'update']);
    Route::get('superadmin/subjects/delete/{id}', [SubjectController::class, 'destroy']);
    // Classes
    Route::get('superadmin/classes/list', [ClassController::class, 'index']);
    Route::get('superadmin/classes/add', [ClassController::class, 'add']);
    Route::post('superadmin/classes/add', [ClassController::class, 'store']);
    Route::get('superadmin/classes/edit/{id}', [ClassController::class, 'edit']);
    Route::post('superadmin/classes/edit/{id}', [ClassController::class, 'update']);
    Route::get('superadmin/classes/delete/{id}', [ClassController::class, 'destroy']);
    // Enrollment
    Route::get('superadmin/enrollments/list', [EnrollmentController::class, 'index']);
    Route::get('superadmin/enrollments/add', [EnrollmentController::class, 'add']);
    Route::post('superadmin/enrollments/add', [EnrollmentController::class, 'store']);
    Route::get('superadmin/enrollments/edit/{id}', [EnrollmentController::class, 'edit']);
    Route::post('superadmin/enrollments/edit/{id}', [EnrollmentController::class, 'update']);
    Route::get('superadmin/enrollments/delete/{id}', [EnrollmentController::class, 'destroy']);
    // Payments
    Route::get('superadmin/payments/list', [PaymentController::class, 'index']);
    Route::get('superadmin/payments/add', [PaymentController::class, 'add']);
    Route::post('superadmin/payments/add', [PaymentController::class, 'store']);
    Route::get('superadmin/payments/edit/{id}', [PaymentController::class, 'edit']);
    Route::post('superadmin/payments/edit/{id}', [PaymentController::class, 'update']);
    Route::get('superadmin/payments/delete/{id}', [PaymentController::class, 'destroy']);
    // Attendance
    Route::get('superadmin/attendance/list', [AttendanceController::class, 'index']);
    Route::get('superadmin/attendance/add', [AttendanceController::class, 'add']);
    Route::post('superadmin/attendance/add', [AttendanceController::class, 'store']);
    Route::get('superadmin/attendance/edit/{id}', [AttendanceController::class, 'edit']);
    Route::post('superadmin/attendance/edit/{id}', [AttendanceController::class, 'update']);
    Route::get('superadmin/attendance/delete/{id}', [AttendanceController::class, 'destroy']);
});


// Admin

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
});

// User

Route::group(['middleware' => 'user'], function () {
    Route::get('user/dashboard', [DashboardController::class, 'dashboard']);
});
