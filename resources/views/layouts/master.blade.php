<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Web - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

<!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="{{asset('themes/bootshop/bootstrap.min.css')}}" media="screen"/>
    <link href="{{asset('themes/css/base.css')}}" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->
	<link href="{{asset('themes/css/bootstrap-responsive.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('themes/css/font-awesome.css')}}" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->
	<link href="{{asset('themes/js/google-code-prettify/prettify.css')}}" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('themes/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('themes/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('themes/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('themes/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('themes/images/ico/apple-touch-icon-57-precomposed.png')}}">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="/"><img src="{{asset('themes/images/logo.jpeg')}}" style="width:193px; height:47px" alt="Logo Perusahaan"/></a>
		<form class="form-inline navbar-search" method="post" action="/products" >
		<input id="srchFld" class="srchTxt" type="text" />
		  {{-- <select class="srchTxt">
			<option>All</option>
			<option></option>
			<option>FOOD AND BEVERAGES </option>
			<option>HEALTH & BEAUTY </option>
			<option>SPORTS & LEISURE </option>
			<option>BOOKS & ENTERTAINMENTS </option>
		</select> --}}
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="returbarang">Retur Barang</a></li>
	 {{-- <li class=""><a href="normal.php">Delivery</a></li> --}}
{{-- 	 
	 @if(isset($username))
		<li class=""><a href="#">{{$username}}</a></li>
	 
	 @endif --}}
	 
	 <li class="">
		 {{-- @if (isset($username))
		 <a href="/logout" role="button"  style="padding-right:0"><span class="btn btn-large btn-danger">Logout</span></a>
		 @else --}}
	 <a href="#login" role="button" data-toggle="modal" style="padding-right:0"><span class="btn btn-large btn-success">Login</span></a>
		{{-- @endif --}}
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Kasir</h3>
		  </div>
		  <div class="modal-body">
		  <form class="form-horizontal loginFrm" method="POST" action="/login">
			{{csrf_field()}}
			  <div class="control-group">
				<input type="text" name="username" placeholder="Username">
			  </div>
			  <div class="control-group">
				<input type="password" name="password" placeholder="Password">
			  </div>
			  <div class="control-group">
				{{-- <label class="checkbox">
				<input type="checkbox"> Remember me
				</label> --}}
			  </div>
			
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</form>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<div class="well well-small"><a id="myCart" href="{{url('/product_summary')}}"><img src="{{asset('themes/images/ico-cart.png')}}" alt="cart">{{Cart::content()->count()}} Produk  <span class="badge badge-warning pull-right">{{Cart::total()}}</span></a></div>
		{{-- <ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li class="subMenu open"><a> ELECTRONICS DEVICE </a> --}}
				{{-- <ul>
				<li><a href="/products/device"><i class="icon-chevron-right"></i>Device (100) </a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Computers, Tablets & laptop (30)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Mobile Phone (80)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Sound & Vision (15)</a></li>
				</ul> --}}
			{{-- </li>
			<li class="subMenu"><a> CLOTHES [840] </a> --}}
			{{-- <ul style="display:none">
				<li><a href="/products"><i class="icon-chevron-right"></i>Women's Clothing (45)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Women's Shoes (8)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Women's Hand Bags (5)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Men's Clothings  (45)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Men's Shoes (6)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Kids Clothing (5)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Kids Shoes (3)</a></li>
			</ul> --}}
			{{-- </li>
			<li class="subMenu"><a>FOOD AND BEVERAGES [1000]</a> --}}
				{{-- <ul style="display:none">
				<li><a href="/products"><i class="icon-chevron-right"></i>Angoves  (35)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Bouchard Aine & Fils (8)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>French Rabbit (5)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Louis Bernard  (45)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>BIB Wine (Bag in Box) (8)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Other Liquors & Wine (5)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Garden (3)</a></li>
				<li><a href="/products"><i class="icon-chevron-right"></i>Khao Shong (11)</a></li>
			</ul> --}}
			</li>
			{{-- <li><a href="/products">HEALTH & BEAUTY [18]</a></li>
			<li><a href="/products">SPORTS & LEISURE [58]</a></li>
			<li><a href="/products">BOOKS & ENTERTAINMENTS [14]</a></li>
		</ul> --}}

	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">
			@yield('content')
		</div>
	</div>
	</div>
		</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="/login">YOUR ACCOUNT</a>
				<a href="/login">PERSONAL INFORMATION</a>
				<a href="/login">ADDRESSES</a>
				<a href="/login">DISCOUNT</a>
				<a href="/login">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.php">CONTACT</a>
				<a href="/register">REGISTRATION</a>
				<a href="legal_notice.php">LEGAL NOTICE</a>
				<a href="tac.php">TERMS AND CONDITIONS</a>
				<a href="/faq">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a>
				<a href="#">TOP SELLERS</a>
				<a href="special_offer.php">SPECIAL OFFERS</a>
				<a href="#">MANUFACTURERS</a>
				<a href="#">SUPPLIERS</a>
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="{{asset('themes/images/facebook.png')}}" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="{{asset('themes/images/twitter.png')}}" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="{{asset('themes/images/youtube.png')}}" title="youtube" alt="youtube"/></a>
			 </div>
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="{{asset('themes/js/jquery.js')}}" type="text/javascript"></script>
	<script src="{{asset('themes/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('themes/js/google-code-prettify/prettify.js')}}"></script>

	<script src="{{asset('themes/js/bootshop.js')}}"></script>
    <script src="{{asset('themes/js/jquery.lightbox-0.5.js')}}"></script>

	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="{{asset('themes/switch/themeswitch.css')}}" type="text/css" media="screen" />
<script src="{{asset('themes/switch/theamswitcher.js')}}" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="themes/css/#" name="bootshop"><img src="{{asset('themes/switch/images/clr/bootshop.png')}}" alt="bootstrap business templates" class="active"></a>
	<a href="themes/css/#" name="businessltd"><img src="{{asset('themes/switch/images/clr/businessltd.png')}}" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="themes/css/#" name="amelia" title="Amelia"><img src="{{asset('themes/switch/images/clr/amelia.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spruce" title="Spruce"><img src="{{asset('themes/switch/images/clr/spruce.png')}}" alt="bootstrap business templates" ></a>
		<a href="themes/css/#" name="superhero" title="Superhero"><img src="{{asset('themes/switch/images/clr/superhero.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cyborg"><img src="{{asset('themes/switch/images/clr/cyborg.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="cerulean"><img src="{{asset('themes/switch/images/clr/cerulean.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="journal"><img src="{{asset('themes/switch/images/clr/journal.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="readable"><img src="{{asset('themes/switch/images/clr/readable.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="simplex"><img src="{{asset('themes/switch/images/clr/simplex.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="slate"><img src="{{asset('themes/switch/images/clr/slate.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="spacelab"><img src="{{asset('themes/switch/images/clr/spacelab.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="united"><img src="{{asset('themes/switch/images/clr/united.png')}}" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="themes/css/#" name="pattern1"><img src="{{asset('themes/switch/images/pattern/pattern1.png')}}" alt="bootstrap business templates" class="active"></a>
		<a href="themes/css/#" name="pattern2"><img src="{{asset('themes/switch/images/pattern/pattern2.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern3"><img src="{{asset('themes/switch/images/pattern/pattern3.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern4"><img src="{{asset('themes/switch/images/pattern/pattern4.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern5"><img src="{{asset('themes/switch/images/pattern/pattern5.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern6"><img src="{{asset('themes/switch/images/pattern/pattern6.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern7"><img src="{{asset('themes/switch/images/pattern/pattern7.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern8"><img src="{{asset('themes/switch/images/pattern/pattern8.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern9"><img src="{{asset('themes/switch/images/pattern/pattern9.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern10"><img src="{{asset('themes/switch/images/pattern/pattern10.png')}}" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern11"><img src="{{asset('themes/switch/images/pattern/pattern11.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern12"><img src="{{asset('themes/switch/images/pattern/pattern12.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern13"><img src="{{asset('themes/switch/images/pattern/pattern13.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern14"><img src="{{asset('themes/switch/images/pattern/pattern14.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern15"><img src="{{asset('themes/switch/images/pattern/pattern15.png')}}" alt="bootstrap business templates"></a>

		<a href="themes/css/#" name="pattern16"><img src="{{asset('themes/switch/images/pattern/pattern16.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern17"><img src="{{asset('themes/switch/images/pattern/pattern17.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern18"><img src="{{asset('themes/switch/images/pattern/pattern18.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern19"><img src="{{asset('themes/switch/images/pattern/pattern19.png')}}" alt="bootstrap business templates"></a>
		<a href="themes/css/#" name="pattern20"><img src="{{asset('themes/switch/images/pattern/pattern20.png')}}" alt="bootstrap business templates"></a>

	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>
