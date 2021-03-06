
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Pengguna</li>
							<li class="breadcrumb-item text-muted">Tambah data pengguna</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row container justify-content-between">
				<div class="col-4">
					<h2 class="text-base">Tambah data</h2>
				</div>
			</div>
		</div>
		<section class="content container position-relative z-1">
			<div class="row">
				<div class="col-12 col-md-12">
					<div class="card w-100 bg-white card-content shadow" style="bottom:3rem;">
						<div class="card-body">
							<form action="" method="post">
								<div class="row g-2 p-3">
									<div class="col-md-4 form-floating">
										<input type="text" class="form-control <?= (form_error('username')) ? 'is-invalid' : '' ?>" id="username" placeholder="Username" name="username" value="<?= set_value('username') ?>" autocomplete="off">
										<label class="text-muted" for="floatingInputValue">Username</label>
										<?= form_error('username','<div class="invalid-feedback">','</div>') ?>
									</div>
									<div class="col-md-8 form-floating">
										<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama" name="nama" value="<?= set_value('nama') ?>" autocomplete="off">
										<label class="text-muted" for="floatingInputNamaPenyakit">Nama</label>
										<?= form_error('nama','<div class="invalid-feedback">','</div>') ?>
									</div>
								</div>
								<div class="row g-2 p-3">
									<div class="col-md-12 form-floating">
										<input type="password" name="pass1" id="pass1" class="form-control <?= (form_error('pass1')) ? 'is-invalid' : '' ?>" placeholder="Password" autocomplete="off">
										<label class="text-muted" for="floatingInputPassword">Password</label>
										<?= form_error('pass1','<div class="invalid-feedback">','</div>') ?>
									</div>
								</div>
								<div class="row g-2 p-3">
									<div class="col-md-12 form-floating">
										<input type="password" name="pass2" id="pass2" class="form-control <?= (form_error('pass2')) ? 'is-invalid' : '' ?>" placeholder="Ketik ulang password" autocomplete="off">
										<label class="text-muted" for="floatingInputPassword">Ketik ulang password</label>
										<?= form_error('pass2','<div class="invalid-feedback">','</div>') ?>
									</div>
								</div>
								<div class="row p-3">
									<div class="col-md-2">
										<button type="submit" class="btn btn-primer">Submit</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>

