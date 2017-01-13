<?php
///////////////Lấy post từng textbox,textarea,combobox, hình ra
require("connect.php");
$sql="Select * From sanpham";
$result = $conn->query($sql);
$SoDong=$result->num_rows;
$Ma="SP".($SoDong+1);
$TenDT=$_POST["TenLaptop"];
$HSX=$_POST["HSX"];
$BVXL=$_POST["BVXL"];
$Gia=$_POST["Gia"];
$ManHinh=$_POST["ManHinh"];
$BoNho=$_POST["BoNho"];
$OCung=$_POST["OCung"];
$CardDoHoa=$_POST["CardDoHoa"];
$HINHDAIDIEN=basename($_FILES["HinhDaiDien"]["name"]);
$Hinh1=basename($_FILES["Hinh1"]["name"]);
$Hinh2=basename($_FILES["Hinh2"]["name"]);
$Hinh3=basename($_FILES["Hinh3"]["name"]);
$Hinh4=basename($_FILES["Hinh4"]["name"]);
$Motadai=$_POST["MOTADAI"];
$THONGSO=$_POST["THONGSO"];
$ChiTietThongSo=$_POST["ChiTietThongSo"];
//Them sanpham
$sql="Insert into sanpham(MASP,TENSP,MALOAISP,MANSX,TRANGTHAI,GIA,HINHDAIDIEN,HINH1,HINH2,HINH3,HINH4,TINHTRANGXOA) values ('".$Ma."','".$TenDT."',2,".$HSX.",3,".$Gia.",'".$HINHDAIDIEN."','".$Hinh1."','".$Hinh2."','".$Hinh3."','".$Hinh4."',0)";
$conn->query($sql);
//Them ChiTietSanPham
$sql="Insert into thongsokythuatlaptop(BOVIXULY,BONHO,OCUNG,MANHINH,CARDDOHOA,MOTADAI,THONGSOKYTHUAT,CHITIETTHONGSO,MASP) values ('".$BVXL."','".$BoNho."','".$OCung."','".$ManHinh."','".$CardDoHoa."','".$Motadai."','".$THONGSO."','".$ChiTietThongSo."','".$Ma."')";
$conn->query($sql);
////////////////////////////////////////////////////////////////////////
$target_dir = "/wamp64/www/php/DoAnPHP/img/HinhSP/";
///////////////HinhDaiDien
if($HINHDAIDIEN!="")
{	
	$target_file = $target_dir . basename($_FILES["HinhDaiDien"]["name"]);
	$check = getimagesize($_FILES["HinhDaiDien"]["tmp_name"]);
	$Size=$_FILES["HinhDaiDien"]["size"];
	$Type=pathinfo($target_file,PATHINFO_EXTENSION);
	$tmp_Name=$_FILES["HinhDaiDien"]["tmp_name"];
	$tbdd=ThemHinh($tmp_Name,$target_dir,$target_file,$check,$Size,$Type);
}
///////////////Hinh1
if($Hinh1!="")
{	
	$target_file = $target_dir . basename($_FILES["Hinh1"]["name"]);
	$check = getimagesize($_FILES["Hinh1"]["tmp_name"]);
	$Size=$_FILES["Hinh1"]["size"];
	$Type=pathinfo($target_file,PATHINFO_EXTENSION);
	$tmp_Name=$_FILES["Hinh1"]["tmp_name"];
	$tb1=ThemHinh($tmp_Name,$target_dir,$target_file,$check,$Size,$Type);
}
if($Hinh2!="")
{	
	$target_file = $target_dir . basename($_FILES["Hinh2"]["name"]);
	$check = getimagesize($_FILES["Hinh2"]["tmp_name"]);
	$Size=$_FILES["Hinh2"]["size"];
	$Type=pathinfo($target_file,PATHINFO_EXTENSION);
	$tmp_Name=$_FILES["Hinh2"]["tmp_name"];
	$tb2=ThemHinh($tmp_Name,$target_dir,$target_file,$check,$Size,$Type);
}
if($Hinh3!="")
{	
	$target_file = $target_dir . basename($_FILES["Hinh3"]["name"]);
	$check = getimagesize($_FILES["Hinh3"]["tmp_name"]);
	$Size=$_FILES["Hinh3"]["size"];
	$Type=pathinfo($target_file,PATHINFO_EXTENSION);
	$tmp_Name=$_FILES["Hinh3"]["tmp_name"];
	$tb3=ThemHinh($tmp_Name,$target_dir,$target_file,$check,$Size,$Type);
}
if($Hinh4!="")
{	$target_file = $target_dir . basename($_FILES["Hinh4"]["name"]);
	$check = getimagesize($_FILES["Hinh4"]["tmp_name"]);
	$Size=$_FILES["Hinh4"]["size"];
	$Type=pathinfo($target_file,PATHINFO_EXTENSION);
	$tmp_Name=$_FILES["Hinh4"]["tmp_name"];
	$tb4=ThemHinh($tmp_Name,$target_dir,$target_file,$check,$Size,$Type);
}
	header('Location: Laptop.php');
	//echo "<script type='text/javascript'>alert('Thêm thành công!');</script>";
function ThemHinh($tmp_Name,$target_dir,$target_file,$check,$Size,$Type)
{
	$tb=0;
	$isImg=isImage($check);
	$kq=KiemTraHinh($Size,$Type);
	if ($kq != 0 && $isImg!=0)
	{
		move_uploaded_file($tmp_Name, $target_file);
		$tb=1;
	}
	return $tb;
}

function isImage($check)
{
	$upload;
	if($check !== false) {
        $upload = 1;
    } else {
        $upload = 0;
    }
	return $upload;
}
function KiemTraHinh($Size,$Type)
{
	$kq=1;
	if ($Size > 500000) {
		$kq=0;
	}
	if($Type != "jpg" && $Type != "png" && $Type != "jpeg"&& $Type != "gif" ) {
		$kq=0;
	}
	return $kq;
}
?>