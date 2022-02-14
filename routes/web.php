<?php


use App\Http\Controllers\Backend\Auth\ForgotPasswordController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/', function () {
//     // return "hello";
//     return view('admin.home');
// })->name('index');
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Admin routes
 */
Route::as('admin.')->prefix('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('roles', 'Backend\RolesController')->names('roles');
        Route::resource('users', 'Backend\UsersController')->names('users');
        Route::resource('admins', 'Backend\AdminsController')->names('admins');

        // Login Routes
        Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login/submit', [LoginController::class, 'login'])->name('login.submit');

        // Logout Routes
        Route::post('/logout/submit', [LoginController::class, 'logout'])->name('logout.submit');

        // Forget Password Routes
        Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
        Route::post('/password/reset/submit', [ForgotPasswordController::class, 'reset'])->name('password.update');
    });

Route::middleware(['web'])->prefix('admin')->as('admin.')->group(function () {

    // Route::get('/', [DashboardController::class,'home'])->name('home');
    // Route::get('/roles', [DashboardController::class,'roles'])->name('roles');



    // Company
    Route::get('/company/company-list', [CompanyController::class, 'allCompany'])->name('company.all');
    Route::get('/company/create-company', [CompanyController::class, 'companyCreate'])->name('company.create');

    // SMS
    Route::get('/sms/send', [SmsController::class, 'sendSms'])->name('sms.send');
    Route::get('/sms/campaign', [SmsController::class, 'campaign'])->name('sms.campaign');
    Route::get('/sms/sender_id', [SmsController::class, 'senderId'])->name('sms.sender_id');
    Route::get('/sms/templates', [SmsController::class, 'templates'])->name('sms.templates');

    // Price
    Route::get('/price', [SmsController::class, 'sendSms'])->name('price');

    // PhoneBook
    Route::get('/phonebook', [SmsController::class, 'sendSms'])->name('phonebook');
});