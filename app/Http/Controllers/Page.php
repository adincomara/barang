<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Page extends Controller
{
    function index(){
        $users=Product::paginate(9);
        return view('index', ['users' => $users]);

    }
    function product_summary(){
        return view('product_summary');
    }
    function products(){
        return view('products');
    }
    function product_detail($product_id){
        $users=Product::find($product_id);

        // $users = DB::table('products')->where('id', $product_id)->get();
        return view('product_details',['users' => $users]);
    }
    function kategoridevice(){
        $users = new Product;
        $users=Product::where('kategori','device')->paginate(3);
         return view('products',['users'=>$users,'judul'=>'Electronic Device']);
        // return $users;
    }
}
