<!DOCTYPE html>
<html class = "mobile_suggester">
<head>
	<script>
	function search() {
  	document.getElementById("mobile_suggester_form").submit();
	}
	function verify_and_search() {

  	var x =document.getElementsByName("lower_price_limit")[0].value;
  	var y =document.getElementsByName("higher_price_limit")[0].value;
  	if (parseInt(x) > parseInt(y)) {
  		document.getElementById("invalid_input").innerHTML = "Invalid input!";
  	} else {
  	document.getElementById("invalid_input").innerHTML = "";
  	document.getElementById("mobile_suggester_form").submit();
}
	}
	</script>
	<style>
		.error {color: #FF0001;}
	

	#sidebar{
		width: 14.5%;
		scroll-behavior: auto;
		border-right:  5px solid ;
		max-height: 600px;
		overflow: scroll;
		scroll-behavior: auto;
	}
	#b{
		display: flex;
		flex-wrap:;
	
	}
	#reset{
		padding-left:  20px;
		padding-right: 20px;
		margin: 10px;
		margin-left: 45px;
	}
	#search{
		background-color: #151719;
		color: white;
		padding-left: 10px;
		box-shadow: 0 10px 8px rgba(64 ,64 ,64, .5);
	}
	#price{
		padding-left: 10px;
	}
	#battery{
		position: relative ;
		justify-content: center;
		color: white;
		background-color: #151719;
		box-shadow: 0 10px 8px rgba(64 ,64 ,64, .5);
		padding: 10px 35px;
	}
	#op{
		padding: 10px 35px;
	}
	#ui{
		position: relative ;
		justify-content: center;
		color: white;
		background-color: #151719;
		box-shadow: 0 10px 8px rgba(64 ,64 ,64, .5);
		padding: 10px 35px;
	}
	#screen{
		padding: 10px 35px;
	}
	#camera{
		position: relative ;
		justify-content: center;
		color: white;
		background-color: #151719;
		box-shadow: 0 10px 8px rgba(64 ,64 ,64, .5);
		padding: 10px 35px;
	}
	#border{
		border-bottom:  2px solid white; 
	}
	iframe{
		float: right;
	}

	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="maincss.css">
	<title>Mobile Suggester : Find the Phone that suits your needs</title>
</head>
<body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href=""><h2>Mobile Suggester</h2></a>
	  <h5>Unbox the best</h5>
	</nav>
	

	<?php
	// define variables and set to empty values
	$mobile_name_search = $order = "";
	$lower_bound = "100";
	$upper_bound = "200000";
	$battery = 1000;
	$ui = $os = $no_rear = $connect = $screen_size = [];
	$main_camera = $front_camera = 2;		
	?>
	<nav id="navbar-example2" class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">Filter</a>
	  <ul class="nav nav-pills">
	    <li class="nav-item">
	      <a class="nav-link" href="#Battery" >Battery</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#OperatingSystem">Operating System</a>
	    </li>
	    <li class="nav-item dropdown">
	      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
	      <div class="dropdown-menu">
	        <a class="dropdown-item" href="#userinterface">User Interface</a>
	        <a class="dropdown-item" href="#screensize">Screen Size</a>
	        <a class="dropdown-item" href="#camera">Camera</a>
	     	<a class="dropdown-item" href="#connect">Connectivity & More</a>
	      </div>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#"></a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#"></a>
	    </li>
	  </ul>
	</nav>
	<div id="b">
	<div id="sidebar">
	<div class ="main_filter">
		<form   id ="mobile_suggester_form" method="post" action="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/myphp1.php");?>"  target="suggester">
			<button type="reset" id="reset">reset</button>
			<label name= "filter" id="search">		
				<div name = "Search by name" >
					Search by name:<input type="text" onkeyup = "search()" name="mobile_name_search" placeholder="Mobile name" value="">
				</div><br>
			</label><br>
			<label name= "filter" id="price">
				<div name = "Price limit">
					Price <br> Rs.<input type="text"  onkeyup = "verify_and_search()" name="lower_price_limit" value="<?php echo $lower_bound;?>"><br>
					  Rs.<input type="text" onkeyup = "verify_and_search()" name="higher_price_limit" value="<?php echo $upper_bound;?>">
					 <span class = "error" id= "invalid_input"></span><br>
				</div>
			</label>

			<div oninput="search()" >

			<label name= "filter" id="battery">		
			<label name = "filter_heading" >Battery</label>
			<div name = "Battery" >
				
				<label>
					<input type="radio" name="battery_input"  value = 1500>1500 mAh & above 
				</label><br>
				<label>
					<input type="radio" name="battery_input"  value = 2000>2000 mAh & above 
				</label><br>
				<label>
					<input type="radio" name="battery_input"  value = 2500>2500 mAh & above 
				</label><br>
				<label>
					<input type="radio" name="battery_input"  value = 3000>3000 mAh & above 
				</label><br>
				<label> 
					<input type="radio" name="battery_input"  value = 3500>3500 mAh & above 
				</label><br>
				<label> 
					<input type="radio" name="battery_input"  value = 4000>4000 mAh & above  
				</label><br>

			</div>
			</label><br>
			
			<label name= "filter" id="op">		
			<label name = "filter_heading" id="OperatingSystem">Operating System</label>
			<div name = "OS"> 
				
				<label>
					<input type="checkbox" name="os_input[]" value = "android" >Android 
				</label><br>
				<label>
					<input type="checkbox" name="os_input[]" value = "ios">IOS 
				</label><br>
				
			</div>
			</label><br>
			
			<label name= "filter" id="ui">
			<label name = "filter_heading" id="userinterface">User Interface</label>
			<div name = "User Interface"> 
				
				<label>
				<input type="checkbox" name="ui_input[]" value = "oneui">Oneui  
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "zui">Zui  
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "oxygen">Oxygen  
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "miui">Miui 
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "samsung Experience">Samsung Experience  
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "emui">Emui 
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "stock">Stock  
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "funtouch">Funtouch 
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "color">Color 
				</label><br>
				<label>
				<input type="checkbox" name="ui_input[]" value = "ios">IOS 
				</label><br>
				
			</div>
			</label><br>
			
			<label name= "filter" id="screen">
			<label name = "filter_heading" id="screensize">Screen Size</label>
			<div name = "Screen Size"> 
				
				<input type="checkbox" name="screen_size_input[]" value = "4.5">4.5 inch - 5.0 inch 
				</label><br>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "5.0">5.0 inch - 5.5 inch 
				</label><br>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "5.5">5.5 inch - 6.0 inch 
				</label><br>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "6.0">6.0 inch - 6.5 inch 
				</label><br>
				<label>
				<input type="checkbox" name="screen_size_input[]" value = "6.5">6.5 inch & above 
				</label><br>
				
			</div>
			</label><br>

			<label name= "filter" id="camera">
			<label name = "filter_heading" id="camera">Camera</label>
			<div name = "No. of Rear Cameras" id="border"> 
				
				<label>
				<label name = "filter_sub_heading">Number of Rear Cameras</label><br>
				<input type="checkbox" name="no_rear_input[]" value = "1">Single camera 
				</label><br>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "2">Dual Camera 
				</label><br>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "3">Triple Cameras 
				</label><br>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "4">Quad Cameras 
				</label><br>
				<label>
				<input type="checkbox" name="no_rear_input[]" value = "5">Penta Cameras 
				</label><br>
				
			</div>
			<div name = "Main Camera" id="border">
				<label name = "filter_sub_heading">Main Camera Resolution</label> <br>
				
				<label>
				<input type="radio" name="main_camera_input" value = "4">4 MP & above  
				</label><br>
				<label>
				<input type="radio" name="main_camera_input" value = "8">8 MP & above  
				</label><br>
				<label>
				<input type="radio" name="main_camera_input" value = "12">12 MP & above  
				</label><br>
				<label>
				<input type="radio" name="main_camera_input" value = "16">16 MP & above 
				</label><br>
				<label>
				<input type="radio" name="main_camera_input" value = "20">20 MP & above 
				</label><br>
				<label>
				<input type="radio" name="main_camera_input" value = "48">48 MP 
				</label><br>
				
			</div>
			<div name = "Front Camera" id="border">
				<label name = "filter_sub_heading">Front Camera Resolution</label><br> 
		
				<label>
				<input type="radio" name="front_camera_input" value = "5">5 MP & above 
				</label><br>
				<label>
				<input type="radio" name="front_camera_input" value = "8">8 MP & above 
				</label><br>
				<label>
				<input type="radio" name="front_camera_input" value = "12">12 MP & above 
				</label><br>
				<label>
				<input type="radio" name="front_camera_input" value = "16">16 MP & above 
				</label><br>
				
			</div>
			</label><br>

			<label name= "filter">
			<label name = "filter_heading" id="connect">Connectivity & More</label><br>
			<div name = "Connectivity">

				<label>
				<input type="checkbox" name="conn_input[]" value = "Wifi">Wifi 
				</label><br>
				<label>
				<input type="checkbox" name="conn_input[]" value = "Bluetooth">Bluetooth 
				</label><br>
				<label>
				<input type="checkbox" name="conn_input[]" value = "NFC">NFC 
				</label><br>
				<label>
				<input type="checkbox" name="conn_input[]" value = "Fingerprint_scanner">Fingerprint Scanner 
				</label><br>
				<label>
				<input type="checkbox" name="conn_input[]" value = "Face_unlock">Face Unlock 
				</label><br>

			</div>
			</label> <br>
			<select name="priority">
	 			<option value="alpha">a-z</option>
	  			<option value="lower">cost lower to higher</option>
	  			<option value="higher">cost higher to lower</option>
	  			<option value="latest">latest</option>
	  		
			</select>
		</div>
		</form>	
	</div>
	</div>

	<iframe name = "suggester" style="border:none;height:20000px;width:85.5%" src="<?php echo htmlspecialchars(dirname($_SERVER['REQUEST_URI'])."/myphp1.php");?>"></iframe>
	</div>
</body>
</html>
