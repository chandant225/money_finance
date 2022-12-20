<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;


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

Route::get('/',[PageController::class,'homePage'])->name('home');
Route::get('/about',[PageController::class,'aboutPage'])->name('about');
Route::get('/contact',[PageController::class,'contactPage'])->name('contact');
Route::post('contact',[ContactController::class,'contactMail'])->name('contact.mail');
Auth::routes();
Route::get('/services',[PageController::class,'servicePage'])->name('services');
Route::get('/service/{slug}',[PageController::class,'serviceDetails'])->name('serviceDetails');
Route::get('/thank-you',[PageController::class,'thankYouPage']);
Route::middleware('auth')->name('admin.')->group(function() {
    Route::get('/admin/dashboard',[PageController::class,'dashboard']);
    //service controller
    Route::get('/admin/post/list',[PostController::class,'index'])->name('post.list');
    Route::get('/admin/post/add',[PostController::class,'create'])->name('post.add');
    Route::post('/admin/post/add',[PostController::class,'store'])->name('post.store');
    Route::get('/admin/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/admin/post/update/{id}',[PostController::class,'update'])->name('post.update');
    Route::post('/admin/post/delete/{id}',[PostController::class,'destroy'])->name('post.delete');
    Route::post('/upload_post_editor_image',[PostController::class, 'postEditorUpload'])->name('post.editor.upload');

 });


