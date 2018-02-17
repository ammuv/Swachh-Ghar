


<div class="login"> 
  <div class="login-form">
  	  <input id ="search"  name="search" type="text" placeholder="Search by City Name"/>
      <input type="submit" value="Search" class="login-button" />
  </div>
</div>

<h3><center>Available Workers</center></h3>

<?php

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
$username = $_POST["username"];
$tsql= "SELECT * FROM temp where id in (1,2,3,4,5,6)";
echo "<script type='text/javascript'>alert('$tsql');</script>";
$getResults= sqlsrv_query($conn, $tsql);

if ($getResults == FALSE)
    echo (sqlsrv_errors());
//$sql = "insert into temp(id,name) values (6,'Kishore')";
//sqlsrv_query ($conn ,$sql);
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) { ?>
	<div class="grid">
	  Name of the servant : <?php echo $row['id']; ?> <br>
	  EMaid id : <?php echo $row['name']; ?> <br>
	  Name of the servant : <?php echo $row['id']; ?> <br>
	  EMaid id : <?php echo $row['name']; ?> <br>  
      <input type="submit" value="GetInfo" class="login-button" />
    </div>
<?php }
sqlsrv_free_stmt($getResults);
?>

