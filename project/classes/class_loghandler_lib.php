<?php
/*
 *PHP Library used for the handling of files
 *Will log every action taken
 *Created by Alex Figueroa
*/

function __autoload($class_name) {
    include $class_name . '.php';
}

$class  = new class_filehandler_lib();


class LogHandler extends FileHandler{
 

  /*Creates a directory and log file of the users choosing*/
  function __construct($preUrl, $directory, $log){

    if(!file_exists($preUrl."/".$directory)){
      mkdir($directory);
    }
    
    $this->fileName = $log;
    $this->directoryName = $preUrl."/".$directory;
    $this->file = $preUrl."/".$directory."/".$log;    
 
  } 
 

  
  
  /*Opens the file created by the constructor and logs action with date and time*/
  function add_to_log($message){
    
    if($this->file_found()){
      
      $timeStamp = date("m/d/y  H:i:s", time());
      $file = fopen($this->file ,"a+");
      fwrite($file, $timeStamp." ".$message."\n");
      fclose($file); 

      return true;
    }
    
    /*Returns false if the file can not be found*/
    else{
    return false;
    }
    
  }


  /*Logs whether a file has been found*/
  function file_found($fileLocation){
    
    $file = new FileHandler($fileLocation);
    
    if(!($file->filefound())){
      $message = "Error: File (".$file->fileName.") not found at: ".$file->file;
      $this->add_to_log($message);
      return false;
    }
    
    else{
      $message = "Success: File (".$file->fileName.") found";
      $this->add_to_log($message);
      return true;
    }
    
  }
  


  
  /*Logs whether a directory has been found*/
  function directory_found($directoryLocation){

    $directory = new FileHandler($directoryLocation);
    
    if(($directory->is_directory())){
      
      if(!($directory->directory_found())){
	$errorMessage = "Error: Directory (".$directory->fileName.") not found at: ".$directory->file;
	return false;
      }
      
      else {
	$message = "Success: (".$directory->fileName.") has been found";
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
  
  
  
  
  /*Logs if a directory is writable*/
  function directory_writable($directoryLocation){
    
    $directory = new FileHandler($directoryLocation);
    
    if($directory->directory_writable()){
      $message = "Success (".$directory->fileName.") is writeable";
      $this->add_to_log($message);
      return true;
    }
    
    else{
      $message = "Error (".$directory->fileName.") is not writeable";
      $this->add_to_log($message);
      return false;     
    }
    
  }
  
  /*Logs if a file is writable*/
  function file_writable($fileLocation){
    
    $file = new FileHandler($fileLocation);

    if($file->writable_file()){
      $message = "Success: (".$file->fileName.") is writeable";
      $this->add_to_log($message);
      return true;
    }
    
    else{
      $message = "Error: (".$file->fileName.") is not writeable";
      $this->add_to_log($message);      
      return false;
    }
    
  }
  
  /*Logs if a file can be read*/
  function file_readable($fileLocation){
    
    $file = new FileHandler($fileLocation);

    if($file->is_readable()){
      $message = "Success: (".$file->fileName.") is readable";
      $this->add_to_log($message);
      return true;
    }
    
    else{
      $message = "Error: (".$file->fileName.") is not readable";
      $this->add_to_log($message);      
      return false;
    }
    
  }
  
  /*Deletes a specified file*/
  function delete_file($fileLocation){
    
    $file = new FileHandler();
    
    /*First finds the file and then tries to delete it*/
    if($file->file_found()){
      unlink($file->file);
      
      /*Verifies that the file has been deleted by searching for it again.*/
      if(!($file->file_found())){
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
  
  /*Logs the creation of a directory*/
  function create_directory($directory){
    
    $directory = new FileHandler($directoryLocation);

    /*First check to see if the directory already exists*/
    if(!$(directory->directory_found())){
      mkdir($directory->fileName);
      
      /*Next checks to make sure that the directory has actually been created*/
      if($directory->directory_found()){
	$message = "Success: (".$directory->fileName.") has been created";
	$this->add_to_log($message);
	return true;
      }
      
      else{
	$message = "Error: (".$directory->fileName.") could not be created";
	return false;
      }
    }
    
    else{
      $message = "Error: Can't create (".$directory->fileName.") as it already exists";
      return false;      
    }
  }


  /*End line of entire LogHandler Class*/
}

/*A class that is used specifically for error handling*/
class ErrorLogHandler extends LogHandler{

 /*Creates the directory and log file specifically for error handling*/
  function __construct($base){
    
    $errorDirectory = "errors";
    $errorFileName = "errorLog.txt";
    
    
    if(!file_exists($base."/".$errorDirectory)){
      mkdir($errorDirectory);
    }
    
    $this->fileName = $errorFileName;
    $this->directoryName = $errorDirectory;
    $this->file = $errorLog."/".$errorDirectory."/".$errorFileName;    
}
  
  /*End line of entire ErrorLogHandler Class*/
} 


?>
