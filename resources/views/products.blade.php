@extends('layouts.master')
@section('title','Product')
@section('content')
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active">{{$judul}}</li>
    </ul>
	<h3> {{$judul}} <small class="pull-right"> 40 products are available </small></h3>
	{{--  <hr class="soft"/>  --}}
	{{--  <p>
		Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies - that is why our goods are so popular and we have a great number of faithful customers all over the country.
	</p>  --}}
	<hr class="soft"/>
	<form class="form-horizontal span6">
		<div class="control-group">
		  <label class="control-label alignL">Sort By </label>
			<select>
              <option>Priduct name A - Z</option>
              <option>Priduct name Z - A</option>
              <option>Priduct Stoke</option>
              <option>Price Lowest first</option>
            </select>
		</div>
	  </form>

<div id="myTab" class="pull-right">
 <a href="#listView" data-toggle="tab"><span class="btn btn-large"><i class="icon-list"></i></span></a>
 <a href="#blockView" data-toggle="tab"><span class="btn btn-large btn-primary"><i class="icon-th-large"></i></span></a>
</div>
<br class="clr"/>
<div class="tab-content">
	<div class="tab-pane" id="listView">
		@foreach ($users as $user )
				
		
		<div class="row">
			<div class="span2">
				<img src="{{asset('themes/images/products/'.$user->gambar)}}" alt=""/>
			</div>
			<div class="span4">
				<h3>{{$user->name}}</h3>
				<hr class="soft"/>
				<h5>{{$user->name}}</h5>
				<p>
				Nowadays the lingerie industry is one of the most successful business spheres.We always stay in touch with the latest fashion tendencies -
				that is why our goods are so popular..
				</p>
				<a class="btn btn-small pull-right" href="{{url('/product_detail',$user->id)}}">View Details</a>
				<br class="clr"/>
			</div>
			<div class="span3 alignR">
			<form class="form-horizontal qtyFrm">
			<h3> {{$user->harga}}</h3>
			{{--  <label class="checkbox">
				<input type="checkbox">  Adds product to compair
			</label><br/>  --}}

			  <a href="{{url('/tambahkeranjang',$user->id)}}" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>
			  <a href="{{url('/product_detail',$user->id)}}" class="btn btn-large"><i class="icon-zoom-in"></i></a>

				</form>
			</div>
		</div>
		<hr class="soft"/>
		@endforeach
	</div>

	<div class="tab-pane  active" id="blockView">
		<ul class="thumbnails">
			@foreach ($users as $user )
			<li class="span3">
			  <div class="thumbnail">
				<a href="/product_detail"><img src="{{asset('themes/images/products/'.$user->gambar)}}" alt=""/></a>
				<div class="caption">
				  <h5>{{$user->name}}</h5>
				  <p>
							@if ($user->stok >0)
								Jumlah Barang : {{$user->stok}}
							@else
								Stok Habis
							
							@endif
						
						</p>
				   <h4 style="text-align:center"><a class="btn" href="{{url('/product_detail',$user->id)}}"> <i class="icon-zoom-in"></i></a> <a class="btn" href="{{url('/tambahkeranjang',$user->id)}}">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp. {{$user->harga}}</a></h4>
				</div>
			  </div>
			</li>
		@endforeach
		  </ul>
	<hr class="soft"/>
	</div>
</div>

	{{--  <a href="compair.php" class="btn btn-large pull-right">Compair Product</a>  --}}
	<center><div class="pagination">
			{{$users->links()}}
	</div></center>
			<br class="clr"/>
</div>
</div>
</div>
</div>
<!-- MainBody End ============================= -->
@stop
