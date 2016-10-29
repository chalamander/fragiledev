<?php
//Include the experimental html tag functions
include($_SERVER['DOCUMENT_ROOT'].'/../PHPIncludes/Libraries/HTMLTagExperimental.php');

echo '<body>';

include($_SERVER['DOCUMENT_ROOT'].'/../PHPIncludes/Views/pages/home/INC_TopPageGreeting.php');


echo '<div id="ElaborationsWrapper"><section id="Elaborations">';



?>

		<div id="TutorialBoxContentWrapper">


			<?php

			//Include the contents of the tutorial video box:			
			include($_SERVER['DOCUMENT_ROOT'].'/../PHPIncludes/Views/pages/home/INC_VideoBlock.php');

			?>

		</div>


</article>


</section></div>

