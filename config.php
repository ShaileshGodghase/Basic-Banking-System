<?php 

$server="localhost";
$username="root";
$password="";
$db="sbg_bank";

/*
$server="sql308.epizy.com";
$username="epiz_29095374";
$password="CK3fFloFdxx";
$db="epiz_29095374_SBGBank";
*/
$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
