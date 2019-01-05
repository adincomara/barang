<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Userkasir;
use Illuminate\Support\Facades\Redirect;



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
    function login(Request $request){
        $name = $request->username;
        $pass = $request->password;
        $namedb = Userkasir::select('username')->where('username',$name)->get();
        $passdb = Userkasir::select('password')->where('password',$pass)->get();
        $users=Product::paginate(9);
        
        if($name == $namedb[0]->username && $pass == $passdb[0]->password)
        return view('index', ['username' => $name, 'users' => $users]);
        else
        return Redirect::action('Page@index')->with('alertfail','User atau password salah');
    }
    // 
}
