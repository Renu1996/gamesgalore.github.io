<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "gamingplace";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) ? die("Connect failed: %s\n". $conn -> error)

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>