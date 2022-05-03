<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- CSS mandiri -->
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
	<!-- bootstrap icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<title>Dashboard</title>
</head>
<body>
	<!-- <header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse me-auto" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Dropdown link</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header> -->

	<div class="row">
		<div class="col-3 position-relative">
			<aside class="position-fixed sidebar border-end d-flex flex-column">
				<div class="w-100 bg-white">
					<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none py-1 px-3 border-bottom">
						<img src="<?= base_url('assets/img/logo fill-blue.svg') ?>" alt="logo" height="80">
					</a>
				</div>
				<ul class="nav nav-pills flex-column mb-auto p-3">
					<li class="nav-item">
						<a class="nav-link active link-dark" aria-current="page" href="#">
						<i class="bi bi-house-fill"></i>
						Dashboard
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-dark" href="#">					
						<i class="bi bi-shield-check"></i>
						Gejala
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-dark" href="#">
						<i class="bi bi-heart-pulse"></i>
						Penyakit
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-dark" href="#">
						<i class="bi bi-sliders"></i>
						Aturan
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link link-dark" href="#">
						<i class="bi bi-person"></i>
						Pengguna
						</a>
					</li>
				</ul>
				<hr>
				<div class="dropdown p-3">
					<a href="#" class="d-flex align-items-center text-base text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
						<img src="<?= base_url('assets/img/profile.png') ?>" alt="" width="32" height="32" class="rounded-circle me-2" />
						<strong>mdo</strong>
					</a>
					<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
						<li><a class="dropdown-item" href="#">Profile</a></li>
						<li><a class="dropdown-item" href="#">Sign out</a></li>
					</ul>
				</div>
			</aside>
		</div>
		<div class="col-9">
			<main class="bg-light">
				<div class="bg-white w-100 position-relative z-0">
					<div class="row container p-3">
						<div class="col-4">
							<h2 class="text-base">Dashboard</h2>
						</div>
					</div>
				</div>
				<section class="content position-relative z-1">
					<div class="row">
						<div class="col-12 col-md-12">
							<div class="card w-100 bg-white">
								<div class="card-body">
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit magni odit sapiente cupiditate explicabo est recusandae alias sunt? Fugit molestias dignissimos numquam explicabo qui odio fuga quis. Incidunt, possimus.</p>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>
 	<!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/myScript.js') ?>"></script>
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
