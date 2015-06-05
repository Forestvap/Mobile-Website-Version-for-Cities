<?php
// this line loads the library 
require('Services/Twilio.php'); 
 
echo "Hello";
 
$account_sid = 'COMPLETE' ;
$auth_token = 'COMPLETE'; 
$client = new Services_Twilio($account_sid, $auth_token); 
 
$client->account->messages->create(array( 
	'To' => "+12123630830", 
	'From' => "+16465767590", 
	'Body' => "hello"
));
?>
