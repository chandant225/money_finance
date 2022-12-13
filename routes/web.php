<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
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
    Route::get('/admin/service/list',[ServiceController::class,'index'])->name('service.list');
    Route::get('/admin/service/add',[ServiceController::class,'create'])->name('service.add');
    Route::post('/admin/service/add',[ServiceController::class,'store'])->name('service.store');
    Route::get('/admin/service/edit/{id}',[ServiceController::class,'edit'])->name('service.edit');
    Route::post('/admin/service/update/{id}',[ServiceController::class,'update'])->name('service.update');
    Route::post('/admin/service/delete/{id}',[ServiceController::class,'destroy'])->name('service.delete');
    Route::post('/upload_service_editor_image',[ServiceController::class, 'serviceEditorUpload'])->name('service.editor.upload');

 });


