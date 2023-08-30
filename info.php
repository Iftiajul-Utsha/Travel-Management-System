<?php
include_once('infop.php');
if(isset($_POST['Cox Bazar'])) {
	$que="SELECT * FROM `information` WHERE pname='Cox's Bazar'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Saint Martin'])) {
	$que="SELECT * FROM `information` WHERE pname='Saint Martin'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Shundorbon'])) {
	$que="SELECT * FROM `information` WHERE pname='Shundorbon'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Guliakhali'])) {
	$que="SELECT * FROM `information` WHERE pname='Guliakhali'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Bichanakandi'])) {
	$que="SELECT * FROM `information` WHERE pname='Bichanakandi'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Sajek'])) {
	$que="SELECT * FROM `information` WHERE pname='Sajek'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Jaflong'])) {
	$que="SELECT * FROM `information` WHERE pname='Jaflong'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Kuakata'])) {
	$que="SELECT * FROM `information` WHERE pname='Kuakata'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Ratargul'])) {
	$que="SELECT * FROM `information` WHERE pname='Ratargul'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['Tanguar Haor'])) {
	$que="SELECT * FROM `information` WHERE pname='Tanguar Haor'";
	$result = mysqli_query($db, $que);
}
if(isset($_POST['search_p'])) {
	$search = $_POST['search_p'];
	$que="SELECT * FROM `information` WHERE pname='$search'";
	$result = mysqli_query($db, $que);
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/info.css">
	<title>Information</title>
</head>
<body>
	<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="mainPage.html"><img src="earth-globe.png" alt="Logo" style="width:36px;height:36px"></a></li>
	        <div class="search">
                <form method="POST" action="info.php">
                  <input type="text" name="search_p" placeholder="Search.." size="50">
              
                  <input type="image" name="submit_p" src="search_icon.png" alt="Search image" style="width:22;height:22; margin-left: 35px;">
                </form>
            </div>
	      </ul>
	      <ul class="list2">
	        <li><a href="mainPage.html">Home</a></li>
	        <li><a id="long" href="destination.html">Destination</a></li>
	        <li><a href="gallery.html">Gallery</a></li>
			<li><a href="feedback.html">Feedback</a></li>
			<li><a href="index.html">Logout</a></li>
	      </ul>
	    </ul>
	</div>
	<div class="hedder">
		<h1>Place Information</h1>
	</div>
	<div class="container">
		<div class="description-container" style="border: 1px solid black;">
			<div class="box1">
				<?php
					while($rows = mysqli_fetch_assoc($result))
					{
				?>
				<img src="<?php echo $rows['pi_main']; ?>" alt="Taj Mahal Image" style="width: auto;height: 302px;">
			</div>
			<div class="description">
				<h1><?php echo $rows['pname']; ?><h1>
				<p style="text-align: justify;"><?php echo $rows['pdescription']; ?></p>
				<p style="color:red; top: -10px;" >Package: <?php echo $rows['package']; ?> Tk</p>
			</div>
			<a href="booking.html" style="top: -20px; float: right; margin-right: 27%;">Book Tour</a>
		</div>
		<div class="image-container" style="border: 1px solid black">
			<div class="box">
		        <div class="imgBox">
		          <img src="<?php echo $rows['pi1']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
		        </div>
	        </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi2']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
	        </div>
	      </div>
	      <div class="box">
	        <div class="imgBox">
	          <img src="<?php echo $rows['pi3']; ?>" alt="Taj Mahal Image" style="width: auto;height: 270px;">
	        </div>
	        	<?php
					}
				?>
	      </div>
		</div>
	</div>
</body>
</html>