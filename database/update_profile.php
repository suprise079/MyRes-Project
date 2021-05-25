<?php 

error_reporting(0);

$ID = "2";
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$telephone = $_POST['tel'];
$price = $_POST['price'];
$campus = $_POST['campus'];
$description = $_POST['description'];

require 'sql_connection.php';

if (!empty($full_name)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Res_Name = '$full_name' WHERE Res_ID = $ID");
}

if (!empty($email)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Email = '$email' WHERE Res_ID = $ID");
}

if (!empty($password)){
	$sql = myqi_query($conn, "UPDATE users SET  User_Password = '$password' WHERE Res_ID = $ID");
}

if (!empty($telephone)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Telephone = '$telephone' WHERE Res_ID = $ID");
}

if (!empty($price)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Price_Acrreditation = '$price' WHERE Res_ID = $ID");
}

if (!empty($campus) and $campus != 'Select campus'){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Campus = '$campus' WHERE Res_ID = $ID");
}

if (!empty($description)){
	$sql = mysqli_query($conn, "UPDATE accomodation SET Description = '$description' WHERE Res_ID = $ID");
}


$sql = mysqli_query($conn, "SELECT Res_Name, Address, Campus, Price_Accreditation, Sharing, Email, Telephone, Description, picture_id FROM accomodation WHERE Res_ID = $ID") or die("Not running".mysqli_error($conn));

$results = mysqli_fetch_assoc($sql);

$profile_pic = (!isset($_SESSION["image"]))?"..\pictures\profile_dummy.png":$results['picture_id'];




/*print_r($results);*/







 ?>