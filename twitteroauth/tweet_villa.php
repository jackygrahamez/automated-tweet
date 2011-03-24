<?php
include_once "/home/jamaicav/public_html/pick_a_villa.php";
include_once "/home/jamaicav/public_html//twitteroauth/twitteroauth/gettweetid.php";

$status_update = pick_a_villa();
$status_id = getTweetId($status_update);

// Read in our saved access token/secret
$accessToken = file_get_contents("access_token");
$accessTokenSecret = file_get_contents("access_token_secret");

// Create our twitter API object
require_once("/home/jamaicav/public_html/twitteroauth/twitteroauth/twitteroauth.php");
$oauth = new TwitterOAuth('wts9kgiaHCnSaRg4orA', 'a9edMvghgzevR2JFdUPvTaVZRDVr3rs0GQYFlofxQE', $accessToken, $accessTokenSecret);

// Send an API request to verify credentials
$credentials = $oauth->get("account/verify_credentials");
echo "Connected as @" . $credentials->screen_name. " " .$status_update."<br>\n";

//$SearchHashTag = $oauth->get("search", array('q' => substr($status_update, 0, 5))); 
//echo $SearchHashTag."\n";
echo $status_id ."<br>\n";

$oauth->post('statuses/destroy/'.$status_id."'");

// Post our new "random villa" status
$oauth->post('statuses/update', array('status' => $status_update));

?>