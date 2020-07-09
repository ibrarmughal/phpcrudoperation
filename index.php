<?php
include "views/header.php";
?>


      <div class="container">
        <form action="createpage.php" method="post">
          <div class="form-group">
            <label for="roll_no">Roll Number</label>
              <input type="int" class="form-control" name = "roll_no" id="roll_no" placeholder="Roll Number">
          </div>

          <div class="form-group">
            <label for="first_name">First Name</label>
              <input type="text" class="form-control" name = "first_name" id="first_name" placeholder="First Name">
          </div>

          <div class="form-group">
            <label for="last_name">Last Name</label>
              <input type="text" class="form-control" name = "last_name" id="last_name" placeholder="Last Name">
          </div>

<div class="form-group">
<label for="father_name">Father Name</label>
<input type="text" class="form-control" name = "father_name" id="father_name" placeholder="Father Name">
</div>

  <div class="form-group">
    <label for="gender">Gender</label>
    <input type="text" class="form-control" name = "gender" id="gender" placeholder="Gender">
  </div>

  <div class="form-group">
    <label for="contact_no">Contact Number</label>
    <input type="bigint" class="form-control" name = "contact_no" id="contact_no" placeholder="Contact Number">
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name = "city" id="city" placeholder="City">
  </div>

  <div class="form-group">
    <label for="cnic_no">CNIC Number</label>
    <input type="bigint" class="form-control" name = "cnic_no" id="cnic_no" placeholder="CNIC Number">
  </div>

  <div class="form-group">
    <label for="domain_name">Domain Name</label>
    <input type="text" class="form-control" name = "domain_name" id="domain_name" placeholder="Domain Name">
  </div>

  <div class="form-group">
    <label for="email">Roll Number</label>
    <input type="email" class="form-control" name = "email" id="email" placeholder="name@example.com">
  </div>

    <button type="submit" class="btn btn-primary mb-2">Submit</button>


</form>
      </div>

<?php
include "views/footer.php";
?>