<?php

/* settings */ 
$username = 'vls_jamaica';
$password = 'Cut3k@tz';
$format = 'xml'; //alternative: json 
$message = 'Villas By Linda Smith! http://jamaicavillas.com/';
 
/* work */ 
//$result = shell_exec('curl http://twitter.com/statuses/update.'.$format.' -u '.$username.':'.$password.' -d status="'.str_replace('"','\"',$message).'"');
//echo $result;

$request = "http://twitter.com/statuses/update.xml?status='".urlencode($status)."'";
$session = curl_init($request);
curl_setopt($session, CURLOPT_HEADER, false);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
curl_setopt($session, CURLOPT_USERPWD, $twittername.":".$twitterpassword);
curl_setopt($session, CURLOPT_POST, 1);
$response = curl_exec($session);

$resultArray = curl_getinfo($session);

if ($resultArray['http_code'] == 200)
echo "Tweet Posted";
else
echo "Could not post Tweet to Twitter right now. Try again later.";

curl_close($session);

?>