<footer id="footer" class="bg-dark mt-5">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-8 col-md-8 text-center mb-4">
				<h5>Link dan Peta Lokasi</h5>
				<div class="form-group mb-2">
					<select class="custom-select" id="inputGroupSelect01">
					    <option selected>Choose...</option>
					    <option value="1">Peta Dasar</option>
					    <option value="2">Sarana Prasarana</option>
					    <option value="3">Data Sosial</option>
					    <option value="3">Data Ekonomi</option>
					    <option value="3">Infrastruktur</option>
					</select>
				</div>
				<div class="gmap_canvas">
					<iframe class="frm-map" width="auto" height="200" id="gmap_canvas" src="{{ $maps[0]->embed_url }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
						<a href="https://www.emojilib.com"></a>
				</div>
			</div>
			<div class="col-sm-4 col-md-4 text-center">
				<h5>Link Terkait</h5>
				<div class="row mt-2">
					<div class="col-md-6 mb-3">
						<a href="https://sukabumikab.go.id/portal/">
						<img class="img-res" src="{{ asset('img/pemkab_sukabumi.png') }}" />
						<p class="font-weight-bold text-white">Pemda Kabupaten Sukabumi</p>
						</a>
					</div>
					<div class="col-md-6 mb-3">
						<a href="https://sukabumikab.go.id/portal/opd/dinas-komunikasi-informatika-dan-persandian.html">
						<img class="img-res" src="{{ asset('img/pemkab_sukabumi.png') }}" />
						<p class="font-weight-bold text-white" style="font-size: 12px;">Dinas Komunikasi, Informatika dan Persadian Sukabumi</p>
						</a>
					</div>
					<div class="col-md-6 mb-3">
						<a href="https://sukabumikab.go.id/portal/opd/dinas-pemberdayaan-masyarakat-dan-desa.html">
						<img class="img-res" src="{{ asset('img/pemkab_sukabumi.png') }}" />
						<p class="font-weight-bold text-white">DPMD Kabupaten Sukabumi</p>
						</a>
					</div>
					<div class="col-md-6 mb-3">
						<a href="https://www.dukcapilkabsukabumi.org/">
						<img class="img-res" src="{{ asset('img/pemkab_sukabumi.png') }}" />
						<p class="font-weight-bold text-white">Dukcapil Kabupaten Sukabumi</p>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-whatsapp"></i></a></li>
				</ul>
			</div>
			</hr>
		</div>	 -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white pt-4">
				<p class="h6">{{ $contents[0]->alamat_bottom }}</p>
				<p class="h6">&copy Pemeritah Sukabumi</p>
			</div>
			</hr>
		</div>	
	</div>
</footer>