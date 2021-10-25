
<?php
require_once('./../../connections/Account.php');
$job = $_POST['job'];
switch($job){
    case "Student":
        echo '  
                    <label for="inputPassword4">學號</label>
                    <input type="text" class="form-control" id="RentID" placeholder="40711119">
                ';
        break;

    case "Teacher":
        echo '  
                    <label for="inputPassword4">教職員編號</label>
                    <input type="text" class="form-control" id="RentID" placeholder="ex: k0632">
                ';
        break;
}
?>