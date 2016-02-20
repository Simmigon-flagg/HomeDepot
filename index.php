<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Code Hammer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">About</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">Input</a></li>
        <li><a href="#filter">Filter</a></li>
        <li><a href="#contact">Match</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Code Hammer <br> You Can Do It We Can Help</h1> 
</div>

<div id="about" class="container-fluid">

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

mysqli_select_db($conn,"code_hammer");

$sql = "INSERT INTO diy (idDIY , DIYName, Budget, zip, jobType)
VALUES ('5', 'nathan','100', '30096', 'garden');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
?>

<!-- Container (About Section) -->

CUST_ID,COMPANY NAME,2015 PRO XTRA SPEND,TRADE,ZIP
<br>

</h1>
Layout your project 
</h1>

<input type="text" class="form-control" id="name" placeholder="Name">
<input type="text" class="form-control" id="perferedCompany" placeholder="Perfered Company">
<input type="text" class="form-control" id="budget" placeholder="Budget">
<input type="text" class="form-control" id="zip" placeholder="Zip">
<input type="text" class="form-control" id="job" placeholder="Job">
<button class="btn btn-default" type="submit" onclick="getInput()"> Submit </button>
</div>

<hr>

     <?php
            $servername = "us-cdbr-azure-east-a.cloudapp.net";
            $username = "bdf7fc6b334bd9";
            $password = "57c924c2";
            $conn = mysql_connect($servername, $username, $password);

            $db =  mysql_select_db("code_hammer",$conn);
            $query = mysql_query("select * from pros");

       
        ?>


      <div id="filter">
          <h2>Select Pro</h2> 
        <table>
            <tr>
                <td>IdPros</td>
                <td>Company Name</td>
                <td>TRADE</td>
                <td>ZIP</td>
            </tr>
        </div>

            <?php
               while ($row = mysql_fetch_array($query)) {
                   echo "<tr>";
                   echo "<td>".$row[idPros]."</td>";
                   echo "<td>".$row[COMPANY_NAME]."</td>";
                   echo "<td>".$row[TRADE]."</td>";
                   echo "<td>".$row[ZIP]."</td>";
                   echo "</tr>";
               }
            ?>

<script type="text/javascript">
$("#filter tr").click(function() {
    var selected = $(this).hasClass("highlight");
    $("#filter tr").removeClass("highlight");
    if(!selected)
            $(this).addClass("highlight");

    var $row = jQuery(this).closest('tr');
    var $columns = $row.find('td');

    $columns.addClass('row-highlight');
    var values = "";

    jQuery.each($columns, function(i, item) {
        values = values + 'td' + (i + 1) + ':' + item.innerHTML + '<br/>';
        alert(values);
    });
    console.log(values);
</script>
       
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>Company</th>
        <th>Price</th>
        <th>Trade</th>
        <th>ZIP</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Truzing Collective</td>
        <td>$100,000</td>
        <td>Electrician</td>
        <td>22180</td>
      </tr>
    </tbody>
  </table>
  </div>


<hr>

<!-- Container (Contact Section) -->
<div class="bg-grey">
<div id="leftFilter" class="sidePiece"> </div>
<div id="rightFilter" class="sidePiece"> </div>
<div id="contact" class="container-fluid">
  <div ng-app="" ng-init="name='Nathan'">
  <!--  <p>Name : <input type="text" ng-model="name"></p> -->
  <h1>Contact {{name}}</h1>
  </div>

  <div class="row">
    <div class="col-sm-4">
      <button onclick = "findPro()"> </button>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>	 
    </div>
    <div class="col-sm-8"> 
      Company Name: <p id="CompanyName"> </p>
      Spent: <p id="Spent"> </p>
      Trade: <p id="Trade"> </p>
      Zip: <span class="glyphicon glyphicon-map-marker"></span> <p id="Zip"> </p>
    </div>
  </div>
    <button> Not who I was looking for </button>
</div>
</div>

<footer class="container-fluid text-center">
  
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>


