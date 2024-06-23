<?php
$server="localhost";
$user="root";
$pwd="";
$dbname="codedb";
$con=mysqli_connect($server,$user,$pwd,$dbname);
if(!$con)
{
    echo "Failed to connect...";
}
?>
