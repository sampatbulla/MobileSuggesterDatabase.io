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
$coninp = [];
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
if(!empty($_POST["conn_input"]))$coninp=test_input($_POST["conn_input"]);
$coninpname = $coninpval ="";
if($coninp != [])
	{
		foreach ($coninp as $value) {
		# code...
			$coninpname = $coninpname.$value.",";
			$coninpval = $coninpval."1,";
		}
			$coninpname = substr(coninpname,0,-1);
			$coninpval = substr($coninpval,0,-1);
		
	}
//<?php if (in_array("Wifi", $coninp)) echo "checked";
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

"SELECT SM.S_id,Smartphone_name as 'Smartphone Name' ,Ram, Storage, Release_year AS 'Year', Battery, Ui AS UI, Os as OS, P_name as 'Proc Name' , P_brand as 'Proc Brand', Size AS 'Disp Size', Type_of_Display as 'Type of Display', Wifi, Bluetooth as BT, NFC, Fingerprint_scanner as FPS, Face_unlock, No_of_cameras as 'No of Cameras', Rear_primary_camera as Rear, Front_camera as Front, Price, Wifi,Bluetooth,NFC,Fingerprint_scanner FPS,Face_unlock FU from SMARTPHONE SM, PROCESSORS PR, SOFTWARE SO, DISPLAY DI, CONNECTIVITY CO, CAMERA CA WHERE SM.Soft_id = SO.Soft_id AND SM.Processor_id = PR.Processors_id and SM.Disp_id = DI.Disp_id and SM.Cn_id = CO.Cn_id and SM.S_id = CA.S_id"
	." AND SM.Smartphone_name LIKE '%".$mobile_name_search."%'" 
	." AND (SM.Price BETWEEN ".$lower_bound." AND ".$upper_bound.")"
	."  AND SM.Battery >=".$battery
	.$osquery.$uiquery.$no_rear_query
	." AND Rear_primary_camera >= ".$main_camera 
	." AND Front_camera >= ".$front_camera
	.$conn_input_query.$screen_size_query
	.$order_query
	;




$sql = "INSERT INTO PROCESSORS(P_name,P_brand)
VALUES (".$pname.",".$pbrand.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in table ".;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO SOFTWARE(Ui,Os)
VALUES (".$ui.",".$os.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in table ".;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO CONNECTIVITY(".$coninpname.")
VALUES (."$coninpval.")";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in table ".;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO SMARTPHONE(Smartphone_name,Price,Ram,Storage,Release_year,Battery,Processor_id,Soft_id,Cn_id,Disp_id)
VALUES ()";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in table ".;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$sql = "INSERT INTO SMARTPHONE(Smartphone_name,Price,Ram,Storage,Release_year,Battery,Processor_id,Soft_id,Cn_id,Disp_id)
VALUES ()";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully in table ".;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
 ?>