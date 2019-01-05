@extends('layouts.master')
@section('title','Home')
@section('content')
<button type="button" class="btn btn-danger" style="margin-bottom:10px" aria-label="Left Align">
    Kembali
  </button>


<form method="POST" action="{{url('/admin/returbarang')}}">
  {{ csrf_field() }}
    <table class="table table-striped dataTable" >
      <tr><td colspan="2"><h3>FORM RETUR BARANG</h3></td></tr>
        <tr>
            <td><label for="inputEmail3" class="col-sm-2 col-form-label">No Nota</label></td>
            <td> <div class="col-sm-10">
              <input type="text" class="form-control" name="no_nota" id="inputEmail3" placeholder="No Nota">
            </div></td>
        </tr>
        <tr>
            <td><label for="inputEmail3" class="col-sm-2 col-form-label">Nama Barang</label></td>
            <td> <div class="col-sm-10">
              <input type="text" class="form-control" name="nama_barang" id="inputEmail3" placeholder="Nama Barang">
            </div></td>
        </tr>
        <tr>
            <td><label for="inputEmail3" class="col-sm-2 col-form-label">Kode Barang</label></td>
            <td> <div class="col-sm-10">
              <input type="text" class="form-control" name="kode_barang" id="inputEmail3" placeholder="Kode Barang">
            </div></td>
        </tr>
        <tr>
            <td><label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Barang</label></td>
            <td> <div class="col-sm-10">
              <input type="number" class="form-control" name="jumlah_barang" id="inputEmail3" placeholder="Jumlah Barang">
            </div></td>
        </tr>
        <tr>
            <td><label for="inputEmail3" class="col-sm-2 col-form-label">Alasan</label></td>
            <td> <div class="col-sm-10">
              <input type="text" class="form-control" name="alasan" id="inputEmail3" placeholder="Jumlah Barang">
            </div></td>
        </tr>
        <tr>
          <td><button type="submit" class="btn btn-primary">Kirim</button>
            
          </td>
        <td></td>
        </tr>
      </table>    
  </form>

@stop
