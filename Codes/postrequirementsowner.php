


<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];

$sweeping = $_POST["sweep"];
$cooking = $_POST["cook"];
$cleaning = $_POST["clean"];

if($sweeping == '')
	$sweeping = 0;

if($cooking == '')
	$cooking = 0;

if($cleaning == '')
	$cleaning = 0;


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
$tsql= "insert into Request(OID,SweepingSal,CleaningSal,CookingSal) values ($id,$sweeping,$cleaning,$cooking)";
sqlsrv_query($conn, $tsql);
echo "<script type='text/javascript'>alert('Your request has been posted successfully!');</script>";
echo "<script type='text/javascript'>setTimeout(\"location.href = 'ownerpage.php';\",1);</script>";
?>

