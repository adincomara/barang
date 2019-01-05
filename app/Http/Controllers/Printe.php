<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spipu\Html2Pdf\Html2Pdf;
use App\Product;
use App\Transaktion;

class Printe extends Controller
{
    function barang(){
        $data = Product::all();
        $html2dpf = new Html2Pdf('P','A4','en');
        $html2dpf->pdf->SetTitle('Daftar Barang');
        $html2dpf->writeHTML(view('admin.print_barang',['barang'=>$data]));
        $html2dpf->output('laporan_list_barang.pdf');
    }
    function transaksi(){
        $data = Transaktion::all();
        $html2dpf = new Html2Pdf('P','A4','en');
        $html2dpf->pdf->SetTitle('Daftar Barang');
        $html2dpf->writeHTML(view('admin.print_transaksi',['barang'=>$data]));
        $html2dpf->output('laporan_list_transaksi.pdf');
    }
}
