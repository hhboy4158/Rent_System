<?php
require_once('./../../connections/Account.php');
$RentName = $_POST['RentName'];
$RentJob = $_POST['RentJob'];
$RentId = $_POST['RentId'];
$RentDate = $_POST['RentDate'];
$RentItem = $_POST['RentItem'];

$sql = "INSERT INTO `rent_table`( `rent_item`, `userid`, `name`, `job`, `rentdate`, `returndate`) 
VALUES ('$RentItem', '$RentId', '$RentName', '$RentJob', '$RentDate', Null)";
$result = mysqli_query($conn, $sql) or die($sql);
if($result){
    echo "1";
} else {
    echo "0";
}


?>