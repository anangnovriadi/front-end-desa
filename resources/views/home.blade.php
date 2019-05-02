@extends('layout.app')

@section('content')

<section class="mb-4 mt-top-i">
	<div class="row container-fluid mx-auto pcus-top">
		<div class="col-md-10 mb-4">
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
			                        <h3>Teh Panas Temani Pertemuan 4 Mata Jokowi dan AHY di Istana</h3>
			                        <!-- <p class="mb-0">The Content of the Third Slide goes in here</p> -->
			                    </div> 
			                </div>
					    </div>
					    <div class="carousel-item">
					      <img src="{{ asset('img/pr.jpg') }}" class="d-block w-100 banner-img" alt="...">
					      <div class="item">
			                    <div class="carousel-caption csr-b">
			                        <h3>LSI Denny JA: Jokowi Unggul 21 Provinsi dari Prabowo</h3>
			                        <!-- <p class="mb-0">The Content of the Third Slide goes in here</p> -->
			                    </div>
			                </div>
					    </div>
					    <div class="carousel-item">
					      <img src="{{ asset('img/pl.jpg') }}" class="d-block w-100 banner-img" alt="...">
					      <div class="item">
			                    <div class="carousel-caption csr-b">
			                        <h3>Deretan Caleg Artis dari PKB yang Lolos ke Senayan</h3>
			                        <!-- <p class="mb-0">The Content of the Third Slide goes in here</p> -->
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
		<div class="col-md-2">
			<div class="pb-3">
				<div class="p-2 text-center" style="background: rgba(0,0,0,.05); border-radius: 2px;">
					<p class="mb-0 font-weight-bold">Kepala Desa</p>
				</div>
				<img src="{{ asset('img/kadis.jpg') }}" class="d-block w-100 banner-left" alt="...">
			</div>
			<div class="pb-3">
				<div class="p-2 text-center" style="background: rgba(0,0,0,.05); border-radius: 2px;">
					<p class="mb-0 font-weight-bold">Staff Desa</p>
				</div>
				<div id="carouselExampleIndicatorss" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicatorss" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicatorss" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicatorss" data-slide-to="2"></li>
					</ol>
				  	<div class="carousel-inner">
				    	<div class="carousel-item active">
				      		<img src="{{ asset('img/kadis3.jpg') }}" class="d-block w-100 banner-left" alt="...">
				    	</div>
				    	<div class="carousel-item">
				      		<img src="{{ asset('img/staff1.jpg') }}" class="d-block w-100 banner-left" alt="...">
				    	</div>
				    	<div class="carousel-item">
				      		<img src="{{ asset('img/staff2.jpg') }}" class="d-block w-100 banner-left" alt="...">
				    	</div>
				  	</div>
				</div>
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
						<h3>Cek Data dan Pengaduan</h3>
					</div>
					<div class="bag-frm">
						<div class="pcus2">
							<form>
								<div class="pt-2 pb-3 text-center">
									<p class="font-weight-bold">(Cek Data)</p>
								</div>
								<div class="form-group row">
							    	<div class="col-sm-12">
							      		<input type="text" class="form-control" id="staticEmail" placeholder="Jenis Data">
							    	</div>
						    	</div>
						    	<div class="pt-2 pb-2 text-center">
									<p class="font-weight-bold">Pilih Jenis Data</p>
								</div>
						    	<div class="d-flex justify-content-center">
									<div class="pr-2">
										<div class="text-center">
											<button class="btn btn-secondary" type="button" onclick="showPengaduan()">Pengaduan</button>
										</div>
									</div>
									<div class="pl-2">
										<div class="text-center">
											<button class="btn btn-success" type="button" onclick="showSurat()">Surat Pengantar</button>
										</div>
									</div>
								</div>
								<div id="pengaduan" class="pt-4">
									<div class="pt-2 pb-2 text-center">
										<p class="font-weight-bold">(Pengaduan Online)</p>
									</div>
									<div class="form-group row">
								    	<div class="col-sm-12">
								      		<select class="custom-select" id="inputGroupSelect01">
											    <option selected>Pilih Kategori</option>
											    <option value="1">Administrasi</option>
											    <option value="2">Harga</option>
											    <option value="3">Jumlah</option>
											    <option value="3">Kualitas</option>
											    <option value="3">Waktu</option>
											</select>
								    	</div>
							    	</div>
							    	<div class="form-group row">
								    	<div class="col-sm-12">
								      		<input type="text" class="form-control" id="staticEmail" placeholder="No Handphone">
								    	</div>
								    </div>
								    <div class="form-group row">
								    	<div class="col-sm-12">
								      		<textarea placeholder="Tuliskan Pengaduan atau Keperluan Anda" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
								    	</div>
								    </div>
						    	</div>
								
								<div id="surat" class="pt-4">
								    <div class="pt-2 pb-2 text-center">
										<p class="font-weight-bold">(Surat Pengantar RT/RW)</p>
									</div>
									
									<div class="form-group row">
								    	<label for="staticEmail" class="col-sm-3 col-form-label">Nama</label>
								    	<div class="col-sm-9">
								      		<input type="text" class="form-control" id="staticEmail" placeholder="Nama Anda">
								    	</div>
								    </div>
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

							    <div class="text-center pt-4">
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
				<div class="module mage shadow p-3 bg-white rounded" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/pertanian.jpg') }});">
				  	<p>Potensi Pertanian</p>
				</div>
			</div>
			<div class="col-md-3 mb-4">
				<div class="module mage shadow p-3 bg-white rounded" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/perikanan.jpg') }});">
				  	<p>Potensi Perikanan</p>
				</div>
			</div>
			<div class="col-md-3 mb-4">
				<div class="module mage shadow p-3 bg-white rounded" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/peternakan.jpg') }});">
				  	<p>Potensi Peternakan</p>
				</div>
			</div>
			<div class="col-md-3 mb-4">
				<div class="module mage shadow p-3 bg-white rounded" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url({{  asset('img/jalan.jpg') }});">
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
				  	<iframe width="auto" height="300" src="https://www.youtube.com/embed/DHQR5N8v_o8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

@section('add_js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.5.0"></script>
<script src="https://npmcdn.com/headroom.js@0.9.4/dist/headroom.min.js" type="text/javascript"></script>
<script type="text/javascript">
	var myElement = document.querySelector("header");

var headroom  = new Headroom(myElement, {
  "offset": 220,
  "tolerance": {
    up: 0,
    down: 0
  },
  "classes": {
    "initial": "header--fixed",
    "pinned": "slideDown",
    "unpinned": "slideUp",
    "top": "top",
    "notTop" : "not-top",
  }
});

headroom.init();
</script>
<script type="text/javascript">
	var canvas = document.getElementById("myBarChart");
	var ctx = canvas.getContext('2d');

	Chart.defaults.global.defaultFontColor = 'black';
	Chart.defaults.global.defaultFontSize = 16;

	var data = {
	    labels: ["PNS", "Wiraswasta", "Petani"],
	      	datasets: [
	        {
	            fill: true,
	            backgroundColor: [
	                '#A52A2A',
	                '#ADD8E6',
	                '#ECFF33'
	            ],
	            data: [40, 30, 30],
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
	    // cutoutPercentage: 40,
	    plugins: {
            datalabels: {
                formatter: (value, ctx) => {
	                let sum = 0;
	                let dataArr = ctx.chart.data.datasets[0].data;
	                dataArr.map(data => {
	                    sum += data;
	                });
	                let percentage = (value*100 / sum).toFixed()+"%";
	                return percentage;
	            },
            	color: '#fff',
            }
        }
	};

	var myBarChart = new Chart(ctx, {
	    type: 'pie',
	    data: data,
	    options: options,
	    responsive: true
	});

	function showPengaduan() {
		var x = document.getElementById("pengaduan");
		var y = document.getElementById("surat");

	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	    	y.style.display = "block";
	  	} else {
	    	x.style.display = "block";
	    	y.style.display = "none";
	  	}
	}

	function showSurat() {
		var x = document.getElementById("pengaduan");
		var y = document.getElementById("surat");

	  	if (y.style.display === "block") {
	    	x.style.display = "block";
	    	y.style.display = "none";
	  	} else {
	    	y.style.display = "block";
	    	x.style.display = "none";
	  	}
	}
</script>
@endsection
@endsection