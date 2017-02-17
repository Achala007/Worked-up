<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Registration Confirmation";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

/*Capturing the details entered in the form using $_POST super global variable
and storing them in to new variables*/
$fname =$_POST['firstName'];
$lname =$_POST['lastName'];
$address =$_POST['address'];
$pcode =$_POST['postCode'];
$tp =$_POST['telNo'];
$email =$_POST['emailAddress'];
$pword =$_POST['password'];	
$conpword =$_POST['confirmPassword'];

//validating empty fields
if(empty($fName)and empty($lName) and empty($address) and empty($pcode) and empty($tp) and empty($email) and empty($pword)and empty($conpword))
{
	echo "All fields are compulsory";
	echo"<p>go back to <a href='register.php'>Register</a>";
}
else
{	
	//validating for email format using preg_match() 
	$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/" ;
	if(!(preg_match($reg,$email)))
	{	
		echo "<p>Email not valid</p>";
		echo "<p>go back top<a href='register.php'>Register</a></p>";
	}
	else	
	{
		if($pword==$conpword)
		{
			//SQL query to insert a new user to the table
			$sqlInfo="INSERT INTO users(UsersFName,UsersLName,UsersAddress,UsersPostCode,UsersTelNo,UsersEmail,UsersPassword) 
			VALUES ('".$fName."','".$lName."','".$address."','".$pcode."','".$tp."','".$email."','".$pword."')";

			//executing the SQL query
			@$run-mysqli_query($conn,$sqlInfo);

			//Retriving error number using mysqli_errno()
			if (mysqli_errno($conn)==0)
			{		   
			   //Display registration confirmation page
				echo "New record created successfully";
				//Display link to login page
				echo "<p>go to<a href='login.php'>Login</a></p>";

			} 
			else 
			{
				// echo "Error: " . $sqlInfo . "<br>" . mysqli_error($conn);
						 
				if (mysqli_errno($conn)==1062)
				{
					//Error message on the unique constraint of the email is breached 
					echo "<br>There is an error with your registry the email you enter is already taken.";	
					//Redirect to the registration form
					echo "<p>go back<a href='register.php'>Register</a></p>";	
				}
			}
		}
		else
		{
			//Validating password and the confirmed password
			echo "<p>the two password you enterde do no match";
			echo "<p>please make sure you entered the correcly";
			//Redirecting to the resitration.php
			echo "<p>go back<a href='register.php'>Register</a></p>";
		}
		
	}	
}	
	echo "<p> ";


//include head layout
include("footfile.html");
?>
