<?php
require_once ('../models/Program.php');
require_once ('../models/Sample.php');

/*Creamos una instacia de la clase programa con todo vacio, para evitar errores en caso de null*/
$program = new Program("", "");

/*Verificar si el usuario nos manod los datos o va a compilar un programa*/
if(isset($_POST["source_code"])){
	/*Leer los datos y asignarlos a la clase programa*/
	$source_code = $_POST["source_code"];
	(!empty($_POST["input_data"]))? $input = $_POST["input_data"] : $input = " ";
	$program->set_source_code($source_code);
	$program->set_input_data($input); 
	$program->create_java_file();
	$program->make_compilation();
	$program->run_program();
	
} else if(isset($_GET["id"])){
	$id = $_GET["id"];
	/*El programa recibe un get para solicitar un ejemplo a la base de datos*/
	$result = Sample::get_example_data($id);
	$result = mysql_fetch_array($result);
	$program->set_source_code($result["source_code"]);
}

include_once("../views/makeCompilation.php");

?>