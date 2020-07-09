<?php
include 'connection.php';


$id = $_REQUEST['id'];

$delete = "DELETE FROM records WHERE id=$id";

$result = mysqli_query($connection, $delete);


header("location:display.php");
?>