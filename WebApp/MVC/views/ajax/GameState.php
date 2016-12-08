<?php
      //Include the standard header:
require_once($_SERVER['DOCUMENT_ROOT'] . '../PHPIncludes/Libraries/Pusher.php');

$gameState = filter_var($_POST['gs'] , FILTER_SANITIZE_STRING);
$points = filter_var($_POST['score'] , FILTER_SANITIZE_STRING);
$gameTime = filter_var($_POST['time'] , FILTER_SANITIZE_STRING);

error_log($points . " p: " . $gameTime . " gs: ". $gameState);

$data = array(  'gs' => [$gameState] , 'score' => [$points] , 'time' => [$gameTime]  );

// error_log($data['time']);

$options = array(
	'encrypted' => true
	);
$pusher = new Pusher(
	'01e18c2040acf98343e4',
	'ea1e9d94cf9589faad4c',
	'264669',
	$options
	);

if(isset($_POST['gs'])){

	$data['message'] = json_encode($data);;

	$pusher->trigger('test_channel', 'my_event', $data);
	

}else{

}



