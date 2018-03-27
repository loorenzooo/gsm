<?php
	//recupération de la langue

	if(isset($_GET['langue'])) $_SESSION['langue']=$_GET['langue'];
	if(isset($_POST['langue'])) $_SESSION['langue']=$_POST['langue'];
	if (!isset($_SESSION['langue'])) $_SESSION['langue']='';
	require "dic_".$_SESSION['langue'].".php";
	$img_prefix = '';
	$langue = '';
	if($_SESSION['langue']!="") {
		$img_prefix = $_SESSION['langue']."_";
		$langue = $_SESSION['langue'];
	}
?>