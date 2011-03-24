<?php

function pick_a_villa()
{
$villas = array(
"A Summer Place is a deluxe 7-br beachfront villa on the shore of beautiful Discovery Bay. http://www.jamaicavillas.com/summer-place-beach",
"Almond Hill old plantation site. Exquisite view, enjoys refreshing tradewinds & absolute privacy. http://www.jamaicavillas.com/almond-hill",
"White sand beach turquoise waters of Discovery Bay 7-br Amanoka. http://www.jamaicavillas.com/amanoka-beach-0",
"Beach House, large living room verandah stuning infinity pool, private beach and bay. http://www.jamaicavillas.com/beach-house",
"4,800 sqr ft living and dining area. Glass doors, verandah, hot tub, and glorious ocean view. http://www.jamaicavillas.com/belle-abri",
"Blue Heaven 3-BR breathtaking panorama sea and sky. AC all BR. http://www.jamaicavillas.com/blue-heaven http://www.jamaicavillas.com/blue-heaven",
"5 BR+ indoor-outdoor showers golf cart long heated pool tennis beach club and kids club. http://www.jamaicavillas.com/bougainvillea-tryall",
"Bumpers Nest 13,000-square-foot 4-bedroom private villa at famous Tryall Club http://www.jamaicavillas.com/bumpers-nest-tryall-club",
"Calypso, 30' circular pool. Winner of \"Best Staff at The Tryall Club\" award every year http://www.jamaicavillas.com/calypso-tryall-club",
"Calypso Shores on the Beach contemporary 4-bedroom beachfront house on a calm Caribbean bay http://www.jamaicavillas.com/calypso-shores-beach",
"Cliffside Cottage on Montego Bay, five-bedroom five-bath private villa with remarkable view http://www.jamaicavillas.com/cliffside-cottage",		
"Coo Yah at the Tryall Club Montego Bay, deluxe 4-bedroom villa at the famous Tryall Club http://www.jamaicavillas.com/coo-yah-tryall-club",
"Coral Cove Cottage on the Beach Discovery Bay 8 BR in 2 waterfront homes on 150' beach http://www.jamaicavillas.com/coral-cove-beach",
"Coral Cove Villa 5-bedroom newly-renovated 2-story villa on 150' white sand beach on Discovery Bay http://www.jamaicavillas.com/coral-cove-beach",
"Destiny, remarkable 10,000 square foot private villa on spectacular 7-acre site http://www.jamaicavillas.com/destiny",
"Drambuie Estate, deluxe 7,200-square-foot 5-bedroom villa http://www.jamaicavillas.com/drambuie-estate",
"Emerald Seas Ocho Rios, deluxe 6,000 square-foot waterfront villa http://www.jamaicavillas.com/emerald-seas",
"Endless Summer Montego Bay deluxe 9,000-square-foot mansion overlooking 400-acre championship golf course http://www.jamaicavillas.com/endless-summer",
"Fairway Manor, overlooking the first fairway of the Half Moon golf course http://www.jamaicavillas.com/villa-listing/fairway-manor",
"Fortlands Point at the tip of a stunning Caribbean peninsula http://www.jamaicavillas.com/villa-listing/fortlands-point-on-the-beach",
"Frankfort on the beach 8 person hot tub overlooking the sea http://www.jamaicavillas.com/villa-listing/frankfort-on-the-beach",
"Goat Hill with spectacular ocean view http://www.jamaicavillas.com/villa-listing/goat-hill",
"Great River House 7,500-square-foot private villa on 5 acres http://www.jamaicavillas.com/villa-listing/great-river-house",
"Greatview 12,500-square-foot 6-bedroom deluxe staffed villa http://www.jamaicavillas.com/villa-listing/greatview",
"Hanover House 40 x 40 private pool http://www.jamaicavillas.com/villa-listing/hanover-house",
"Harmony Hill at the Tryall Club remarkable new 7-bedroom 15,000-sq-ft villa http://www.jamaicavillas.com/villa-listing/harmony-hill-at-the-tryall-club",
"Haystack at the Tryall Club new 15,000 square foot 8-bedroom http://www.jamaicavillas.com/villa-listing/haystack-at-the-tryall-club",
"Hillside Villa at Round Hill 4-bedroom 4-bath private villa http://www.jamaicavillas.com/villa-listing/hillside-villa-at-round-hill",
"Infinity at the Tryall Club Montego Bay 5-bedroom luxury villa  http://www.jamaicavillas.com/villa-listing/infinity-at-the-tryall-club",
"Keela Wee deluxe beachfront villa on Discovery Bay http://www.jamaicavillas.com/villa-listing/keela-wee-on-the-beach",
"Knockando private villa atop prestigious Round Hill http://www.jamaicavillas.com/villa-listing/knockando-at-round-hill",
"La Casita 5 minutes from beaches, shopping, dining, golf and tennis http://www.jamaicavillas.com/villa-listing/la-casita",
"Lime Acre on the Beach http://www.jamaicavillas.com/villa-listing/lime-acre-on-the-beach",
"Lolita at the Tryall Club 5-bedroom luxury villa http://www.jamaicavillas.com/villa-listing/lolita-at-the-tryall-club",
"Longview Manor at Round Hill http://www.jamaicavillas.com/villa-listing/longview-manor-at-round-hill",
"Mahogany Hill at the Tryall Club Montego Bay http://www.jamaicavillas.com/villa-listing/mahogany-hill-at-the-tryall-club",
"Makana on the Beach Discovery Bay http://www.jamaicavillas.com/villa-listing/makana-on-the-beach",
"Malatai on the Beach Ocho Rios http://www.jamaicavillas.com/villa-listing/malatai-on-the-beach",
"Mirador at the Tryall Club ~ A Great House Villa Suite http://www.jamaicavillas.com/villa-listing/mirador-at-the-tryall-club-~-a-great-house-villa-suite",
"Moon Dance Villas ~ Azure Sky http://www.jamaicavillas.com/villa-listing/moon-dance-villas-~-azure-sky",
"Moon Dance Villas ~ Bay Whisper http://www.jamaicavillas.com/villa-listing/moon-dance-villas-~-bay-whisper",
"Moon Dance Villas ~ Dream Walk http://www.jamaicavillas.com/villa-listing/moon-dance-villas-~-dream-walk",
"Moon Dance Villas ~ Ginger Breeze http://www.jamaicavillas.com/villa-listing/moon-dance-villas-~-ginger-breeze",
"Moon Dance Villas ~ Lilac Mist http://www.jamaicavillas.com/villa-listing/moon-dance-villas-~-lilac-mist",
"Moon Dance Villas ~ Satin Sunrise http://www.jamaicavillas.com/villa-listing/moon-dance-villas-~-satin-sunrise",
"Noble House on the Beach http://www.jamaicavillas.com/villa-listing/noble-house-on-the-beach",
"Pavilion Montego Bay http://www.jamaicavillas.com/villa-listing/pavilion",
"Phoenix on the Beach at the Tryall Club http://www.jamaicavillas.com/villa-listing/phoenix-on-the-beach-at-the-tryall-club",
"Pimento Hill http://www.jamaicavillas.com/villa-listing/pimento-hill",
"Pineapple House at the Tryall Club Montego Bay http://www.jamaicavillas.com/villa-listing/pineapple-house-at-the-tryall-club",
"Pinnacle at the Tryall Club http://www.jamaicavillas.com/villa-listing/pinnacle-at-the-tryall-club",
"Rio Chico on the Beach http://www.jamaicavillas.com/villa-listing/rio-chico-on-the-beach",
"River Cottage at Good Hope http://www.jamaicavillas.com/villa-listing/river-cottage-at-good-hope",
"Roaring Pavilion on the Beach http://www.jamaicavillas.com/villa-listing/roaring-pavilion-on-the-beach",
"Rose Cottage at the Tryall Club http://www.jamaicavillas.com/villa-listing/rose-cottage-at-the-tryall-club",
"Scotch on the Rocks http://www.jamaicavillas.com/villa-listing/scotch-on-the-rocks",
"Sea Grapes on the Beach http://www.jamaicavillas.com/villa-listing/sea-grapes-on-the-beach",
"Sea Haven on Discovery Bay http://www.jamaicavillas.com/villa-listing/sea-haven-on-discovery-bay",
"Sea Island by Round Hill http://www.jamaicavillas.com/villa-listing/sea-island-by-round-hill",
"Sea Salt at the Tryall Club http://www.jamaicavillas.com/villa-listing/sea-salt-at-the-tryall-club",
"Seafore at the Tryall Club http://www.jamaicavillas.com/villa-listing/seafore-at-the-tryall-club",
"Seaside Cottage at Round Hill http://www.jamaicavillas.com/villa-listing/seaside-cottage-at-round-hill",
"Serendipity Montego Bay http://www.jamaicavillas.com/villa-listing/serendipity",
"Serenity on the Beach http://www.jamaicavillas.com/villa-listing/serenity-on-the-beach",
"Seven Seas on the Beach http://www.jamaicavillas.com/villa-listing/seven-seas-on-the-beach",
"Silent Waters http://www.jamaicavillas.com/villa-listing/silent-waters",
"Spyglass Hill http://www.jamaicavillas.com/villa-listing/spyglass-hill",
"Sugar Bay on the Beach http://www.jamaicavillas.com/villa-listing/sugar-bay-on-the-beach",
"Summerland on Round Hill http://www.jamaicavillas.com/villa-listing/summerland-on-round-hill",
"Summertime Montego Bay http://www.jamaicavillas.com/villa-listing/summertime",
"Sundown on the Beach http://www.jamaicavillas.com/villa-listing/sundown-on-the-beach",
"Sunset on the Beach at the Tryall Club http://www.jamaicavillas.com/villa-listing/sunset-on-the-beach-at-the-tryall-club",
"Sweet Spot on the Beach http://www.jamaicavillas.com/villa-listing/sweet-spot-on-the-beach",
"Tradewinds at the Tryall Club http://www.jamaicavillas.com/villa-listing/tradewinds-at-the-tryall-club",
"Tranquillity on the Beach http://www.jamaicavillas.com/villa-listing/tranquillity-on-the-beach",
"Twin Palms at the Tryall Club http://www.jamaicavillas.com/villa-listing/twin-palms-at-the-tryall-club",
"Villa Lido on the Beach http://www.jamaicavillas.com/villa-listing/villa-lido-on-the-beach",
"Vista del Mar at the Tryall Club http://www.jamaicavillas.com/villa-listing/vista-del-mar-at-the-tryall-club",
"Viviana at the Tryall Club http://www.jamaicavillas.com/villa-listing/viviana-at-the-tryall-club",
"Wharf House on the Beach http://www.jamaicavillas.com/villa-listing/wharf-house-on-the-beach",
"Whispering Waters on the Beach http://www.jamaicavillas.com/villa-listing/whispering-waters-on-the-beach",
"Wild Orchid http://www.jamaicavillas.com/villa-listing/wild-orchid",
"Windrush at the Tryall Club http://www.jamaicavillas.com/villa-listing/windrush-at-the-tryall-club",
"Windsong Montego Bay http://www.jamaicavillas.com/villa-listing/windsong",
"Xanadu at the Tryall Club Montego Bay http://www.jamaicavillas.com/villa-listing/xanadu-at-the-tryall-club",
"Yellowbird at the Tryall Club http://www.jamaicavillas.com/villa-listing/yellowbird-at-the-tryall-club" 
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
