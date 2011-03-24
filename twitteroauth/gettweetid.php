<?php

function getTweetId($status_msg)
{
//$status_msg = trim(status_msg);
$xml =  "http://search.twitter.com/search.atom?q=+from:vls_jamaica";
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml);

$x=$xmlDoc->getElementsByTagName('entry');
$length = $x->length;

for ($i=0; $i< $length; $i++)
  {
  $id=$x->item($i)->getElementsByTagName('id')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
	//$item_title = trim(item_title);


	if (strcmp($item_title,$status_msg) == 0) {
	echo "item title: ".$item_title." status msg: ".$status_msg."<br>\n";
    return str_replace("tag:search.twitter.com,2005:","",$id);

	}

 }
	return;
 
}
?>