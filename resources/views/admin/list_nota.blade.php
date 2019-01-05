@extends('admin.admin_template')
@section('title', 'List Transaksi')

@section('content')
@if (session('alertsuccess'))
    <div class="alert alert-success">
        {{ session('alertsuccess') }}
    </div>

@elseif (session('alertfail'))
<div class="alert alert-danger">
  {{ session('alertfail') }}
</div>
@endif
<div class="box">
    <div class="box-header">
      <h3 class="box-title">Daftar List Transaksi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6">
        <div class="dataTables_length" id="example1_length">
          <label>
  
          </label></div></div>
          <div class="col-sm-6"><div id="example1_filter" class="dataTables_filter">
            <label>Search:<input class="form-control input-sm" placeholder="" aria-controls="example1" type="search"></label>
            
          </div>
          
        </div>
      </div>
      <div class="row"><div class="col-sm-12">
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 100.467px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 195.4px;" aria-label="Platform(s): activate to sort column ascending">Nomor Transaksi
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Nama Pelanggan
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Tanggal Transaksi
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Total Transaksi
                </th>
              {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111.3px;" aria-label="CSS grade: activate to sort column ascending">Harga
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 111.3px;" aria-label="CSS grade: activate to sort column ascending">Action
                  </th> --}}
              </tr>
         
      </thead>
        <tbody>
          
          @foreach ($users as $user)
            {{-- @if (true) --}}
                 <tr role="row" class="odd">
          <td class="sorting_1">{{$user->id}}</td>
          {{-- <td><img src="../themes/images/products/{{$user->gambar}}" alt="" style="width:50px; height:50px"/></td> --}}
          <td><a href="{{url('/admin/detailtransaksi',$user->id_transaksi)}}">{{$user->id_transaksi}}</td>
          <td>{{$user->name_pel}}</td>
          <td>{{$user->created_at->format('d - m - Y H:i')}}</td>
          <td>{{$user->total_pembelian}}.000</td>
          {{-- <td>{{$user->harga}}</td> --}}
          {{-- <td> <a href="{{url('/admin/edit_barang',$user->id)}}"><button type="button" class="btn btn-primary">
             <span class="glyphicon glyphicon-cog" style="text-decoration-style: none" aria-hidden="true"></span></button> </a>
             <a href="{{url('/admin/delete_barang',$user->id)}}"> <button type="button" onclick="return confirm('Yakin ingin delete data?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td> --}}
                 </tr>
           
            
          
         
        
        @endforeach
      </tbody>
        {{-- <tfoot>
        <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
        </tfoot> --}}
      </table>
      
    
    </div></div><div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing {{$users->currentPage()}} to {{$users->count()}} of {{$users->total()}} entries</div></div>
      <div class="col-sm-7">
        
          {{--  <li class="paginate_button active">  --}}
            {{$users->links()}}
          {{--  </li>  --}}
        </div></div></div></div>
    </div>
    <!-- /.box-body -->
  </div>

  <script>
    function myFunction() {
        // alert('Yakin ingin hapus data?');
        var hapusin=confirm("Apakah Anda yakin ingin menghapus data ini?");
        if(hapusin==true){
            window.location.href=tujuan;
            }
            else{
            alert("Data Batal dihapus");
            }
            return hapusin;
            }
    }
    </script>
@endsection