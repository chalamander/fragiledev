<?php
	// The PHP Twilio helper library. Get it here http://www.twilio.com/docs/libraries/
	 require_once "Twilio/autoload.php";
    use Twilio\Rest\Client;
 
	$API_VERSION = '2010-04-01';
	$ACCOUNT_SID = 'AC69db0b07b0deae4dfbbe3acf9d6b8833';
	$AUTH_TOKEN = 'c9387a6d24b3b69015cdfccd76601211';
 
	$client = new TwilioRestClient($ACCOUNT_SID, $AUTH_TOKEN);
 
	// The phone numbers of the people to be called
	$participants = array('+447427690443', '+07549 655421', '+07455 238095');
 
	// Go through the participants array and call each person.
	foreach ($participants as $particpant)
	{
		$vars = array(
			'From' => '+15551234567',
			'To' => $participant,
			'Url' => 'https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/conference.xml');
 
		$response = $client->request("/$API_VERSION/Accounts/$ACCOUNT_SID/Calls", "POST", $vars);
	}
?>
