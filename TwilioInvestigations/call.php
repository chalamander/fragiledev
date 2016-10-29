<?php
    /* Make a call using Twilio. You can run this file 3 different ways:
     *
     * 1. Save it as call.php and at the command line, run 
     *        php call.php
     *
     * 2. Upload it to a web host and load mywebhost.com/call.php 
     *    in a web browser.
     *
     * 3. Download a local server like WAMP, MAMP or XAMPP. Point the web root 
     *    directory to the folder containing this file, and load 
     *    localhost:8888/call.php in a web browser.
     */

    // Step 1: Get the Twilio-PHP library from twilio.com/docs/libraries/php, 
    // following the instructions to install it with Composer.
    require_once "Twilio/autoload.php";
    use Twilio\Rest\Client;
    
    // Step 2: Set our AccountSid and AuthToken from https://twilio.com/console
    $AccountSid = "AC69db0b07b0deae4dfbbe3acf9d6b8833";
    $AuthToken = "c9387a6d24b3b69015cdfccd76601211";

    // Step 3: Instantiate a new Twilio Rest Client
    $client = new Client($AccountSid, $AuthToken);

    try {
        // Initiate a new outbound call   //To;from;url
        $call = $client->account->calls->create("+447427690443", "+",  array("url" => "https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/Twilio.php")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }


  try {
        // Initiate a new outbound call   //To;from;url
        $call = $client->account->calls->create("+447502338767", "+",  array("url" => "https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/Twilio.php")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }



  // try {
  //       // Initiate a new outbound call   //To;from;url
  //       $call = $client->account->calls->create("+441953456192", "+",  array("url" => "https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/Twilio.php")
  //       );
  //       echo "Started call: " . $call->sid;
  //   } catch (Exception $e) {
  //       echo "Error: " . $e->getMessage();
  //   }


  try {
        // Initiate a new outbound call   //To;from;url
        $call = $client->account->calls->create("+447742915449", "+",  array("url" => "https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/Twilio.php")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }



  try {
        // Initiate a new outbound call   //To;from;url
        $call = $client->account->calls->create("+447802979190", "+",  array("url" => "https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/Twilio.php")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }



    try {
        // Initiate a new outbound call   //To;from;url
        $call = $client->account->calls->create("+447909119042", "+",  array("url" => "https://brumhack.webaddressgoeshere.com/fragiledev/TwilioInvestigations/Twilio.php")
        );
        echo "Started call: " . $call->sid;
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }




