<style type="text/css">
	.main{
		background-color: #f1f1f1;
		margin: 40px 0px;
		padding:20px 0px;
		width: auto;
	}
	
	.description{
		margin-left: 40px;
		display: grid;
		grid-template-columns:  repeat(2,1fr);
		grid-gap: 0.5em;
		max-width: 1000px;
	}
	.main img{
		
		float: left;
		padding: 35px;
		height: 300px;
	}
	p{
		
		line-height: 1.3;
		font-size: 0.9em;
	}
	.last{
		display: grid;
		grid-auto-flow: column;
		grid-gap: 0px;
		grid-template-columns:  repeat(5,minmax(40px,80px));
		margin-left: 250px;
	}
	.last img{
		
		height: 40px;
		width: 40px;
	}
	.price{
		display: block;
		font-size: 1.5em;
		margin: 20px;
		margin-left:250px;
	}
</style>
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
$username = "your_username";
$password = "your_password";
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
  return "";
  } else {
  	return "hidden";
  }
}

$result = $conn->query($sql);
if(!empty($result))
if ($result->num_rows > 0) {
    // output data of each row
	echo "<p style='color:white; background:blue;padding-left:45%;'>".$result->num_rows." results found.</p>";
    while($row = $result->fetch_assoc()) {
        echo 
        "<div class =\"main\">".
        "<img src='".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/image/".$row["S_id"]."'><div class=\"description\">".
        "<div>"."Name: " . $row["Smartphone Name"]."</div>".
        "<div>"."Release year: ".$row["Year"]."</div>".
        "<div>"."RAM: ".$row["Ram"]." GB</div>".
        "<div>"."Internal Memory: ".$row["Storage"]." GB</div>".
        "<div>"."Battery: ".$row["Battery"]." mAH</div>".
        "<div>"."UI: ".$row["UI"]."</div>".
        "<div>"."OS: ".$row["OS"]."</div>".
        "<div>"."Proc Name: ".$row["Proc Name"]."</div>".
        "<div>"."Proc Brand: ".$row["Proc Brand"]."</div>".
        "<div>"."Disp Size: ".$row["Disp Size"]." inches</div>".
        "<div>"."Type of Display: ".$row["Type of Display"]."</div>".
        "<div>"."No of Cameras: ".$row["No of Cameras"]."</div>".
        "<div>"."Rear: ".$row["Rear"]." MP</div>".
        "<div>"."Front: ".$row["Front"]." MP</div>"."</div>".
        "<div class = \"price\">"."Price: Rs. ".$row["Price"]."</div>".
        "<div class=\"last\">
        <div ".check($row["Wifi"])."><img class=\"icons\" title=\"wifi\" src= \"".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/wifi.svg\""."></div>".
        "<div ".check($row["FPS"])."><img class=\"icons\" title=\"Fingerprint Scanner\" src= \"".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/fingerprint_scanner.svg\""."></div>".
        "<div ".check($row["Bluetooth"])."><img class=\"icons\" title=\"Bluetooth\" src= \"".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/bluetooth.svg\""."></div>".
        "<div ".check($row["NFC"])."><img class=\"icons\" title=\"NFC\" src= \"".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/nfc.svg\""."></div>".
        "<div ".check($row["FU"])."><img class=\"icons\" title=\"Face Unlock\" src= \"".htmlspecialchars(dirname($_SERVER['REQUEST_URI']))."/face_unlock.jpg\""."></div>".
        "</div></div><hr>";
    }
} else {
    echo "No results found!";
}
$conn->close();

?>
