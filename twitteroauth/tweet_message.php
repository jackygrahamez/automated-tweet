<?php
$file = file_get_contents('/home/jamaicav/public_html/tickercontent.txt');
$file_fix = strip_tags($file);
$file_array = split("[\n|\r]", $file_fix);

foreach ( $file_array as $record) {

	if ($record != "") {
	echo $record."<br>\n";
	
	 
//$status_update = pick_a_villa()." ".chr(rand(65,90));

// Read in our saved access token/secret
$accessToken = file_get_contents("access_token");
$accessTokenSecret = file_get_contents("access_token_secret");

// Create our twitter API object
require_once("/home/jamaicav/public_html/twitteroauth/twitteroauth/twitteroauth.php");
$oauth = new TwitterOAuth('wts9kgiaHCnSaRg4orA', 'a9edMvghgzevR2JFdUPvTaVZRDVr3rs0GQYFlofxQE', $accessToken, $accessTokenSecret);

// Send an API request to verify credentials
$credentials = $oauth->get("account/verify_credentials");
echo "Connected as @" . $credentials->screen_name. " " .$record."<br>\n";

//$SearchHashTag = $oauth->get("search", array('q' => substr($status_update, 0, 5))); 
//echo $SearchHashTag."\n";

// Post our new "random villa" status
$oauth->post('statuses/update', array('status' => $record));

		//End If Record not null ($record != "")
		}
	}

?>