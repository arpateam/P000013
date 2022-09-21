<?php

	if($_GET['module']=='penerbitan') { 
		include("penerbitan.php");
	}elseif($_GET['module']=='read-penerbitan') { 
		include("read.php");
	}else{
		echo "<script>window.location = '404';</script>";
	}

?>