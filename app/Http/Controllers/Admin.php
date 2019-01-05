<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Product;
use App\Transaktion;
use Alert;
use App\DetailTrans;
use App\Returbarang;


class Admin extends Controller
{
    function index(){
        return view('admin.admin_template');
    }
    function list_barang(){
        
        // else
        // {
            $users=Product::paginate(10);
            if(isset($page)){
            $users= Product::paginate($page);
        }
        // }
         return view('admin.list_barang', ['users'=>$users]);
    }
    function input_barang(){
        return view('admin.input_barang');
    }
    function save_barang(Request $request){
        
        $data = new Product;
        $data->name = $request->nama_barang;
        $data->harga = $request->harga_barang;
        $image = $request->image;
        $tujuan = public_path('\themes\images\products');
        $nama = $request->image->getClientOriginalName();
        if($image->move($tujuan,$nama)){
            $data->gambar = $nama;
            $data->status = $request->status;
            $data->stok = 0;
            $data->kategori = "a";
    
            if($data->save()){
                return Redirect::action('Admin@list_barang')->with('alertsuccess','Barang"'.$data->name.'"berhasil disimpan.');
            }
            else{
                return Redirect::action('Admin@list_barang')->with('alertfail','Barang"'.$data->name.'"gagal disimpan.');
            }    
        }
        else{
            return Redirect::action('Admin@list_barang')->with('alertfail','Barang"'.$data->name.'"gagal disimpan.');
        }
            
        
    }
    function edit_barang($id){
        
        $barang = Product::find($id);
        return view('admin.edit_barang', ['barang'=>$barang]);
    }
    function update_barang(Request $request){
        $data = Product::find($request->id);
        $barang = Product::find($request->id);
        // $data->id = $request->id;
        $data->name = $request->nama_barang;
        $data->harga = $request->harga_barang;
        $data->stok = $request->stok_barang;
        $data->kategori = $barang->kategori;
        $data->status = $request->status;
        if(isset($request->gambar)){
            $data->gambar = $request->gambar;
        }
        if($data->save()){

            return Redirect::action('Admin@list_barang')->with('alertsuccess','Barang"'.$data->name.'"berhasil diubah.');
        }
        else{
            return Redirect::action('Admin@list_barang')->with('alertfail','Barang"'.$data->name.'"gagal diubah.');
        }
    }
    function delete_barang($id){
        $data = Product::find($id);
        if($data->delete()){

            return Redirect::action('Admin@list_barang')->with('alertsuccess','Barang"'.$data->name.'"berhasil dihapus.');
        }
        else{
            return Redirect::action('Admin@list_barang')->with('alertfail','Barang"'.$data->name.'"gagal dihapus.');
        }
    }
    function list_nota(){
        $users=Transaktion::paginate(10);
        return view('admin.list_nota', ['users'=>$users]);
    }
    function detail_transaksi($id){
        $aa = DetailTrans::where('id_transaksi', '=', $id)->get();
        return view('admin.detail_transaksi', ['users'=>$aa]);
    }
    function returbarang(Request $request){
        $data = new Returbarang;
        $data->no_nota = $request->no_nota;
        $data->nama_barang = $request->nama_barang;
        $data->kode_barang = $request->kode_barang;
        $data->jumlah_barang = $request->jumlah_barang;
        $data->alasan = $request->alasan;
        $data->status = "Belum Terverifikasi";
        $data->save();
        $users=Product::paginate(9);
        return Redirect::action('Page@index');
        
        

 

    }
    function list_returbarang(){
        $users = Returbarang::paginate(10);
        return view('admin.list_returbarang', ['users' => $users]);
    }
    function konfirmasi_returbarang($id){
        $data = Returbarang::where('id', '=', $id)->get();
        $trans = Returbarang::find($id);
        if(isset($data)){
            $trans->status = "Terkonfirmasi";
            if($trans->save()){
                return Redirect::action('Admin@list_returbarang')->with('alertsuccess','Barang"'.$trans->nama_barang.'"berhasil dikonfirmasi.');
            }
            else{
                return Redirect::action('Admin@list_returbarang')->with('alertsuccess','Barang"'.$trans->nama_barang.'"gagal dikonfirmasi.');
            }
        }
        return Redirect::action('Admin@list_returbarang')->with('alertsuccess','Barang"'.$trans->nama_barang.'"Tidak ditemukan.');


    }
}
