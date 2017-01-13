 <?php
	$tragthai = $_GET['id'];
	$hsx = $_GET['hsx'];
	$lsp=$_GET['lsp'];
	require("connect.php");
	if($hsx==0)
	{
		if($tragthai==1 || $tragthai=="XemNhieu")
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp;
		}
		if($tragthai==2)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and TRANGTHAI=2";
		}
		if($tragthai==3)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and TRANGTHAI=3";
		}
		if($tragthai==4)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and TRANGTHAI=4";
		}
		if($tragthai==6)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." ORDER BY GIA DESC";
		}
		if($tragthai==5)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." ORDER BY GIA ASC";
		}
	}
	else
	{
		
		if($tragthai==1)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and MANSX =".$hsx;
		}
		if($tragthai==2)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and MANSX =".$hsx." and TRANGTHAI=2";
		}
		if($tragthai==3)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and MANSX =".$hsx." and TRANGTHAI=3";
		}
		if($tragthai==4)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and MANSX =".$hsx." and TRANGTHAI=4";
		}
		if($tragthai==6)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and MANSX =".$hsx." ORDER BY GIA DESC";
		}
		if($tragthai==5)
		{
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and MALOAISP=".$lsp." and MANSX =".$hsx." ORDER BY GIA ASC";
		}
	}
	$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				$ic="";
				if($row["TRANGTHAI"]==1)
				{
					$ic="tg";
				}
				else
					if($row["TRANGTHAI"]==2)
					{
						$ic="bc";
					}
					else
						if($row["TRANGTHAI"]==3)
						{
							$ic="mv";
						}
				echo '<div class="item ProductList3Col_item">
                <div style="height:22px; width: 27px; position: relative;">
                  <div class="title"> <i class="icons '.$ic.'"></i> </div>
                </div>
                <div class="img"> <img src="img/HinhSP/'.$row["HINH1"].'" alt=""> </div>
                <div class="sell">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
                <div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
                <h2 class="name">'.$row["TENSP"].'</h2>
                <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;text-decoration: none;">
                <div class="detail" >
                  <h2>'.$row["TENSP"].'</h2>
                  <h4>'.number_format( $row["GIA"],0,'.','.').' ₫</h4>
                  <div class="order" onClick="muahang(34); return false;">đặt ngay</div>
                  <div name="ttnoibat" class="line-top"> •	3 màu sắc sang trọng, cảm biến siêu nhạy <br>
                    •	Camera 8MP chup hình cực nét <br>
                    •	Vi xử lý 64 bit- tốc độ truy cập nhanh </div>
                </div>
                </a> </div>';
			}
		}
?>