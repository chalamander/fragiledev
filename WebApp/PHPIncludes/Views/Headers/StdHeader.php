<?php
session_start();
?>
<DOCTYPE html>
<html>
  <head>
    <!-- <meta http-equiv="Refresh" content="10"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <?php

    if(isset($pageRequirements)){
      $cssFiles = $pageRequirements->getFiles("css");

      $pageTitle = $pageRequirements->getFiles("title");

    }

    if(isset($cssFiles)){
    	foreach($cssFiles as  $fileName) {
   			echo '<link rel="stylesheet" type="text/css" href="/SASS/stylesheets/' .  $fileName .  '">'; 		
       	}
    }
    
    //Echo out the page title if it is set
    if(isset($pageTitle) && $pageTitle != ""){

      echo '<title>' . $pageTitle . '</title>';  
    
    }
    
    ?>

  </head>