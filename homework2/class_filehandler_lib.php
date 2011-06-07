<?php
/*
 *PHP Library used for the handling of files
 *Created by Alex Figueroa
*/

class FileHandler{
  
  protected $fileName;
  protected $directoryName;
  protected $fullFileLocation;

  /*Creates the directory and log file for error handling*/
  function __construct($log){

    $directory = "log";
    $logFileName = "log.txt";

    if(!($this->directory_found($log."/".$directory))){
      $this->create_directory("log");
    }
    
    $this->fileName = $logFileName;
    $this->directoryName = $log."/".$directory;
    $this->fullFileLocation = $log."/".$directory."/".$logFileName;    
 
  } 
  

  /*Checks to see if the desired file can be found*/
  function file_found($file){
    
    if(!file_exists($file)){
      $errorMessage = "Error: File (".$file.") not found";
      return false;
    }
    
    return true;
    
  }
  
  /*Checks to see if a desired directory can be found*/
  function directory_found($directory){
    
    /*First checks to see if the location is in fact a directory then makes sure it exists*/
    if(is_dir($directory)){ 
      if(!file_exists($directory)){
	$errorMessage = "Error: Directory (".$directory.") not found";
	return false;
      }
    }
    
    else{
      $errorMessage = "Error: (".$directory.") is not a directory";
      return false;
    }
    
    return true;

  }
  
  /*Checks to see if you can write to a specified directory*/
  function directory_writable(){
    
    if(!is_writable($this->directoryName)){
      $errorMessage = "Error ".$this->directoryName." is not writeable";      
      return false;
    }
    
    else{
      return true;
    }
    
  }
  
  /*Checks to see if you can write to a specified file*/
  function file_writable(){
    
    if(is_writable($this->fullFileLocation)){
      return true;
    }
    
    else{
      return false;
    }
    
  }
  
  /*Checks to see if a specified file can be read*/
  function file_readable(){
    
    if(is_readable($this->fullFileLocation)){
      return true;
    }
    
    else{
      return false;
    }
    
  }
  
  /*Deletes a specified file*/
  function delete_file(){
    
    if($this->file_found()){
      unlink($this->fullFileLocation);
    }
    
  }
  
  /*Creates a directory if it doesn't already exist*/
  function create_directory($directoryName){
    
    if(!file_exists($directoryName)){
      mkdir($directoryName);
    }
    
  }

  /*Writes the contents of an array to a file*/
  function array_to_file($content){
    
    $file = fopen($this->fullFileLocation ,"a+");
    
    foreach($content as $value){
      fwrite($file, $value."\n");    
    }

    fclose($file);
    
  }
  
  /*A list of getter functions*/
  function get_file_name(){
    return $this->fileName;
  }
  
  function get_directory(){
    return $this->directoryName;
  }
  
  function get_full_path(){
    return $this->fullFileLocation;
  }


  /*End line of entire class*/
}

/*A class that is used specifically for error handling*/
class ErrorFileHandler extends FileHandler{

 /*Creates the directory and log file for error handling*/
  function __construct($errorLog){
    
    $errorDirectory = "errors";
    $errorFileName = "errorLog.txt";
    
    
    if(!($this->directory_found($errorLog."/".$errorDirectory))){
      $this->create_directory("errors");
    }
    
    $this->fileName = $errorFileName;
    $this->directoryName = $errorDirectory;
    $this->fullFileLocation = $errorLog."/".$errorDirectory."/".$errorFileName;    
}
  
  function add_to_error_log($errorMessage){

    $timeStamp = date("d/m/y  H:i:s", time());
    $file = fopen($this->fullFileLocation ,"a+");
    fwrite($file, $timeStamp." ".$errorMessage."\n");
    fclose($file); 

  }

} 


?>
