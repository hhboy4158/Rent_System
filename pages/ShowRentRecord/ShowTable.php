<?php
require_once('./../../connections/Account.php');
$sql = "SELECT * FROM `rent_table`";
$result = mysqli_query($conn, $sql)or die($sql);
$c = 1;
while($row = mysqli_fetch_array($result)){
    echo '  <tr>
                <th scope="row">' . $c . '</th>
                <td>' . $row['userid'] . '</td>
                <td>' . $row['name'] . '</td>
                <td>' . $row['job'] . '</td>
                <td>' . $row['rentdate'] . '</td>
                <td>' . $row['returndate'] . '</td>
            </tr>';
}
?>