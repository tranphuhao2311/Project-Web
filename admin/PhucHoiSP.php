<?php
require("connect.php");
$Ma=$_GET["msp"];
$sql="update sanpham set TINHTRANGXOA=0 where MASP='".$Ma."'";
$conn->query($sql);
header('location: QLSanPhamDaXoa.php');
?>