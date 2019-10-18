<?php 

/*Name: APPLE 11
Release_year: 2019
RAM: 6
Internal Memory: 512
Battery: 2800
UI: Ios
OS: Ios
Proc Name: a13
Proc Brand: Apple
Disp Size: 6.0
Type of Display: AMOLED
No of Cameras: 2
Rear: 12
Front: 8
Price: 64000
Wifi: Yes   Bluetooth: Yes   NFC: Yes   Fingerprint Scanner: No   Face Unlock: Yes */

$name=test_input($_POST["Name"]);
$year=test_input($_POST["Release_year"]);
$ram=test_input($_POST["RAM"]);
$intmem=test_input($_POST["Internal Memory"]);
$bat=test_input($_POST["Battery"]);
$ui=test_input($_POST["UI"]);
$os=test_input($_POST["OS"]);
$pname=test_input($_POST["Proc Name"]);
$pbrand=test_input($_POST["Proc Brand"]);
$dispsize=test_input($_POST["Disp Size"]);
$tod=test_input($_POST["Type of Display"]);
$no=test_input($_POST["No of Cameras"]);
$rear=test_input($_POST["Rear"]);
$front=test_input($_POST["Front"]);
$price=test_input($_POST["Price"]);
$coninp=test_input($_POST["conn_input"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$servername = "localhost";
$username = "root";
$password = "Mysql@3q#";
$dbname = "MOBILE_SUGGESTER_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 ?>