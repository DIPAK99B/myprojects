<?php
$un = $_POST['user'];
$pas = $_POST['pass'];
$con = mysqli_connect("localhost","root","","login");
$sql = "SELECT * from registration where user='".$un."' AND pass='".$pas."' " ; 
$result = mysqli_query($con,$sql);
$rows = mysqli_num_rows($result);
if(($rows)== 1)
{
	echo "successfully logged in";
	// header("location: https://www.youtube.com"); 
	header("location: index.html");
	exit();
}
else {
	echo" you have enterd incorrect password ";
	exit();
}
echo"database selected";
?>