<?php
 
// Get value of clicked button
$button = $_GET['button'];

session_start();
if (!isset($_SESSION["curr"])) {
	$_SESSION["curr"] = 1;
}
else if ($button == "next") {
	$_SESSION["curr"]++;
}
else if ($button == "prev") {
	$_SESSION["curr"]--;
}


 
// carousel array of images
$revolver = array('concentric-rinds.jpg', 'concentric-rinds2.jpg', 'sphere-spirals.jpg', 'sphere-fish.jpg', 'circle-limit.jpg', 'double-planet.jpg', 'gravity.jpg', 'stars1.jpg', 'stars2.jpg', 'drawing-hands.jpg');





// Combine red and white tables into one multidimensional table
$carousel = array(
  "curr" => $_SESSION["curr"] % 10,
  "revolver" => $revolver,
);

// Finally depending on the button value, JSON encode our winetable and print it
if ($button == "next") {
  print json_encode($carousel);
}
else if ($button == "prev") {
  print json_encode($carousel);
}
else {
  print json_encode($carousel);
}
 
?>