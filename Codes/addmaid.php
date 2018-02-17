
<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
$maidid = $_POST['maidid'];
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

	$tsql= "insert into HouseOwnerMaid(OID,MID,CookingSal,SweepingSal,CleaningSal) values ($id,$maidid,$cooking,$sweeping,$cleaning)";
	echo "<script type='text/javascript'>alert('$tsql');</script>";
	sqlsrv_query($conn, $tsql);  

?>


