<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\BatchSystemController;
use App\Http\Controllers\Admin\AdmissionController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\AsignController;
use App\Http\Controllers\Admin\LeaveRequestController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ThoughtsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Teacher\TeacherDashboardController;
use App\Http\Controllers\Teacher\StudentController;
use App\Http\Controllers\Teacher\TeacherProfileController;
use App\Http\Controllers\Teacher\LeaveController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Teacher\AttendanceController;
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

Route::get('/', [FrontendController::class, 'home'])->name('Front.home');
Route::post('/enquiryform', [FrontendController::class, 'Store'])->name('Front.enquiryForm');

Route::group(['middleware' => 'AdminAuth'], function () {
    Route::prefix('auth')->group(function () {
        Route::get('/', [AuthController::class, 'login'])->name('auth.login');
        Route::post('/login', [AuthController::class, 'SignIn'])->name('auth.signin');
        Route::get('/recoverpw', [AuthController::class, 'recoverpw'])->name('Auth.recoverpw');

        Route::post('forget-password', [AuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
        Route::post('reset-password', [AuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
        Route::post('set-password', [AuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');
    });
});


Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('Admin.dashboard');
        Route::get('/logout', [DashboardController::class, 'logout'])->name('Admin.logout');
        Route::prefix('profile')->group(function () {
            Route::get('/', [ProfileController::class, 'index'])->name('Admin.profile.index');
            Route::post('/update', [ProfileController::class, 'update'])->name('Admin.profile.update');
        });


        Route::prefix('enquiry')->group(function () {
            Route::get('/', [EnquiryController::class, 'index'])->name('Admin.enquiry.index');
            Route::post('/chengestatus', [EnquiryController::class, 'changestatus'])->name('admin.chnageStatus');
            Route::get('/delete/{id}', [EnquiryController::class, 'delete'])->name('Admin.enquiry.delete');
            Route::get('/view/{id}', [EnquiryController::class, 'view'])->name('admin.enquiry.view');
        });
        Route::prefix('batchsystem')->group(function () {
            Route::get('/', [BatchSystemController::class, 'index'])->name('Admin.batchsystem');
            Route::get('/create', [BatchSystemController::class, 'create'])->name('Admin.batchsystem.create');
            Route::post('/store', [BatchSystemController::class, 'store'])->name('Admin.batchsystem.store');
            Route::get('/edit/{id}', [BatchSystemController::class, 'edit'])->name('Admin.batchsystem.edit');
            Route::post('/update', [BatchSystemController::class, 'update'])->name('Admin.batchsystem.update');
            Route::get('/delete/{id}', [BatchSystemController::class, 'delete'])->name('Admin.batchsystem.delete');
            Route::post('/chengestatus',[BatchSystemController::class,'changestatus'])->name('admin.batchSystem.chnageStatus');
        });
        Route::prefix('admission')->group(function () {
            Route::get('/', [AdmissionController::class, 'index'])->name('Admin.admission');
            Route::get('/create', [AdmissionController::class, 'create'])->name('Admin.admission.create');
            Route::post('/store', [AdmissionController::class, 'store'])->name('Admin.admission.store');
            Route::get('/edit/{id}', [AdmissionController::class, 'edit'])->name('Admin.admission.edit');
            Route::post('/update', [AdmissionController::class, 'update'])->name('Admin.admission.update');
            Route::get('/delete/{id}', [AdmissionController::class, 'delete'])->name('Admin.admission.delete');
            Route::get('/view/{id}', [AdmissionController::class, 'view'])->name('Admin.admission.view');
            Route::post('/addfees', [AdmissionController::class, 'addfees'])->name('admin.admission.addfees');
            Route::get('/show', [AdmissionController::class, 'show'])->name('admin.admission.show');
            Route::post('/chengestatus', [AdmissionController::class, 'changestatus'])->name('admin.admission.chnageStatus');


        });
        Route::prefix('teacher')->group(function () {
            Route::get('/', [TeacherController::class, 'index'])->name('Admin.teacher');
            Route::get('/create', [TeacherController::class, 'create'])->name('Admin.teacher.create');
            Route::post('/store', [TeacherController::class, 'store'])->name('Admin.teacher.store');
            Route::get('/edit/{id}', [TeacherController::class, 'edit'])->name('Admin.teacher.edit');
            Route::post('/update', [TeacherController::class, 'update'])->name('Admin.teacher.update');
            Route::get('/delete/{id}', [TeacherController::class, 'delete'])->name('Admin.teacher.delete');
            Route::get('/view/{id}', [TeacherController::class, 'view'])->name('Admin.teacher.view');
        });
        Route::prefix('leaverequest')->group(function () {
            Route::get('/', [LeaveRequestController::class, 'index'])->name('Admin.leaverequest');
            Route::post('/chengestatus', [LeaveRequestController::class, 'changestatus'])->name('admin.leaverequest.chnageStatus');
            Route::get('/delete/{id}', [LeaveRequestController::class, 'delete'])->name('admin.leaverequest.delete');
            Route::get('/view/{id}', [LeaveRequestController::class, 'view'])->name('admin.leaverequest.view');
        });
        Route::prefix('course')->group(function () {
            Route::get('/', [CourseController::class, 'index'])->name('Admin.course');
            Route::get('/create', [CourseController::class, 'create'])->name('Admin.course.create');
            Route::post('/store', [CourseController::class, 'store'])->name('Admin.course.store');
            Route::get('/edit/{id}', [CourseController::class, 'edit'])->name('Admin.course.edit');
            Route::post('/update', [CourseController::class, 'update'])->name('Admin.course.update');
            Route::get('/delete/{id}', [CourseController::class, 'delete'])->name('Admin.course.delete');
        });
        Route::prefix('subject')->group(function () {
            Route::get('/', [SubjectController::class, 'index'])->name('Admin.subject');
            Route::get('/create', [SubjectController::class, 'create'])->name('Admin.subject.create');
            Route::post('/store', [SubjectController::class, 'store'])->name('Admin.subject.store');
            Route::get('/edit/{id}', [SubjectController::class, 'edit'])->name('Admin.subject.edit');
            Route::post('/update', [SubjectController::class, 'update'])->name('Admin.subject.update');
            Route::get('/delete/{id}', [SubjectController::class, 'delete'])->name('Admin.subject.delete');
        });
        Route::prefix('asign')->group(function () {
            Route::get('/', [AsignController::class, 'index'])->name('Admin.asign');
            Route::get('/create', [AsignController::class, 'create'])->name('Admin.asign.create');
            Route::post('/store', [AsignController::class, 'store'])->name('Admin.asign.store');
            Route::get('/edit/{id}', [AsignController::class, 'edit'])->name('Admin.asign.edit');
            Route::post('/update', [AsignController::class, 'update'])->name('Admin.asign.update');
            Route::get('/delete/{id}', [AsignController::class, 'delete'])->name('Admin.asign.delete');
            Route::get('/view/{id}', [AsignController::class, 'view'])->name('Admin.asign.view');
        });
        Route::prefix('thoughts')->group(function () {
            Route::get('/', [ThoughtsController::class, 'index'])->name('Admin.thoughts');
            Route::get('/create', [ThoughtsController::class, 'create'])->name('Admin.thoughts.create');
            Route::post('/store', [ThoughtsController::class, 'store'])->name('Admin.thoughts.store');
            Route::get('/edit/{id}', [ThoughtsController::class, 'edit'])->name('Admin.thoughts.edit');
            Route::post('/update', [ThoughtsController::class, 'update'])->name('Admin.thoughts.update');
            Route::get('/delete/{id}', [ThoughtsController::class, 'delete'])->name('Admin.thoughts.delete');
            Route::get('/view/{id}', [ThoughtsController::class, 'view'])->name('Admin.thoughts.view');
        }); 
    });


    // teacher Dashboard //
       Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherDashboardController::class, 'index'])->name('Teacher.dashboard');
        Route::get('/logout', [TeacherDashboardController::class, 'logout'])->name('Teacher.logout');
        Route::prefix('profile')->group(function () {
            Route::get('/', [TeacherProfileController::class, 'index'])->name('Teacher.profile.index');
            Route::post('/update', [TeacherProfileController::class, 'update'])->name('Teacher.profile.update');
        });
        Route::prefix('student')->group(function () {
            Route::get('/', [StudentController::class, 'index'])->name('Teacher.student');
            Route::get('/view/{id}', [StudentController::class, 'view'])->name('Teacher.student.view');
        }); 

        Route::prefix('attendance')->group(function () {
            Route::get('/', [AttendanceController::class, 'index'])->name('Teacher.attendance');
            Route::post('/store', [AttendanceController::class, 'store'])->name('Teacher.attendance.store');

        }); 
        Route::prefix('leave')->group(function () {
            Route::get('/', [LeaveController::class, 'index'])->name('Teacher.leave');
            Route::get('/create', [LeaveController::class, 'create'])->name('Teacher.leave.create');
            Route::post('/store', [LeaveController::class, 'store'])->name('Teacher.leave.store');
            Route::post('/store', [LeaveController::class, 'store'])->name('Teacher.leave.store');
            Route::get('/edit/{id}', [LeaveController::class, 'edit'])->name('Teacher.leave.edit');
            Route::post('/update', [LeaveController::class, 'update'])->name('Teacher.leave.update');
            Route::get('/delete/{id}', [LeaveController::class, 'delete'])->name('Teacher.leave.delete');
        });
    });
});
