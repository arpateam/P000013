<?php

	if($_GET['module']=='kegiatan') { 
		include("kegiatan.php");
	}elseif($_GET['module']=='read-kegiatan') { 
		include("read.php");
	}else{
		echo "<script>window.location = '404';</script>";
	}

?>