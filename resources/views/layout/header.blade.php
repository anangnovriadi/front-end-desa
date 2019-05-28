<header id="header" class="navbar navbar-expand-lg bg-light shadow header header--fixed hide-from-print p-0">
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
  	</button>
  	<div class="nav-col bg-light cus-con pt-2 pb-2">
	  	<div class="mx-auto text-center">
	  		<p class="m-0 text-white font-weight-bold">{{ $contents[0]->header_top }}</p>
	  		<!-- <p class="m-0 text-white font-weight-bold">Pemeritah Desa Cimerang</p> -->
	  		<!-- <p class="m-0 text-white font-weight-bold">Desa Cimerang, Purabaya, Sukabumi, Jawa Barat</p> -->
	  	</div>
	</div>
  	<div class="collapse navbar-collapse cus-con pt-3 pb-3 pl-5 pr-5" id="navbarSupportedContent">
  		<img src="{{ asset('img/Pemda_Kabupaten_Sukabumi.png') }}" class="logo-2" alt="">
    	<ul class="navbar-nav mx-auto">
	      	<li class="nav-item mr-2 ml-2">
	        	<a class="nav-link gray-cus hov" href="#"><i class="fa fa-home fa-lg" aria-hidden="true"></i></a>
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
  		<img src="{{ asset('admin/img/'.$contents[0]->logo_kanan_atas) }}" class="logo" alt="">
  	</div>
</header>