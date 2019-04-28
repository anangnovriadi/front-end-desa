@extends('layout.app')

@section('content')

<section class="mt-4 mb-4">
	<div class="row container-fluid mx-auto pcus-top">
		<div class="col-md-9 mb-4">
			<div class="banner-car">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" da ta-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="{{ asset('img/pa.jpg') }}" class="d-block w-100 banner-img" alt="...">
						    <div class="item">
			                    <div class="carousel-caption csr-b">
			                        <h3>This is the Third Label</h3>
			                        <p class="mb-0">The Content of the Third Slide goes in here</p>
			                    </div> 
			                </div>
					    </div>
					    <div class="carousel-item">
					      <img src="{{ asset('img/pr.jpg') }}" class="d-block w-100 banner-img" alt="...">
					      <div class="item">
			                    <div class="carousel-caption csr-b">
			                        <h3>This is the Third Label</h3>
			                        <p class="mb-0">The Content of the Third Slide goes in here</p>
			                    </div>
			                </div>
					    </div>
					    <div class="carousel-item">
					      <img src="{{ asset('img/pl.jpg') }}" class="d-block w-100 banner-img" alt="...">
					      <div class="item">
			                    <div class="carousel-caption csr-b">
			                        <h3>This is the Third Label</h3>
			                        <p class="mb-0">The Content of the Third Slide goes in here</p>
			                    </div>
			                </div>
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
		<div class="col-md-3">
			<div class="pb-3">
				<img src="{{ asset('img/ri.jpg') }}" class="d-block w-100 banner-left" alt="...">
			</div>
			<div class="pb-3">
				<img src="{{ asset('img/ri2.jpg') }}" class="d-block w-100 banner-left" alt="...">
			</div>
		</div>
	</div>
	<div class="container-fluid pcus d-flex">
		<div class="col-md-2 runtext-container">
			<p class="mt-1 mb-0 text-center font-weight-bold">Berita Desa : </p>
		</div>
		<div class="col-md-10 runtext-container">
			<div class="main-runtext">
				<marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">
					<div class="holder">
					    <div class="text-container">
					   		<i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/card.jpg" title="Electricians must provide business address and phone number">Pemanfaatan Lahan Kosong Yang Membawa Kecerian</a>
					    </div>
					    <div class="text-container">
					   		<i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/buildings.jpg" title="All jobs 70Amps and over require an electrical drawing done by a certified engineer">Tanpa Pamrih Tanpa Mengenal Waktu</a>
					    </div>
					    <div class="text-container">
					   		<i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox" href="images/runtext/paid_electrician.jpg" title="Electrical work charges should only be paid to a licensed electrician">Perpisahan KKN Mahasiswa STAI Sukabumi Mengharukan</a>
					    </div>
					</div>
				</marquee>
			</div>
		</div>
	</div>
	<div class="pt-5 container-fluid pcus">
		<div class="m-auto">
			<div class="row">
				<div class="col-md-6 mb-4">
					<div class="text-center pb-3">
						<h3>Pelayanan Publik</h3>
					</div>
					<div class="bag-frm c-frm">
						<div class="pcus2">
							<div class="pb-4 text-center">
								<p class="font-weight-bold">(Form Pelayanan Surat)</p>
							</div>
							<form>
								<div class="form-group row">
								  	<label for="staticEmail" class="col-sm-3 col-form-label">NIK / Nama</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="staticEmail" placeholder="NIK / Nama">
							    	</div>
						    	</div>
						    	<div class="form-group row">
							    	<label for="staticEmail" class="col-sm-3 col-form-label">Jenis Layanan</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="staticEmail" placeholder="Jenis Layanan">
							    	</div>
							    </div>
							    <div class="form-group row">
							    	<label for="staticEmail" class="col-sm-3 col-form-label">Judul Pengajuan</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="staticEmail" placeholder="Judul Pengajuan">
							    	</div>
							    </div>
							    <div class="form-group row">
							    	<label for="staticEmail" class="col-sm-3 col-form-label">Captcha</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="staticEmail" placeholder="Captcha">
							    	</div>
							    </div>
							    <div class="form-group row">
							    	<label for="staticEmail" class="col-sm-3 col-form-label">Keterangan</label>
							    	<div class="col-sm-9">
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
				<div class="col-md-6 mb-4">
					<div class="text-center pb-3">
						<h3>Cek Data</h3>
					</div>
					<div class="bag-frm">
						<div class="pcus2">
							<form>
								<div class="form-group row">
								  	<label for="staticEmail" class="col-sm-3 col-form-label">Jenis Data</label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="staticEmail" placeholder="Jenis Data">
							    	</div>
						    	</div>
						    	
								<div class="pt-2 pb-2 text-center">
									<p class="font-weight-bold">(Pengaduan Online)</p>
								</div>
								<!-- <div class="text-center" id="btni">
									<button class="btn btn-secondary" type="button" onclick="showPengaduan()">Show</button>
								</div> -->
								<div id="" class="pt-4">
									<div class="form-group row">
									  	<label for="staticEmail" class="col-sm-3 col-form-label">Jenis</label>
								    	<div class="col-sm-9">
								      		<select class="custom-select" id="inputGroupSelect01">
											    <option selected>Choose...</option>
											    <option value="1">One</option>
											    <option value="2">Two</option>
											    <option value="3">Three</option>
											</select>
								    	</div>
							    	</div>
							    	<div class="form-group row">
								    	<label for="staticEmail" class="col-sm-3 col-form-label">No Handphone</label>
								    	<div class="col-sm-9">
								      		<input type="text" class="form-control" id="staticEmail" placeholder="No Handphone">
								    	</div>
								    </div>
								    <div class="form-group row">
								    	<label for="staticEmail" class="col-sm-3 col-form-label">Tuliskan Pengaduan atau Keperluan Anda</label>
								    	<div class="col-sm-9">
								      		<textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
								    	</div>
								    </div>
						    	</div>
								
							    <div class="pt-2 pb-2 text-center">
									<p class="font-weight-bold">(Surat Pengantar RT/RW)</p>
								</div>
								<div class="text-center" id="btni">
									<button class="btn btn-secondary" type="button" onclick="showSurat()">Show</button>
								</div>
								<div id="surat" class="pt-4">
									<div class="form-group row">
								    	<label for="staticEmail" class="col-sm-3 col-form-label">Wilayah Kadus</label>
								    	<div class="col-sm-9">
								      		<input type="text" class="form-control" id="staticEmail" placeholder="Wilayah Kadus">
								    	</div>
								    </div>
								    <div class="form-group row">
								    	<label for="staticEmail" class="col-sm-3 col-form-label">RT / RW</label>
								    	<div class="col-sm-9">
								      		<input type="text" class="form-control" id="staticEmail" placeholder="RT / RW">
								    	</div>
								    </div>
								    <div class="form-group row">
								    	<label for="staticEmail" class="col-sm-3 col-form-label">Jenis Keperluan</label>
								    	<div class="col-sm-9">
								      		<input type="text" class="form-control" id="staticEmail" placeholder="Jenis Keperluan">
								    	</div>
								    </div>
						    	</div>
							    <div class="text-center pt-5">
							    	<button type="button" class="btn btn-primary">Submit</button>
							    </div>
							</form>
						</div>
					</div>
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
			<div class="col-md-3 mb-4">
				<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/pertanian.jpg') }});">
				  	<p>Potensi Pertanian</p>
				</div>
			</div>
			<div class="col-md-3 mb-4">
				<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/perikanan.jpg') }});">
				  	<p>Potensi Perikanan</p>
				</div>
			</div>
			<div class="col-md-3 mb-4">
				<div class="module mage" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/peternakan.jpg') }});">
				  	<p>Potensi Peternakan</p>
				</div>
			</div>
			<div class="col-md-3 mb-4">
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
			<div class="col-md-6 mb-4">
				<!-- <div class="module2 mage2" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/desa.jpg') }});">
				  	<p>Data Desa Cisarua</p>
				</div> -->
				<div class="pt-3 pb-4 bag-frm">
					<canvas id="myBarChart"></canvas>
				</div>
			</div>
			<div class="col-md-6 mb-4">
				<div class="embed-responsive embed-responsive-16by9">
				  	<iframe width="auto" height="300" src="https://www.youtube.com/embed/ECPeWx1O08c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

@section('add_js')
<script type="text/javascript">
	var canvas = document.getElementById("myBarChart");
	var ctx = canvas.getContext('2d');

	Chart.defaults.global.defaultFontColor = 'black';
	Chart.defaults.global.defaultFontSize = 16;

	var data = {
	    labels: ["Berdasarkan Umur", "Berdasarkan Jenis Kelamin"],
	      	datasets: [
	        {
	            fill: true,
	            backgroundColor: [
	                'red',
	                '#ADD8E6'
	            ],
	            data: [40, 60],
	            borderWidth: [2, 2]
	        }
	    ]
	};

	var options = {
        title: {
            display: true,
            text: 'Data Penduduk Cisarua',
            position: 'top'
        },
	    rotation: -0.7 * Math.PI
	};

	var myBarChart = new Chart(ctx, {
	    type: 'pie',
	    data: data,
	    options: options
	});

	function showPengaduan() {
		var x = document.getElementById("pengaduan");

	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	  	} else {
	    	x.style.display = "block";
	  	}
	}

	function showSurat() {
		var x = document.getElementById("surat");

	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	  	} else {
	    	x.style.display = "block";
	  	}
	}
</script>
@endsection
@endsection