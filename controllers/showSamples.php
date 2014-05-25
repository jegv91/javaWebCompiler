<?php
	require_once ('../models/Sample.php');
	/*Obtener todos los ejemplos y mandarlos a la vista*/
	$ejemplos = array();
	$ejemplos = Sample::get_examples(); 
	//print_r($ejemplos);
	//die();
	
	include_once("../views/showSamples.php");
?>