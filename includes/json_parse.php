<?php
  //randomize music selection on ufo data load
  $files = glob('data/music/*.mp3');
  $filename = $files[array_rand($files)];	
  $fname = basename($filename, ".mp3");	
  $fname = explode("-",$fname);
  $fname=implode(" - ",$fname); 


  //state selection
  $feed_updated = filemtime("data/ufo_data.xml");
  $current_time = time();
  
  if(1==1) {
  	  //get the most recent ufo sightings conditions
	  $ufoXMLFile = "http://feeds.feedburner.com/ufostalker?format=xml";
	  $ufoData = simplexml_load_file($ufoXMLFile);
	  //store them locally as xml
	  $ufoData->asXML("data/ufo_data.xml");
	  //pull out the current sightings and store as JSON
	   
	  
	  $jsonStr="{";
	  $sightingTitle = $ufoData->channel->item[0]->title;
	  
	  foreach ($sightingTitle as $y) {
		  $x=explode(" - ",$y);
		  $title = $x[0];
		  $title = str_replace('"', "", $title);
		  $title = str_replace("'", "", $title);
		  
		  $shortDes = $x[1];
		  $shortDes = str_replace('"', "", $shortDes);
		  $shortDes = str_replace("'", "", $shortDes);
		  //print("<p>".$x[0].",".$x[1]."</p>");
		  $jsonStr.= "\"Title\"".":"."\"".trim($title," ")."\","."\"ShortDes\"".":"."\"".trim($shortDes," ");
		  //print("<p>".$jsonStr."</p>");
	  }
	  $jsonStr = substr($jsonStr, 0, strlen($jsonStr));
	  $jsonStr.="\"}";
	  $trimmed= trim($jsonStr, " ");
	  //print("<p>".$trimmed."</p>");
	  //store locally as json
	  $file = 'data/sightings.txt';
	  
	  if (file_exists($file)) {
		  // Open the file to get existing content
		  $sightings = file_get_contents($file);
		  // Write the JSON data to the file
		  $sightings = $trimmed;
		  // Write the contents back to the file
		  file_put_contents($file, $sightings);
	  }else{
		  echo "failed to write";
	  }
  
  } else {
  
		 //ajax call is grabing data from the sighting.txt json file, and since we didn't update the file it is using the cached verison
		 //echo "file is cached";
  }
?>
  

