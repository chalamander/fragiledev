<?php
//This model is responsible for handaling the devices on tehe system
//
// 
// @author Robert Curran robert@robertcurran.co.uk

class Devices {

	public function addDevice() {

		//Track the number of attemps to get a unique ID.
		$attemps = 0;
		//Random number to be used as the Customer ID: 
		$randomNumber;

		do {

			if($attemps > 5){
				//More than five atetmpts to get an unused ID, something is BADLY wrong.
				error_log("FATAL ERROR, Unable to find a unique Id for the new Product");
				die();
			}

    		//Generate a psudo random number for use as the id, no need for crytographic randomness, not thsi does pose a limuit on the number of custoemrs! :)
			$randomNumber = rand(100, 9999999);

			//Check to see that the index is not in use:
			$db = Db::getInstance();

			$req = $db->prepare('SELECT * FROM Devices Where DeviceID = :DeviceID limit 5');
			$req->execute(array(':DeviceID' => $randomNumber));
			$deviceIDGet = $req->fetchAll();

			$attemps++;

		} while (count($deviceIDGet)  > 0);


		//Save the new Enquiry to the database with the generated unique ID.
		$db = Db::getInstance();

		$req = $db->prepare('INSERT INTO Devices(DeviceID) VALUES (:DeviceID)');
		$req->execute(array(':DeviceID' => $randomNumber ));

		//Return the New DevcieID
		return $randomNumber;

	}


	public function getDeviceState($DeviceIDNum){

		//Check to see that the index is not in use:
		$db = Db::getInstance();

		$req = $db->prepare('SELECT ActiveControl FROM Devices Where DeviceID = :DeviceID limit 1');
		$req->execute(array(':DeviceID' => $DeviceIDNum));
		$device = $req->fetch();

		return $device['ActiveControl'];

	}



	public function selectNewDevice(){

		//Check to see that the index is not in use:
		$db = Db::getInstance();

		$req = $db->prepare('SELECT DeviceID FROM Devices ORDER BY RAND() LIMIT 1');
		$req->execute();
		$deviceIDNum = $req->fetch();

		$deviceID = $deviceID['DeviceID'];

		//Set all off first
		$req = $db->prepare(' UPDATE  Devices SET ActiveControl = 0');
		$req->execute(array(':deviceID' => $deviceIDNum));
		$deviceID = $req->fetch();

		//Switch the selected one on:
		$req = $db->prepare(' UPDATE  Devices SET ActiveControl = 1 WHERE DeviceID = :deviceID');
		$req->execute(array(':deviceID' => $deviceIDNum));
		$deviceID = $req->fetch();

	}



	public function clearAllDevices(){

		//Check to see that the index is not in use:
		$db = Db::getInstance();

		$req = $db->prepare('DELETE FROM Devices');
		$req->execute();
		


	}


	
}
