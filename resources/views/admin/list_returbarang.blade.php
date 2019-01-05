@extends('admin.admin_template')

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
      <h3 class="box-title">Data Table With Full Features</h3>
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
          <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 195.4px;" aria-label="Platform(s): activate to sort column ascending">Nomor Nota
            </th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Nama Barang
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Kode Barang
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Jumlah Barang
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">alasan
                        </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Tanggal Transaksi
              </th>
              <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 155.1px;" aria-label="Engine version: activate to sort column ascending">Status
                </th>
              
              </tr>
         
      </thead>
        <tbody>
          
          @foreach ($users as $user)
          <tr role="row" class="odd">
          <td class="sorting_1">{{$user->id}}</td>
          <td><a href="{{url('/admin/detailtransaksi',$user->no_nota)}}">{{$user->no_nota}}</td>
          <td>{{$user->nama_barang}}</td>
          <td>{{$user->kode_barang}}</td>
          <td>{{$user->jumlah_barang}}</td>
          <td>{{$user->alasan}}</td>
          <td>{{$user->created_at->format('d - m - Y H:i')}}</td>
          <td>{{$user->status}}</td>
          @if($user->status==='Terkonfirmasi')
            <td><a href="#"><button type="button" class="btn btn-success" disabled>Terkonfirmasi</button></a></td>  
        
          @else
            <td><a href="{{url('/admin/konfrim_returbarang',$user->id)}}"><button type="button" class="btn btn-primary">Konfirmasi</button></a></td>
          
          @endif
          
          {{-- <td>{{$user->harga}}</td> --}}
          {{-- <td> <a href="{{url('/admin/edit_barang',$user->id)}}"><button type="button" class="btn btn-primary">
             <span class="glyphicon glyphicon-cog" style="text-decoration-style: none" aria-hidden="true"></span></button> </a>
             <a href="{{url('/admin/delete_barang',$user->id)}}"> <button type="button" onclick="return confirm('Yakin ingin delete data?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></td> --}}
                 </tr>
        
        @endforeach
      </tbody>

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
    
    </script>
@endsection