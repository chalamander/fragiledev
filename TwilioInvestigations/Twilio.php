<?
//PHP Script for testing some of the options avalible whren using twilio for our project.
//Robert curran

//Twilio uses XML for the data read, set the document headers:
header("content-type: text/xml");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

//Twilio task
echo "<Response>";
echo "<Say>Hello, this is a fine afternoon is it not? </Say>";
echo "</Response>";
