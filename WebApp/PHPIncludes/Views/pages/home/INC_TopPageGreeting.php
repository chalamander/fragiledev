	<?php
	/**
	 *Gets a device ID if necasary
	  */
	 
	 if( !isset($_SESSION["deviceID"] )){

	 	$_SESSION["deviceID"] = Devices::addDevice();
	 


	 }