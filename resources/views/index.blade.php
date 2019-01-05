@extends('layouts.master')
@section('title','Home')
@section('content')
<h4>Latest Products </h4>
<ul class="thumbnails">
	@foreach ($users as $user)
		<li class="span3">
			<div class="thumbnail">
				<a  href="/product_detail"><img src="themes/images/products/{{$user->gambar}}" style="min-width:160px; min-hight:160px" alt=""/></a>
					<div class="caption">
					<h5>{{$user->name}}</h5>
					<p>
						@if ($user->stok >0)
						Jumlah Barang : {{$user->stok}}
						@else
						Stok Habis

						@endif

					</p>

					<h4 style="text-align:center">
					@if ($user->stok >0)
					<a class="btn" href="/product_detail/{{$user->id}}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="/tambahkeranjang/{{$user->id}}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp.{{$user->harga}}</a>
					@else
					<a class="btn" href="#"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp.{{$user->harga}}</a>
					@endif	
					</h4>
				</div>
			</div>
		</li>

	@endforeach
	
</ul>
	<center><div class="pagination">
	{{$users->links()}}
	</div></center>


@stop
