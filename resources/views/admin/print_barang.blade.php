<page>
    <h1>Daftar Barang</h1>
    <hr/>
    
    <table border="1" class="table table-bordered table-striped dataTable">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td style="width:100px">Stok</td>
            <td style="width:100px">Harga</td>
            <td style="width:100px">Status</td>
        </tr>
        @foreach ($barang as $item)
         <tr>
         <td>{{$item->id}}</td>
         <td>{{$item->name}}</td>
         <td>{{$item->stok}}</td>
         <td>{{$item->harga}}</td>
         <td>{{$item->status}}</td>
         </tr>   
        @endforeach
    </table>

</page>