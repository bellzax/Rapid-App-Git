<?php
  //state selection
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$locationSelection = $_POST['ufoLoc'];
  }else{
	  $locationSelection = "";
  }

  //get the most recent ufo sightings conditions
  $ufoXMLFile = "http://feeds.feedburner.com/ufostalker?format=xml";
  $ufoData = simplexml_load_file($ufoXMLFile);
  //store them locally as xml
  $ufoData->asXML("../data/ufo_data.xml");
  
  $pattern = "/".$locationSelection."/";
  //interate through xml and search for selected state name in the title element
  foreach ($ufoData->channel->item as $sightData) {
	  //Regex to search by select state names
	  $stateMatch = preg_grep($pattern, explode("\n", $sightData->title));
	  
	  //echo out the sightings that match the state selected  
	  $count_total = count($stateMatch);
	  for ($counter=0; $counter<$count_total; $counter++){
		  $line = each ($stateMatch);
		  echo "$line[value]; ";
	  }
  } 
?>
  

