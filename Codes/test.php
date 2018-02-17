<?php
  if (isset($_POST['submit'])) {
    $example = $_POST['example'];
    $example2 = $_POST['example2'];
    echo $example . " " . $example2;
  }
?>
<form action="" method="post">
  Example value: <input name="example" type="text" />
  Example value 2: <input name="example2" type="text" />
  <input name="submit" type="submit" />
</form>


<h1>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Name :  </b>  </div><div class="col-sm-6"><?php echo $row['Name']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Username :</b>  </div><div class="col-sm-6"><?php echo $row['Username']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Gender : </b> </div><div class="col-sm-6"><?php echo $row['Gender']; ?></div><br>  
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Age :</b></div><div class="col-sm-6"> <?php echo $row['age']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Emaid id :</b> </div><div class="col-sm-6"><?php echo $row['Email']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Phone No:</b> </div><div class="col-sm-6"><?php echo $row['Phone']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>City :</b> </div><div class="col-sm-6"><?php echo $row['City']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Aadhar No :</b> </div><div class="col-sm-6"><?php echo $row['Aadhar']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Expectation: </b></div><div class="col-sm-6"><?php echo $row['Expectations']; ?></div><br>
              <div class="col-sm-4"></div><div class="col-sm-2"><b>Address :</b>  </div><div class="col-sm-6"><?php echo $row['Address']; ?></div><br>





              <div id="salary">
            <h3>Choose your preferred salary:</h3><br>
              <select name="sal">
                  <option value="0"> Select Salary</option>
                  <option value="1">< 1000</option>
                  <option value="2">1000 - 2000</option>
                  <option value="3">2000 - 3000</option>
                  <option value="4"> > 3000</option>
             </select>
        </div>
