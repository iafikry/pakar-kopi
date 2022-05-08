
<div class="col-10">
	<main class="bg-light main-content">
		<div class="bg-white w-100 position-relative z-0 header-content">
			<div class="row container row-breadcrumb">
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-auto">
							<li class="breadcrumb-item text-muted">Home</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row container">
				<div class="col-4">
					<h2 class="text-base">Dashboard</h2>
				</div>
			</div>
		</div>
		<section class="content container position-relative z-1">
			<div class="row justify-content-evenly">
				<div class="card border-0 card-content bg-blue-2" style="width: 18rem;">
					<div class="card-header-2 position-relative z-2">
						<img src="<?= base_url('assets/img/coffee-beans.png') ?>" alt="biji kopi" width="88">
					</div>
					<div class="card-body position-relative card-body-dashboard">
						<p class="card-text">Terdapat <?= $penyakit->num_rows(); ?> penyakit yang diteliti pada penelitiian ini. Anda dapat melihat daftar penyakitnya di bagian Penyakit.</p>
					</div>
				</div>
				<div class="card border-0 card-content bg-blue-2" style="width: 18rem;">
					<div class="card-header-2 position-relative z-2">
						<img src="<?= base_url('assets/img/virus.png')  ?>" alt="biji kopi" width="88">
					</div>
					<div class="card-body position-relative card-body-dashboard">
						<h5 class="card-title">Lorem, ipsum dolor.</h5>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit magni odit sapiente cupiditates.</p>
					</div>
				</div>
				<div class="card border-0 card-content bg-blue-2" style="width: 18rem;">
					<div class="card-header-2 position-relative z-2">
						<img src="<?= base_url('assets/img/brainstorming.png') ?>" alt="biji kopi" width="88">
					</div>
					<div class="card-body position-relative card-body-dashboard">
						<h5 class="card-title">Lorem, ipsum dolor.</h5>
						<p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga suscipit magni odit sapiente cupiditates.</p>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>

