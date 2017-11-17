<?php 

session_start();

        include "includes/db.php";

if(isset($_POST["submit"]))
{
$c_type = $_POST["c_type"];
$c_title = $_POST["c_title"];
$c_desc = $_POST["c_desc"];
//$mobile = $_POST["mobile"];


$c_type = mysqli_real_escape_string($conn, $c_type);
$c_title = mysqli_real_escape_string($conn, $c_title);
//$mobile = mysqli_real_escape_string($conn, $mobile);
$c_desc = mysqli_real_escape_string($conn, $c_desc);

$sql = "SELECT * FROM tbl_customer WHERE cname='$_SESSION['user']'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

if(mysqli_num_rows($result) == 1)
{
	echo "Sorry...This email already exist..";
}
else
{
$query = mysqli_query($conn, "INSERT INTO tbl_complains (cname, email, cpass, c_mobile)VALUES ('$name', '$email', '$password','$mobile')");

if($query)
{
	echo "Thank You! you are now registered.";
	header('Location: Thanks.php');

}
die(mysqli_error($conn));
}

}
 ?>