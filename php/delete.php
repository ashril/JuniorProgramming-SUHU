<?php
include_once('koneksi.php');
$id=$_GET['id'];
$result = mysqli_query(
    $mysqli, "DELETE FROM todo_list where id='$id'"
);
header("location:index.php");
?>