<?php
include("db.php");

//create a variable called $pagename which contains the actual name of the page
$pagename="Product info";

//retrieve the product id passed from the previous page using the $_GET superglobal variable
//store the value in a variable called $prodid
$prodid=$_GET['u_prodid'];
//echo "<p>Selected product Id: ".$prodid;

//query the product table to retrieve the record for which the value of the product id 
//matches the product id of the product that was selected by the user
$prodSQL="select prodId, prodName, prodPicName, 
prodDescrip , prodPrice, prodQuantity from product
where prodId=".$prodid;

//execute SQL query 
$exeprodSQL=mysqli_query($con, $prodSQL) or die(mysqli_error());
//create array of records & populate it with result of the execution of the SQL query
$thearrayprod=mysqli_fetch_array($exeprodSQL);


//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";

//display window title
echo "<title>".$pagename."</title>";
//include head layout 
include ("headfile.html");

echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";
	echo "<h3><b>".$thearrayprod['prodName']."<br><br></h3></b>";
	echo "<img id='images' src=images/".$thearrayprod['prodPicName'].">"."<br><br>";
	echo "<p>".$thearrayprod['prodDescrip']."<br></p>";
	echo "<p>"."Price : ".$thearrayprod['prodPrice']."<br></p>";
	echo "<p>"."Number in the stock :  ".$thearrayprod['prodQuantity']."<br></p><br>";
	
//display form made of one text box and one button for user to enter quantity
//pass the product id to the next page basket.php as a hidden value

echo "<form action=basket.php method=post>";
echo "<p><center>Quantity: ";
echo "<select name='stock'>";
for($i=1; $i<=$thearrayprod['prodQuantity']; $i++){//looping the option until $stock amount
echo "<option value=".$i.">$i</option>";
}	
echo "</select>";

echo "<input type=submit value='Add to Basket'>";
echo "<input type=hidden name=h_prodid value=".$prodid.">";
echo "</center>";
echo "</form>";
	
//include head layout
include("footfile.html");
?>
