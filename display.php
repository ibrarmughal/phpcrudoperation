<?php
include 'connection.php';
include 'views/header.php';
$pages = "SELECT * FROM records";

$result = mysqli_query($connection, $pages);
?>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Roll No</th>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Contact No</th>
      <th scope="col">City</th>
      <th scope="col">CNIC No</th>
      <th scope="col">Domain Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
?>


    <tr>
      <th scope="row"><?php echo $row["id"]; ?></th>
      <td><?php echo $row["roll_no"]; ?></td>
      <td><?php echo $row["first_name"]; ?></td>
      <td><?php echo $row["last_name"]; ?></td>
      <td><?php echo $row["father_name"]; ?></td>
      <td><?php echo $row["gender"]; ?></td>
      <td><?php echo $row["contact_no"]; ?></td>
      <td><?php echo $row["city"]; ?></td>
      <td><?php echo $row["cnic_no"]; ?></td>
      <td><?php echo $row["domain_name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><a href = "edit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a><a href = "delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Delete</a></td>

    </tr>

<?php		
	}
?>
<?php	
} else {
	echo 'Error';
}
include 'views/footer.php';
?>
 </tbody>
</table>