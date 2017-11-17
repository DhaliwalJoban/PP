<?php 
        include "includes/db.php";

if(isset($_POST["submit"]))
{
$name = $_POST["your_name"];
$email = $_POST["your_email"];
$enquiry = $_POST["your_enquiry"];


$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$enquiry = mysqli_real_escape_string($conn, $enquiry);



$query = mysqli_query($conn, "INSERT INTO contact (c_email, c_mess)VALUES ('$email', '$enquiry')");

if($query)
{
	echo "Thank You! you are now registered.";
	

}
die(mysqli_error($conn));
}

 ?>