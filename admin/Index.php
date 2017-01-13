<?php
session_start();
if($_SESSION["NguoiDung"]=="")
	header('location: dangnhap.php');
else
	header('location: QLDienThoai.php');

?>