<?php 

$un=$_POST['username'];
$p=$_POST['pass'];
$n=$_POST['nam'];
$e=$_POST['email'];
$ph=$_POST['phone'];
$cp=$_POST['cpass'];

$con = mysqli_connect("localhost","root","","login");
//$INSERT = "INSERT INTO registration (id, User-name, User-pass, namee, email, phone) VALUES (NULL,$un, $p, $n, $e, $ph)";
//mysqli_query($con,$INSERT);
//$sql = "INSERT INTO registration (`id`, `User-name`, `User-pass`, `name`, `email`, `phone`) VALUES (NULL,$un, $p, $n, $e, $ph)";
//$sql = "INSERT INTO registration (`id`, `user`, `pass`, `namee`, `email`, `phone`) VALUES (NULL,$un, $p, $n, $e, $ph)";
if($p != $cp) {
  echo "Pass dont match go and try again";
} else {
  $sql = "INSERT INTO `registration` (`id`, `user`, `pass`, `namee`, `email`, `phone`) VALUES (NULL, '$un', '$p', '$n', '$e', '$ph')";

if ($con->query($sql) === TRUE) {
  header("location: index.html");
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
}
?>