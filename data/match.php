<?php

// run query
$query = mysql_query("SELECT * FROM table");

// set array
$array = array();

// look through query
while($row = mysql_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row;

  // OR just echo the data:
  echo $row['username']; // etc

}

// debug:
print_r($array); // show all array data
echo $array[0]['username']; // print the first rows username