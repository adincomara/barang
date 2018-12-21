<?php

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

//Route::resource('admin', 'Admin');
Route::get('/', 'Page@index');
Route::get('/product_summary','Keranjang@tampilkeranjang');
Route::get('/products','Page@products');
Route::get('/register', function(){
    return view('register');
});
Route::get('/product_detail/{user_id}','Page@product_detail');
Route::get('/tambahkeranjang/{user_id}','Keranjang@tambahkeranjang');
Route::get('/login',function(){
    return view('login');
});
Route::get('/forgetpass',function(){
    return view('forgetpass');
});
Route::get('/faq',function(){
    return view('faq');
});
Route::get('/master',function(){
    return view('layouts.master');
});

Route::post('/tokeranjang','Keranjang@tambahkeranjangdetail');
Route::get('/cart','Keranjang@tampilkeranjang');
Route::get('/product_summary/tambah/{id}','Keranjang@tambahqty');
Route::get('/product_summary/kurang/{id}','Keranjang@kurangqty');
Route::get('/product_summary/hapusproduct/{id}','Keranjang@hapusproduct');
Route::get('/products/device','Page@kategoridevice');
Route::post('/check_out','Keranjang@check_out');








Route::get('/admin', function(){
    return view('admin.admin_template');
});
Route::get('/admin/list_barang', 'Admin@list_barang');
Route::get('/admin/input_barang','Admin@input_barang');
Route::post('/admin/input_barang/save_barang','Admin@save_barang');
Route::get('/admin/edit_barang/{id}', 'Admin@edit_barang');
Route::get('/simpanbarang', 'Admin@update_barang');
Route::get('/admin/delete_barang/{id}','Admin@delete_barang');
Route::get('/admin/list_nota','Admin@list_nota');
Route::get('/admin/detailtransaksi/{id}','Admin@detail_transaksi');
