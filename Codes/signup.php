<html>

<header>
    <title>Sign Up!</title>
	<link rel="stylesheet" href="CSS\style.css"/>
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<img src="CSS/SwachhGharLogo.jpg" style="height: 90px; float: left; margin-left: 150px;"><br>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 

  <script>
    $(document).ready(function(){
            $("#servant").show();
            $("#owner").hide();
        $("#1").click(function(){
            $("#servant").hide();
            $("#owner").show();
        });
    $("#2").click(function(){
      $("#servant").show();
        $("#owner").hide();
    });
});

</script>

</header>


<body>



<div class="signup">
  <div class="signup-form">
      <div class="signup-header">
        <h1>SignUp</h1>
      </div><br><br>
        <input id ="2" type="button" value="House Maid" class="signup-button" />
        <input id="1" type="button" value="Owner" class="signup-button" />
  </div>


    <div id="servant">
      <div class="signup-form">
          <form name="servantinput" id="s" method="post" action="storeservantdetails.php">
            <h3>Name:</h3>
            <input name="name" type="text"  placeholder="Name" required="required" /><br>
            <h3>Gender:</h3>
            <input type="radio" name="gender" value="male" checked><font color="white"> Male</font>
            <input type="radio" name="gender"  value="female"> <font color="white">Female</font> <br>
            <h3><br>Age:</h3>
            <input name="age" type="number"  placeholder="Age" /><br>
            <h3>Email ID:</h3>
            <input name="emailid" type="email"  placeholder="Email ID" /><br>
            <h3>Phone Number:</h3>
            <input name="phonenumber" type="number" placeholder="Phone Number" /><br>
            <h3>Address:</h3>
            <input name="address" type="text" placeholder="Address" /><br>
            <h3>City:</h3>
            <input name="city" type="text" placeholder="City" /><br>
            <h3>Aadhar Number:</h3>
            <input name="aadhar" type="number" placeholder="Aadhar Number" /><br>
            <h3>Number of houses working at present:</h3>
            <input name="noofhouse" type="number" placeholder="Number of houses working at present" /><br>
            <h3>Work willing to do:</h3><br>
            <input type="checkbox" name="work_list[]" value="Sweeping"><label><font color="white">Sweeping</label></font>
            <input type="checkbox" name="work_list[]" value="Cooking"><label><font color="white">Cooking</label><br/></font>
            <input type="checkbox" name="work_list[]" value="Cleaning"><label><font color="white">Cleaning</label></font>
            <input type="checkbox" name="work_list[]" value="Gardening"><label><font color="white">Gardening</label><br/><br></font>
            <h3>Your Expectations towards Owner:</h3>
            <input name="expectations" type="text" placeholder="Your Expectations towards Owner" /><br>
            <h3>Your past experiences:</h3>
            <input name="experiences" type="text" placeholder="Your past experiences" /><br>
            <h3>Username:</h3>
            <input name="username" type="text" placeholder="Username"/><br>
            <h3>Password:</h3>
            <input name="pass" type="password" placeholder="Password"/>
            <h3>Confirm Password:</h3>
            <input name="cpass" type="password" placeholder="Confirm Password"/> 
            <br>
            <input type="submit" value="signup" class="signup-button" />
            <br>
          </form>
      </div>
    </div>

    <div id="owner">
      <div class="signup-form">
          <form name="ownerinput" id="o" method="post" action="storeownerdetails.php">
            <h3>Name:</h3>
            <input name="name" type="text" placeholder="Name" required="required" /><br>
            <h3>Gender:</h3>
            <input type="radio" name="gender" value="male" checked><font color="white"> Male</font>
            <input type="radio" name="gender" value="female"> <font color="white">Female</font> <br>
            <h3><br>Age:</h3>
            <input name="age" type="number" placeholder="Age" /><br>
            <h3>Email ID:</h3>
            <input name="emailid" type="email" placeholder="Email ID" /><br>
            <h3>Phone Number:</h3>
            <input name="phonenumber" type="number" placeholder="Phone Number" /><br>
            <h3>Address:</h3>
            <input name="address" type="text" placeholder="Address" /><br>
            <h3>City:</h3>
            <input name="city" type="text" placeholder="City" /><br>
            <h3>Aadhar Number:</h3>
            <input name="aadhar" type="number" placeholder="Aadhar Number" /><br>
            <h3>Your Expectations towards Workers:</h3>
            <input name="expectations" type="text" placeholder="Your Expectations towards Workers" /><br>
            <h3>Username:</h3>
            <input name="username" type="text" placeholder="Username" /><br>
            <h3>Password:</h3>
            <input name="pass" type="password" placeholder="Password"/>
            <h3>Confirm Password:</h3>
            <input name="cpass" type="password" placeholder="Confirm Password"/>
            <br>
            <input type="submit" value="signup" class="signup-button" />
            <br>
          </form>
        </div>
    </div>
</div>
</body>

</html> 
