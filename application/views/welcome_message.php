<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CSS mandiri -->
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <title>SI PAK TOPIK</title>
  </head>
  <body>
	  <header id="header">
		<nav class="navbar navbar-expand-lg navbar-light" id="nav-menu">
			<div class="container">
				<a class="nav-txt-link" href="#">LOGO</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav mx-auto text-base">
						<a class="nav-txt-link" aria-current="page" href="#">Diagnosis</a>
						<a class="nav-txt-link" href="#">Informasi
						</a>
						<a class="nav-txt-link" href="#">Tentang</a>
					</div>
				</div>
			</div>
		</nav>
	  </header>
	  <main>
		<section id="page1" class="d-flex flex-row align-items-center">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-6">
						<div class="card border-0">
							<div class="card-body">
								<h1 class="text-title">cari tahu penyakit apa yang sedang dialami  oleh tanaman kopimu</h1>
								<p>SI PAK TOPIK merupakan sistem pakar untuk mendiagnosis penyakit pada tanaman kopi robusta dan liberika</p>
								<a href="#page3" class="btn btn-primer">Mulai</a>
							</div>
						</div>
					</div>
					<div class="col-6">
						<img src="<?= base_url('assets/img/unidraw-quiz.svg') ?>" alt="quiz" class="img-page1">
					</div>
				</div>
			</div>
		</section>
		<section id="page2" class="d-flex align-items-center">
			<div class="about pt-5">
				<div class="container">
					<div class="row">
						<div class="col-lg">
							<h2 class="text-uppercase text-light text-center">si pak topik</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg">
							<h3 class="text-light text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia itaque vitae veritatis aut vel sapiente, tenetur dolores aliquam! Nihil, nemo adipisci! Explicabo totam aut ex!</h3>
						</div>
					</div>
					<div class="row d-flex flex-row align-items-center justify-content-evenly pt-5">
						<div class="col-4">
							<div class="card bg-transparent border-light text-light mx-auto card-info-sistem">
								<img src="<?= base_url('assets/img/leaf.svg') ?>" alt="daun" class="pt-3" height="100">
								<div class="card-body">
									<h5 class="card-title">Lorem, ipsum dolor.</h5>
									<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, nam.</p>
									<a href="#" class="text-blue-primer">Lihat selengkapnya</a>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card bg-transparent border-light text-light mx-auto card-info-sistem">
								<img src="<?= base_url('assets/img/virus.svg') ?>" alt="virus" class="pt-3" height="100">
								<div class="card-body">
									<h5 class="card-title">Lorem, ipsum dolor.</h5>
									<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, nam.</p>
									<a href="#page4" id="linkGejala" class="text-blue-primer">Lihat selengkapnya</a>
								</div>
							</div>
						</div>
						<div class="col-4">
							<div class="card bg-transparent border-light text-light mx-auto card-info-sistem">
								<img src="<?= base_url('assets/img/brainstorm.svg') ?>" alt="brainstorm" class="pt-3" height="100">
								<div class="card-body">
									<h5 class="card-title">Lorem, ipsum dolor.</h5>
									<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro, nam.</p>
									<a href="#" class="text-blue-primer">Lihat selengkapnya</a>
								</div>
							</div>
						</div>
					</div>
				</div>
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
						<div class="carousel-inner">
							<div class="carousel-item active">
								<div class="card bg-base-color border-0 card-diagnosis">
									<div class="card-body pt-5 pb-5">
										<form action="#" method="post">
											<div class="row justify-content-around">
												<label for="penyakit" class="col-sm-2 col-form-label">Piilih Penyakit</label>
												<div class="col-sm-7">
													<select class="form-select" id="selectPenyakit">
														<option value="0" selected>Open this select menu</option>
														<option value="1">One</option>
														<option value="2">Two</option>
														<option value="3">Three</option>
													</select>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="carousel-item">
								<p>oke bisa</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row pt-2 justify-content-end">
					<div class="col-1 d-flex justify-content-end">
						<button id="btnPrev" class="btn btn-primer" type="button" data-bs-target="#stageDiagnosis" data-bs-slide="prev" hidden>  
							Prev
						</button>
					</div>
					<div class="col-1 d-flex justify-content-end">
						<button id="btnNext" class="btn btn-primer" type="button" data-bs-target="#stageDiagnosis" data-bs-slide="next" disabled>
							Next
						</button>
					</div>
				</div>
			</div>
		</section>
		<section id="page4">
			<div class="container">
				<h4 class="text-uppercase">informasi</h4>
				<hr>
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
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch">1</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title">Lorem, ipsum dolor sit amet.</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident non illum nesciunt vero consequatur optio perspiciatis repellendus voluptas doloribus distinctio! Blanditiis ea enim at distinctio!</p>
								</div>
							</div>
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch">2</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title">Lorem, ipsum dolor sit amet.</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident non illum nesciunt vero consequatur optio perspiciatis repellendus voluptas doloribus distinctio! Blanditiis ea enim at distinctio!</p>
								</div>
							</div>
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch">3</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title">Lorem, ipsum dolor sit amet.</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident non illum nesciunt vero consequatur optio perspiciatis repellendus voluptas doloribus distinctio! Blanditiis ea enim at distinctio!</p>
								</div>
							</div>
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch">4</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title">Lorem, ipsum dolor sit amet.</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident non illum nesciunt vero consequatur optio perspiciatis repellendus voluptas doloribus distinctio! Blanditiis ea enim at distinctio!</p>
								</div>
							</div>
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch">5</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title">Lorem, ipsum dolor sit amet.</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident non illum nesciunt vero consequatur optio perspiciatis repellendus voluptas doloribus distinctio! Blanditiis ea enim at distinctio!</p>
								</div>
							</div>
							<div class="card border-0 bg-transparent card-penyakit">
								<div class="row justify-content-end">
									<div class="col-sm-4">
										<span class="number-penyakit d-flex align-self-stretch">6</span>
									</div>
								</div>
								<div class="card-body pt-5">
									<h5 class="card-title">Lorem, ipsum dolor sit amet.</h5>
									<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident non illum nesciunt vero consequatur optio perspiciatis repellendus voluptas doloribus distinctio! Blanditiis ea enim at distinctio!</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="gejala" role="tabpanel" aria-labelledby="tab-gejala">
						<div class="row">
							<div class="col-7">
								<div class="row">
									<div class="col">
										<ol class="list-group list-group-numbered border-0">
											<li class="list-group-item border-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos?</li>
											<li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore.</li>
											<li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
										</ol>		
									</div>
									<div class="col">
										<ol class="list-group list-group-numbered" start="8">
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos?</li>
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore.</li>
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
											<li class="list-group-item border-0 list-continuing">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis.</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-5 d-flex align-items-center">
								<img src="<?= base_url('assets/img/clint-mckoy-unsplash.jpg') ?>" alt="tanaman-kopi" class="img-gejala">
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="metode" role="tabpanel" aria-labelledby="tab-metode">
						<div class="row pt-5">
							<h5 class="text-base text-center">Terdapat 2 metode perhitungan yang digunakan pada sistem ini, yaitu <i>Backward Chaining</i> dan <i>Technique For Order Preference By Similarity To Ideal Solution</i> (TOPSIS)</h5>
						</div>
						<div class="row pt-5 justify-content-evenly">
							<div class="col-5">
								<div class="card card-metode">
									<div class="card-body text-base">
										<h5 class="card-title">
											Backward Chaining
										</h5>
										<p>
											Backward Chaining adalah pendekatan yang dimotori tujuan (goal driven) yaitu pelacakan yang dimulai dari tujuan, selanjutnya dicari aturan yang memiliki tujuan tersebut untuk kesimpulannya. Selanjutnya proses pelacakan menggunakan premis untuk aturan tersebut sebagai tujuan baru dan mencari aturan lain dengan tujuan baru sebagai kesimpulannya (Dahria, 2012).
										</p>
									</div>
								</div>
							</div>
							<div class="col-5">
								<div class="card card-metode">
									<div class="card-body text-base">
										<h5 class="card-title">
											Technique For Order Preference By Similarity To Ideal  Solution (TOPSIS)
										</h5>
										<p>
											Metode TOPSIS adalah salah satu metode pengambilan keputusan multikriteria yang pertama kali diperkenalkan oleh Yoon dan Hwang pada tahun 1981. Metode ini merupakan salah satu metode yang banyak digunakan untuk menyelesaikan pengambilan keputusan secara praktis.
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
					  <h4 class="text-uppercase text-light fw-bold">logo</h4>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/myScript.js') ?>"></script>
</body>
</html>
