<?php include'header.php' ?>
<?php include'db.php' ?>
<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
     $query="select  property_type.property_type_name as property_type_name,  property_type.id as pro_id , property.*  from property join property_type on  property.propertytype = property_type.id where property.id='".$_GET['id']."'  order by property.id desc";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $data = $row;
  }
  
  
} 

}

?>

<section class="banner banner-property white-bg space-pb">

    <div class="item">
        <div class="property-offer">
            <div class="property-offer-item">
                <div class="property-offer-image bg-holder" style="">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-7">
                                <img src="images/property/big-img-01.jpg" class="img-fluid">
                            </div>
                            <div class="col-5">
                                <div class="property-details">
                                    <div class="property-details-inner">
                                        <h6 class="badge badge-info"><?= $data['status'] ?></h6> &nbsp;<h6 class="badge badge-danger"><?= $data['property_type_name'] ?></h6>
                                        <h5><?= $data['propertyname'] ?></h5>
                                       
                                        <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i><?= $data['location'] ?></span>
                                         <p><?= $data['property_desc'] ?></p>
                                        <p class="mb-0 d-block mt-3">Uploaded On: <?= date("d-m-y h:i:s A",strtotime($data['created_on'] )); ?></p>
                                        <ul class="property-info list-unstyled d-flex">
                                            <div class="property-price">₹ <?= $data['price'] ?><span>/ <?= $data['configuration'] ?></span>
                                            </div>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <div class="card card-body">
                    <div class="form-row">
                        <div class="col-3">
                            <h4>Dealer</h4>
                            <p><?= $data['dealer'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Configuration</h4>
                            <p><?= $data['configuration'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Sold</h4>
                            <p><?= $data['sold'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Available</h4>
                            <p><?= $data['available'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Available From</h4>
                            <p><?= $data['available_from'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Bathrooms</h4>
                            <p><?= $data['bathroom'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Carpet Area</h4>
                            <p><?= $data['carpet_area'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Floor</h4>
                            <p><?= $data['floor'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Parking</h4>
                            <p><?= $data['parking'] ?></p>
                        </div>
                        <div class="col-3">
                            <h4>Residency</h4>
                            <p><?= $data['residency'] ?></p>
                        </div>

                        <div class="col-3">
                            <h4>Furnishing</h4>
                            <p><?= $data['furnishing'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="enquiry.php" type="button" class="btn btn-primary border 2px solid black float-left text-white mb-5">Enquiry Now</a>
            </div>
            <div class="col-6">
            </div>
        </div>
    </div>
    <?php include'footer.php' ?>
