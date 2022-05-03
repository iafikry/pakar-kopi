<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Dashboard Template · Bootstrap v5.0</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<!-- bs icon -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="<?= base_url('assets/css/dashboard.css') ?>" rel="stylesheet">
  </head>
<body>
    
<header class="navbar navbar-dark sticky-top bg-blue-primary flex-md-nowrap p-0">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">LOGO</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Dropdown</a>
    </li>
  </ul>
</header>
  <div class="row flex-row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-house-fill"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">					
							<i class="bi bi-shield-check"></i>
              Gejala
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
							<i class="bi bi-heart-pulse"></i>
              Penyakit
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
							<i class="bi bi-sliders"></i>
              Aturan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
							<i class="bi bi-person"></i>
              Pengguna
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 col-lg-10 bg-light">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap px-md-4 pt-3 pb-2 mb-3 bg-white head-page">
        <h1 class="h2">Dashboard</h1>
        <div class="mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
        </div>
      </div>
      <div class="main-content card bg-white">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">First</th>
								<th scope="col">Last</th>
								<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td colspan="2">Larry the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<footer>
				<div class="row pt-5">
					<div class="col-3">
						<h4 class="text-uppercase text-dark fw-bold">logo</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-4">
						<p class="text-dark">&copy; 2022 ES Kopi | Sistem Pakar Tanaman Kopi</p>
					</div>
				</div>
				</footer>
    </main>
  </div>

  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/js/') ?> dashboard.js"></script>
</body>
</html>
