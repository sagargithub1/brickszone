<?php include'header.php' ?>
<?php include'db.php' ?>
<?php 
$propertytype= $_POST['ptype'];
$status= $_POST['status'];
$config= $_POST['config'];
$floor= $_POST['floor'];
$prange= $_POST['prange'];
if(isset('submit')){
  
$query="select * from property where propertytype='$propertytype' or $status='' ";
$result = $conn->query($query);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$data[] = $row;
}
}
}else{
    echo "<script>alert('');</script>";
}

?>

<?php include'footer.php' ?>
