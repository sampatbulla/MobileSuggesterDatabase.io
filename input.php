<!DOCTYPE html>
<html>
<head>
	<title>Insert new Smart Phone</title>
	<link rel="stylesheet" type="text/css" href="inputcss.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	  	<nav class="" id="nav">
	  		<a class="navbar-brand" href="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/");?>"><h2>OneMobile</h2></a>
	  		<h5></h5>
		</nav>
	<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/inputdb.php");?>">

<!-- Name: APPLE 11
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
Wifi: Yes   Bluetooth: Yes   NFC: Yes   Fingerprint Scanner: No   Face Unlock: Yes -->
		
		<div class = "main">
			<br>
			<br></div>
			<div id="input1">
 			<label class="attribute">Name: <br><input type="text" name="Name" placeholder="Smart Phone Name" required>  </label>
			<label class="attribute">Year: <br><input type="text" name="Release_year" placeholder="Release Year" required>  </label><br>
			<label class="attribute">RAM: <br><input type="text" name="RAM" placeholder="in GBs" required>  </label>
			<label class="attribute">Internal Memory: <br><input type="text" name="Internal_Memory" placeholder="in GBs" required>  </label><br>
			<label class="attribute">Battery: <br><input type="text" name="Battery" placeholder="in mAh" required>  </label>
			<label class="attribute">Disp Size: <br><input type="text" name="Disp_Size" placeholder="in inches" required>  </label><br>
			<label class="attribute">UI: <br><input type="text" name="UI" placeholder="" required>  </label>
			</div>
			<div id="input2">
			<label class="attribute">OS: <br><input type="text" name="OS" placeholder="" required>  </label>
			<label class="attribute2>Processor Name: <br><input type="text" name="Proc_Name" placeholder="" required>  </label>
			<label class="attribute2">Processor Brand: <br><input type="text" name="Proc_Brand" placeholder="" required>  </label><br>
 			<label class="attribute">Type of Display: <br><input type="text" name="Type_of_Display" placeholder="" required>  </label>
			<label class="attribute2">No of Cameras: <br><input type="text" name="No_of_Cameras" placeholder="" required>  </label><br>
			<label class="attribute2">Rear Camera Resolution: <br><input type="text" name="Rear" placeholder="in Megapixels" required>  </label>
			<label class="attribute2">Front Camera Resolution: <br><input type="text" name="Front" placeholder="in Megapixels" required>  </label><br>
			<label class="attribute2">Price: <br><input type="text" name="Price" placeholder="in Rs." required>  </label>
			</div>
			<div class="Connectivity" id="Connectivity" >

				<label id="connect">
				<input type="checkbox" name="conn_input[]" value = "Wifi">Wifi 
				</label>
				<label id="connect">
				<input type="checkbox" name="conn_input[]" value = "Bluetooth">Bluetooth 
				</label>
				<label id="connect">
				<input type="checkbox" name="conn_input[]" value = "NFC">NFC 
				</label>
				<label id="connect">
				<input type="checkbox" name="conn_input[]" value = "Fingerprint_scanner">Fingerprint Scanner 
				</label id="connect">
				<label>
				<input type="checkbox" name="conn_input[]" value = "Face_unlock">Face Unlock 
				</label>

			</div>
			<br>
			<input type="file" id ="fileToUpload" name="fileToUpload" accept="image/*" required="">
			<br><br><br>
			<div><input type="submit" name="submit"></div>
	</form>
	
</body>
</html>