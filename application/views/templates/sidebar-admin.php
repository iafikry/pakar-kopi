<div class="col-2 position-relative z-3">
	<aside class="position-fixed sidebar border-end d-flex flex-column bg-white" >
		<div class="w-100 bg-white">
			<div class="py-1 px-3">
				<a href="<?= base_url('admin') ?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none border-bottom">
					<img src="<?= base_url('assets/img/logo fill-blue.svg') ?>" alt="logo" height="80">
				</a>
			</div> 
		</div>
		<ul class="nav nav-pills flex-column mb-auto p-3">
			<li class="nav-item">
				<a class="nav-link link-dark" id="menuDashboard" aria-current="page" href="<?= base_url('admin') ?>">
				<i class="bi bi-house-fill"></i>
				Dashboard
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link link-dark" id="menuGejala" href="<?= base_url('gejala') ?>">					
				<i class="bi bi-shield-check"></i>
				Gejala
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link link-dark" id="menuPenyakit" href="<?= base_url('penyakit') ?>">
				<i class="bi bi-heart-pulse"></i>
				Penyakit
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link link-dark" id="menuRule" href="<?= base_url('admin/rule') ?>">
				<i class="bi bi-sliders"></i>
				Aturan
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link link-dark" id="menuUser" href="<?= base_url('admin/pengguna') ?>">
				<i class="bi bi-person"></i>
				Pengguna
				</a>
			</li>
		</ul>
		<div class="dropdown p-3">
			<div class="py-1 border-top"></div>
			<a href="#" class="d-flex align-items-center text-base text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
				<img src="<?= base_url('assets/img/profile.png') ?>" alt="" width="32" height="32" class="rounded-circle me-2" />
				<strong><?= $this->session->userdata('nama'); ?></strong>
			</a>
			<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
				<li><a class="dropdown-item" href="<?= base_url('admin/ubahDataPengguna/'.$this->session->userdata('id')) ?>">Profile</a></li>
				<li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
			</ul>
		</div>
	</aside>
</div>
