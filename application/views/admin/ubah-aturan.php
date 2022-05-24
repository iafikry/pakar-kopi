
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Aturan</li>
							<li class="breadcrumb-item text-muted">Ubah data aturan</li>
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
								<?php //var_dump($rule); die; ?>
								<div class="row g-2 p-3">
									<div class="col-md-12 form-floating">
										<input type="text" class="form-control" name="nama" value="<?= $rule[0]['nama_penyakit']; ?>" readonly>
										<label for="labelpenyakit">Jenis penyakit</label>
									</div>
									<input type="hidden" name="kd_penyakit" value="<?= $rule[0]['kode_penyakit']; ?>">
								</div>
								<div class="row g-2 p-3">
									<div class="col-md-12">
										<p class="text-base">Gejala yang dialami:</p>
										<ul class="list-group">
											<?php $g = $gejala->result_array(); ?>
											<?php for($i = 0; $i < $gejala->num_rows(); $i++): ?>
												<?php foreach($rule as $r): ?>
													<?php if($g[$i]['kd_gejala'] === $r['kode_gejala']): ?>
														<li class="list-group-item">
															<input type="checkbox" name="<?= 'gejala' . $i; ?>" class="form-check-input me-1" value="<?= $g[$i]['kd_gejala']; ?>" checked><?= 'Apakah '. $g[$i]['nama'] .'?' ?>
														</li>
														<?php $i++; endif; ?>
													<?php endforeach; ?>
													<li class="list-group-item">
														<input type="checkbox" name="<?= 'gejala' . $i; ?>" class="form-check-input me-1" value="<?= $g[$i]['kd_gejala']; ?>"><?= 'Apakah '. $g[$i]['nama'] .'?' ?>
													</li>
											<?php endfor;  ?>
										</ul>
									</div>
								</div>
								<div class="row p-3">
									<div class="col-md-2">
										<button type="submit" class="btn btn-primer">Simpan</button>
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

