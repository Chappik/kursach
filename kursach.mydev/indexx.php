<?php

spl_autoload_register(function ($class){
	include 'classes/' . $class . '.php';

});



$PDO = PdoConnect::getInstance();


$fName = $_POST['$Id'];





$sql = "

INSERT INTO `korz` (`name_k`, `price_k`, `img_k`) SELECT `name_t`, `price_t`, `image_t` FROM `tov` WHERE `id` = '".$fName."'

";  
 	$res = $PDO->PDO->query($sql);   







 		  

?>


