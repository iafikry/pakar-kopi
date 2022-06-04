<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CSS mandiri -->
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>ES Kopi</title>
  </head>
  <body>
	  <header id="header">
		<nav class="navbar navbar-expand-lg navbar-light" id="nav-menu">
			<div class="container">
				<a class="navbar-brand text-light" href="#">
					<img src="<?= base_url('assets/img/logo fill - white.svg') ?>" alt="logo" height="80" class="d-inline-block" style="fill: #fffff;">
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav mx-auto text-light">
						<a class="nav-txt-link text-light txt-menu" id="menu-diagnosis" aria-current="page" href="#">Diagnosis</a>
						<a class="nav-txt-link text-light txt-menu" id="menu-informasi" href="#">Informasi
						</a>
						<a class="nav-txt-link text-light txt-menu" id="menu-tentang" href="#">Tentang</a>
					</div>
					<div class="row">
						<a class="btn text-white rounded-pill border border-white" id="btnLogin" href="<?= base_url('auth') ?>">Login</a>
					</div>
				</div>
			</div>
		</nav>
	  </header>
	  <main>
		<section id="page1" class="d-flex flex-row align-items-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-7">
						<div class="card billboard border-0 bg-transparent text-light position-relative">
							<div class="card-body">
								<h1 class="text-title">cari tahu penyakit apa yang sedang dialami  oleh tanaman kopimu</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="page2">
			<div class="container pt-5">
				<div class="row pt-5">
					<div class="col-lg">
						<h2 class="text-uppercase text-base text-center">es kopi</h2>
					</div>
				</div>
				<div class="row pt-3">
					<div class="col-lg">
						<h3 class="text-base text-center">ES Kopi merupakan sistem pakar (<i>expert system</i>) untuk mendiagnosis penyakit pada tanaman kopi robusta dan liberika</h3>
					</div>
				</div>
				<div class="row pt-3 justify-content-center">
					<div class="col-2 d-flex justify-content-center">
						<a href="#" class="btn btn-lg btn-primer">Mulai!</a>
					</div>
				</div>
				<div class="row d-flex flex-row align-items-center justify-content-evenly position-relative z-2 div-info">
					<div class="col-4">
						<div class="card bg-transparent border-0 text-base mx-auto card-info-sistem">
							<div class="icon d-flex flex-column justify-content-center">
								<img src="<?= base_url('assets/img/coffee-beans.png') ?>" alt="biji kopi" id="iconKopi" class="mx-auto cd-img position-relative position-relative" width="150">
								<img src="<?= base_url('assets/img/shadow-1.svg') ?>" id="sdwKopi" alt="bayangan" class="bayangan mx-auto" width="100px">
							</div>
							<div class="card-body" id="cdPenyakit">
								<p class="card-text">Terdapat <?= $penyakit->num_rows(); ?> penyakit yang diteliti pada penelitiian ini. Anda dapat melihat daftar penyakitnya di bagian Penyakit.</p>
								<a href="#page4" id="linkPenyakit" class="text-base">Lihat selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card bg-transparent border-0 text-base mx-auto card-info-sistem">
							<div class="icon d-flex flex-column justify-content-center">
								<img src="<?= base_url('assets/img/virus.png') ?>" alt="virus" id="iconVirus" class="mx-auto cd-img position-relative" width="150">
								<img src="<?= base_url('assets/img/shadow-1.svg') ?>" alt="bayangan" id="sdwVirus" class="bayangan mx-auto" width="100px">
							</div>
							<div class="card-body" id="cdGejala">
								<p class="card-text">Pada sisitem ini terdapat <?= $gejala->num_rows(); ?> gejala yang menjadi faktor acuan untuk mendiagnosa sebuah penyakit.</p>
								<a href="#page4" id="linkGejala" class="text-base">Lihat selengkapnya</a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="card bg-transparent border-0 text-base mx-auto card-info-sistem">
							<div class="icon d-flex flex-column justify-content-center">
								<img src="<?= base_url('assets/img/brainstorming.png') ?>" alt="brainstorming" id="iconBrainstorm" class="mx-auto cd-img position-relative" width="150">
								<img src="<?= base_url('assets/img/shadow-1.svg') ?>" alt="bayangan" id="sdwBrainstorm" class="bayangan mx-auto" width="100px">
							</div>
							<div class="card-body" id="cdMetode">
								<p class="card-text">Metode yang digunakan pada penelitan ini ada 1 yaitu metode Backward Chaining.</p>
								<a href="#page4" id="linkMetode" class="text-base">Lihat selengkapnya</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="position-relative w-100 bg-tp z-1">
				<div class="bg-white w-100 backdrop"></div>
			</div>
		</section>
		<section id="page3" class="pt-5 pb-5">
			<div class="container">
				<div class="row">
					<div class="col-lg">
						<h2 class="text-uppercase text-base text-center">diagnosa</h2>
					</div>
				</div>
				<div class="row pt-5">
					<div id="stageDiagnosis" class="carousel slide" data-bs-interval="false">
						<form id="myForm1" action="<?= base_url('welcome/diagnosis') ?>" method="post">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="card border-0 card-diagnosis">
									<div class="card-body pt-5 pb-5">
										<div class="row justify-content-around">
											<label for="penyakit" class="col-sm-2 col-form-label">Piilih Penyakit</label>
											<div class="col-sm-7">
												<select class="form-select" name="kd_penyakit" id="selectPenyakit">
													<option value="" selected>Pilih penyakit</option>
													<?php foreach($penyakit->result_array() as $pn): ?>
														<option value="<?= $pn['kd_penyakit']; ?>"><?= $pn['nama']; ?></option>
													<?php endforeach; ?>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<p class="text-base" id="text-gejala">Gejala yang dialami:</p>
								<ul class="list-group border-0 bg-transparent" id="listGejala">

								</ul>
								<input type="submit" class="btn btn-primer mt-3" value="Simpan">
							</div>
						</div>
						</form>
					</div>
				</div>
				<div class="row pt-2 justify-content-end row-button-next-prev align-items-end">
					<div class="col-1 d-flex justify-content-end">
						<button id="btnNextPrev" class="btn btn-primer" type="button" data-bs-target="#stageDiagnosis" data-bs-slide="next" disabled>  
							Next
						</button>
					</div>
					<!-- <div class="col-1 d-flex justify-content-end">
						<button id="btnPrev" class="btn btn-primer" type="button" data-bs-target="#stageDiagnosis" data-bs-slide="prev" hidden>  
							Prev
						</button>
					</div>
					<div class="col-1 d-flex justify-content-end">
						<button id="btnNext" class="btn btn-primer" type="button" data-bs-target="#stageDiagnosis" data-bs-slide="next" disabled>
							Next
						</button>
					</div> -->
				</div>
			</div>
		</section>
		<section id="page4">
			<div class="bg-page4 position-relative z-0 d-flex align-items-center">
				<div class="container">
					<div class="row align-items-center justify-content-center text-center">
						<div class="col-8">
							<h1 class="text-light fw-bold position-relative z-1">Informasi yang perlu kamu ketahui tentang sistem ini</h1>
						</div>
					</div>
				</div>
			</div>
			<div class="content-page4 container bg-white">
				<div class="row justify-content-center">
					<div class="col-4">
						<!-- Tabs -->
						<ul class="nav justify-content-around" id="infoTab" role="tablist">
							<li class="nav-item">	
								<button type="button" class="nav-link badge-pill active" id="tabPenyakit" data-bs-toggle="tab" data-bs-target="#penyakit" role="tab" aria-controls="penyakit" aria-selected="true">Penyakit</button>
							</li>
							<li class="nav-item">
								<button type="button" class="nav-link badge-pill" id="tabGejala" data-bs-toggle="tab" data-bs-target="#gejala" role="tab" aria-controls="gejala" aria-selected="false">Gejala</button>
							</li>
							<li class="nav-item">
								<button type="button" class="nav-link badge-pill" id="tabMetode" data-bs-toggle="tab" data-bs-target="#metode" role="tab" aria-controls="metode" aria-selected="false">Metode</button>
							</li>
						</ul>
					</div>
				</div>
				<hr>
				<!-- Tab Panes -->
				<div class="tab-content">
					<div class="tab-pane fade show active" id="penyakit" role="tabpanel" aria-labelledby="tab-penyakit">
						<div class="row justify-content-evenly">
							<?php $no = 1; ?>
							<?php foreach($penyakit->result_array() as $p): ?>
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch"><?= $no++; ?></span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title"><?= $p['nama']; ?></h5>
									<p class="card-text"><?= $p['ket']; ?></p>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="tab-pane fade" id="gejala" role="tabpanel" aria-labelledby="tab-gejala">
						<div class="row">
							<div class="col">
								<ol class="list-group <?= ($gejala->num_rows() > 0) ? 'list-group-numbered' : ''?>">
									<?php if($gejala->num_rows() > 0): ?>
										<?php foreach($gejala->result_array() as $g): ?>
											<li class="list-group-item"><?='Apakah '. $g['nama'].'?'; ?></li>
										<?php endforeach; ?>
										<?php else: ?>
											<li class="list-group-item">Data belum dimasukan</li>
									<?php endif; ?>
								</ol>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="metode" role="tabpanel" aria-labelledby="tab-metode">
						<div class="row pt-5">
							<h5 class="text-base text-center">Terdapat 1 metode perhitungan yang digunakan pada sistem ini, yaitu <i>Backward Chaining.</i></h5>
						</div>
						<div class="row pt-5 justify-content-evenly">
							<div class="col-5">
								<div class="card card-metode">
									<div class="card-body text-base">
										<h5 class="card-title text-center">
											Backward Chaining
										</h5>
										<p class="text-justify">
											Backward Chaining adalah pendekatan yang dimotori tujuan (goal driven) yaitu pelacakan yang dimulai dari tujuan, selanjutnya dicari aturan yang memiliki tujuan tersebut untuk kesimpulannya. Selanjutnya proses pelacakan menggunakan premis untuk aturan tersebut sebagai tujuan baru dan mencari aturan lain dengan tujuan baru sebagai kesimpulannya (Dahria, 2012).
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	  </main>
	  <footer>
		  <div class="container">
			  <div class="row pt-5">
				  <div class="col-3">
					 <img src="<?= base_url('assets/img/logo fill - white.svg') ?>" alt="logo" height="80" class="d-inline-block" style="fill: #fffff;">
				  </div>
			  </div>
			  <div class="row">
				  <div class="col-4">
					  <p class="text-light">&copy; 2022 ES Kopi | Sistem Pakar Tanaman Kopi</p>
				  </div>
			  </div>
		  </div>
	  </footer>
  	<!-- Javascript -->
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- popper js -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<!-- bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<!-- my js -->
	<script src="<?= base_url('assets/js/myScript.js') ?>"></script>
	<!-- sweetalert js -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
</body>
</html>
