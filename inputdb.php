<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$coninp = [];
$name=test_input($_POST["Name"]);
$year=test_input($_POST["Release_year"]);
$ram=test_input($_POST["RAM"]);
$intmem=test_input($_POST["Internal_Memory"]);
$bat=test_input($_POST["Battery"]);
$ui=test_input($_POST["UI"]);
$os=test_input($_POST["OS"]);
$pname=test_input($_POST["Proc_Name"]);
$pbrand=test_input($_POST["Proc_Brand"]);
$dispsize=test_input($_POST["Disp_Size"]);
$tod=test_input($_POST["Type_of_Display"]);
$no=test_input($_POST["No_of_Cameras"]);
$rear=test_input($_POST["Rear"]);
$front=test_input($_POST["Front"]);
$price=test_input($_POST["Price"]);
if(!empty($_POST["conn_input"]))$coninp=($_POST["conn_input"]);
$coninpname = $coninpval ="";
if($coninp != [])
	{
		foreach ($coninp as $value) {
		# code...
			$coninpname = $coninpname.$value.",";
			$coninpval = $coninpval."1,";
		}
			$coninpname = substr($coninpname,0,-1);
			$coninpval = substr($coninpval,0,-1);
		
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
/*
"SELECT SM.S_id,Smartphone_name as 'Smartphone Name' ,Ram, Storage, Release_year AS 'Year', Battery, Ui AS UI, Os as OS, P_name as 'Proc Name' , P_brand as 'Proc Brand', Size AS 'Disp Size', Type_of_Display as 'Type of Display', Wifi, Bluetooth as BT, NFC, Fingerprint_scanner as FPS, Face_unlock, No_of_cameras as 'No of Cameras', Rear_primary_camera as Rear, Front_camera as Front, Price, Wifi,Bluetooth,NFC,Fingerprint_scanner FPS,Face_unlock FU from SMARTPHONE SM, PROCESSORS PR, SOFTWARE SO, DISPLAY DI, CONNECTIVITY CO, CAMERA CA WHERE SM.Soft_id = SO.Soft_id AND SM.Processor_id = PR.Processors_id and SM.Disp_id = DI.Disp_id and SM.Cn_id = CO.Cn_id and SM.S_id = CA.S_id"
	." AND SM.Smartphone_name LIKE '%".$mobile_name_search."%'" 
	." AND (SM.Price BETWEEN ".$lower_bound." AND ".$upper_bound.")"
	."  AND SM.Battery >=".$battery
	.$osquery.$uiquery.$no_rear_query
	." AND Rear_primary_camera >= ".$main_camera 
	." AND Front_camera >= ".$front_camera
	.$conn_input_query.$screen_size_query
	.$order_query
	;*/



$sql = "INSERT INTO PROCESSORS(Processors_id,P_name,P_brand)
SELECT MAX(Processors_id)+1 ,'".$pname."','".$pbrand."' FROM PROCESSORS";
$result1 = $conn->query($sql);
if ($result1 === TRUE) {
    echo "<br>New record created successfully in table PROCESSORS";
    $proc_id = $conn->insert_id;

} else {
$sqlcheck = "SELECT @PROC";

$result2 = $conn->query($sqlcheck);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $proc_id = $row["@PROC"];
    }
} else {
	echo "No results found!";
}
$result2->close();
}


$sql = "INSERT INTO SOFTWARE(Soft_id,Ui,Os)
SELECT MAX(Soft_id)+1 ,'".$ui."','".$os."' FROM SOFTWARE";

$result1 = $conn->query($sql);
if ($result1 === TRUE) {
    echo "<br>New record created successfully in table SOFTWARE";
    $soft_id = $conn->insert_id;

} else {
$sqlcheck = "SELECT @PROC";

$result2 = $conn->query($sqlcheck);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $soft_id = $row["@PROC"];
    }
} else {
	echo "No results found!";
}
$result2->close();
}

$sql = "INSERT INTO DISPLAY(Disp_id,Size,Type_of_Display)
SELECT MAX(Disp_id)+1 ,'".$dispsize."','".$tod."'  FROM DISPLAY";
$result1 = $conn->query($sql);
if ($result1 === TRUE) {
    echo "<br>New record created successfully in table DISPLAY";
    $disp_id = $conn->insert_id;

} else {
$sqlcheck = "SELECT @PROC";

$result2 = $conn->query($sqlcheck);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $disp_id = $row["@PROC"];
    }
} else {
	echo "No results found!";
}
$result2->close();
}
$sql = "INSERT INTO CONNECTIVITY(Cn_id,".$coninpname.") SELECT MAX(Cn_id)+1 ,". $coninpval." FROM CONNECTIVITY";
$result1 = $conn->query($sql);
if ($result1 === TRUE) {
    echo "<br>New record created successfully in table CONNECTIVITY";
    $connectivity_id = $conn->insert_id;

} else {
$sqlcheck = "SELECT @PROC";

$result2 = $conn->query($sqlcheck);
if ($result2->num_rows > 0) {
    // output data of each row
    while($row = $result2->fetch_assoc()) {
        $connectivity_id = $row["@PROC"];
    }
} else {
	echo "No results found!";
}
$result2->close();
}

$sql = "INSERT INTO SMARTPHONE(S_id, Smartphone_name, Price, Ram, Storage, Release_year, Battery, Processor_id, Soft_id, Cn_id, Disp_id) SELECT MAX(S_id)+1,'".$name."',".$price.",".$ram.",".$intmem.",".$year.",".$bat.",".$proc_id.",".$soft_id.",".$connectivity_id.",".$disp_id." FROM SMARTPHONE";

$result1 = $conn->query($sql);
if ($result1 === TRUE) {

	$s=0;
	$target_dir = "image/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $s=1;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	$sqlcheck = "CALL SETCAMERA(".$no.",".$rear.",".$front.")";

	$result2 = $conn->query($sqlcheck);
	if (($result2 === TRUE) && $s==1) {
    	echo "<br>Smartphone entry is created successfully";
	}


}
else {
	echo "Smartphone Already Exists with same name and specification<br>";
}
//$result2->close();


$conn->close();
}
else{
	echo "Error 404: Page not found!";
}
?>