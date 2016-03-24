<?php
  //state selection
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	$locationSelection = $_POST['ufoLoc'];
  }else{
	  $locationSelection = "Florida";
  }

  //get the most recent ufo sightings conditions
  $ufoXMLFile = "http://feeds.feedburner.com/ufostalker?format=xml";
  $ufoData = simplexml_load_file($ufoXMLFile);
  //store them locally as xml
  $ufoData->asXML("../data/ufo_data.xml");
  //pull out the current sightings and store as JSON
  
  $pattern = "/".$locationSelection."/";
  echo $pattern."<br>";
  
   //$test = array();
  foreach ($ufoData->channel->item as $sightData) {
	  //Regex to search by select state names
	  //$pattern = "/".$locationSelection."/";
	  $stateMatch = preg_grep($pattern, explode("\n", $sightData->title));
	  //echo out the sightings that match the state selected
	  $stateImplode=implode(",",$stateMatch);
	  echo $stateImplode."<br>";
	  //$test['title'] = $stateMatch;
	  // echo json_encode($test);
  }
  
  $stateExplode = explode(" - ",$stateImplode);
  print_r($stateExplode);
  var_dump ($stateExplode);			
 
?>
  

