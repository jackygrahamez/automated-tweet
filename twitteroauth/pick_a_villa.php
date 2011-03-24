<?php

function pick_a_villa()
{
$villas = array(
"A Summer Place is a deluxe 7-br beachfront villa on the shore of beautiful Discovery Bay. http://www.jamaicavillas.com/summer-place-beach",
"Almond Hill old plantation site. Exquisite view, enjoys refreshing tradewinds & absolute privacy. http://www.jamaicavillas.com/almond-hill",
"White sand beach turquoise waters of Discovery Bay 7-br Amanoka. http://www.jamaicavillas.com/amanoka-beach-0",
"Large living room verandah stuning infinity pool, private beach and bay. http://www.jamaicavillas.com/beach-house",
"Blue Heaven 3-BR breathtaking panorama sea and sky. AC all BR. http://www.jamaicavillas.com/blue-heaven http://www.jamaicavillas.com/blue-heaven",
"5 BR+ indoor-outdoor showers golf cart long heated poo tennis beach club and kids club. http://www.jamaicavillas.com/bougainvillea-tryall",
"Bumpers Nest 13,000-square-foot 4-bedroom private villa at famous Tryall Club http://www.jamaicavillas.com/bumpers-nest-tryall-club"
);

 return $villas[array_rand($villas)];

}
    //echo "Your ad is: $tweet.\n";

/*
 $url = "http://www.jamaicavillas.com/villa-listing/rates?s=hl";
  $input = @file_get_contents($url) or die("Could not access file: $url");
  $regexp = "<a\s[^>]*href=(\"??)([^\" >]*?)\\1[^>]*>(.*)<\/a>";
  if(preg_match_all("/$regexp/siU", $input, $matches)) {
    # $matches[2] = array of link addresses
    # $matches[3] = array of link text - including HTML code
	for($i=count($matches[2]);$i>0;$i--){
 	
    echo $matches[2][$i]. "<br />\n";
			
		} 

  }
*/

?>
