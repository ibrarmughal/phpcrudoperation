<?php
include "views/header.php";


include 'connection.php';

$rollno      = $_POST['roll_no'];
$firstname   = $_POST['first_name'];
$lastname    = $_POST['last_name'];
$fathername  = $_POST['father_name'];
$gender      = $_POST['gender'];
$contactno   = $_POST['contact_no'];
$city        = $_POST['city'];
$cnicno      = $_POST['cnic_no'];
$domainname  = $_POST['domain_name'];
$email       = $_POST['email'];

$insert = "INSERT INTO records(roll_no, first_name, last_name, father_name, gender, contact_no, city, cnic_no, domain_name, email) VALUES ('$rollno ', '$firstname', '$lastname', '$fathername', '$gender', '$contactno', '$city', '$cnicno', '$domainname', '$email ')";

if (mysqli_query($connection, $insert)) {
	echo "Data Inserted";
} else {
	echo "There is an Error";
}


include "views/footer.php";
?>