<?php

	if($_GET['module']=='opini-pendidikan') { 
		include("opini-pendidikan.php");
	}elseif($_GET['module']=='read-opini-pendidikan') { 
		include("read.php");
	}else{
		echo "<script>window.location = '404';</script>";
	}

?>