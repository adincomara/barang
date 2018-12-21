@extends('admin.admin_template')
@section('title', 'Input Barang')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Form Input Barang </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    
    <form action="/simpanbarang" method="GET">
         {{--  <input type="hidden" name="_token" value="{{csrf_token()}}">  --}}
         <input type="hidden" name="id" value="{{$barang->id}}">
      <div class="box-body">
        <div class="form-group">
          <label>Nama Barang</label>
          <input class="form-control" name="nama_barang" placeholder="Nama Barang" value="{{$barang->name}}" type="text">
        </div>
        <div class="form-group">
          <label>Harga</label>
          <input class="form-control" name="harga_barang" placeholder="Harga" value="{{$barang->harga}}" type="text">
        </div>
        <div class="form-group">
                <label>Stok</label>
                <input class="form-control" name="stok_barang" placeholder="Stok" value="{{$barang->stok}}" type="text">
              </div>
        
        <div class="form-group">
        <input type="text" class="form-control" name="gambar" value="{{$barang->gambar}}" disabled="true" type="text">
          <label>Input Gambar</label>
          <input name="gambar" type="file">

          <p class="help-block">*.jpg atau .png</p>
        </div>
        {{-- <div class="checkbox">
          <label>
            <input type="checkbox"> Check me out
          </label>
        </div> --}}
      </div>
      <!-- /.box-body -->

      <div class="box-footer" >
          <button type="submit" class="btn btn-primary">Inputan</button>
        <button type="submit" class="btn btn-primary">Input</button>
      </div>
    </form>
  </div>
@endsection
