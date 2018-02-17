


<?php
require './PHPMailer-master/PHPMailerAutoload.php';

	$name =  $_POST["name"];
	$gender =  $_POST["gender"];
	$age =  $_POST["age"];
	$emailid =  $_POST["emailid"];
	$phonenumber =  $_POST["phonenumber"];
	$address =  $_POST["address"];
	$city =  $_POST["city"];
	$noofhouse =  $_POST["noofhouse"];
	$username =  $_POST["username"];
	$password =  $_POST["pass"];
	$expectations = $_POST["expectations"];
	$experiences = $_POST["experiences"];
	$aadhar = $_POST["aadhar"];
	$cpass = $_POST["cpass"];
	$sweeping = 'no';
	$cleaning = 'no';
	$cooking = 'no';
	$gardening = 'no';
	foreach($_POST['work_list'] as $selected){

		if($selected == 'Sweeping')
			$sweeping = 'yes';
		else if($selected == 'Cleaning')
			$cleaning = 'yes';
		else if($selected == 'Gardening')
			$gardening = 'yes';
		else if($selected == 'Cooking')
			$cooking = 'yes';
	}

	if($password == $cpass){

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

				echo "<script type='text/javascript'>alert('Welcome!');</script>";


			$sql= "insert into HouseMaid(Name,Age,Username,Password,Email,Phone,Address,City,Aadhar,Expectations,Gender,Experiences,HouseCount,Sweeping,Gardening,Cooking,Cleaning) values('$name',$age,'$username','$password','$emailid','$phonenumber','$address','$city','$aadhar','$expectations','$gender','$experiences',$noofhouse,'$sweeping','$gardening','$cooking','$cleaning')";

			sqlsrv_query($conn, $sql);
			send_mail();
			echo "<script type='text/javascript'>setTimeout(\"location.href = 'servantpage.php';\",1);</script>";
	}

	else{
			echo "<script type='text/javascript'>alert('Password not matching!');</script>";
			echo "<script type='text/javascript'>setTimeout(\"location.href = 'signup.php';\",1);</script>";
	}

function send_mail(){
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPAuth     = true;
	$mail->SMTPSecure   = "tls";
	$mail->Host         = "smtp.gmail.com";
	$mail->Port         = 587;
	$mail->Username     = "swachhgharr@gmail.com";
	$mail->Password     = "digitalindia";
	$mail->setFrom("swachhgharr@gmail.com","Swachh Ghar");
	$mail->addAddress('swachhgharr@gmail.com', 'Swachh');
	$mail->isHTML(true);
	$mail->Subject = 'Greetings from Swachh Ghar!';
 	$mail->Body = 'Hi '.$_POST["name"].' ! Thanks for joining with us! Hope you will have a good experience with us! Thank you!';
 	if (!$mail->send()) {
		echo "Oops ! There was a problem in sending the mail! Please try again ! " . $mail->ErrorInfo;
	} else {
		echo "We successfully received your mail ! Will contact you shortly !";
	}
 } 


?>

