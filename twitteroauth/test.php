<?php

// Read in our saved access token/secret
$accessToken = file_get_contents("access_token");
$accessTokenSecret = file_get_contents("access_token_secret");

// Create our twitter API object
require_once("/home/jamaicav/public_html/twitteroauth/twitteroauth/twitteroauth.php");
$oauth = new TwitterOAuth('wts9kgiaHCnSaRg4orA', 'a9edMvghgzevR2JFdUPvTaVZRDVr3rs0GQYFlofxQE', $accessToken, $accessTokenSecret);

// Send an API request to verify credentials
$credentials = $oauth->get("account/verify_credentials");
echo "Connected as @" . $credentials->screen_name;

// Post our new "hello world" status
$oauth->post('statuses/update', array('status' => "hello world"));

?>