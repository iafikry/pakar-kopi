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
    <title><?= $judul; ?></title>
  </head>
  <body style="background-color: #F5F6FA;">
	<section class="login-content d-flex flex-column justify-content-center">
		<!-- alert flashdata -->
		  <?php if($this->session->flashdata('message')): ?>
			   <div class="flash-data" data-flash="<?= $this->session->flashdata('message');?>"></div>
		  <?php unset($_SESSION['message']); endif; ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="login-group d-flex align-items-stretch">
					<div class="col-6">
						<div class="card card-login border-0">
							<img src="<?= base_url('assets/img/logo fill-blue.svg') ?>" alt="logo" height="150px">
							<div class="card-body">
								<div class="ms-3 me-3 border-top">
									<form action="" method="POST" class="mt-3">
										<div class="mb-3">
											<label for="inputUsername" class="form-label">Username</label>
											<input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" id="username" name="username" value="<?= set_value('username') ?>" autocomplete="off">
											<?= form_error('username', '<div class="invalid-feedback">', '</div>') ?>
										</div>
										<div class="mb-3">
											<label for="inputPassword" class="form-label">Password</label>
											<input type="password" class="form-control <?= (form_error('pass')) ? 'is-invalid' : '' ?>" id="pass" name="pass" autocomplete="off">
											<?= form_error('pass', '<div class="invalid-feedback">', '</div>') ?>
										</div>
										<button type="submit" class="btn btn-primer">Login</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6 foto-login"></div>
				</div>
			</div>
		</div>
	</section>
  	<!-- Javascript -->
	<!-- jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<!-- popper js -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<!-- bootstrap js -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<!-- my js -->
	<script src="<?= base_url('assets/js/myScript.js') ?>"></script>
	<!-- sweetalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
	<!-- alert -->
	<script src="<?= base_url('assets/js/alert.js') ?>"></script>
  </body>
</html>
