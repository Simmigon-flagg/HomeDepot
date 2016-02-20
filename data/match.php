<?php include 'DatabaseConnection.php';?>

<?php

$sql = "SELECT TRADE FROM code_hammer.pros";
$result = $conn->query($sql);
echo "<select class='form-control' name='project'>";
    echo "<option value=''>Select One</option>"; 
    $result =  $conn->query($sql);
   foreach ($result as $row){
     echo "<option value=$row[TRADE]>$row[TRADE]</option>";  
    }
    echo "</select>";

?>