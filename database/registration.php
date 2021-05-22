<?php 
require "..\database\sql_connection.php";

$residence = $_POST['resname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];
$phy_address = $_POST['phyAddress'];
$city = $_POST['city'];
$campus = $_POST['campus'];
$price = $_POST['nsfas'];
$room = $_POST['room'];
$address = $phy_address.$city;

$password = $_POST[];

mysqli_query($conn, "INSERT INTO accomodation (Res_Name, Address, Campus,Price_Accreditation, Sharing, Email, Telephone, Description)
    VALUES('$residence', '$address', '$campus', '$price', '$room', '$email', '$telephone', '$description')");


?>