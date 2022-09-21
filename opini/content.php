<?php

	if($_GET['module']=='opini') { 
		include("opini.php");
	}else{
		echo "<script>window.location = '404';</script>";
	}

?>