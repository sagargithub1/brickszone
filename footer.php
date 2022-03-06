<?php include'db.php' ?>
<?php 

    $query_property_type ="select * from property_type";
$result_property_type = $conn->query($query_property_type);

if ($result_property_type->num_rows > 0) {
  // output data of each row
  while($pt = $result_property_type->fetch_assoc()) {
    $property_type[] = $pt;
  }
} 

?>
<footer class="footer bg-light pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="footer-contact-info d-flex justify-content-center flex-column ">
                    <a href="index.php" class="text-dark b-4 ">Property in Andheri East</a><br>
                    <a href="index.php" class="text-dark b-4">Property in Ghorbunder Road</a><br>
                    <a href="index.php" class="text-dark b-4">Property in Kandivali</a><br>
                    <a href="index.php" class="text-dark b-4">Property in Mulund West</a>
                </div>
            </div>
            <div class="col-4">
                <div class="footer-contact-info d-flex justify-content-center flex-column ml-5">
                    <p><a href="index.php" class="text-dark b-4">Property in Dombivali</a><br>
                    <p> <a href="index.php" class="text-dark b-4">Property in Vashi</a><br>
                    <p> <a href="index.php" class="text-dark b-4">Property in Kharghar</a><br>
                    <p> <a href="index.php" class="text-dark b-4">Property in Koparkhaine</a>
                </div>
            </div>
            <div class="col-4">
                <div class="footer-contact-info d-flex justify-content-end flex-column ml-5">
                    <a href="index.php" class="text-dark b-4">Property in Thane</a><br>
                    <a href="index.php" class="text-dark b-4">Property in Badlapur</a><br>
                    <a href="index.php" class="text-dark b-4">Property in Klayan</a><br>
                    <a href="index.php" class="text-dark b-4">Property in Badlapur East</a>
                </div>
            </div>
        </div>
    </div>
</footer>

<footer class="footer bg-grey pt-5">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="footer-contact-info">

                    <p class="text-white">Brickszone helped thousands of clients to find the right property for their needs.</p>
                    <ul class="list-unstyled ">
                        <li> <b> <i class="fas fa-map-marker-alt"></i></b><span>Office No-120, First floor, Sai Commercial Building, Next to Runwal centre, Near Lakhme Compound, Mumbai - 400088</span> </li>
                        <li> <b><i class="fas fa-microphone-alt"></i></b><span>+91-9004980001</span> </li>
                        <li> <b><i class="fas fa-headset"></i></b><span>info@brickszone.com</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-3">
                <div class="footer-link  d-flex justify-content-center flex-column align-items-center ">
                    <ul class="list-unstyled">
                        <h6 class="text-white ">Get to know us</h6>
                        <p class=" mt-2 "><a href="about-us.php" class="text-white">About us </a></p>
                        <p class=" mt-1 "><a href="index.php" class="text-white">Careers</a></p>
                        <p class=" mt-1 "><a href="index.php" class="text-white">Blog</a></p>
                        <p class=" mt-1 "><a href="index.php" class="text-white">Testimonials</a></p>
                    </ul>
                </div>
            </div>

            <div class="col-4">
                <div class="footer-link  d-flex justify-content-center flex-column align-items-center ">
                    <ul class="list-unstyled">
                        <h6 class="text-white ">Useful links</h6>
                        <p class=" mt-2 "><a href="contact.php" class="text-white">Contact us</a></p>
                        <p class=" mt- "><a href="index.php" class="text-white">Privacy policy</a></p>
                        <p class=" mt- "><a href="index.php" class="text-white">FAQs</a></p>
                        <p class=" mt- "><a href="index.php" class="text-white">Disclaimer</a></p>
                    </ul>
                    <ul>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom bg-white">
        <div class="container">
            <div class="row ">
                <div class="col-md-2 ">
                    <a href="index.php"><img class="img-fluid footer-logo" src="images/up123.png" alt=""> </a>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled d-flex justify-content-start mt-2">
                        <li>
                            <a style='font-size:18px' href="#"> <i class="fab fa-facebook-f mr-2 "></i> </a>
                            <a style='font-size:18px' href="#"> <i class="fab fa-twitter mr-2"></i> </a>
                            <a style='font-size:18px' href="#"> <i class="fab fa-linkedin mr-2"></i> </a>
                            <a style='font-size:18px' href="#"> <i class="fab fa-pinterest mr-2"></i> </a>
                            <a style='font-size:18px' href="#"> <i class="fab fa-instagram mr-2"></i> </a>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3 text-center d-flex justify-content-center ">
                    <a id="back-to-top" class="back-to-top" href="#"><i class="fas fa-angle-double-up"></i> </a>
                </div>
                <div class="col-md-4 d-flex justify-content-center mt-2">
                    <p class=" text-black"> &copy;Copyright <span id="copyright">
                            <script>
                                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))

                            </script>
                        </span> <a href="index.php" class="text-secondary"> Brickszone </a> All Rights Reserved </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- JS Global Compulsory (Do not remove)-->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="js/jquery.appear.js"></script>
<script src="js/counter/jquery.countTo.js"></script>
<script src="js/select2/select2.full.js"></script>
<script src="js/range-slider/ion.rangeSlider.min.js"></script>
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jarallax/jarallax.min.js"></script>
<script src="js/jarallax/jarallax-video.min.js"></script>
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>

</body>

</html>
