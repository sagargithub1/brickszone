<?php include 'header.php' ?>
<?php include 'db.php';

$query="select  property_type.property_type_name as property_type_name,  property_type.id as pro_id , property.*  from property join property_type on  property.propertytype = property_type.id ";


     $query= $query." where ";

if(isset($_GET['category']) && !empty($_GET['category']) && $_GET['category'] !== "0"){
    
    $query= $query."property.propertytype = '".$_GET['category']."' AND property.active = '1' ";
    
}else{
     $query= $query."property.active = '1' ";
}

if(isset($_GET['status']) && !empty($_GET['status']) && $_GET['status'] != "0"){
    $query= $query."AND property.status = '".$_GET['status']."' ";
}

if(isset($_GET['location']) && !empty($_GET['location'])  && $_GET['location'] != "0"){
    $query= $query."AND property.location = '".$_GET['location']."' ";
}

if(isset($_GET['configuration']) && !empty($_GET['configuration']) && $_GET['configuration'] != "0"){
    $query= $query."AND property.configuration = '".$_GET['configuration']."' ";
}

if(isset($_GET['floor']) && !empty($_GET['floor'])  && $_GET['floor'] != "0"){
    $query= $query."AND property.floor = '".$_GET['floor']."'";
}

if(isset($_GET['prange'])  && $_GET['prange'] != "0"){
    $date_split = explode(";",$_GET['prange']);
    $query= $query."AND (property.price BETWEEN ".$date_split[0]." AND ".$date_split[1]." )";
}
 $query =  $query." order by property.id desc";

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
<div class="bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-8">
                <div class="section-title text-center mt-5">
                    <h2>Property List</h2>
                    <p>Find your dream home from our Newly added properties</p>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="space-pb">
    <div class="container mt-4">
        <div class="row">
            <div class="property-search-field bg-white w-100">
                <div class="property-search-item">
                    <form class="form-row basic-select-wrapper w-100" method="get" action="properties.php">
                        <div class="form-group col-sm-3 ">
                            <label>Property type</label>
                            <select class="form-control basic-select" name="category">
                                <option value="0">All Type</option>
                                <?php foreach($property_type as $pt){ ?>
                                <option value="<?= $pt['id'] ?>" <?php 
                                    if(isset($_GET['category']) && !empty($_GET['category'])){
                                        if($_GET['category'] === $pt['id'] ){
                                            echo "selected";
                                        }
                                    }
                                  ?>><?= $pt['property_type_name'] ?></option>
                                <?php  } ?>


                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Status</label>
                            <select class="form-control basic-select" name="status">
                                <option value="RENT" <?php
                                    if(isset($_GET['status'])){
                                        if($_GET['status'] === "RENT"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>For Rent</option>
                                <option value="BUY" <?php
                                    if(isset($_GET['status'])){
                                        if($_GET['status'] === "BUY"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>For Sale</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-3">
                            <div class="form-group-search">
                                <label>Location</label>
                                <div class="d-flex align-items-center">
                                    <i class="far fa-compass mr-1">
                                    </i>
                                    <input class="form-control" name="location" type="search" value="" placeholder="Search Location">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-3">
                            <label>Configuration</label>
                            <select class="form-control basic-select" name="configuration">
                                <option value="0" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "0"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>All Type</option>
                                <option value="1 BHK" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "1 BHK"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>1 BHK</option>
                                <option value="2 BHK" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "2 BHK"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>2 BHK</option>
                                <option value="3 BHK" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "3 BHK"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>3 BHK</option>
                                <option value="4 BHK" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "4 BHK"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>4 BHK</option>
                                <option value="1 RK" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "1 RK"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>1 RK</option>
                                <option value="2 RK" <?php
                                    if(isset($_GET['configuration'])){
                                        if($_GET['configuration'] === "2 RK"){
                                            echo "selected";
                                        }
                                    }
                                
                                ?>>2 RK</option>
                            </select>
                        </div>
                        <!--<div class="form-group col-md-3">-->
                        <!--    <label>Floor</label>-->
                        <!--    <select class="form-control basic-select" name="floor">-->
                        <!--        <option value="0">Select Floor</option>-->
                        <!--        <option value="1">01</option>-->
                        <!--        <option value="2">02</option>-->
                        <!--        <option value="3">03</option>-->
                        <!--        <option value="4">04</option>-->
                        <!--        <option value="5">05</option>-->
                        <!--        <option value="6">06</option>-->
                        <!--        <option value="7">07</option>-->
                        <!--        <option value="8">08</option>-->
                        <!--        <option value="9">09</option>-->
                        <!--    </select>-->
                        <!--</div>-->


                        <div class="form-group1 m-auto mt-3">
                            <br />
                            <span class="align-items-center ml-3 d-none d-lg-block"><button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-search mr-1"></i><span>Search</span></button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">

        <div class="row">
            <?php
            if(!empty($data)){
            foreach($data as $d){ ?>
            <div class="col-sm-6 col-md-4">
                <div class="property-item">
                    <div class="property-image bg-overlay-gradient-04">
                        <img class="img-fluid" src="images/property/grid/01.jpg" alt="">
                    </div>
                    <div class="property-details">
                        <div class="property-details-inner">
                            <h6 class="badge badge-info"><?= $d['status'] ?></h6> &nbsp;<p class="badge badge-primary"><a class="text-white" href="details.php?id=<?= $d['id'] ?>"><?= $d['property_type_name'] ?> </a></p>
                            <h5 class="property-title"><a href="details.php?id=<?= $d['id'] ?>"><?= $d['propertyname'] ?> </a></h5>
                            <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i><?= $d['location'] ?></span>
                            <span class="property-agent-date"><i class="far fa-clock fa-md"></i><?= date('d-m-y h:i:s A',strtotime($d['created_on'])) ?></span>
                            <div class="property-price">₹ <?= $d['price'] ?><span> </span> </div>
                            <ul class="property-info list-unstyled d-flex">
                                <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span><?= $d['bedroom'] ?></span></li>
                                <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span><?= $d['bathroom'] ?></span></li>
                                <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span><?= $d['carpet_area'] ?></span></li>
                            </ul>
                        </div>
                        <div class="property-btn">
                            <a class="property-link" href="details.php?id=<?= $d['id'] ?>">See Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
