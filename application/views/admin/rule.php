<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Aturan</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row container justify-content-between">
				<div class="col-4">
					<h2 class="text-base">Aturan</h2>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<?php if($penyakit->num_rows() == $cekJmlRule): ?>
						<span class="d-inline-block" title="Tidak ada penyakit yang belum mempunyai rule/aturan" data-bs-toggle="tooltip" data-bs-placement="top">
							<button type="button" class="btn align-content-center btn-primer" disabled>Tambah aturan</button>
						</span>
					<?php else: ?>
						<a href="<?= base_url('admin/tambahAturan') ?>" title="Tambah aturan" data-bs-toggle="tooltip" data-bs-placement="top">
							<button type="button" class="btn align-content-center btn-primer">Tambah aturan</button>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<section class="content container position-relative z-1">
			<div class="row">
				<div class="col-12 col-md-12">
					<div class="card w-100 bg-white card-content shadow">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped text-base">
									<thead>
										<tr>
											<th scope="col">Penyakit</th>
											<th scope="col">Gejala</th>
											<th scope="col">Opsi</th>
										</tr>
									</thead>
									<tbody>
									<?php if($rule->num_rows() > 0): ?>
										<?php foreach($penyakit->result_array() as $p): ?>
											<tr>
												<td><?= $p['nama']; ?></td>
												<ul class="list-group border-0 bg-transparent">
													<?php if($cekRule[$p['kd_penyakit']] > 0): ?>
													<td>
														<?php foreach($rule->result_array() as $r): ?> 
															<?php if($p['kd_penyakit'] == $r['kode_penyakit']):?>
															<li class="list-group-item border-0 bg-transparent">
																<?= $r['nama_gejala']; ?>
															</li>
															<?php endif; ?> 
														<?php endforeach; ?>
													</td>
													<td>
														<div class="btn-group btn-group-sm" role="group" aria-label="Option button">
															<a href="<?= base_url('admin/ubahDataRule/' . $p['kd_penyakit']) ?>"  class="btn btn-sm btn-outline-primer border-end-0" title="Ubah data" data-bs-toggle="tooltip" data-bs-placement="right"><i class="bi bi-pencil-square"></i></a>
															<a href="<?= base_url('admin/hapusDataRule/' . $p['kd_penyakit']) ?>"  class="btn btn-sm btn-outline-danger btn-hapus" title="Hapus data" data-bs-toggle="tooltip" data-bs-placement="left"><i class="bi bi-trash3"></i></a>
														</div>
													</td>
												<?php else: ?>
													<td>
														<li class="list-group-item border-0 bg-transparent">
															<i>Belum isi data rule</i>
														</li>
													</td>
												</ul>
												<td>
													<a href="<?= base_url('admin/tambahAturan/' . $p['kd_penyakit']) ?>"  class="btn btn-sm btn-outline-primer" title="Tambah data rule" data-bs-toggle="tooltip" data-bs-placement="top"><i class="bi bi-pencil-square"></i></a>
												</td>
												<?php endif; ?>
											</tr>
										<?php endforeach; ?>
									<?php else:?>
										<tr>
											<td class="text-center" colspan="3">Belum ada data yang dimasukan</td>
										</tr>
									<?php endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>

