<?php include'header.php' ?>
<?php include'db.php' ?>
<section class="banner bg-holder bg-overlay-black-30" style="background-image: url(images/contactus.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-white text-center mb-2 "><u>Contact Us</u></h1>
                <div class="property-search-field bg-white">

                </div>
            </div>
        </div>
    </div>
</section>
<div class="row">
    <div class="col-1"></div>
    <div class="bg-white mt-5 col-10 d-flex justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"> <i class="fas fa-home"></i> </a></li>
                        <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Contact Us </span></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>'
    <div class="col-1"></div>
</div>
<hr>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-7">
            <h2>Address</h2>
            <p>Brickszone Propery Solutions<br>
                Runwal Centre, Brickszone Propery Solutions<br> Office No 120, First Floor Sai Commercial Building Next to, Near Lakhme Compound, Mumbai, Maharashtra 400088</p>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15085.448631979078!2d72.9148612!3d19.0478082!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf11676a4c85a8eef!2sBrickszone%20Propery%20Solutions!5e0!3m2!1sen!2sin!4v1604646514582!5m2!1sen!2sin" width="600" height="380" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-5">
            <h2 class="text-dark mb-4 mt-1">Enquiry</h2>
            <br>
            <form method="post" action="contact.php">
                <div class="form-group">
                    <input type="name" name="name" class="form-control" placeholder="Enter Name">
                </div><br>
                <div class="form-group">
                    <input type="number" name="number" class="form-control" placeholder="Enter Phone Number">
                </div><br>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email">
                </div><br>

                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Type a message" id="comment"></textarea>
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php include'footer.php' ?>
<?php
if (isset($_POST['submit'])) {
  // collect value of input field
  $name = isset($_POST['name']) ? $_POST['name'] : "" ;
    $number =isset($_POST['number']) ? $_POST['number'] : "" ;
     $email = isset($_POST['email']) ? $_POST['email'] : "" ;
    $message = isset($_POST['message']) ? $_POST['message'] : "" ;
  if (empty($name)) {
    echo "<script>alert('Please fill the name');</script>";
      die;
  }
  if (empty($number)) {
    echo "<script>alert('Please fill the mobile number');</script>";
      die;
  }
  if (empty($email)) {
    echo "<script>alert('Please fill the email');</script>";
      die;
  }
  if (empty($message)) {
    echo "<script>alert('Please fill the message');</script>";
      die;
  }

$sql = "INSERT INTO enquiry (`name`, `number`,`email`, `message`)
VALUES ('".$name."', '".$number."', '".$email."', '".$message."')";

if ($conn->query($sql) === TRUE) {
       unset($_POST);
    
  echo "<script>alert('Thank you for your message, We will get back to you soon.')</script>";
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
