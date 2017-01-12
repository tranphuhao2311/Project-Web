
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="webphp";
	$conn= new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT * FROM sanpham";
$result = $conn->query($sql);
 $domdoc = new DOMDocument('1.0','utf8');
 $domdoc->formatOutput = true;
 $domdoc->preserveWhiteSpace=false;
 $sanpham =$domdoc->createElement('DSSP');
 $domdoc->appendChild($sanpham);
while($row = $result->fetch_assoc())
{
	$row_MASP=$row["MASP"];
	$row_LOAISP=$row["MALOAISP"];
	$row_HINH=$row["HINHDAIDIEN"];
	$row_TEN=$row["TENSP"];
	$row_GIA=number_format( $row["GIA"],0,'.','.');
	$dienthoai =$domdoc->createElement('SANPHAM');
	$sanpham->appendChild($dienthoai);
	
	$MASP=$domdoc->createElement('MASP');
	$MASP->appendChild($domdoc->createTextNode("$row_MASP"));
	$dienthoai->appendChild($MASP);
	
	$MALOAISP=$domdoc->createElement('MALOAISP');
	$MALOAISP->appendChild($domdoc->createTextNode("$row_LOAISP"));
	$dienthoai->appendChild($MALOAISP);
	
	$HINHDAIDIEN=$domdoc->createElement('HINHDAIDIEN');
	$HINHDAIDIEN->appendChild($domdoc->createTextNode("$row_HINH"));
	$dienthoai->appendChild($HINHDAIDIEN);
	
	$TENSP=$domdoc->createElement('TENSP');
	$TENSP->appendChild($domdoc->createTextNode("$row_TEN"));
	$dienthoai->appendChild($TENSP);
	
	$GIA=$domdoc->createElement('GIA');
	$GIA->appendChild($domdoc->createTextNode("$row_GIA"));
	$dienthoai->appendChild($GIA);
}
$domdoc->save('sanpham.xml');
?>