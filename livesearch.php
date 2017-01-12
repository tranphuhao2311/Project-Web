 <?php
	$q=$_GET["q"];
	$dem=0;
	require("connect.php");
	$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 Order By GIA DESC";
	$result = $conn->query($sql);
	if (strlen($q)>1) {
		$hint="";
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				if (stristr($row['TENSP'],$q)) {
				$hint=$hint . "<a href='chi_tiet.php?msp=".$row['MASP']."&lsp=".$row['MALOAISP']."'><div style='overflow: hidden;'><li style='border-bottom: 1px dotted #bdb7b7; width: 480px; background-color: #fff;list-style: none;'>" . 
				  '<img src="img/HinhSP/'.
				  $row['HINH1'].
				 '" alt="abc" style="width: 50px;padding: 10px 10px 10px 10px;"><span style="display: inline-block;">'.
				 $row['TENSP'].
				 "</br>".
				  number_format( $row["GIA"],0,'.','.'). "₫</span></li></div></a>";
				  if($dem==5)
					  break;
				  $dem=$dem+1;
				}
			}
		}
	}
	else
		return;
	if ($hint=="") {
	  $response="";
	} else {
	  $response=$hint;
	}

	//output the response
	echo $response;
?>