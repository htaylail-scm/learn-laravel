<?php



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Sms\SendSMSController;
use App\Http\Controllers\Student\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::get('send-sms', [SendSMSController::class, 'index']);
Route::get('send-message', [SendSMSController::class, 'sendMessage']);
Route::get('send-email', [SendEmailController::class, 'index']);

// Students
Route::resource('students', StudentController::class);
