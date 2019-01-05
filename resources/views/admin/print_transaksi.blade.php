<page>
        <h1>Daftar Transaksi</h1>
        <hr/>
        
        <table border="1" class="table table-bordered table-striped dataTable">
            <tr>
                <td>ID Transaksi</td>
                <td>Nama Pelanggan</td>
                <td style="width:100px">Tanggal</td>
                <td style="width:100px">Total Transaksi</td>
                
            </tr>
            @foreach ($barang as $item)
             <tr>
             <td>{{$item->id_transaksi}}</td>
             <td>{{$item->name_pel}}</td>
             <td>{{$item->total_pembelian}}</td>
             <td>{{$item->created_at->format('d - m - Y H:i')}}</td>
             
             </tr>   
            @endforeach
        </table>
    
    </page>