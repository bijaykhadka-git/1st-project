<?php
$servername = "localhost";
$username = "root";
$password = "xyz";
$dbname="bijay";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn) {
  echo "Connected successfully";
}
else {
    echo "Connection is failed";
}

?>