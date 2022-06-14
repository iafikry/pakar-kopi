<!DOCTYPE html>
<html lang="en"><head>
	<title></title>
	<style>
		.container{
			padding: 2rem;
		}
		h2{
			text-align: center;
		}
		hr{
			color: #dee2e6;
			background-color: #dee2e6;
		}
		table{
			border-collapse: collapse;
			width: 100%;
			text-indent: initial;
			border: 1px solid #dee2e6;
		}
		th, td{
			padding-left: 1rem;
			padding-right: 1rem;
			padding-top: 0.3rem;
			padding-bottom: 0.3rem;
			text-align: left;
		}
		tr:nth-child(odd){
			background-color: #dee2e6;
		}
		.kdPenyakit{
			width: 25%;
		}
	</style>
</head><body>
	<div class="container">
		<h2>Hasil Diagnosa</h2>
		<hr>
		<p>Gejala yang dipilih:</p>
		<ol>
			<?php foreach($gejala as $g): ?>
				<li><?= $g['nama'] ?></li>
			<?php endforeach; ?>
		<!-- </ol> -->
		<center>
			<table style="margin-top: 2rem;">
				<tbody>
					<tr>
						<td class="kdPenyakit">Kode Penyakit</td>
						<td class="namaPenyakit">Nama Penyakit</td>
					</tr>
					<tr>
						<td class="kdPenyakit border-1"><?= $penyakit['kd_penyakit']; ?></td>
						<td class="namaPenyakit border-1"><?= $penyakit['nama']; ?></td>
					</tr>
					<?php if($nilai == 100): ?>
						<tr>
							<td colspan="2">Keterangan</td>
						</tr>
						<tr>
							<td colspan="2" class="border-1"><?= $penyakit['ket']; ?></td>
						</tr>
						<tr>
							<td colspan="2">Solusi</td>
						</tr>
						<tr>
							<td colspan="2" class="border-1"><?= $penyakit['solusi']; ?></td>
						</tr>
					<?php else: ?>
						<tr>
							<td>Kesimpulan</td>
						</tr>
						<tr>
							<td class="border-1">Gejala yang dipilih tidak sesuai dengan <?= $penyakit['nama']; ?></td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
		</center>
	</div>
</body></html>
