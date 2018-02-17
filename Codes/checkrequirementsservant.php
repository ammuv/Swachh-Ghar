


<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];

$serverName = "myserver-2018.database.windows.net";
$connectionOptions = array(
    "Database" => "SwachhGhar",
    "Uid" => "sampledb",
    "PWD" => "Arunvishal13"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}
$tsql= "SELECT * FROM request where username = '$name'";
echo "<script type='text/javascript'>alert('$tsql');</script>";
$getResults= sqlsrv_query($conn, $tsql);









