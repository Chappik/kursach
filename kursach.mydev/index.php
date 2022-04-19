<?php

spl_autoload_register(function ($class){
	include 'classes/' . $class . '.php';

});



$PDO = PdoConnect::getInstance();
$result = $PDO->PDO->query("
	SELECT * FROM `tov` WHERE `top_t` = 'Да'
	");

	$products = array();

	while ($productInfo = $result->fetch()){
		$products[] = $productInfo;
	}

	

$resultt = $PDO->PDO->query("
	SELECT * FROM `tov` WHERE `cat_tov` = 1
	");

	$productss = array();

	while ($productInfoo = $resultt->fetch()){
	$productss[] = $productInfoo;
	}

$resulttt = $PDO->PDO->query("
	SELECT * FROM `tov` WHERE `cat_tov` = 2
	");

	$productsss = array();

	while ($productInfooo = $resulttt->fetch()){
	$productsss[] = $productInfooo;
	}

$resultttt = $PDO->PDO->query("
	SELECT * FROM `tov` WHERE `cat_tov` = 3
	");

	$productssss = array();

	while ($productInfoooo = $resultttt->fetch()){
	$productssss[] = $productInfoooo;
	}


$resullt = $PDO->PDO->query("
	SELECT * FROM `korz` 
	");

	$productts = array();

	while ($productInffo = $resullt->fetch()){
	$productts[] = $productInffo;
	}




	



	


?>
