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

// Route::get('/', function () {
//     return view('welcome');
// });




Route::prefix('user')->group(function()
{
Route::get('/view','Backend\UserController@view')->name('user.view');
Route::get('/add','Backend\UserController@add')->name('user.add');
Route::post('/store','Backend\UserController@store')->name('user.store');
Route::get('/edit/{id}','Backend\UserController@edit')->name('user.edit');
Route::post('/update/{id}','Backend\UserController@update')->name('user.update');
Route::get('/delete/{id}','Backend\UserController@delete')->name('user.delete');
});


Route::prefix('profiles')->group(function()
{
Route::get('/view','Backend\ProfilesController@view')->name('profiles.view');
Route::get('/edit','Backend\ProfilesController@edit')->name('profiles.edit');
Route::post('/store','Backend\ProfilesController@update')->name('profiles.update');
Route::get('/password/view','Backend\ProfilesController@passwordview')->name('profiles.password.view');
Route::post('/password/update','Backend\ProfilesController@passwordupdate')->name('profiles.password.update');
});



Route::prefix('slider')->group(function()
{
Route::get('/view','Backend\sliderController@view')->name('slider.view');
Route::get('/add','Backend\sliderController@add')->name('slider.add');
Route::post('/store','Backend\sliderController@store')->name('slider.store');
Route::get('/edit/{id}','Backend\sliderController@edit')->name('slider.edit');
Route::post('/update/{id}','Backend\sliderController@update')->name('slider.update');
Route::get('/delete/{id}','Backend\sliderController@delete')->name('slider.delete');
});



Route::get('/','Frontend\frontcontroller@homepage');
Route::get('about','Frontend\aboutController@aboutpage');
Route::get('contuct','Frontend\contuctController@contuctpage');
Route::get('coverageArea','Frontend\coverageAreaController@coverageAreapage');
Route::get('/homeInternet','Frontend\homeInternetController@homeInternetpage')->name('home.internet');
Route::get('corporateInternet','Frontend\corporateInternetController@corporateInternetpage');
Route::get('dedicatedInternet','Frontend\dedicatedInternetController@dedicatedInternetpage');
Route::get('smeInternet','Frontend\smeInternetController@smeInternetpage');
Route::get('paybill','Frontend\paybillController@paybillpage');
Route::get('team','Frontend\teamController@teampage');
Route::get('domain','Frontend\servicesController@domainpage');
Route::get('solution','Frontend\solutionController@solitionpage');
Route::get('CCTVSolution','Frontend\cctvController@CCTVSolutionpage');
Route::get('dedicatedhost','Frontend\hostController@hostpage');
Route::get('ipphone','Frontend\networksecurityController@networksecuritypage');
Route::get('dataconnectivity','Frontend\dataconnectivityController@dataconnectivitypage');
Route::get('clientdata','Frontend\dataClientController@clientpage');


Auth::routes();

Route::get('/home','HomeController@index')->name('home');
