<?php 

$mobile_name_search = $order = "";
$lower_bound = "100";
$upper_bound = "200000";
$battery = 1000;
$ui = $os = $no_rear = $connect = $screen_size = [];
$main_camera = $front_camera = 2;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if(!empty($_POST["mobile_name_search"]))$mobile_name_search = test_input($_POST["mobile_name_search"]);
  if(!empty($_POST["lower_price_limit"]))$lower_bound = test_input($_POST["lower_price_limit"]);
  if(!empty($_POST["higher_price_limit"]))$upper_bound = test_input($_POST["higher_price_limit"]);
  if(!empty($_POST["battery_input"]))$battery = test_input($_POST["battery_input"]);
  if(!empty($_POST["os_input"])) $os = $_POST["os_input"];
  if(!empty($_POST["ui_input"])) $ui = $_POST["ui_input"];
  if(!empty($_POST["no_rear_input"])) $no_rear = $_POST["no_rear_input"];
  if(!empty($_POST["main_camera_input"])) $main_camera = $_POST["main_camera_input"];
  if(!empty($_POST["front_camera_input"])) $front_camera = $_POST["front_camera_input"];
  if(!empty($_POST["conn_input"])) $connect = $_POST["conn_input"];
  if(!empty($_POST["screen_size_input"])) $screen_size = $_POST["screen_size_input"];
  if(!empty($_POST["priority"])) $order = $_POST["priority"];

}
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


if($ui != [])
	{
		$uiquery = " AND Ui IN (";
		foreach ($ui as $value) {
		# code...
			$uiquery = $uiquery." '".$value."',";
		} 
		$uiquery = substr($uiquery,0,-1).")";
	}
	else{
		$uiquery = "";
	}
if($os != [])
	{
		$osquery = " AND Os IN (";
		foreach ($os as $value) {
		# code...
			$osquery = $osquery." '".$value."',";
		} 
		$osquery = substr($osquery,0,-1).")";
	}
	else{
		$osquery = "";
	}
	if($no_rear != [])
	{
		$no_rear_query = " AND No_of_cameras IN (";
		foreach ($no_rear as $value) {
		# code...
			$no_rear_query = $no_rear_query." '".$value."',";
		} 
		$no_rear_query = substr($no_rear_query,0,-1).")";
	}
	else{
		$no_rear_query = "";
	}
	$conn_input_query = "";
	if($connect != [])
	{
		foreach ($connect as $value) {
		# code...
			$conn_input_query = $conn_input_query." AND ".$value." = 1 ";
		} 
		
	}
	$screen_size_query = "";
	if($screen_size != [])
	{
		$screen_size_query = " AND (";
		foreach ($screen_size as $value) {
		# code...
			$screen_size_query = $screen_size_query."Size BETWEEN ".$value." AND ".($value+0.5)." OR ";
		}
		$screen_size_query = substr($screen_size_query,0,-3).") "; 
		
	}
	switch ($order) {
		case 'lower':
			# code...
			$order_query = " ORDER BY SM.Price";
			break;
		case 'higher':
			# code...
			$order_query = " ORDER BY SM.Price DESC";
			break;
		case 'latest':
			# code...
			$order_query = " ORDER BY SM.Release_year DESC";
			break;
		default:
			# code...
		$order_query = " ORDER BY SM.Smartphone_name";
			break;
	}
	
$sql = "SELECT SM.S_id,Smartphone_name as 'Smartphone Name' ,Ram, Storage, Release_year AS 'Year', Battery, Ui AS UI, Os as OS, P_name as 'Proc Name' , P_brand as 'Proc Brand', Size AS 'Disp Size', Type_of_Display as 'Type of Display', Wifi, Bluetooth as BT, NFC, Fingerprint_scanner as FPS, Face_unlock, No_of_cameras as 'No of Cameras', Rear_primary_camera as Rear, Front_camera as Front, Price, Wifi,Bluetooth,NFC,Fingerprint_scanner FPS,Face_unlock FU from SMARTPHONE SM, PROCESSORS PR, SOFTWARE SO, DISPLAY DI, CONNECTIVITY CO, CAMERA CA WHERE SM.Soft_id = SO.Soft_id AND SM.Processor_id = PR.Processors_id and SM.Disp_id = DI.Disp_id and SM.Cn_id = CO.Cn_id and SM.S_id = CA.S_id"
	." AND SM.Smartphone_name LIKE '%".$mobile_name_search."%'" 
	." AND (SM.Price BETWEEN ".$lower_bound." AND ".$upper_bound.")"
	."  AND SM.Battery >=".$battery
	.$osquery.$uiquery.$no_rear_query
	." AND Rear_primary_camera >= ".$main_camera 
	." AND Front_camera >= ".$front_camera
	.$conn_input_query.$screen_size_query
	.$order_query
	;
function check($param) {
  if($param == 1){
  return "Yes";
  } else {
  	return "No";
  }
}

$result = $conn->query($sql);
if(!empty($result))
if ($result->num_rows > 0) {
    // output data of each row
	echo "<p style='color:white; background:blue;padding-left:45%;'>".$result->num_rows." results found.</p>";
    while($row = $result->fetch_assoc()) {
        echo 
        "<p >".
        "<img style='float:left;padding-left:10px;padding-top:60px;' src='".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/image/".$row["S_id"]."'><p style='padding-left:200px;background:#151719; color:white;padding-top:10px;padding-bottom:10px;'>".
        "Name: " . $row["Smartphone Name"]."<br>".
        "Release year: ".$row["Year"]."<br>".
        "RAM: ".$row["Ram"]." GB<br>".
        "Internal Memory: ".$row["Storage"]." GB<br>".
        "Battery: ".$row["Battery"]." mAH<br>".
        "UI: ".$row["UI"]."<br>".
        "OS: ".$row["OS"]."<br>".
        "Proc Name: ".$row["Proc Name"]."<br>".
        "Proc Brand: ".$row["Proc Brand"]."<br>".
        "Disp Size: ".$row["Disp Size"]." inches<br>".
        "Type of Display: ".$row["Type of Display"]."<br>".
        "No of Cameras: ".$row["No of Cameras"]."<br>".
        "Rear: ".$row["Rear"]." MP<br>".
        "Front: ".$row["Front"]." MP<br>".
        "Price:Rs. ".$row["Price"]."<br>".
        "Wifi: ".check($row["Wifi"])."  &nbsp&nbsp".//&nbsp adds extra space in html
        "Bluetooth: ".check($row["Bluetooth"])." &nbsp&nbsp".
        "NFC: ".check($row["NFC"])." &nbsp&nbsp".
        "Fingerprint Scanner: ".check($row["FPS"])." &nbsp&nbsp".
        "Face Unlock: ".check($row["FU"])."<br>".
        "</p></p><br><hr>";
    }
} else {
    echo "No results found!";
}
$conn->close();

?>