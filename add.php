<?php 
include "db_conn.php";

$add_title = $_POST['add_title'];
$add_isbn = $_POST['add_isbn'];
$add_author = $_POST['add_author'];
$add_date = $_POST['add_date'];
$add_publisher = $_POST['add_publisher'];
$add_category = $_POST['add_category'];

$sql = "INSERT INTO `books`
(
    `title`,
    `isbn`,
    `author`,
    `date`,
    `publisher`,
    `category`
)
VALUES (
    '$add_title',
    '$add_isbn',
    '$add_author',
    '$add_date',
    '$add_publisher',
    '$add_category'
)";
if( mysqli_query($conn,$sql)){
    echo json_encode(array("statusCode" => 200));
}else{
    echo json_encode(array("statusCode" => 201));
}

mysqli_close($conn);
?>