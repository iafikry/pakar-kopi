
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Gejala</li>
							<li class="breadcrumb-item text-muted">Tambah data gejala</li>
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
									<div class="col-md-2 form-floating">
										<input type="text" class="form-control <?= (form_error('kd_gejala')) ? 'is-invalid' : '' ?>" id="kd_gejala" placeholder="Kode gejala" name="kd_gejala" value="<?= $kodeGejala ?>" readonly>
										<label class="text-muted" for="floatingInputValue">Kode gejala</label>
										<?= form_error('kd_gejala','<div class="invalid-feedback">','</div>') ?>
									</div>
									<div class="col-md-8 form-floating">
										<input type="text" class="form-control <?= (form_error('nama')) ? 'is-invalid' : '' ?>" id="nama" placeholder="Nama gejala" name="nama" value="<?= set_value('nama') ?>">
										<label class="text-muted" for="floatingInputNamaGejala">Nama gejala</label>
										<?= form_error('nama','<div class="invalid-feedback">','</div>') ?>
									</div>
									<div class="col-md-2 form-floating">
										<select name="bobot" id="bobot" class="form-select <?= (form_error('bobot')) ? 'is-invalid' : '' ?>" aria-label="Bobot gejala">
											<option class="pilihan" value="" selected>Pilih bobot</option>
											<option class="pilihan" value="1" <?= set_select('bobot', '1') ?>>1</option>
											<option class="pilihan" value="2" <?= set_select('bobot', '2') ?>>2</option>
											<option class="pilihan" value="3" <?= set_select('bobot', '3') ?>>3</option>
											<option class="pilihan" value="4" <?= set_select('bobot', '4') ?>>4</option>
											<option class="pilihan" value="5" <?= set_select('bobot', '5') ?>>5</option>
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

