<?php 
        include "includes/db.php";

if(isset($_POST["submit"]))
{
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];


$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$mobile = mysqli_real_escape_string($conn, $mobile);

$password = mysqli_real_escape_string($conn, $password);
$password = md5($password);

$sql = "SELECT email FROM tbl_customer WHERE email='$email'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1)
{
	echo "Sorry...This email already exist..";
}
else
{
$query = mysqli_query($conn, "INSERT INTO tbl_customer (cname, email, cpass, c_mobile)VALUES ('$name', '$email', '$password','$mobile')");

if($query)
{
	echo "Thank You! you are now registered.";
	header('Location: Thanks.php');

}
die(mysqli_error($conn));
}

}
 ?>