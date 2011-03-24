<?php

// Retrieve our previously generated request token & secret
$requestToken = file_get_contents("request_token");
$requestTokenSecret = file_get_contents("request_token_secret");

// Include class file & create object passing request token/secret also
require_once("/home/jamaicav/public_html/twitteroauth/twitteroauth/twitteroauth.php");
$oauth = new TwitterOAuth('consumer_key', 'consumer_secret', $requestToken, $requestTokenSecret);

// Generate access token by providing PIN for Twitter
$request = $oauth->getAccessToken(NULL, $_GET["pin"]);
$accessToken = $request['oauth_token'];
$accessTokenSecret = $request['oauth_token_secret'];

// Save our access token/secret
file_put_contents("access_token", $accessToken);
file_put_contents("access_token_secret", $accessTokenSecret);
?>