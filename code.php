<?php	
	// Get target
$search="";
if(isset($_POST['city'])){
$search=$_POST['city'];
$search = str_replace(" ","+",$search);
$search = str_replace("&","",$search);


}

if(isset($_POST['narrow'])){
$search="\"".$search."\"";
}

// Put your own CL feed URL on the line below, so it matches your area.
// Also, note where the $search string is placed in the URL.
// If you do special searches, like max and min prices, those fields will also appear in your RSS feed URL
// Use PHP variables for any of the CL search properties.

$feed_url = "http://iowacity.craigslist.org/search/apa?bedrooms=3&catAbb=apa&hasPic=1&housing_type=1&maxAsk=1500&minAsk=1000&s=0&format=rss"
# INITIATE CURL. 
$curl = curl_init(); 

# CURL SETTINGS. 
curl_setopt($curl, CURLOPT_URL,"$feed_url"); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0); 

# GRAB THE XML FILE. 
$data = curl_exec($curl); 

curl_close($curl); 

$doc = new SimpleXmlElement($data, LIBXML_NOCDATA);

if(isset($doc->channel)){
    parseCraigslist($doc);
}

function parseCraigslist($xml){
    echo "<strong>".$xml->title."</strong>";
    $cnt = count($xml->item);
    for($i=0; $i<$cnt; $i++)
    {
    $title     = $xml->item[$i]->title;
    $url     = $xml->item[$i]->link;
    $desc = $xml->item[$i]->description;
 
 //Use that namespace
  $dc = $xml->item[$i]->children("http://purl.org/dc/elements/1.1/");
  $date = $dc->date;
  $part = explode("T",$date);
     if(isset($_POST['desc'])){
     $list[] = $part[0]." | <a href='".$url."'>".$title."</a><br />".$desc."<br /><hr><br />";
     }
     else{
     $list[] = $part[0]." | <a href='".$url."'>".$title."</a><br />";
     }
    }

if(count($list)>0){    
    rsort($list);
    foreach($list as $row){
    echo $row;
    }
}
else{
echo "No items found.";
}
}
	?>
