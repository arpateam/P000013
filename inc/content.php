<?php

	if($_GET['module']=='home') { 
		include("inc/home.php");
	}elseif($_GET['module']=='search') { 
		include("inc/search.php");
	}elseif($_GET['module']=='404') { 
		include("inc/404.php");
	}else{
		echo "<script>window.location = '404';</script>";
	}

?>