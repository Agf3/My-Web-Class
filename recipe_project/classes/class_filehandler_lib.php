<?php
/*
 *PHP Library used for the handling of files
 *Will log every action taken
 *Created by Alex Figueroa
*/



class FileHandler{

  protected $fileName;
  protected $directoryName;
  protected $file;

  /*Turns a file into an object*/
  function __construct($baseUrl, $directory, $file){
    
    $this->fileName = $file;
    $this->directoryName = $baseUrl."/".$directory;
    $this->file = $baseUrl."/".$directory."/".$file;    
 
  }   

  /*Boolean to see if the file can be found*/
  function file_found(){
    
    if(file_exists($this->file)){
      return true;
    }
    
    else{
      return false;
    }
    
  }
  

  /*Boolean to see if the current file is actually a directory*/
  function is_directory(){
    
    if(is_dir($this->file)){
      return true;
    }
    
    else{
      return false;
    }

  }

  
  /*Boolean to see if the directory can be found*/
  function directory_found(){
    
    /*First checks to see if the location is in fact a directory then makes sure it exists*/
    if($this->is_directory()){ 
     
      if($this->file_found()){
	return true;
      }
      

      /*Returns false if the file doesn't exist*/
      else {
	return false;
      }
    }
    
    /*Returns false if the file exists but is not a directory*/  
    else{
      return false;
    }
    
  }
  
  
  
  
  /*Boolean to check if a directory is writable*/
  function directory_writable(){
    

    /*Makes sure that it is a directory and that it does exist*/
    if($this->directory_found()){
      
      if(is_writable($this->file)){
	return true;
      }
      
      /*Returns false if the directory isn't writeable*/
      else{
	return false;     
      }

    }
    
    /*Returns false if the directory can't be found*/
    else{
      return false;
    }

  }
  
  

  /*Boolean to see if the file is writable*/
  function file_writable(){
  
    /*First checks to make sure that the file exists*/  
    if($this->file_found()){
      
      /*Then makes sure that the file isn't a directory*/
      if(!($this->is_directory())){
	  
	  if(is_writable($this->file)){
	    return true;
	  }

	  /*Returns false if the file isn't writeable*/
	  else {
	    return false;
	  }
	  
	}

      /*Returns false if the file is a directory*/
	else{
	  return false;
	}
      
    }
    
    /*Returns false if the file doesn't exist*/
    else{
      return false;
    }
    
  }
  

  
  /*Boolean to see if the file can be read*/
  function file_readable(){
    
    /*Makes sure the file exists*/
    if($this->file_found()){
      
      if(is_readable($this->file)){
	return true;
      }
      
      /*Returns false if the file is not readable*/
      else{      
	return false;
      }
    }

    /*Returns false if the file doesn't exist*/
    else{
      return false;
    }
      
  }
  
  /*Boolean to delete the file*/
  function delete_file(){
    
    /*First finds the file and then tries to delete it*/
    if($this->file_found()){
      unlink($file);
      
      /*Verifies that the file has been deleted by searching for it again. Returns true if the file doesn't exist*/ 
      if(!($this->file_found())){
	return true;
      }

      /*Returns false if the file was not deleted*/
      else{
	return false;
      }
    }
    
    /*Returns false if the file could not be found*/
    else {     
      return false;
    }
    
  }
  
  
  /*Writes the contents of an array to a file*/
  function array_to_file($content){
    
    /*Makes sure the file exists*/
    if($this->file_found()){
      
      /*Makes sure we can write to the file*/
      if($this->file_writable){
	
	$file = fopen($this->file ,"a+");
	
	/*Takes each value in the array and adds it to the opened file*/
	foreach($content as $value){
	  fwrite($file, $value."\n");    
	}
	
      fclose($file);
      return true;
    }
    
      /*Returns false if you can't write to the file*/
    else{
      return false;
    }
      
    }

    /*Returns false if the file doesn't exist*/
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

?>

