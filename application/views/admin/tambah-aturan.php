
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Aturan</li>
							<li class="breadcrumb-item text-muted">Tambah data aturan</li>
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
									<div class="col-md-12 form-floating">
										<select name="penyakit" id="penyakit" class="form-select <?= (form_error('penyakit')) ? 'is-invalid' : '' ?>" aria-label="penyakit">
											<option class="pilihan" value="" selected>Pilih penyakit</option>
											<?php foreach($penyakit->result_array() as $p): ?>
												<option class="pilihan" value="<?= $p['kd_penyakit']; ?>" <?= set_select('penyakit', $p['kd_penyakit']) ?>><?= $p['nama']; ?></option>
											<?php endforeach; ?>
										</select>
										<label for="labelpenyakit">Jenis penyakit</label>
										<?= form_error('penyakit', '<div class="invalid-feedback">','</div>') ?>
									</div>
								</div>
								<div class="row g-2 p-3">
									<div class="col-md-12">
										<?php if($gejala->num_rows() > 0): ?>
											<p class="text-base">Gejala yang dialami:</p>
											<ul class="list-group">
												<?php $no = 0; ?>
												<?php foreach($gejala->result_array() as $g): ?>
													<li class="list-group-item">
														<input class="form-check-input me-1" name="<?= 'gejala'. $no++; ?>" type="checkbox" value="<?= $g['kd_gejala']; ?>">
														<?= 'Apakah '. $g['nama'] . '?'; ?>
													</li>
												<?php endforeach; ?>
											</ul>
										<?php else: ?>
											<p class="text-base text-center">Penyakit/Gejala belum dimasukan.</p>
										<?php endif; ?>
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

