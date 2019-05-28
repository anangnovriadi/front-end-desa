@extends('layout.app')

@section('content')

<section class="mb-4 mt-top-i">
	<div class="row container-fluid mx-auto pcus-top">
		<div class="col-md-10 mb-4">
				{{-- {{ dd($contents[0]) }} --}}
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
			<p class="mt-1 mb-2 text-center font-weight-bold">Berita Desa : </p>
		</div>
		<div class="col-md-10 runtext-container">
			<div class="main-runtext">
				{{-- <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">
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
				</marquee> --}}
				<div id="nt-example1-container">
					<ul id="nt-example1">
						<li class="mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox font-weight-bold" href="#">Pemanfaatan Lahan Kosong Yang Membawa Kecerian</a></li>
						<li class="mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox font-weight-bold" href="#">Tanpa Pamrih Tanpa Mengenal Waktu</a></li>
						<li class="mb-1"><i class="fa fa-info-circle" aria-hidden="true"></i> <a data-fancybox-group="gallery" class="fancybox font-weight-bold" href="#">Perpisahan KKN Mahasiswa STAI Sukabumi Mengharukan</a></li>
					</ul>
				</div>
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
							    	<label for="staticEmail" class="col-sm-3"><div id="captcha"></div></label>
							    	<div class="col-sm-9">
							      		<input type="text" class="form-control" id="cpatchaTextBox" placeholder="Captcha">
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
				<div class="pt-3 pb-4 bag-frm">
					<div class="text-center">
						<p class="font-weight-bold">Data Penduduk</p>	
					</div>
					<div class="d-flex justify-content-center">
						<div class="pr-2">
							<div class="text-center">
								<button class="btn btn-warning" onclick="showDiagramPekerjaan()">Berdasarkan Pekerjaan</button>
							</div>
						</div>
						<div class="pl-2">
							<div class="text-center">
								<button class="btn btn-info" onclick="showDiagramJenisKelamin()">Berdasarkan Jenis Kelamin</button>
							</div>
						</div>
					</div>

					<div id="pekerjaan" class="col pt-3">
						<select id="selectDiagPekerjaan" class="custom-select custom-select-sm">
							<option value="nul">Pilih Jenis Diagram</option>
							<option value="pie">Pie Diagram</option>
							<option value="bar">Bar Diagram</option>
							<option value="line">Line Diagram</option>
						</select>
						<div>
							<div id="nul" class="pk nul">
							</div>
							<div id="pie" class="pk pie">
								<div class="pt-3 pb-4 bag-frm">
									<canvas id="myBarChart"></canvas>
								</div>
							</div>
							<div id="bar" class="pk bar">
								<div class="pt-3 pb-4 bag-frm">
									<canvas id="barChart"></canvas>
								</div>
							</div>
							<div id="line" class="pk line">
								<div class="pt-3 pb-4 bag-frm">
									<canvas id="lineChart"></canvas>
								</div>
							</div>
						</div>
					</div>

					<div id="jenisKelamin" class="col pt-3">
						<select id="selectDiagJenisKelamin" class="custom-select custom-select-sm">
							<option value="nul">Pilih Jenis Diagram</option>
							<option value="pieJ">Pie Diagram</option>
							<option value="barJ">Bar Diagram</option>
							<option value="lineJ">Line Diagram</option>
						</select>
						<div>
							<div id="nulJ" class="pk nulJ">
							</div>
							<div id="pieJ" class="pk pieJ">
								<div class="pt-3 pb-4 bag-frm">
									<canvas id="myBarChartJ"></canvas>
								</div>
							</div>
							<div id="barJ" class="pk barJ">
								<div class="pt-3 pb-4 bag-frm">
									<canvas id="barChartJ"></canvas>
								</div>
							</div>
							<div id="lineJ" class="pk lineJ">
								<div class="pt-3 pb-4 bag-frm">
									<canvas id="lineChartJ"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 mb-4">
				<div style="height: 488px; width: 100%;" class="embed-responsive embed-responsive-16by9 shadow p-3 bg-white rounded">
				  	<iframe src="{{ $youtubes[0]->embed_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

@section('add_js')
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.5.0"></script>
<script src="https://npmcdn.com/headroom.js@0.9.4/dist/headroom.min.js" type="text/javascript"></script>
<script src="{{ asset('js/jquery.newsTicker.min.js') }}"></script>
<script type="text/javascript">
$(function() {
  $('#selectDiagPekerjaan').change(function(){
	$('.pk').hide();
	var jn = document.getElementById('selectDiagJenisKelamin');
	var getV = jn.options[jn.selectedIndex].value;

	if(getV == 'nul') {
		console.log('joss')
	}


	console.log(getV);
    $('#' + $(this).val()).show();
  });
});

$(function() {
  $('#selectDiagJenisKelamin').change(function(){
	$('.pk').hide();
	
    $('#' + $(this).val()).show();
  });
});

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
	// Line
	var ctx = document.getElementById('lineChart').getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["PNS", "Wiraswasta", "Petani", "Nelayan"],
	        datasets: [{
	            label: 'Data Penduduk Cisarua',
	            data: [12, 19, 4, 8],
	            backgroundColor: [
	                'rgba(255, 255, 255, 0)',
	                'rgba(255, 255, 255, 0)',
					'rgba(255, 255, 255, 0)',
					'rgba(255, 255, 255, 0)'
	            ],
	            borderColor: [
	                'rgba(255, 99, 132, 1)',
	                'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
	                'rgba(54, 162, 235, 1)'					
	            ],
	            borderWidth: 2
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                }
	            }]
	        }
	    }
	});

	// Bar
	var ctx = document.getElementById('barChart').getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["PNS", "Wiraswasta", "Petani", "Nelayan"],
	        datasets: [{
	            label: 'Data Penduduk Cisarua',
	            data: [12, 19, 14, 8],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 80, 0.2)',
	                'rgba(255, 206, 86, 0.2)'					
	            ],
	            borderColor: [
	                'rgba(255, 99, 132, 1)'
	            ],
				borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                }
	            }]
	        }
	    }
	});


	// Pie
	var canvas = document.getElementById("myBarChart");
	var ctx = canvas.getContext('2d');

	Chart.defaults.global.defaultFontColor = 'black';
	Chart.defaults.global.defaultFontSize = 16;

	var data = {
	    labels: ["PNS", "Wiraswasta", "Petani", "Nelayan"],
	      	datasets: [
	        {
	            fill: true,
	            backgroundColor: [
	                '#A52A2A',
	                '#ADD8E6',
					'#ECFF33',
					'#12CE12'
	            ],
	            data: [40, 30, 20, 10],
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


	// Line J
	var ctx = document.getElementById('lineChartJ').getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'line',
	    data: {
	        labels: ["Laki - laki", "Perempuan", "Lansia"],
	        datasets: [{
	            label: 'Data Penduduk Cisarua',
	            data: [12, 20, 23],
	            backgroundColor: [
	                'rgba(255, 255, 255, 0)',
					'rgba(255, 255, 255, 0)',
	                'rgba(255, 255, 255, 0)'					
	            ],
	            borderColor: [
	                'rgba(255, 99, 132, 1)'
	            ],
				borderWidth: 2
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                }
	            }]
	        }
	    }
	});

	// Bar J
	var ctx = document.getElementById('barChartJ').getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'bar',
	    data: {
	        labels: ["Laki - laki", "Perempuan", "Lansia"],
	        datasets: [{
	            label: 'Data Penduduk Cisarua',
	            data: [12, 24, 32],
	            backgroundColor: [
	                'rgba(255, 99, 132, 0.2)',
	                'rgba(255, 206, 86, 0.2)'
	            ],
	            borderColor: [
	                'rgba(255, 99, 132, 1)',
	                'rgba(54, 162, 235, 1)'
	            ],
	            borderWidth: 1
	        }]
	    },
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero: true
	                }
	            }]
	        }
	    }
	});


	// Pie J
	var canvas = document.getElementById("myBarChartJ");
	var ctx = canvas.getContext('2d');

	Chart.defaults.global.defaultFontColor = 'black';
	Chart.defaults.global.defaultFontSize = 16;

	var data = {
	    labels: ["Laki - laki", "Perempuan", "Lansia"],
	      	datasets: [
	        {
	            fill: true,
	            backgroundColor: [
	                '#A52A2A',
					'#ADD8E6',
					'#D50057'
	            ],
	            data: [45, 30, 25],
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

	var nt_example1 = $('#nt-example1').newsTicker({
		row_height: 30,
		max_rows: 1,
		duration: 4000
	});

	var code;
	function createCaptcha() {
		document.getElementById('captcha').innerHTML = "";
		var charsArray = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
		var lengthOtp = 6;
		var captcha = [];

		for (var i = 0; i < lengthOtp; i++) {
			var index = Math.floor(Math.random() * charsArray.length + 1);
			if (captcha.indexOf(charsArray[index]) == -1)
			captcha.push(charsArray[index]);
			else i--;
		}
	
		var canv = document.createElement("canvas");
		canv.id = "captcha";
		canv.width = 100;
		canv.height = 50;
		var ctx = canv.getContext("2d");
		ctx.font = "25px Georgia";
		ctx.strokeText(captcha.join(""), 0, 30);
		code = captcha.join("");
		document.getElementById("captcha").appendChild(canv);
	}
	
	function validateCaptcha() {
		event.preventDefault();
		debugger
		if (document.getElementById("cpatchaTextBox").value == code) {
			alert("Valid Captcha")
		}else{
			alert("Invalid Captcha. try Again");
			createCaptcha();
		}
	}


	function showDiagramPekerjaan() {
		var x = document.getElementById("pekerjaan");
		var y = document.getElementById("jenisKelamin");

		document.getElementById('selectDiagJenisKelamin').selectedIndex = "0";

	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	    	y.style.display = "block";
	  	} else {
	    	x.style.display = "block";
	    	y.style.display = "none";
	  	}
	}

	function showDiagramJenisKelamin() {
		var x = document.getElementById("pekerjaan");
		var y = document.getElementById("jenisKelamin");
		
		document.getElementById('selectDiagPekerjaan').selectedIndex = "0";

	  	if (x.style.display === "block") {
	    	x.style.display = "none";
	    	y.style.display = "block";
	  	} else {
	    	x.style.display = "block";
	    	y.style.display = "none";
	  	}
	}

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