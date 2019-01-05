@extends('layouts.master')
@section('title','Keranjang')

@section('content')
<h9 style="color:white">{{$total = 0}}</h9>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active"> SHOPPING CART</li>
    </ul>
	<h3>  KERANJANG BELANJA [ <small>{{Cart::content()->count()}} </small>]<a href="/" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>
	<form method="POST" action="/check_out">
		{{ csrf_field() }}
	<input type="text" name="namapelanggan" placeholder="Nama Pelanggan" style="height:30px">
	{{-- <table class="table table-bordered">
		<tr><th> I AM ALREADY REGISTERED  </th></tr>
		 <tr> 
		 <td>
			<form class="form-horizontal">
				<div class="control-group">
				  <label class="control-label" for="inputUsername">Username</label>
				  <div class="controls">
					<input type="text" id="inputUsername" placeholder="Username">
				  </div>
				</div>
				<div class="control-group">
				  <label class="control-label" for="inputPassword1">Password</label>
				  <div class="controls">
					<input type="password" id="inputPassword1" placeholder="Password">
				  </div>
				</div>
				<div class="control-group">
				  <div class="controls">
					<button type="submit" class="btn">Sign in</button> OR <a href="/register" class="btn">Register Now!</a>
				  </div>
				</div>
				<div class="control-group">
					<div class="controls">
					  <a href="forgetpass.php" style="text-decoration:underline">Forgot password ?</a>
					</div>
				</div>
			</form>
		  </td>
		  </tr>
	</table>		 --}}
			
	<table class="table table-bordered" >
              <thead>
                <tr>
                  <th>Produk</th>
                  <th>Deskripsi</th>
                  <th>Quantity/Update</th>
				  <th>Harga</th>
                  <th>Discount</th>
                  {{-- <th>Tax</th> --}}
                  <th colspan="2">Total</th>
				</tr>
              </thead>
              <tbody>
									@foreach (Cart::content() as $item)
                <tr>
									
											
									
                  <td> <img width="60" src="themes/images/products/{{$item->options->gambar}}" alt=""/></td>
                  <td>{{$item->name}}<br/>{{$item->options->warna}}</td>
				  <td>
					<div class="input-append">
						<input disabled="disabled" class="span1" id="qty" style="max-width:34px; width:50px; height:25px" value="{{$item->qty}}" id="appendedInputButtons" size="16" type="text">
						<a href="{{url('product_summary/kurang',$item->rowId)}}"><button class="btn" type="button">
							<i class="icon-minus"></i>
						</button></a>
					<a href="{{url('product_summary/tambah',$item->rowId)}}"><button class="btn" type="button">
							<i class="icon-plus"></i>
						</button></a>
						<a href="{{url('product_summary/hapusproduct',$item->rowId)}}"><button class="btn btn-danger" type="button">
							<i class="icon-remove icon-white"></i>
						</button></a>
					</div>
				  </td>
                  <td>RP. {{$item->price}}</td>
                  <td>-</td>
                  {{-- <td>$15.00</td> --}}
                  <td colspan="2">RP. {{$item->qty * $item->price}}</td>
								</tr>
								@endforeach
				       <tr>
                  <td colspan="6" style="text-align:right">Total Price:	</td>
							 <td>RP. {{Cart::total()}} </td>
								</tr>
								
				 <tr>
                  <td colspan="6" style="text-align:right">Total Discount:	</td>
                  <td>-</td>
                </tr>
                 <tr>
                  <td colspan="6" style="text-align:right">Total Tax:	</td>
                  <td>-</td>
                </tr>
				 <tr>
                  <td colspan="6" style="text-align:right"><strong>TOTAL =</strong></td>
                  <td class="label label-important" style="display:block"> <strong>Rp. {{Cart::total()}}</strong></td>
                </tr>
				</tbody>
            </table>
		
		
            {{-- <table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table> --}}
			
			{{-- <table class="table table-bordered">
			 <tr><th>ESTIMATE YOUR SHIPPING </th></tr>
			 <tr> 
			 <td>
				<form class="form-horizontal">
				  <div class="control-group">
					<label class="control-label" for="inputCountry">Country </label>
					<div class="controls">
					  <input type="text" id="inputCountry" placeholder="Country">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>
				</form>				  
			  </td>
			  </tr>
						</table>		 --}}
					<input type="hidden" name="total" value="{{$total}}">
	<a href="/products" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	{{-- @if(isset($username)) --}}
	<a href="/check_out" ><button type="submit" class="btn btn-large pull-right"> Next <i class="icon-arrow-right"></i></button></a>
	{{-- @else
	<a href="#login" data-toggle="modal" ><button type="button" class="btn btn-large pull-right"> Next <i class="icon-arrow-right"></i></button></a>
	@endif --}}
	</form>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
@endsection
<script>
	function(){
		if(typeof $username == "undefined" || $username == null)
		{{}}
	}
</script>