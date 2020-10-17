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

/**
 SISTEM INFORMASI PENGAMBILAN IJAZAH DAN BEASISWA BERBASIS WEB PADA DINAS PENDIDIKAN KOTA TERNATE
**/

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('pijazah', 'PublicController@ijazah');
Route::get('pbeasiswa', 'PublicController@beasiswa');
Route::get('ptentang', 'PublicController@tentang');
Route::get('pkontak', 'PublicController@kontak');
;
Route::get('login', 'AuthController@login')->name('login');
Route::post('loginpost', 'AuthController@loginpost');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
	Route::get('webadmin', function () {
	    return view('auths.dashboard');
	})->name('dashboard');

	Route::resource('users', 'UsersController', [
		'names' => [
			'index' => 'users',
			'create' => 'users.create',
			'store' => 'users.store',
		]
	]);

	Route::resource('sekolah', 'SekolahController', [
		'names' => [
			'index' => 'sekolah',
			'create' => 'sekolah.create',
			'store' => 'sekolah.store',
		]
	]);

	Route::resource('siswa', 'SiswaController', [
		'names' => [
			'index' => 'siswa',
			'create' => 'siswa.create',
			'store' => 'siswa.store',
		]
	]);

	Route::get('ijazah/{id}/status', 'IjazahController@status');
	Route::resource('ijazah', 'IjazahController', [
		'names' => [
			'index' => 'ijazah',
			'create' => 'ijazah.create',
			'store' => 'ijazah.store',
		]
	]);

	Route::get('beasiswa/{id}/status', 'BeasiswaController@status');
	Route::resource('beasiswa', 'BeasiswaController', [
		'names' => [
			'index' => 'beasiswa',
			'create' => 'beasiswa.create',
			'store' => 'beasiswa.store',
		]
	]);
});