<?php

/* Class: Program
** Author: Joel Garcia Verastica
** Date: April/2014
*/

class Program{
    private $source_code;
    private $input;
    private $result;
    private $program_name;
    private $errors;

    /*Constructor, getters and setters*/
    public function __construct($source_code, $input) {
        $this->source_code = $source_code;
        $this->input = $input;
    }

    public function get_errors(){
        return $this->errors;
    }

    public function set_source_code($source_code){
        $this->source_code = $source_code;
    }

    public function set_input_data($input){
        $this->input = $input;
    }

    public function set_result($result){
        $this->result = $result;
    }

    public function set_program_name($program_name){
        $this->program_name = $program_name;
    }

    public function get_source_code(){
        return $this->source_code;
    }

    public function get_input(){
        return $this->input;
    }

    public function get_result(){
        return $this->result;
    }

    public function get_program_name(){
        return $this->program_name;
    }


    /* Method to compile the program given by the user this class generates 
    the class used to run the program if no errors*/
    public function make_compilation(){
        $command_name = '"C:\\Program Files\\Java\\jdk1.8.0_05\\bin\\javac"';
        //$filename = '"C:\\xampp\\htdocs\\webCompiler\\controllers\\programs\\'."$this->program_name".'.java"';
        $filename = "$this->program_name".'.java"';
        $command = "$command_name $filename";

        //echo $filename;
        exec($command, $results); 
    }

    /*Method to excecute the program generated if no erros while compilation*/
    public function run_program(){
        $command_name = '"C:\\Program Files\\Java\\jdk1.8.0_05\\bin\\java"';
        $return_val = "";
        $params = "$this->input"; 
        //$filename = '"C:\\xampp\\htdocs\\webCompiler\\controllers\\programs\\'."$this->program_name".'"';
        $filename = "$this->program_name";
        $command = "$command_name $filename $params";
        //echo $command;
        //die();
        $return_val = shell_exec($command);
        //echo $filename;
        //die();
        $this->result = $return_val;
    }

    /*Get the name of the file for a java class, tell the instance 
    **its name and save a file with the source code */
    public function create_java_file(){
        $name_tmp = explode("{",trim($this->source_code));
        $final_name = explode("class", $name_tmp[0]);
        if(sizeof($final_name) > 1){
            $this->program_name = trim($final_name[1]);
            //$my_file = "programs/".$this->program_name.'.java';
            $my_file = $this->program_name.'.java';
            $handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
            $data = $this->source_code;
            fwrite($handle, $data);
        }
    }
    
}
?>