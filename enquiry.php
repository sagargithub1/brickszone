<?php include'header.php' ?>
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
                            <h1 class="text-center">Enquiry Now</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <form action="enquiry.php" method="post" class="user" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="name" name="name" class="form-control form-control-user" placeholder="Enter Name">
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
                                    <div class="form-group">
                                        <textarea class="border 0px form-control-user form-control" name="message" rows="5" cols="60" placeholder="Message"></textarea>

                                    </div>

                                    <input href="mailto:connectsagar@gmail.com" type="submit" class="btn btn-primary btn-user btn-block mt-5" value="Submit" name="submit">

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
  $name = isset($_POST['name']) ? $_POST['name'] : "" ;
    $email =isset($_POST['email']) ? $_POST['email'] : "" ;
     $number = isset($_POST['number']) ? $_POST['number'] : "" ;
    $message = isset($_POST['message']) ? $_POST['message'] : "" ;
  if (empty($name)) {
    echo "<script>alert('Please fill the name');</script>";
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
  if (empty($message)) {
    echo "<script>alert('Please fill the message');</script>";
      die;
  }

$sql = "INSERT INTO enquirynow (`name`, `email`,`number`, `message`)
VALUES ('".$name."', '".$email."', '".$number."', '".$message."')";

if ($conn->query($sql) === TRUE) {
       unset($_POST);
  echo "<script>alert('Thank you for your feedback')</script>";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
