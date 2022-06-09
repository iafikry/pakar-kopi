
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Penyakit</li>
							<li class="breadcrumb-item text-muted">Ubah data penyakit</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row container justify-content-between">
				<div class="col-4">
					<h2 class="text-base">Ubah data</h2>
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
									<div class="col-md-2 form-floating">
										<input type="text" class="form-control <?= (form_error('kd_penyakit')) ? 'is-invalid' : '' ?>" id="kd_penyakit" placeholder="Kode penyakit" name="kd_penyakit" value="<?= $penyakit['kd_penyakit'] ?>" readonly>
										<label class="text-muted" for="floatingInputValue">Kode penyakit</label>
										<?= form_error('kd_penyakit','<div class="invalid-feedback">','</div>') ?>
									</div>
									<div class="col-md-10 form-floating">
										<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama penyakit" name="nama" value="<?= $penyakit['nama']; ?>" autocomplete="off">
										<label class="text-muted" for="floatingInputNamaPenyakit">Nama penyakit</label>
										<?= form_error('nama','<div class="invalid-feedback">','</div>') ?>
									</div>
								</div>
								<div class="row g-2 p-3">
									<div class="col-md-12 form-floating">
										<textarea class="form-control <?= (form_error('ket')) ? 'is-invalid' : '' ?>" placeholder="Keterangan" name="ket" id="ket" style="height: 100px"><?= $penyakit['ket']; ?></textarea>
										<?= form_error('ket','<div class="invalid-feedback">','</div>') ?>
										<label class="text-muted" for="floatingInputKeteranganPenyakit">Keterangan</label>
									</div>
								</div>
								<div class="row g-2 p-3">
									<div class="col-md-12 form-floating">
										<textarea class="form-control <?= (form_error('solusi')) ? 'is-invalid' : '' ?>" placeholder="Solusi" name="solusi" id="solusi" style="height: 100px"><?= $penyakit['solusi'] ?></textarea>
										<?= form_error('solusi','<div class="invalid-feedback">','</div>') ?>
										<label class="text-muted" for="floatingInputSolusiPenyakit">Solusi</label>
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

