<html> 

<head>
	<title> Contact </title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
   	  <link rel="stylesheet" type="text/css" href="contact.css">
  	  <script type="text/javascript" src="contact.js"></script>
</head> 

<body>

<?php
$servername = "us-cdbr-azure-east-a.cloudapp.net";
$username = "bdf7fc6b334bd9";
$password = "57c924c2";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>

<div ng-app="" ng-init="name='nathan'">
 	<!--	<p>Name : <input type="text" ng-model="name"></p> -->
 	<h1>Contact {{name}}</h1>
</div>



<div id="container">

	<div class="section">
	Phone Number: 
	</div>

	<br><br>
	
	<div class="section">
	Email: 
	</div>

</div>

</body>

</html>