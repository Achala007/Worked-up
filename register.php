<?php
session_start();
//create a variable called $pagename which contains the actual name of the page
$pagename="Register";

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>Customer Registration</h2>";

echo '<form action=getregister.php method=POST >

<table style="width:70%">
  <tr>
    <td>First Name</td>
    <td><input type="text" name="firstName" value="" style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Last Name</td>
    <td><input type="text" name="lastName" value=""style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="address" value=""style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Post Codes</td>
    <td><input type="text" name="postCode" value=""style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Tel No</td>
    <td><input type="text" name="telNo" value=""style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Email Address</td>
    <td><input type="text" name="emailAddress" value=""style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="text" name="password" value=""style="width:100%" required></td> 
  </tr>
  <tr>
    <td>Conferm Password</td>
    <td><input type="text" name="confirmPassword" value=""style="width:100%" required></td> 
  </tr>
    <tr>
    <td><input type="submit" value="Register"></td>
    <td><input type="reset" value="Clear form"></td> 
  </tr>
</table>

</form>';

//include head layout
include("footfile.html");
?>
