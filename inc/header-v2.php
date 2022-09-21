<header class="row justify-content-start">
    <div class="col-12 col-md-10 col-lg-8 col-xl-6">
        <img src="<?= $url_images ?>/<?= $logoDesktop ?>" alt="<?= $nama_web ?>" class="img-fluid">
    </div>
</header>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-info-navbar-dark shadow-sm mt-4 p-2">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <form method="POST" action="../cari" class="d-flex d-block d-lg-none">
    	<input class="form-control me-2" type="search" placeholder="Ketikkan sesuatu ..." aria-label="Search"name="_in_query___" required>
    	<button class="btn btn-warning" name="_special_submit___" type="submit"><i class="fas fa-search"></i></button>
  	</form>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<hr class="border-warning d-block d-lg-none">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link p-2 p-lg-2 mt-2 mt-lg-0" aria-current="page" href="<?= $base_url ?>"><i class="fas fa-home"></i> Beranda</a>
            </li>
            <li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle p-2 p-lg-2 mt-2 mt-lg-0 <?php if ($_GET['module']==='opini') { echo 'active'; } ?>" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-calendar-week"></i> Opini
                    </a>
                    <ul class="dropdown-menu dropdown-menu-warning" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="../opini/pendidikan/"><i class="fas fa-graduation-cap"></i> Pendidikan</a></li>
                        <li><a class="dropdown-item" href="../opini/kesehatan/"><i class="fas fa-heartbeat"></i> Kesehatan</a></li>
                    </ul>
                </li>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2 p-lg-2 mt-2 mt-lg-0 <?php if ($_GET['module']==='kegiatan' OR $_GET['module']==='read-kegiatan') { echo 'active'; } ?>" href="../kegiatan/"><i class="fas fa-newspaper"></i> Kegiatan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link p-2 p-lg-2 mt-2 mt-lg-0 <?php if ($_GET['module']==='penerbitan' OR $_GET['module']==='read-penerbitan') { echo 'active'; } ?>" href="../penerbitan/"><i class="fas fa-upload"></i> Penerbitan</a>
            </li>
        </ul>

        <form method="POST" action="../cari" class="d-flex d-none d-lg-flex">
    		<input class="form-control me-2" type="search" placeholder="Ketikkan sesuatu ..." aria-label="Search"name="_in_query___" required>
    		<button class="btn btn-warning" name="_special_submit___" type="submit"><i class="fas fa-search"></i></button>
  		</form>
    </div>
</nav>