<?php
require("connect.php");
$Ma=$_GET["mabl"];
$sql="delete from binhluan where MABINHLUAN='".$Ma."'";
$conn->query($sql);
header('location: QuanLyBinhLuan.php');
?>