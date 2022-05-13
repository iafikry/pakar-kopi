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
					<a href="<?= base_url('gejala/tambahAturan') ?>" class="btn align-content-center btn-primer" title="Tambah aturan" data-bs-toggle="tooltip" data-bs-placement="top">Tambah aturan</a>
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
											<th scope="col">Kode gejala</th>
											<th scope="col">Gejala</th>
											<th scope="col">Bobot</th>
											<th scope="col">Opsi</th>
										</tr>
									</thead>
									<tbody>
									<?php if($gejala->num_rows() > 0):
										foreach($gejala->result_array() as $g): ?>
										<tr>
											<td><?= $g['kd_gejala']; ?></td>
											<td><?= $g['nama']; ?></td>
											<td><?= $g['bobot']; ?></td>
											<td>
												<div class="btn-group btn-group-sm" role="group" aria-label="Option button">
													<a href="<?= base_url('gejala/ubahDataGejala/' . $g['kd_gejala']) ?>"  class="btn btn-sm btn-outline-primer border-end-0" title="Ubah data" data-bs-toggle="tooltip" data-bs-placement="right"><i class="bi bi-pencil-square"></i></a>
													<a href="<?= base_url('gejala/hapusDataGejala/' . $g['kd_gejala']) ?>"  class="btn btn-sm btn-outline-danger btn-hapus" title="Hapus data" data-bs-toggle="tooltip" data-bs-placement="left"><i class="bi bi-trash3"></i></a>
												</div>
											</td>
										</tr>
									<?php endforeach; 
										else:?>
										<tr>
											<td class="text-center" colspan="4">Belum ada data yang dimasukan</td>
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

