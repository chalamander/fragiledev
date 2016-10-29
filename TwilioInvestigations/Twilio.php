<?php
//PHP Script for testing some of the options avalible whren using twilio for our project.
//Robert curran

//Twilio uses XML for the data read, set the document headers:
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

//Twilio task
echo "<Response>";


$qoutes = array("Three Rings for the Elven-kings under the sky,
Seven for the Dwarf-lords in halls of stone,
Nine for Mortal Men, doomed to die,
One for the Dark Lord on his dark throne
In the Land of Mordor where the Shadows lie.
One Ring to rule them all, One Ring to find them,
One Ring to bring them all and in the darkness bind them.
In the Land of Mordor where the Shadows lie.” 
― J.R.R. Tolkien, The Lord of the Rings", "Roads Go Ever On

The Road goes ever on and on
Out from the door where it began.
Now far ahead the Road has gone.
Let others follow, if they can!
Let them a journey new begin.
But I at last with weary feet
Will turn towards the lighted inn,
My evening-rest and sleep to meet.” 
― J.R.R. Tolkien, The Lord of the Rings", "PIPPIN: I didn't think it would end this way.

GANDALF: End? No, the journey doesn't end here. Death is just another path, one that we all must take. The grey rain-curtain of this world rolls back, and all turns to silver glass, and then you see it.

PIPPIN: What? Gandalf? See what?

GANDALF: White shores, and beyond, a far green country under a swift sunrise.

PIPPIN: Well, that isn't so bad.

GANDALF: No. No, it isn't.” 
― J.R.R. Tolkien, The Lord of the Rings", "I am old, Gandalf. I don't look it, but I am beginning to feel it in my heart of hearts. Well-preserved indeed! Why, I feel all thin, sort of stretched, if you know what I mean: like butter that has been scraped over too much bread. That can't be right. I need a change, or something.” 
― J.R.R. Tolkien, The Lord of the Rings", "And some things that should not have been forgotten were lost. History became legend. Legend became myth. And for two and a half thousand years, the ring﻿ passed out of all knowledge.” 
― Galadriel in The Lord of the Rings: The Fellowship of the Ring, The Lord of the Rings");


$rand_keys = array_rand($qoutes, 2);

echo '<Dial>+441953456192</Dial>';

// echo '<Say>';

//echo $qoutes[$rand_keys[0]];
// echo 'hi!';

// echo '<Play>http://movie-sounds.org/quotes/lotr1/but-I-swear-to-you-I-will-not-let-the-White-City-fall.mp3</Play>';

// echo '</Say>';





echo "</Response>";
