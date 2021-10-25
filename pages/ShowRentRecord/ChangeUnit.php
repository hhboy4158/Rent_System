<?php
require_once('./../../connections/Account.php');
$job = $_POST['job'];
$TableName = "";
switch($job){
    case "Student":
        $TableName = "studentunit";
        break;

    case "Teacher":
        $TableName = "teacherunit";
        break;
}

$sql = "SELECT * FROM `$TableName`";
$result = mysqli_query($conn, $sql)or die($sql);
while($row = mysqli_fetch_array($result)){
    echo '<option value="' . $row['ID'] . '">' . $row['UnitName'] . '</option>';
}
?>