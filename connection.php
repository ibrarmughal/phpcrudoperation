<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'uetphp');

if($connection){

    echo"";
}

else

{

    die("Connecctyion failed because ".mysqli_connect_error());
}


?>