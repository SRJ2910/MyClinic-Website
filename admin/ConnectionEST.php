<?php
class Connection{
   
  public function estConnection(String $setquery){
// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'clinic register';

// Server is localhost with
// port number 3307
$servername='localhost:3325';
// Checking for connections
 $mysqli = new mysqli($servername, $user,$password, $database);
if ($mysqli->connect_error) {
	die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
	}
	
	// SQL query to select data from database
	$sql =$setquery;
	$result = $mysqli->query($sql);
	$mysqli->close();
	return $result;
}

}
