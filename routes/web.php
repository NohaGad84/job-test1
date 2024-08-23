<?php


use Illuminate\Support\Facades\Route;
use App\Http\controllers\Admin\JobController;
use App\Http\controllers\PublicController;
use App\Http\controllers\Admin\CategoryController;
use App\Http\controllers\Admin\TestimonialController;



Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'controller'=>PublicController::class,
],function(){
    Route::get('index','index')->name('index');
    Route::get('about','about')->name('about');
    Route::get('contact','contact')->name('contact');
    Route::get('category','category')->name('category');
    Route::get('testimonial','testimonial')->name('testimonial');
    Route::get('job-list','joblist')->name('joblist');
    Route::get('job-details','jobdetails')->name('jobdetails');
    
    Route::get('job-details/{id}','jobdetails')->name('jobdetails');
    Route::post('job-apply','jobApply')->name('apply_job');
});


//admin
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::group(['prefix' =>'admin'], function(){
    Route::group([
        'controller'=>JobController::class,
        'prefix'=>'jobs',
         'as'=>'jobs.',
         
    ],function(){
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
    }); 
    
    Route::group([
        'controller'=>CategoryController::class,
        'prefix'=>'categories',
         'as'=>'categories.',
    ],function(){
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
    }); 
    Route::group([
        'controller'=>TestimonialController::class,
        'prefix'=>'test',
         'as'=>'test.',
    ],function(){
        Route::get('create','create')->name('create');
        Route::post('store','store')->name('store');
    }); 

});
});


// Admin/JobController
Route::get('admin/job_details/{id}',[JobController::class,'show'])->name('show');
// Admin/CategoryController
