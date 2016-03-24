<?php
$q=$_GET["q"];
$q = "/".$q."/";
echo $q."<br>";

$xmlDoc = new DOMDocument();
$xmlDoc->load("data/ufo_data.xml");

$x=$xmlDoc->getElementsByTagName('title');
//var_dump($x);
//echo $q;

/*for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }else{
		//echo "doesn't equal q";
		//var_dump($x);
	}
  }else{
	  echo "not nodetpye 1";
  }
}*/

/*foreach ($x as $item) {
	$match = preg_grep($q, explode("\n", $item->nodeValue));
	print_r($match)."<br>";
	if($match == $q){
    	echo $item->nodeValue . "\n";
	}else{
		echo "not equal to q";
	}
}*/

foreach ($x as $item) {
    	echo $item->nodeValue . "\n";
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}
?> 