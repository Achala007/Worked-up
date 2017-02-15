
<?php
$con = mysqli_connect("localhost","root","","tutorial");

// Check connection
if (!$con)
{
    die('Could not connect: ' . mysqli_error());
}else{

    echo "connection success";
}
mysqli_select_db($con,"tutorial");?>