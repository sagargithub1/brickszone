<?php include'header.php' ?>
<?php if(isset($_SESSION['user'])){?>
<script>
    location.href = "BrickszoneCMS/dashboard.php"

</script>
<?php } ?>
<?php include'db.php' ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mb-5">
        <div class="col-12 col-sm-6">
            <div class="card o-hidden border-0 shadow-lg mt-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h1 class="text-center">Register</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <form action="register.php" method="post" class="user">
                                    <div class="form-group">
                                        <input type="username" name="uname" class="form-control form-control-user" placeholder="Full name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="number" class="form-control form-control-user" placeholder="Mobile number">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><b>Who are you?</b></label>

                                        <select class="form-control" name="whoareyou">
                                            <option value="user">User</option>
                                            <option value="broker">Broker</option>
                                            <option value="builder">Builder</option>

                                        </select>
                                    </div>
                                    <h6 class="text-center mt-3">Already registered? click here to <A href="signin.php">continue</A></h6>
                                    <input type="submit" class="btn btn-primary btn-user btn-block mt-5" value="Submit" name="submit">

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include'footer.php' ?>
<?php
if (isset($_POST['submit'])) {
  // collect value of input field
  $username = isset($_POST['uname']) ? $_POST['uname'] : "" ;
    $email =isset($_POST['email']) ? $_POST['email'] : "" ;
     $number = isset($_POST['number']) ? $_POST['number'] : "" ;
    $password = isset($_POST['pass']) ? $_POST['pass'] : "" ;
    $whoareyou = isset($_POST['whoareyou']) ? $_POST['whoareyou'] : "" ;
  if (empty($username)) {
    echo "<script>alert('Please fill the username');</script>";
      die;
  }
  if (empty($email)) {
    echo "<script>alert('Please fill the email');</script>";
      die;
  }
  if (empty($number)) {
    echo "<script>alert('Please fill the mobile number');</script>";
      die;
  }
  if (empty($password)) {
    echo "<script>alert('Please fill the password');</script>";
      die;
  }

$sql = "INSERT INTO users (`username`, `name`, `email`,`mobile_number`, `password`,`usertype`)
VALUES ('".$number."','".$username."', '".$email."', '".$number."', '".$password."', '".$whoareyou."')";

if ($conn->query($sql) === TRUE) {
         
$sql = "SELECT * FROM users WHERE mobile_number = '".$number."'";
$result = $conn->query($sql);
   
if ($result && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['user'] = $row;
       echo "<script>location.href = 'BrickszoneCMS/dashboard.php'</script>";
  }
} else {
  echo "<script>alert('Wrong user credential');</script>";
}
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
