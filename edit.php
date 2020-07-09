<?php
include 'connection.php';
include "views/header.php";

$id = $_REQUEST['id'];

$edit = "SELECT * FROM records WHERE id=$id";

$result = mysqli_query($connection, $edit);

$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
	

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

$update = "UPDATE records SET roll_no = '$rollno', first_name = '$firstname',last_name = '$lastname',
father_name = '$fathername', gender = '$gender', contact_no = '$contactno', city = '$city', cnic_no = '$cnicno', domain_name = '$domainname', email = '$email' WHERE id = $id";

if (mysqli_query($connection, $update)) {
	echo "Data Updated";
} else {
	echo "Error";
}


}





?>

<div class="container">
        <form action="" method="post">
          <div class="form-group">
            <label for="roll_no">Roll Number</label>
              <input type="int" class="form-control" name = "roll_no" id="roll_no" value="<?php echo $row['roll_no'] ; ?>">
          </div>

          <div class="form-group">
            <label for="first_name">First Name</label>
              <input type="text" class="form-control" name = "first_name" id="first_name" value="<?php echo $row['first_name'] ; ?>">
          </div>

          <div class="form-group">
            <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name = "last_name" id="last_name" value="<?php echo $row['last_name'] ; ?>">
          </div>

<div class="form-group">
<label for="father_name">Father Name</label>
<input type="text" class="form-control" name = "father_name" id="father_name" value="<?php echo $row['father_name'] ; ?>">
</div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" class="form-control" name = "gender" id="gender" value="<?php echo $row['gender'] ; ?>">
  </div>

  <div class="form-group">
    <label for="contact_no">Contact Number</label>
    <input type="bigint" class="form-control" name = "contact_no" id="contact_no" value="<?php echo $row['contact_no'] ; ?>">
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name = "city" id="city" value="<?php echo $row['city'] ; ?>">
  </div>

  <div class="form-group">
    <label for="cnic_no">CNIC Number</label>
    <input type="bigint" class="form-control" name = "cnic_no" id="cnic_no" value="<?php echo $row['cnic_no'] ; ?>">
  </div>

  <div class="form-group">
    <label for="domain_name">Domain Name</label>
    <input type="text" class="form-control" name = "domain_name" id="domain_name" value="<?php echo $row['domain_name'] ; ?>">
  </div>

  <div class="form-group">
    <label for="email">Roll Number</label>
    <input type="email" class="form-control" name = "email" id="email" value="<?php echo $row['email'] ; ?>">
  </div>

    <button type="submit" class="btn btn-primary mb-2" name="update">Update</button>


</form>
      </div>


<?php
include "views/footer.php";
?>