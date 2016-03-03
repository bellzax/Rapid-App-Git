<?php
require_once 'db_con.php';

// define variables and set to empty values
$title = $titleErr = $shortdes = $desErr = $location = $locationErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//using above instead of isset
	
	//validating inputs
   if (empty($_POST["newtitle"])) {
		$titleErr = "* A title is required";
		$valid = false;
   } else {
	   if(strlen($_POST["newtitle"]) <= 100)	{
			$title = test_input($_POST["newtitle"]);
		}else{
			$titleErr = "* The title must be less than 100 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["newdes"])) {
		$desErr = "* A description is required";
		$valid = false;
   } else {
	   if(strlen($_POST["newdes"]) <= 200)	{
			$shortdes = test_input($_POST["newdes"]);
		}else{
			$desErr = "* The description must be less than 200 characters";
			$valid = false;
		}
   }
   
   if (empty($_POST["newloc"])) {
		$locationErr = "* A location is required";
		$valid = false;
   } else {
	   if(strlen($_POST["newloc"]) <= 50)	{
			$location = test_input($_POST["newloc"]);
		}else{
			$locationErr = "* The location must be less than 50 characters";
			$valid = false;
		}
   }
   
   
   
}
   //echo "title: ".$title."<br>des: ".$shortdes."<br>loc: ".$location;
   //echo "title err: ".$titleErr."<br>des err: ".$desErr."<br>loc err: ".$locationErr;
						   
$sql1 = "INSERT INTO dig4503ajax1 (`title`, `shortdes`, `location`) VALUES ('$title', '$shortdes', '$location')";
if ($mysqli->query($sql1) === TRUE){
	
	$sql2 = "SELECT title, shortdes, location, postdate FROM dig4503ajax1 ORDER BY postdate DESC LIMIT 1";
	$result = $mysqli->query($sql2);
	
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			//echo "The most recent reported UFO sighting is: " . $row["title"]. " at " . $row["location"] . "<br><h3 class='sighting_des'>" . $row["shortdes"]."</h3><br>";		
			$title = $row["title"];
			$loc = $row["location"];
			$des = $row["shortdes"];
		}
			$test = array();
			$test['title'] = $title;
			$test['location'] = $loc;
			$test['shortdes'] = $des;
			
			echo json_encode($test);
	} else {
		echo "0 results";
	}
} else {
	echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}

$mysqli->close();						

exit;


//test and clean input data
function test_input($data) {
   $data = trim($data);
   $data = str_replace("'","''",$data);
   $data = str_replace('"','""',$data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>