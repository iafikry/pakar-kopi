<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Pengguna</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row container justify-content-between">
				<div class="col-4">
					<h2 class="text-base">Pengguna</h2>
				</div>
				<div class="col-4 d-flex justify-content-end align-items-center">
					<a href="<?= base_url('admin/tambahDataPengguna') ?>" class="btn align-content-center btn-primer" title="Tambah pengguna" data-bs-toggle="tooltip" data-bs-placement="top">Tambah data</a>
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
											<th scope="col">No</th>
											<th scope="col">Nama</th>
											<th scope="col">Opsi</th>
										</tr>
									</thead>
									<tbody>
									<?php 
										$no = 1; 
										if($pengguna->num_rows() > 0):
										foreach($pengguna->result_array() as $p): ?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $p['nama']; ?></td>
											<td>
												<div class="btn-group btn-group-sm" role="group" aria-label="Option button">
													<a href="<?= base_url('admin/ubahDataPengguna/' . $p['id']) ?>"  class="btn btn-sm btn-outline-primer border-end-0" title="Ubah data" data-bs-toggle="tooltip" data-bs-placement="right"><i class="bi bi-pencil-square"></i></a>
													<a href="<?= base_url('admin/hapusDataPengguna/' . $p['id']) ?>"  class="btn btn-sm btn-outline-danger btn-hapus" title="Hapus data" data-bs-toggle="tooltip" data-bs-placement="left"><i class="bi bi-trash3"></i></a>
												</div>
											</td>
										</tr>
									<?php endforeach; 
										else:?>
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

