<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <style>
.myDiv {
  border: 5px outset red;
  background-color: lightblue;
  text-align: center;
}
</style>
   </head>
   
<body>
  
  <nav>
    <div class="menu">
      <div class="logo">
        <a href="#">HT Process Control Pvt Ltd</a>
      </div>
      <ul>
        
        <li><a href="../index.html">Home</a></li>
     <!-- Wil be created - www.codingnepalweb.com -->
        <li><a href="#">About</a></li>
        <!-- Wil be created - www.codingnepalweb.com -->
        <li><a href="#">Services</a></li>
        <!-- Wil be created - www.codingnepalweb.com -->
        <li><a href="#">Contact</a></li>
        <!-- Wil be created - www.codingnepalweb.com -->
        <li><a href="#">Feedback</a></li>
      </ul>
    </div>

<div class="myDiv">


<?php
$servername = "38.17.53.117:14234";
$username = "admin";
$password = "WzFdWHa7";
$dbname = "ScannerData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$CylID= $_GET['CylID'] or $CylID= $_POST['CylID'];


$sql = "SELECT * FROM Info WHERE CylID='$CylID'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Cylinder id: " . $row["CylID"]. " - Tare weight: " . $row["Tare"]. " DateCode " . $row["DateC"]. " <br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>
  </nav>
  <div class="img"></div>

  </body>
 </html>