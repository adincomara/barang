@extends('layouts.master')
@section('title','Detail')
@section('content')
    <ul class="breadcrumb">
    <li><a href="/">Home</a> <span class="divider">/</span></li>
    <li><a href="/products">Products</a> <span class="divider">/</span></li>
    <li class="active">product Details</li>
    </ul>
	<div class="row">
			<div id="gallery" class="span3">

        <a href="{{asset('themes/images/products/'.$users->gambar)}}" title="{{$users->name}}">
				<img src="{{asset('themes/images/products/'.$users->gambar)}}" style="width:100%" alt="{{$users->name}}"/>
            </a>

			</div>
			<div class="span6">
				<h3>{{$users->name}}</h3>
				<small>deskripsi terserahhhhhhhhhhhhhh</small>
				
				<hr class="soft"/>
				<h4>Tersisa {{$users->stok}}</h4>
			<form class="form-horizontal qtyFrm" method="POST" action="{{url('tokeranjang')}}">
				
				<input type="hidden" name="_token" value="{{csrf_token()}}">

					<input type="hidden" name="id" value="{{$users->id}}">
					
				  <div class="control-group">
					<label class="control-label"><span>Rp.{{$users->harga}}</span></label>
					<div class="controls">
					<input type="number" class="span1" name="qty" placeholder="Qty."/>
					  <button type="submit" class="btn btn-large btn-primary pull-right"> Add to cart <i class=" icon-shopping-cart"></i></button>
					</div>
				  </div>
				

				{{-- <hr class="soft"/> --}}
				
				{{-- <form class="form-horizontal qtyFrm pull-right"> --}}
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select name="warna" class="span2" >
						  <option value="Hitam">Hitam</option>
						  <option value="Merah">Merah</option>
						  <option value="Biru">Biru</option>
						  <option value="Putih">Putih</option>
						</select>
					</div>
				  </div>
				</form>
				<hr class="soft clr"/>
				
			</div>

			<div class="span9">
            
			</div>
		</div>
				<br class="clr">
					 </div>
		</div>
          </div>

	</div>
</div>
</div> </div>

@stop
