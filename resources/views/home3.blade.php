<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Website - Pemeritah Desa Cisaruah</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<nav class="navbar navbar-expand-lg fixed nav-col bg-light cus-con">
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

	<section class="mt-4 mb-4">
		<div class="row container-fluid mx-auto pcus-top">
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
		<div class="container-fluid pcus">
			<div class="runtext-container">
				<div class="main-runtext">
					<marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">
						<div class="holder">
						    <div class="text-container">
						   		<i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/card.jpg" title="Electricians must provide business address and phone number">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
						    </div>
						    <div class="text-container">
						   		<i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/buildings.jpg" title="All jobs 70Amps and over require an electrical drawing done by a certified engineer">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
						    </div>
						    <div class="text-container">
						   		<i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/paid_electrician.jpg" title="Electrical work charges should only be paid to a licensed electrician">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
						    </div>
						</div>
					</marquee>
				</div>
			</div>
		</div>
		<div class="pt-5 container-fluid pcus">
			<div class="m-auto">
				<div class="text-center pb-3">
					<h3>Pelayanan Publik</h3>
				</div>
				<div class="bag-frm">
					<div class="pcus2">
						<div class="pb-4 text-center">
							<p class="font-weight-bold">(Form Pelayanan Surat)</p>
						</div>
						<form>
							<div class="form-group row">
							  	<label for="staticEmail" class="col-sm-2 col-form-label">NIK / Nama</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="staticEmail" value="NIK / Nama.com">
						    	</div>
					    	</div>
					    	<div class="form-group row">
						    	<label for="staticEmail" class="col-sm-2 col-form-label">Jenis Layanan</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="staticEmail" value="Jenis Layanan.com">
						    	</div>
						    </div>
						    <div class="form-group row">
						    	<label for="staticEmail" class="col-sm-2 col-form-label">Judul Pengajuan</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="staticEmail" value="Judul Pengajuan">
						    	</div>
						    </div>
						    <div class="form-group row">
						    	<label for="staticEmail" class="col-sm-2 col-form-label">Captcha</label>
						    	<div class="col-sm-10">
						      		<input type="text" class="form-control" id="staticEmail" value="Captcha">
						    	</div>
						    </div>
						    <div class="form-group row">
						    	<label for="staticEmail" class="col-sm-2 col-form-label">Keterangan</label>
						    	<div class="col-sm-10">
						      		<textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
						    	</div>
						    </div>
						    <div class="text-center pt-3">
						    	<button type="button" class="btn btn-primary">Submit</button>
						    </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-5 container-fluid pcus">
			<div class="m-auto">
				<div class="text-center pb-3">
					<h3>Potensi Desa</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/pertanian.jpg') }});">
					  	<p>Potensi Pertanian</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/perikanan.jpg') }});">
					  	<p>Potensi Perikanan</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/peternakan.jpg') }});">
					  	<p>Potensi Peternakan</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/jalan.jpg') }});">
					  	<p>Potensi Bumdes</p>
					</div>
				</div>
			</div>
		</div>
		<div class="pt-5 container-fluid pcus">
			<div class="m-auto">
				<div class="text-center pb-3">
					<h3>Data Informasi</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="module2 mage2" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/desa.jpg') }});">
					  	<p>Data Desa Cisarua</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
					  	<iframe width="auto" height="300" src="https://www.youtube.com/embed/yuCf__9d6Yg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer id="footer" class="bg-dark mt-5">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4 text-center">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Profil Desa</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pelayanan Publik</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Portal Berita</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Channel Youtube</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 text-center">
					<h5>Peta Lokasi</h5>
					<div class="gmap_canvas">
						<iframe width="auto" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=cianjur&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							<a href="https://www.emojilib.com"></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 text-center">
					<h5>Link Terkait</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pemerintah Sukabumi</a></li>
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Pemerintah Cianjur</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p class="h6">&copy Pemeritah Desa Cisaruah</p>
				</div>
				</hr>
			</div>	
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
</body>
</html>