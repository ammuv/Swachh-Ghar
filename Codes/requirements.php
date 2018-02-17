<?php
session_start();
$name=$_SESSION['name'];
$id=$_SESSION['id'];
?>

<html>

<header>
    <title>Post Requirements</title>
    <link rel="stylesheet" href="CSS\style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
    <img src="CSS/SwachhGharLogo.jpg" style="height: 90px; float: left; margin-left: 150px;"><br>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</header>

<style type="text/css">
    body input[type="checkbox"]{
        height : 30px;
        width : 30px;
    }   
</style>

<body>
    
<br><br><br><br>
<div class="topnav" id="myTopnav">
  <a href="ownerpage.php">Home</a>
  <a href="viewprofile.php">View Profile</a>
  <a href="viewmaids.php">View Maids</a>
  <a href="checkrequirementsowner.php">Check Requirements</a>
  <a href="requirements.php"  class="active">Post Requirements</a>
  <a href="financialdetails.php">Financial Details</a>
  <a href="index.html">Logout</a>
</div>

<html>


<header>
	<link rel="stylesheet" href="CSS\style.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

  <script>

        $(document).ready(function(){
            $("#cook").hide();
            $("#sweep").hide();
            $("#clean").hide();
            $("#button").hide();
        });


function cookchange(res){

    if(res.checked){
        $("#cook").show();
        $("#button").show();
    }

    else{
        $("#cook").hide();
    }
}

function sweepchange(res){

    if(res.checked){
        $("#sweep").show();
        $("#button").show();
    }

    else{
        $("#sweep").hide();
    }
}

function cleanchange(res){

    if(res.checked){
        $("#clean").show();
        $("#button").show();    
    }

    else{
        $("#clean").hide();
    }
}     

</script>

</header>

<body>
    <div class="login">
      <div class="login-form">
  		<form name="servant" action="postrequirementsowner.php" method="post">
		
		    <h1><font color="white" size="10" face="Garamond">What are you looking for?</font></h1><br>
		    <input id="s" type="checkbox" name="work_list[]" value="Sweeping" onchange="sweepchange(this);"><label><font size="6" color="white">Sweeping</font></label>
    		<input id="co" type="checkbox" name="work_list[]" value="Cooking" onchange="cookchange(this);"><label><font size="6" color="white">Cooking</font></label><br/>
    		<input id="cl" type="checkbox" name="work_list[]" value="Cleaning" onchange="cleanchange(this);"><label><font size="6" color="white">Cleaning</font></label> 

		    <div id="sweep">
		    	<input name="sweep" type="number" placeholder="Sweeping Salary like to offer"/><br>
		    </div>
		    <div id="cook">
		    	<input name="cook" type="number" placeholder="Cooking Salary like to offer"/><br>
		    </div>
		    <div id="clean">
		    	<input name="clean" type="number" placeholder="Cleaning Salary like to offer"/><br>
		    </div>
            <br><br>
            <input id="button" type="submit" value="Post">

		    <br>
	   </form>
     </div>
    </div>

</body>
</html>
