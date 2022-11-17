<?php
	require 'smarty/libs/Smarty.class.php';
	require_once("config.php");
	
	$hoy = date("Ymd");
	$ver = RandomStr(10); 
	
	$smarty = new Smarty;
	
	$smarty->assign("ver", $ver);
	
	$smarty->force_compile = true;
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->cache_lifetime = 0;
	
	
	$smarty->display('catalogo.html');
?>