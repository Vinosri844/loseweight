<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm']);
// Route::post('admin/login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->name('admin.')->namespace('App\Http\Controllers\Admin')->group(function(){
	Route::middleware(['admin.auth'])->group(function () {
		Route::get('/page', 'PageController@index')->name('page');
		Route::get('/page/create', 'PageController@create')->name('pagecreate');
		Route::post('/page/store', 'PageController@store')->name('pagestore');
		Route::get('/page/edit/{id}', 'PageController@edit')->name('pageedit');
		Route::post('/page/update/{id}', 'PageController@update')->name('pageupdate');
		Route::get('/page/destroy/{id}', 'PageController@destroy')->name('pagedestroy');
		Route::get('/dashboard','DashboardController@index')->name('dashboard');
		Route::resources([
			'diettypes'=> DietTypesController::class,
			'programs'=>ProgramsController::class,
			'settings'=>SettingsController::class,
			'mealplans'=>MealPlansController::class,
			'discounts'=>DiscountsController::class,
			'banners'=>BannersController::class,
			'categories'=>CategoriesController::class,
			'products'=>ProductsController::class,
			'deliveryslot'=>DeliverySlotController::class,
		]);
	});
	Route::namespace('Auth')->group(function(){
        
		//Login Routes
		Route::get('/login','LoginController@showLoginForm')->name('login');
		Route::post('/login','LoginController@login');
		Route::post('/logout','LoginController@logout')->name('logout');

		//Forgot Password Routes
		Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
		Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

		//Reset Password Routes
		Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
		Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

	});
});