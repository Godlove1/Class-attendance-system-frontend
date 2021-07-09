//this is thw=e connection tothe database system //
//the database used is mysql with XAMMP locally

<?php
$con = mysqli_connect("localhost","root","","classattendance");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
