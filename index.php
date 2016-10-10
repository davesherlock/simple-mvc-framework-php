<?php


	/************************************
	* Build the page you are looking for
	*/

	include_once("classes/ProjectClass.php");
	include_once("controllers/PageController.php"); 

	$controller = new Controller();  
	$controller->invoke();


?>