<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\UserController;

Route::get('/', [FrontHomeController::class, 'show'])->name('front_home');
Route::get('/search', [FrontHomeController::class, 'search'])->name('search_submit');
Route::get('/subtalent/{id}', [FrontHomeController::class, 'subtalentshow'])->name('subtalent_show');
Route::get('/skill/{id}', [FrontHomeController::class, 'anggotshow'])->name('anggota_show');
Route::get('/login',[FrontHomeController::class, 'indexLogin'])->name('user_login');
Route::post('/login-submit', [FrontHomeController::class, 'login_submit'])->name('user_login_submit');
Route::get('/logout', [FrontHomeController::class, 'logout'])->name('user_logout');
Route::get('/peserta/{id}',[FrontHomeController::class, 'peserta'])->name('profile_peserta')->middleware('auth');
Route::get('/forget-password', [FrontHomeController::class, 'forget_password'])->name('user_forget_password');
Route::post('/forget-password-submit', [FrontHomeController::class, 'forget_password_submit'])->name('user_forget_password_submit');
Route::get('/reset-password/{token}/{email}', [FrontHomeController::class, 'reset_password'])->name('user_reset_password');
Route::post('/reset-password-submit', [FrontHomeController::class, 'reset_password_submit'])->name('user_reset_password_submit');
Route::get('/view/pdf/{id}', [FrontHomeController::class, 'fileview'])->name('view_pdf');

Route::get('/user/user/create', [UserController::class, 'register'])->name('user_user_create');
Route::post('/user/user/create-submit', [UserController::class, 'register_submit'])->name('register_submit');

// Route::get('/', [homeController::class, 'index'])->name('index');

/* Admin Login */
Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

/* Admin User */
Route::middleware('admin:admin')->group(function (){
    Route::get('/admin/user/show', [AdminUserController::class, 'show'])->name('admin_user_show');
    Route::get('/admin/user/create', [AdminUserController::class, 'create'])->name('admin_user_create');
    Route::post('/admin/user/store', [AdminUserController::class, 'store'])->name('admin_user_store');
    Route::get('/admin/user/edit/{id}', [AdminUserController::class, 'edit'])->name('admin_user_edit');
    Route::post('/admin/user/update/{id}', [AdminUserController::class, 'update'])->name('admin_user_update');
    Route::get('/admin/user/delete/{id}', [AdminUserController::class, 'delete'])->name('admin_user_delete');
});

Route::get('/user/profile', [UserController::class, 'profile'])->name('user_profile')->middleware('auth');
Route::get('/user/user/edit', [UserController::class, 'showedit'])->name('user_edit')->middleware('auth');
Route::post('/user/update/', [UserController::class, 'update'])->name('user_update')->middleware('auth');
Route::post('/user/user/profile-submit', [UserProfileController::class, 'profile_submit'])->name('user_profile_submit')->middleware('auth');
Route::post('/user/profile/addskill/',[UserController::class, 'addtalent'])->name('user_add_skill')->middleware('auth');
Route::get('/user/profile/delskill/{id}',[UserController::class, 'deltalent'])->name('user_del_skill')->middleware('auth');
Route::post('/user/profile/addsertifikat', [UserController::class, 'addSertifikat'])->name('user_add_sertifikat')->middleware('auth');
Route::get('/user/profile/delsertifikat/{id}', [UserController::class, 'delSertifikat'])->name('user_del_sertifikat')->middleware('auth');
Route::get('user/pesan/{pesan}', [UserController::class, 'pesan'])->name('user_pesan')->middleware('auth');

//API//

Route::get('user', [UserApiController::class, 'getUserall']);
