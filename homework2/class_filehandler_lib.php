<?php
/*
 *PHP Library used for the handling of files
 *Will log every action taken
 *Created by Alex Figueroa
*/

class FileHandler{
  
  protected $fileName;
  protected $directoryName;
  protected $fullFileLocation;

  /*Creates a directory and log file of the users choosing*/
  function __construct($log, $directory, $file){

    if(!($this->directory_found($log."/".$directory))){
      $this->create_directory($directory);
    }
    
    $this->fileName = $file;
    $this->directoryName = $log."/".$directory;
    $this->fullFileLocation = $log."/".$directory."/".$file;    
 
  } 
 


 
  /*Opens the file created by the constructor and logs action with date and time*/
  function add_to_log($message){
    
    $timeStamp = date("m/d/y  H:i:s", time());
    $file = fopen($this->fullFileLocation ,"a+");
    fwrite($file, $timeStamp." ".$message."\n");
    fclose($file); 

  }





  /*Checks to see if the desired file can be found*/
  function file_found($file){
    
    if(!file_exists($file)){
      $message = "Error: File (".$file.") not found";
      $this->add_to_log($message);
      return false;
    }
    
    else{
      $message = "Success: File (".$file.") found";
      $this->add_to_log($message);
      return true;
    }
    
  }



  
  /*Checks to see if a desired directory can be found*/
  function directory_found($directory){
    
    /*First checks to see if the location is in fact a directory then makes sure it exists*/
    if(is_dir($directory)){ 
     
      if(!file_exists($directory)){
	$errorMessage = "Error: Directory (".$directory.") not found";
	return false;
      }
      
      else {
	$message = "Success: (".$directory.") has been found";
	$this->add_to_log($message);
	return true;
      }
    }
    
    else{
      $message = "Error: (".$directory.") is not a directory";
      $this->add_to_log($message);
      return false;
    }
    
  }

  
  
  
  /*Checks to see if you can write to a specified directory*/
  function directory_writable($directory){
    
    if(!is_writable($directory)){
      $message = "Error (".$directory.") is not writeable";
      $this->add_to_log($message);
      return false;
    }
    
    else{
      $message = "Success (".$directory.") is writeable";
      $this->add_to_log($message);
      return true;
    }
    
  }
  
  /*Checks to see if you can write to a specified file*/
  function file_writable($file){
    
    if(is_writable($file)){
      $message = "Success: (".$file.") is writeable";
      $this->add_to_log($message);
      return true;
    }
    
    else{
      $message = "Error: (".$file.") is not writeable";
      $this->add_to_log($message);      
      return false;
    }
    
  }
  
  /*Checks to see if a specified file can be read*/
  function file_readable($file){
    
    if(is_readable($file)){
      $message = "Success: (".$file.") is readable";
      $this->add_to_log($message);
      return true;
    }
    
    else{
      $message = "Error: (".$file.") is not readable";
      $this->add_to_log($message);      
      return false;
    }
    
  }
  
  /*Deletes a specified file*/
  function delete_file($file){
    
    /*First finds the file and then tries to delete it*/
    if($this->file_found($file)){
      unlink($file);
      
      /*Verifies that the file has been deleted by searching for it again. Uses default file found method in order to not produce an innacurate log*/ 
      if(!file_exists($file)){
	$message = "Success (".$file.") has been deleted";
	$this->add_to_log($message);
	return true;
      }
    }
    
    else {
      $message = "Error (".$file.") could not be deleted";
      $this->add_to_log($message);      
      return false;
    }
    
  }
  
  /*Creates a directory if it doesn't already exist. Uses file_exists as to not produce an inaccurate log message*/
  function create_directory($directory){
    
    /*First check to see if the directory already exists*/
    if(!file_exists($directory)){
      mkdir($directory);
      
      /*Next checks to make sure that the directory has actually been created*/
      if(file_exists($directory)){
	$message = "Success: (".$directory.") has been created";
	$this->add_to_log($message);
	return true;
      }
      
      else{
	$message = "Error: (".$directory.") could not be created";
	return false;
      }
      
      else{
	$message = "Error: Can't create (".$directory.") as it already exists";
	return false;      
      }
    }
    
  }

  /*Writes the contents of an array to a file*/
  function array_to_file($file, $content){
    
    if($this->file_found($file)){
	
	$file = fopen($file ,"a+");
	$message = "Success: Opened (".$file.")";
	$this->add_to_log($message);
	
	/*Takes each value in the array and adds it to the opened file*/
	foreach($content as $value){
	  fwrite($file, $value."\n");
	  $message = "Success: (".$value.") has been added to (".$file.")";
	  $this->add_to_log($message);    
	}
	
	fclose($file);
	$message = "Success: (".$file.") has been closed";
	return true;
    }

    else{
      return false;
    }
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


  /*End line of entire FileHandler Class*/
}

/*A class that is used specifically for error handling*/
class ErrorFileHandler extends FileHandler{

 /*Creates the directory and log file specifically for error handling*/
  function __construct($errorLog){
    
    $errorDirectory = "errors";
    $errorFileName = "errorLog.txt";
    
    
    if(!($this->directory_found($errorLog."/".$errorDirectory))){
      $this->create_directory($errorDirectory);
    }
    
    $this->fileName = $errorFileName;
    $this->directoryName = $errorDirectory;
    $this->fullFileLocation = $errorLog."/".$errorDirectory."/".$errorFileName;    
}
  
  /*End line of entire ErrorFileHandler Class*/
} 


?>
