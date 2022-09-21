<?php

	if($_GET['module']=='opini-kesehatan') { 
		include("opini-kesehatan.php");
	}elseif($_GET['module']=='read-opini-kesehatan') { 
		include("read.php");
	}else{
		echo "<script>window.location = '404';</script>";
	}

?>