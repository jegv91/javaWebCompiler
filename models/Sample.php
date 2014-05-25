<?php

/* Class: Sample
** Author: Joel Garcia Verastica
** Date: April/2014
*/

class Sample{
    private $title;
    private $description;
    private $source_code;

    /*Constructor, getters and setters*/
    public function __construct($title, $description, $source_code) {
        $this->source_code = $source_code;
        $this->title = $title;
        $this->description = $description;
    }

    public function set_source_code($source_code){
        $this->source_code = $source_code;
    }

    public function set_title($title){
        $this->title = $title;
    }

    public function set_description($description){
        $this->description = $description;
    }

    public function get_source_code(){
        return $this->source_code;
    }

    public function get_title(){
        return $this->title;
    }

    public function get_description(){
        return $this->description;
    }

    /* Method to get all examples saved in the database */
    public static function get_examples(){
        /*Get the connection to the database*/
        $conexion=mysql_connect("localhost","root","");
        mysql_select_db("webCompiler", $conexion);
        /*Query to get the examples stored in the database*/
        $query = "SELECT * FROM example";
        $examples = mysql_query($query, $conexion);
        return $examples;
    }
    
    /* Method to get a example with an specific id */
    public static function get_example_data($id_example){
        /*Get the connection to the database*/
        $conexion=mysql_connect("localhost","root","");
        mysql_select_db("webCompiler", $conexion);
        /*Query to get the examples stored in the database*/
        $query = "SELECT * FROM example WHERE id_example = $id_example";
        $example = mysql_query($query, $conexion);
        return $example;
    }
}
?>