<!DOCTYPE html>
<?php
include('session.php');

//including the database connection file
include_once("database.php");

$user_check=$_SESSION['login_user'];

$result = mysqli_query($mysqli, "SELECT * FROM membership"); // using mysqli_query instead
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>

.container-fluid1 {
	background-color : #004d1a;
	margin : 10;
	height : 80px;
}

.container-fluid {
	background-color : #004d1a;
}

ul {
	
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #004d1a;
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 20px 20px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: black;
}

.active {
    background-color:  #001a00;
}

.copyright {
	margin-top : 50px;
}

.copyright {
	color:#ffff00;
	text-transform:uppercase;
	font-weight:600;
	font-size:16px;
	text-shadow:none;
}


td {
	text-align:left;
    background-color:  #003300;
    color: white;
	height: 30px;
	width: 50px;
}

.button {
    background-color: #009933; 
    border: none;
    color: white;
    padding: 15px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
	float: right;
}


</style>
  <title>My Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	<a href="AdministratorHome.php" class="navbar-left"><img src="images/000.png" width="70" height="70"></a>
      <a class="navbar-brand" href="AdministratorHome.php"><h2><b><span> &nbsp &nbsp FSKKP&nbsp &nbsp &nbsp &nbsp &nbsp </h2></a></b>
    </div>
    <ul class="nav navbar-nav">
     <li><a href="AdministratorHome.php" class="active"><h3>Home</h3></a></li>
	 <li><a href="registration.php"><h3>Manage Membership</h3></a></li>
	 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><h3>Membership Fee<span class="caret"></span></h3></a>
									<ul class="dropdown-menu">
										<li><a href="viewmembership.php"><h3>Membership Payment Record</a></li>
									</ul></li>
	 <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><h3>Financial<span class="caret"></span></h3></a>
									<ul class="dropdown-menu">
										<li><a href="financial.php"><h3>Membership Fee, Donation & Expenses</a></li>
										<li><a href="viewreport.php"><h3>Status & financial Report</a></li>
									</ul></li>
	 <li><a href="annoucementboard.php"><h3>Annoucement Board</h3></a></li>								
	 <li><a href="event.php"><h3>Event</h1></a></li>
	 <li><a href="main_forum.php"><h3>e-Forum</h1></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right"><a href="logout.php">
      <button class="btn btn-danger navbar-btn" style="width:120px;"><h3>Log Out</button></a>
    </ul>
  </div>
</nav>
<body background="images/slider/pic.jpg">				
	
	<div>
	<marquee direction=right scrollamount=20><b><h2><font color="#ffff00" >Welcome To ALUMNI UMP-FSKKP : <?php echo $login_session; ?></font></h2></b></marquee>
	</div>
	
	<div>
	<br>
	<br>
	<br>
	<br> 
	
			<center><font size=10 color="#cca300"><b>Membership Fee Information</b></font></center>
		
<br><br>
		
		<center><form action="membershipSearch.php" method="GET">
        <input type="text" name="query"size="100" />
        <input type="submit" value="Search" /></center>
		
<br><br>
		
	<form>
	<table border="1" cellpadding=40 width="80%" align="center" cellspacing=100 >
	
	<tr>
		<td><font color="yellow">ALUMNI'S NAME</td>
		<td><font color="yellow">USERNAME</td>
		<td><font color="yellow">DATE OF PAYMENT</td>
		<td><font color="yellow">PAYMENT DURATION</td>
		<td><font color="yellow">TOTAL PAYMENT FOR PARTICULAR YEARS (RM)</td>
		<td><font color="yellow">LIFE FEE MEMBERSHIP (RM)</td>
		<td><font color="yellow">TOTAL MEMBERSHIP PAYMENT</td>
		<td><font color="yellow">DUEDATE DEACTIVE ACCOUNT  ALUMNI</td>
	</tr>
	
	<br>

	<?php 
	//while($row = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($row = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['date']."</td>";	
		echo "<td>".$row['yearM']."</td>";
		echo "<td>".$row['yearly']."</td>";
		echo "<td>".$row['life_fee']."</td>";
		echo "<td>".$row['payment']."</td>";
		echo "<td>".$row['duedate']."</td>";		
	}
	?>
	</table>
	</div>
	
	

 </body> 
 
 <footer>
		<div class="container-fluid1">
		<div align="right">
		<div class="copyright">
		<br><br>&copy; April 2018 by UMP-FSKKP ALUMNI. All Rights Reserved.
		</div>
		</div>
		</div>
	</footer>
</html>