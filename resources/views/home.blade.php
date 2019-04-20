<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Website - Pemkab</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-expand-lg nav-col bg-light cus-con">
	  	<div class="mx-auto text-center">
	  		<p class="m-0 text-white font-weight-bold">Pemeritah Desa Cisaruah</p>
	  		<p class="m-0 text-white font-weight-bold">Jln. R.Natapraja No. 01 Cibodas Desa Cisarua Kec. Nagrak, Kabupaten Sukabumi</p>
	  	</div>
	</nav>

	<nav class="navbar navbar-expand-lg bg-light cus-con shadow">
	  	<img src="{{ asset('img/logo-sukabumi.png') }}" class="logo-2" alt="">
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>

	  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mx-auto">
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Beranda</a>
		      	</li>
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Profil Desa</a>
		      	</li>
		       	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Produk Hukum</a>
		      	</li>
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Pelayanan Publik</a>
		      	</li>
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Data & Informasi</a>
		      	</li>
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Portal Berita</a>
		      	</li>
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Link</a>
		      	</li>
		      	<li class="nav-item mr-2 ml-2">
		        	<a class="nav-link gray-cus hov" href="#">Kontak</a>
		      	</li>
	    	</ul>
	  	</div>
	  	<img src="{{ asset('img/logo-cisarua.png') }}" class="logo" alt="">
	</nav>

	<section class="mt-4">
		<div class="row container-fluid mx-auto">
			<div class="col-md-10">
				<div class="banner-car">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" da ta-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="https://via.placeholder.com/650x250" class="d-block w-100 banner-img" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="https://via.placeholder.com/650x250" class="d-block w-100 banner-img" alt="...">
						    </div>
						    <div class="carousel-item">
						      <img src="https://via.placeholder.com/650x250" class="d-block w-100 banner-img" alt="...">
						    </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="pb-3">
					<img src="https://via.placeholder.com/650x250" class="d-block w-100 banner-left" alt="...">
				</div>
				<div class="pb-3">
					<img src="https://via.placeholder.com/650x250" class="d-block w-100 banner-left" alt="...">
				</div>
			</div>
		</div>
		
		
	</section>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>