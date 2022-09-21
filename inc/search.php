<?php

	if (isset($_POST['_special_submit___'])) {

?>

	<div class="row py-4 px-2 px-lg-0">
		<div class="col-12">
			<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb" class="bg-info-2 rounded">
			  	<ol class="breadcrumb p-2">
			    	<li class="breadcrumb-item"><a href="/" class="text-decoration-none"><i class="fas fa-home"></i> Beranda</a></li>
			    	<li class="breadcrumb-item active">Cari: <u><?= $_POST['_in_query___'] ?></u></li>
			  	</ol>
			</nav>

			<h3 class="text-info text-center mt-4">Cari: <u><?= $_POST['_in_query___'] ?></u></h3>
		</div>
	</div>

	<div class="card mx-2 mx-lg-0">
	  	<h5 class="card-header card-header-info text-light"><i class="fas fa-calendar-week"></i> Opini</h5>
	  	<div class="card-body">
		    <div class="row">
			  	<div class="col-md-3 my-2">
				    <div class="card h-100">
				      	<img src="<?= $url_images ?>/opini/small/aimply-because-it-is-pain-6.jpeg" class="card-img-top" alt="Aimply Because it is Pain">
				      	<div class="card-body">
				        	<h6 class="card-title text-info">Aimply Because it is Pain</h6>
				        	<span class="small text-warning"><i class="fas fa-tag"></i> Kesehatan</span>
				        	<p class="small text-warning"><i class="fas fa-calendar-alt"></i> 06 Januari 2022 11:22</p>
				        	<small>itae luctus mauris dictum quis. Cras tincidunt, erat in semper elementum, lacus purus porta eros, et imperdiet ex mauris non ...</small>
				      	</div>
	                    <a href="<?= $base_url ?>/opini/kesehatan/aimply-because-it-is-pain-6.html" role="button" class="card-footer card-footer-info text-light">
	                        <small>Selengkapnya <i class="fas fa-arrow-right fa-sm"></i></small>
	                    </a>
				    </div>
			  	</div>
			</div>
	  	</div>
	</div>

	<div class="card mx-2 mx-lg-0 mt-4">
	  	<h5 class="card-header card-header-info text-light"><i class="fas fa-newspaper"></i> Kegiatan</h5>
	  	<div class="card-body">
		    <div class="row">
			  	<div class="col-md-3 my-2">
				    <div class="card h-100">
				      	<img src="<?= $url_images ?>/kegiatan/small/fusce-auctor-ex-lobortis-libero-tempus-sed-pulvinar-enim-lacinia-72.jpeg" class="card-img-top" alt="Fusce auctor ex lobortis libero tempus, sed pulvinar enim lacinia.">
				      	<div class="card-body">
				        	<h6 class="card-title text-info">Fusce auctor ex lobortis libero tempus, sed pulvinar enim lacinia.</h6>
				        	<p class="small text-warning"><i class="fas fa-calendar-alt"></i> 06 Januari 2022 11:24</p>
				        	<small>itae luctus mauris dictum quis. Cras tincidunt, erat in semper elementum, lacus purus porta eros, et imperdiet ex mauris non ...</small>
				      	</div>
				      	<a href="<?= $base_url ?>/kegiatan/fusce-auctor-ex-lobortis-libero-tempus-sed-pulvinar-enim-lacinia-72.html" role="button" class="card-footer card-footer-info text-light">
				        	<small>Selengkapnya <i class="fas fa-arrow-right fa-sm"></i></small>
				      	</a>
				    </div>
			  	</div>
			</div>
	  	</div>
	</div>

	<div class="card mx-2 mx-lg-0 my-4">
	  	<h5 class="card-header card-header-info text-light"><i class="fas fa-upload"></i> Penerbitan</h5>
	  	<div class="card-body">
		    <div class="row">
			  	<div class="col-md-3 my-2">
				    <div class="card h-100">
				      	<img src="<?= $url_images ?>/penerbitan/harapan-selalu-datang-dari-tempat-paling-jauh-17.jpeg" class="card-img-top" alt="Harapan Selalu Datang Dari Tempat Paling Jauh">
				      	<div class="card-body">
				        	<h6 class="card-title text-info">Harapan Selalu Datang Dari Tempat Paling Jauh</h6>
				        	<p class="small text-warning"><i class="fas fa-calendar-alt"></i> 06 Januari 2022 11:40</p>
				        	<small>itae luctus mauris dictum quis. Cras tincidunt, erat in semper elementum, lacus purus porta eros, et imperdiet ex mauris non ...</small>
				      	</div>
				      	<a href="<?= $base_url ?>/penerbitan/harapan-selalu-datang-dari-tempat-paling-jauh-17.html" role="button" class="card-footer card-footer-info text-light">
				        	<small>Selengkapnya <i class="fas fa-arrow-right fa-sm"></i></small>
				      	</a>
				    </div>
			  	</div>
			</div>
	  	</div>
	</div>

<?php
	}else{
		echo "<script>window.location = '404';</script>";
	}
?>