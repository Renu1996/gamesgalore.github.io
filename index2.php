<?php
include 'database.php';

$conn = OpenCon();

echo "Connected Successfully";

CloseCon($conn);

?>