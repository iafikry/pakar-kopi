
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Gejala</li>
							<li class="breadcrumb-item text-muted">Ubah data gejala</li>
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
										<input type="text" class="form-control <?= (form_error('kd_gejala')) ? 'is-invalid' : '' ?>" id="kd_gejala" placeholder="Kode penyakit" name="kd_gejala" value="<?= $gejala['kd_gejala'] ?>" readonly>
										<label class="text-muted" for="floatingInputValue">Kode Gejala</label>
										<?= form_error('kd_gejala','<div class="invalid-feedback">','</div>') ?>
									</div>
									<div class="col-md-8 form-floating">
										<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama Gejala" name="nama" value="<?= $gejala['nama']; ?>">
										<label class="text-muted" for="floatingInputNamaGejala">Nama Gejala</label>
										<?= form_error('nama','<div class="invalid-feedback">','</div>') ?>
									</div>
									<div class="col-md-2 form-floating">
										<select name="bobot" id="bobot" class="form-select <?= (form_error('bobot')) ? 'is-invalid' : '' ?>" aria-label="Bobot gejala">
											<option class="pilihan" value="" selected>Pilih bobot</option>
											<option class="pilihan" value="1" <?= ($gejala['bobot'] == '1') ? 'selected' : '' ?>>1</option>
											<option class="pilihan" value="2" <?= ($gejala['bobot'] == '2') ? 'selected' : '' ?>>2</option>
											<option class="pilihan" value="3" <?= ($gejala['bobot'] == '3') ? 'selected' : '' ?>>3</option>
											<option class="pilihan" value="4" <?= ($gejala['bobot'] == '4') ? 'selected' : '' ?>>4</option>
											<option class="pilihan" value="5" <?= ($gejala['bobot'] == '5') ? 'selected' : '' ?>>5</option>
										</select>
										<label for="labelBobot">Bobot gejala</label>
										<?= form_error('bobot', '<div class="invalid-feedback">','</div>') ?>
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

