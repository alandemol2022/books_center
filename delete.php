<?php
include "db_conn.php";

$delete_id=$_POST['delete_item'];
$sql="DELETE FROM `books` WHERE `id` ='$delete_id'";

if( mysqli_query($conn,$sql)){
    echo json_encode(array("statusCode" => 200));
}else{
    echo json_encode(array("statusCode" => 201));
}

mysqli_close($conn);
?>