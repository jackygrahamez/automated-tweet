<?php

function value_in($element_name, $xml, $content_only = true) {
    if ($xml == false) {
        return false;
    }
    $found = preg_match('#<'.$element_name.'(?:\s+[^>]+)?>(.*?)'.
            '</'.$element_name.'>#s', $xml, $matches);
    if ($found != false) {
        if ($content_only) {
            return $matches[1];  //ignore the enclosing tags
        } else {
            return $matches[0];  //return the full pattern match
        }
    }
    // No match found: return false.
    return false;
} 

$vls_rss = file('http://search.twitter.com/search.atom?q=+from:vls_jamaica');

foreach ($vls_rss as $elements) {

//echo $elements . "<br />";
echo value_in('id', $elements). "<br />\n";
echo value_in('title', $elements). "<br />\n";

}
/*
$xml = simplexml_load_file("http://search.twitter.com/search.atom?q=+from:vls_jamaica");

echo $xml->getName() . "<br />";

foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br />";
  }
*/
?>