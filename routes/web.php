<?php

use App\Http\Controllers\Admin\AdminAuthorController;
use App\Http\Controllers\Admin\AdminBlogController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminEpisodeController;
use App\Http\Controllers\Admin\AdminMenuController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminPublisherController;
use App\Http\Controllers\Admin\AdminLanguageController;
use App\Http\Controllers\Admin\AdminDocumentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Models\Movie;
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
// Route::get('/movie/{alias}/{id}',[MovieController::class,'detail']);
// Route::get('/episode/{alias}/{id}',[MovieController::class,'episode']);
// Route::get('/api/episode/{id}',[MovieController::class,'stream']);
Route::get('',[HomeController::class,'index']);
//admin
Route::get('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'checklogin']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
Route::group(['prefix'=>'admin','middleware'=>'adminauth'],function(){
    Route::get('/menu/isactive/{menu}',[AdminMenuController::class,'isactive']);
    Route::get('/slider/isactive/{slider}',[AdminSliderController::class,'isactive']);
    Route::get('/document/isactive/{document}',[AdminDocumentController::class,'isactive']);
    Route::resources([
        'author'=>AdminAuthorController::class,
        'category'=>AdminCategoryController::class,
        'publisher'=>AdminPublisherController::class,
        'menu'=>AdminMenuController::class,
        'blog'=>AdminBlogController::class,
        'slider'=>AdminSliderController::class,
        'language'=>AdminLanguageController::class,
        'document'=>AdminDocumentController::class,
        'user'=> AdminUserController::class
    ]);
});
Route::get('/',[HomeController::class,'index']);
Route::get('/document/pdf/{document}',[DocumentController::class,'viewpdf']);
Route::get('/document/{alias}/{document}',[DocumentController::class,'detail']);