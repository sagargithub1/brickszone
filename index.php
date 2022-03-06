<?php include 'header.php' ?>
<?php include 'db.php';

$query="SELECT * FROM `property` limit 6";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
} 

$query_property_type ="select * from property_type";
$result_property_type = $conn->query($query_property_type);

if ($result_property_type->num_rows > 0) {
  // output data of each row
  while($pt = $result_property_type->fetch_assoc()) {
    $property_type[] = $pt;
  }
} 

?>
<section class="">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;

    }
    </style>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider1.png" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/slider3.png" alt="Chicago" width="1500" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/slider2.png" alt="New York" width="1500" height="500">
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<section class="space-ptb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Browse by category</h2>
                    <p>To browse and buy in your areas of interest, look for properties by category.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="category">
                    <ul class="list-unstyled mb-0">
                        <?php
                        if(!empty($property_type)){
                            foreach($property_type as $pt){
                        ?>
                        <li class="category-item">
                            <a href="properties.php?category=<?= $pt["id"] ?>"
                                class="text-center d-flex justify-content-center flex-column">
                                <div class="category-icon ">
                                    <i class="flaticon-building-2 "></i>
                                </div>
                                <h6 class="mb-0"><?= $pt["property_type_name"] ?></h6>
                            </a>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-pb">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2>Newly listed properties</h2>
                    <p>Find your dream home from our Newly added properties</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($data as $d){ ?>
            <div class="col-sm-6 col-md-4">
                <div class="property-item">

                    <div class="property-image bg-overlay-gradient-04">
                        <img class="img-fluid" src="images/property/grid/01.jpg" alt="">
                    </div>
                    <div class="property-details">

                        <div class="property-details-inner">
                            <h5 class="property-title"><?= $d['propertyname'] ?></h5>
                            <h6 class="badge badge-info"><?= $d['status'] ?></h6> &nbsp;
                            <span class="property-address"><i
                                    class="fas fa-map-marker-alt fa-xs"></i><?= $d['location'] ?></span>
                            <span class="property-agent-date"><i
                                    class="far fa-clock fa-md"></i><?= $d['created_on'] ?></span>
                            <div class="property-price">₹ <?= $d['price'] ?></div>
                            <ul class="property-info list-unstyled d-flex">
                                <li class="flex-fill property-bed"><i
                                        class="fas fa-bed"></i>Bed<span><?= $d['bedroom'] ?></span></li>
                                <li class="flex-fill property-bath"><i
                                        class="fas fa-bath"></i>Bath<span><?= $d['bathroom'] ?></span></li>
                                <li class="flex-fill property-m-sqft"><i
                                        class="far fa-square"></i>sqft<span><?= $d['carpet_area'] ?></span></li>
                            </ul>
                        </div>
                        <div class="property-btn">
                            <a class="property-link" href="details.php?id=<?= $d['id'] ?>">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <div class="col-12 text-center">
                <a class="btn btn-link" href="properties.php"><i class="fas fa-plus"></i>View All Listings</a>
            </div>

        </div>
    </div>

</section>

<section class="space-ptb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-9">
                <div class="section-title mb-0">
                    <h2>Plenty of reasons to choose us</h2>
                    <p>Our agency has many specialized areas, but our CUSTOMERS are our real specialty.</p>
                </div>
            </div>
            <div class="col-lg-3 text-lg-right">
                <a class="btn btn-primary" href="about-us.php">More about us </a>
            </div>
        </div>
        <div class="row no-gutters mt-4">
            <div class="col-lg-3 col-sm-6">
                <div class="feature-info h-100">
                    <div class="feature-info-icon">
                        <i class="flaticon-like"></i>
                    </div>
                    <div class="feature-info-content">
                        <h6 class="mb-3 feature-info-title">Excellent reputation</h6>
                        <p class="mb-0">Our comprehensive database of listings and market info give the most accurate
                            view of the market and your home value.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="feature-info h-100">
                    <div class="feature-info-icon">
                        <i class="flaticon-agent"></i>
                    </div>
                    <div class="feature-info-content">
                        <h6 class="mb-3 feature-info-title">Best local agents</h6>
                        <p class="mb-0">You are just minutes from joining with the best agents who are fired up about
                            helping you Buy or sell.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="feature-info h-100">
                    <div class="feature-info-icon">
                        <i class="flaticon-like-1"></i>
                    </div>
                    <div class="feature-info-content">
                        <h6 class="mb-3 feature-info-title">Peace of mind</h6>
                        <p class="mb-0">Rest guaranteed that your agent and their expert team are handling every detail
                            of your transaction from start to end.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="feature-info h-100">
                    <div class="feature-info-icon">
                        <i class="flaticon-house-1"></i>
                    </div>
                    <div class="feature-info-content">
                        <h6 class="mb-3 feature-info-title">Tons of options</h6>
                        <p class="mb-0">Discover a place you’ll love to live in. Choose from our vast inventory and
                            choose your desired house.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include'footer.php' ?>