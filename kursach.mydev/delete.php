<?php

spl_autoload_register(function ($class){
	include 'classes/' . $class . '.php';

});



$PDO = PdoConnect::getInstance();


$fName = $_POST['$Id'];





$sql = "

DELETE FROM `korz` WHERE `id` =  '".$fName."'



"

;  
 	$res = $PDO->PDO->query($sql);   

	





 		  

?>