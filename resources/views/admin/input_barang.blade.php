@extends('admin.admin_template')
@section('title', 'Input Barang')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Form Input Barang </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form role="form" method="post" action="/admin/input_barang/save_barang" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Barang</label>
          <input class="form-control" name="nama_barang" id="exampleInputEmail1" placeholder="Nama Barang" type="text">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Harga</label>
          <input class="form-control" id="exampleInputPassword1" name="harga_barang" placeholder="Harga" type="text">
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Input Gambar</label>
          <input id="exampleInputFile" name="image" type="file">

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
        <button type="submit" class="btn btn-primary">Input</button>
      </div>
    </form>
  </div>
@endsection
