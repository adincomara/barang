<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use Cart;
use App\Transaktion;
use App\DetailTrans;
use Carbon\Carbon;

class Keranjang extends Controller
{
    function tambahkeranjang($product_id){
        $users = Product::find($product_id);
        // $st = $users->stok - 1;
        // $users->stok = $st;
        // $users->save();
        Cart::add($users->id, $users->name, 1, $users->harga, ['gambar'=>$users->gambar, 'subtotal'=>$users->harga]);    
        $p=Product::paginate(9);
        return Redirect::to('/');

       
    }
    function tambahkeranjangdetail(Request $request){
        $p = Product::find($request->id);
        // $st = $p->stok - $request->qty;
        // $p->stok = $st;
        // $p->save();
        Cart::add($p->id, $p->name, $request->qty, $p->harga, ['gambar'=>$p->gambar, 'warna'=>$request->warna, 'subtotal'=>$request->qty * $p->harga]);
        return Redirect::to('/');
        // return Cart::content();
        
    }
    function tampilkeranjang(){
        //return Cart::content();
         return view('product_summary');
    }
    function tambahqty($row){
        $item = new Cart;
        $item = Cart::get($row);
        Cart::update($row, ['qty' => $item->qty+1]);
        return Redirect::to('/product_summary');

    }
    function kurangqty($row){
        $item = new Cart;
        $item = Cart::get($row);
        Cart::update($row, ['qty' => $item->qty-1]);
        return Redirect::to('/product_summary');

    }
    function hapusproduct($row){
        Cart::remove($row);
        return Redirect::to('/product_summary');
    }
    function check_out(Request $request){
        $data = new Transaktion;
        $waktu = Carbon::now();
        $nota = "".$waktu->day."".$waktu->month."".$waktu->year."".$waktu->hour."".$waktu->minute."".$waktu->second ;
        $data->id_transaksi = $nota;
      
        $data->name_pel = $request->namapelanggan;
        $c = 0;
        foreach (Cart::content() as $item):
            $ddata[$c] = new DetailTrans;
            $ddata[$c]->id_transaksi = $nota;
            $ddata[$c]->id_barang = $item->rowId;
            $ddata[$c]->nama_pelanggan = $request->namapelanggan;
            $ddata[$c]->harga_barang = $item->price;
            $ddata[$c]->nama_barang = $item->name;
            $ddata[$c]->jumlah_barang = $item->qty;
            $ddata[$c]->deskripsi_barang =$item->options->warna;
            if(empty($ddata[$c]->deskripsi_barang )){
                $ddata[$c]->deskripsi_barang = "tidak ada deskripsi";
            }          
            $ddata[$c]->save();
            
            $barang = Product::find($item->row) ; 
            return $barang;  
            // $stok = $barang->stok;
            //     $barang->stok = $barang->stok - $item->qty;
            //     $barang->save();
            $c++;
            
        endforeach;
        
        $data->save();
        
       

    }
}
