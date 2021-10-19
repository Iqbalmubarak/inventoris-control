<?php

Auth::routes(['register'=>false]);
Route::get('/','HomeController@index');

Route::group(['middleware' => ['web', 'auth', 'permission'] ], function () {

  Route::group(['namespace' => '\Arcanedev\LogViewer\Http\Controllers','prefix' => 'log-viewer'], function () {
    Route::get('/','LogViewerController@index')->name('log-viewer::logs.dashboard');
  });

  Route::get('/dashboard', 'HomeController@index')->name('home.dashboard');

  Route::resource('users','backend\UserController');
  Route::get('activ/{id}','backend\UserController@active')->name('users.activate');
  Route::get('deactiv/{id}','backend\UserController@deactivate')->name('users.deactivate');
  Route::get('user/{id}/permission','backend\UserController@permissions')->name('users.permissions');
  Route::post('user/{id}/permission', 'backend\UserController@simpan')->name('users.simpan');
  Route::post('user/ajax_all', ['uses' => 'backend\UserController@ajax_all']);

  Route::get('roles','backend\RoleController@index')->name('roles.index');
  Route::post('roles','backend\RoleController@store')->name('roles.add');
  Route::patch('roles/{id}','backend\RoleController@update')->name('roles.updt');
  Route::delete('roles/{id}','backend\RoleController@destroy')->name('roles.destroy');
  Route::get('roles/{id}/permission','backend\RoleController@permissions')->name('roles.permissions');
  Route::post('roles/{id}/permission', 'backend\RoleController@simpan')->name('roles.simpan');

  Route::get('satuan-kerja','backend\satuanKerjaController@index')->name('satker.index');
  Route::post('satuan-kerja','backend\satuanKerjaController@store')->name('satker.add');
  Route::patch('satuan-kerja/{id}','backend\satuanKerjaController@update')->name('satker.updt');
  Route::delete('satuan-kerja/{id}','backend\satuanKerjaController@destroy')->name('satker.destroy');

  Route::get('barang','backend\barangController@index')->name('barang.index');
  Route::post('barang','backend\barangController@store')->name('barang.add');
  Route::patch('barang/{id}','backend\barangController@update')->name('barang.updt');
  Route::delete('barang/{id}','backend\barangController@destroy')->name('barang.destroy');

  Route::get('satuan-barang','backend\satuanBarangController@index')->name('satbar.index');
  Route::post('satuan-barang','backend\satuanBarangController@store')->name('satbar.add');
  Route::patch('satuan-barang/{id}','backend\satuanBarangController@update')->name('satbar.updt');
  Route::delete('satuan-barang/{id}','backend\satuanBarangController@destroy')->name('satbar.destroy');

  Route::get('sumber','backend\inventorisSumberController@index')->name('sumber.index');
  Route::post('sumber','backend\inventorisSumberController@store')->name('sumber.add');
  Route::patch('sumber/{id}','backend\inventorisSumberController@update')->name('sumber.updt');
  Route::delete('sumber/{id}','backend\inventorisSumberController@destroy')->name('sumber.destroy');

  Route::get('request-inventoris','backend\inventorisRequestController@index')->name('inreq.index');
  Route::get('request-inventoris/create','backend\inventorisRequestController@create')->name('inreq.create');
  Route::get('request-inventoris/{id}','backend\inventorisRequestController@show')->name('inreq.show');
  Route::get('request-inventoris/cetak/{id}','backend\inventorisRequestController@cetak');
  Route::post('request-inventoris','backend\inventorisRequestController@store')->name('inreq.store');
  Route::delete('request-inventoris/{id}','backend\inventorisRequestController@destroy')->name('inreq.destroy');
  Route::patch('request-inventoris/{id}','backend\inventorisRequestController@acc')->name('inreq.acc');
  Route::get('request-inventoris/acc_one/{id}','backend\inventorisRequestController@acc_one')->name('inreq.acc_one');
  Route::put('request-inventoris/reject_one/{id}','backend\inventorisRequestController@reject_one')->name('inreq.reject_one');
  Route::put('request-inventoris/{id}','backend\inventorisRequestController@reject')->name('inreq.reject');

  Route::post('detail-request-inventoris/{id}','backend\inventorisRequestDetailController@store')->name('inreqde.add');
  Route::patch('detail-request-inventoris/{id}','backend\inventorisRequestDetailController@update')->name('inreqde.updt');
  Route::delete('detail-request-inventoris/{id}','backend\inventorisRequestDetailController@destroy')->name('inreqde.destroy');

  Route::get('inventoris','backend\inventorisController@index')->name('inventoris.index');
  Route::get('inventoris/create','backend\inventorisController@create')->name('inventoris.create');
  Route::get('inventoris/cetak','backend\inventorisController@cetak')->name('inventoris.cetak');
  Route::get('inventoris/{id}','backend\inventorisController@show')->name('inventoris.show');
  Route::post('inventoris','backend\inventorisController@store')->name('inventoris.store');
  Route::patch('inventoris/{id}','backend\inventorisController@update')->name('inventoris.updt');
  Route::delete('inventoris/{id}','backend\inventorisController@destroy')->name('inventoris.destroy');

  Route::post('detail-inventoris/{id}','backend\inventorisDetailController@store')->name('inventorisDetail.add');
  Route::patch('detail-inventoris/{inventoris_id}/{id}','backend\inventorisDetailController@update')->name('inventorisDetail.updt');
  Route::delete('detail-inventoris/{inventoris_id}/{id}','backend\inventorisDetailController@destroy')->name('inventorisDetail.destroy');

  Route::post('keluar-inventoris/{id}','backend\inventorisKeluarController@store')->name('inventorisKeluar.add');
  Route::patch('keluar-inventoris/{inventoris_id}/{id}','backend\inventorisKeluarController@update')->name('inventorisKeluar.updt');
  Route::delete('keluar-inventoris/{inventoris_id}/{id}','backend\inventorisKeluarController@destroy')->name('inventorisKeluar.destroy');

  Route::get('laporan/filter','backend\laporanController@filter')->name('laporan.filter');
  Route::get('laporan/mingguan','backend\laporanController@lapmingguanpgsql')->name('laporan.mingguan');

  //Profile
  Route::get('profile','profileController@index');
  Route::get('edit-profile','profileController@editProfile');
  Route::patch('edit-profile','profileController@updateProfile');
  Route::get('edit-password','profileController@editPassword');
  Route::patch('edit-password','profileController@updatePassword');

});

Route::group(['middleware' => ['api', 'auth'], 'prefix' => 'api' ], function () {
  Route::get('/user','backend\UserController@getData');
  Route::get('/role','backend\RoleController@getData');
  Route::get('/sumber','backend\inventorisSumberController@getData');
  Route::get('/permission','backend\RoleController@permissionGetData');

  Route::get('/satuan-kerja','backend\satuanKerjaController@getData');
  Route::get('/barang','backend\barangController@getData');
  Route::get('/satuan-barang','backend\satuanBarangController@getData');
  Route::get('/request-inventoris','backend\inventorisRequestController@getData');
  Route::get('/inventoris','backend\inventorisController@getData');

  Route::get('/select/sumber/{satker}/{barang}/{satuan}','api\selectController@sumber');
});

Route::get('img/{type}/{file_id}','fileController@image');
Route::get('verifikasi/{kode}/{username}','backend\UserController@aktivation_account');
Route::get('lang/{lang}', 'bahasaController@swap');
