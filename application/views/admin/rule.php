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
					<a href="<?= base_url('admin/tambahAturan') ?>" class="btn align-content-center btn-primer" title="Tambah aturan" data-bs-toggle="tooltip" data-bs-placement="top">Tambah aturan</a>
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
										<?php //foreach(): ?>
										<?php //endforeach; ?>
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

