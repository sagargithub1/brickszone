<?php include 'header.php' ?>
<?php if(isset($_SESSION['user'])){?>
<script>
    location.href = "BrickszoneCMS/dashboard.php"

</script>
<?php } ?>
<?php include 'db.php' ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mb-5">
        <div class="col-12 col-sm-6">
            <div class="card o-hidden border-0 shadow-lg mt-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-12 mt-3">
                            <h1 class="text-center">Sign In</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <form action="signin.php" method="post" class="user">
                                    <div class="form-group">
                                        <input type="username" name="uname" class="form-control form-control-user" placeholder="Mobile number">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="pass" class="form-control form-control-user" placeholder="Password">
                                    </div>
                                    <h6 class="text-center mt-3">New user? <A href="register.php">Register Now</A></h6>
                                    <input type="submit" class="btn btn-primary btn-user btn-block mt-4" value="Submit" name="submit">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>
<?php
if (isset($_POST['submit'])) {
  // collect value of input field
  $username = isset($_POST['uname']) ? $_POST['uname'] : "" ;
    $password =isset($_POST['pass']) ? $_POST['pass'] : "" ;
     
  if (empty($username)) {
    echo "<script>alert('Please fill the username');</script>";
      die;
  }
  if (empty($password)) {
    echo "<script>alert('Please fill the password');</script>";
      die;
  }
  
$sql = "SELECT * FROM users WHERE mobile_number = '".$username."' AND password = '".$password."'  AND active = '1' LIMIT 1";
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
$conn->close();
}
