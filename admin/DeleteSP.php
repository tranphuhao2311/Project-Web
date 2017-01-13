<?php
require("connect.php");
$Ma=$_GET["msp"];
echo $Ma;
$Trang=$_GET["trang"];
echo $Trang;
$sql="update sanpham set TINHTRANGXOA=1 where MASP='".$Ma."'";
$conn->query($sql);

if($Trang==1)
{
	header('location: QLDienThoai.php');
}
else
	if($Trang==2)
	{
		header('location: QLLapTop.php');
	}
	else
		if($Trang==3)
		{
			header('location: QLTablet.php');
		}
		else
			header('location: QLPhuKien.php');
			
		
?>