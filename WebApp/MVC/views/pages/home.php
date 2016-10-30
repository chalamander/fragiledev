<?php
//Include the experimental html tag functions
include($_SERVER['DOCUMENT_ROOT'].'/../PHPIncludes/Libraries/HTMLTagExperimental.php');

echo '<body>';

include($_SERVER['DOCUMENT_ROOT'].'/../PHPIncludes/Views/pages/home/INC_TopPageGreeting.php');






if(Devices::getDeviceState($_SESSION["deviceID"]) == 1){




echo 'Your The One';



}else{


echo '<div class="jumbotron">';
echo '  <h1 class="display-3" id="pageTitle">Skate Wave</h1>';
 echo ' <p class="lead">Score: <span id="scoreTarget"></span></p>';
echo '  <hr class="my-2">';
echo '  <p>Game Time: <span id="timeTarget"></span></p>';
echo '  <p class="lead">';

 echo '   <!-- <a class="btn btn-primary btn-lg" href="#" role="button">Kill User...</a> -->';
 echo ' </p>';
echo '</div>';

echo '<div id="SkateGraphic">';

echo '	<img id="show">';
echo '</div>';



echo '<audio id="myAudio">';
echo '  <source src="assets/Sound/horse.ogg" type="audio/ogg">';
echo '  <source src="assets/Sound/horse.mp3" type="audio/mpeg">';
echo '  Your browser does not support the audio element.';
echo '</audio>';



}






