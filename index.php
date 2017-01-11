<?php 
	session_start();
	error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Viettel Store - Hệ thống Bán lẻ Viettel chuyên Thiết bị Thông minh (điện thoại, máy tính...), sim Viettel, dịch vụ GTGT</title>
<meta name="keywords" content="điện thoại, laptop, máy tính bảng, phụ kiện, viettel store, viettel, sim số đẹp viettel">
<meta name="description" content="Viettel Store đang có Khuyến Mại Lớn, Ưu đãi tốt khi mua Online. Click để trải nghiệm hàng loạt điện thoại Samsung, Nokia, Sony, HTC chính hãng, Sim Số Đẹp Phong thủy Viettel, internet cáp quang FTTH. Đổi Trả 30 ngày. Miễn Phí Giao Hàng.">
<meta name="robots" content="INDEX,FOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=0, maximum-scale=1, user-scalable=yes">
<meta http-equiv="content-language" content="vi">
<meta name="distribution" content="Global">
<meta http-equiv="audience" content="General">
<meta name="revisit-after" content="1 days">
<meta name="copyright" content="Công ty Thương mại và Xuất Nhập khẩu Viettel">
<meta name="author" content="Công ty Thương mại và Xuất Nhập khẩu Viettel">
<meta name="GENERATOR" content="Công ty Thương mại và Xuất Nhập khẩu Viettel">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="css/main.css" rel="stylesheet">
<script async="" src="js/analytics.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
(function () {
	if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) {
		var msViewportStyle = document.createElement("style");
		msViewportStyle.appendChild(
			document.createTextNode("@-ms-viewport{width:auto!important}")
		);
		document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
	}
})();
</script>
</head>
<body cz-shortcut-listen="true">
<?php
	include'header.php';
?>
<div class="container-fluid new-menu">
  <div class="row">
    <div class="container container-fixed">
      <div class="row" style="position: relative;">
        <div class="new-btn-menu" onClick="puMenu();">
          <div class="l-n-m"> <i class="icons mn" title="ViettelStore.vn"></i> </div>
          <div class="r-n-m">DANH MỤC</div>
          <input type="hidden" value="0" id="status-btnmenu">
        </div>
      </div>
    </div>
  </div>
</div>
<div id="full_overlay" onClick="hideDialog1()"></div>
<div id="GioHangPopup1_div"> </div>
<script type="text/javascript">
	function onSearch() {
		if ($('#txtsearch').val() == '') {
			$('#txtsearch').focus();
		}
		else {
			if ($('#select-search').data('stype') == "2")
				window.location = '?keyword=' + $('#txtsearch').val();
			else
				window.location = '?keyword=' + $('#txtsearch').val();
		}
		return false;
	}

	var search_timeout = 0;
	$(document).ready(function () {
		var ajaxUrl = "#";
		$(document).on('keyup', '#txtsearch', function (e) {
			e.preventDefault();
			var keyword = $(this).val();
			if (keyword.length < 2) {
				$('#result-autocomplete').html('');
				$('#result-autocomplete').hide();
				return false;
			}
			else {
				if (e.which == 13) { clearTimeout(search_timeout); onSearch(); return false; }

				if (search_timeout == 0) {
					search_timeout = setTimeout(function () {
						if ($('#txtsearch').val().length > 1) {
							$.get(ajaxUrl, {
								action: "search-autocomplete",
								keyword: $('#txtsearch').val(),
								stype: $('#select-search').data('stype')
							}, function (response) {
								$('#result-autocomplete').html(response);
								if ($('#result-autocomplete li').length > 0)
									$('#result-autocomplete').show();
								else
									$('#result-autocomplete').hide();
							});
						}
						search_timeout = 0;
					}, 700);
				}
			}
		});

		$('#search-cate').click(onSearch);
		$('#txtsearch').focus(function () {
			if ($('#result-autocomplete li').length > 0)
				$('#result-autocomplete').slideDown();
		})
		.blur(function () {
			setTimeout("$('#result-autocomplete').slideUp();", 350);
		});
	});

	function showDialog1(id) {
		$('#full_overlay').fadeIn(function () {
			var dlg = $('#' + id);
			dlg.show();
		});
	}
	function hideDialog1() {
		$('.dialog1').hide();
		$('#full_overlay').fadeOut();
	}
	function hidePromotion() {
		$('.tr-km').fadeOut(500);
	}
	function reloadGioHangPopup1(showCart) {
		if (showCart == undefined)
			showCart = true;

		$('#GioHangPopup1_div').load('#', {
			'path': 'Cart!GioHangPopup'
		},
			function () {
				$('#cartCount11234').text($('#cartCount11235').text()).show();
				if (showCart)
					showDialog1('popup_giohang1');
			});
	}
</script>
<div class="container-fluid">
  <div class="row">
    <div class="container container-fixed">
      <div class="row history">
        <div class="text1" style="top: -27px; left: 202px;">
          <div style="float: left;"> <i class="icons hot"></i> </div>
          <div id="slides_News" style="float: left; padding-left: 8px; padding-top: 2px; overflow: hidden;">
            <div class="slidesjs-container" style="overflow: hidden; position: relative; width: 890px; height: 17.8px;">
              <div class="slidesjs-control" style="position: relative; left: 0px; width: 890px; height: 17.8px;"><a href="#" class="title-news slidesjs-slide" slidesjs-index="0" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">Xuất  hiện hình ảnh rò rỉ iPhone 7 Plus màu Space Black</a><a href="#" class="title-news slidesjs-slide" slidesjs-index="1" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">Khuyến mãi cực sốc mừng khai trương</a><a href="#" class="title-news slidesjs-slide" slidesjs-index="2" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">Thưởng thức đêm nhạc hoành tráng và nhận quà tặng hấp dẫn từ Viettel Store</a><a href="#" class="title-news slidesjs-slide" slidesjs-index="3" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">Tưng bừng khai trương ngập tràn khuyến mại</a><a href="#" class="title-news slidesjs-slide" slidesjs-index="4" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden; display: none;">Mừng khai trương - điện thoại giá sốc</a><a href="#" class="title-news slidesjs-slide" slidesjs-index="5" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; backface-visibility: hidden;">Rất có thể HTC sắp tung ra smartphone là biến thể của HTC 10</a><a href="#" class="title-news slidesjs-slide" slidesjs-index="6" style="position: absolute; top: 0px; left: 0px; width: 100%; z-index: 0; display: none; backface-visibility: hidden;">Tình trạng “cháy hàng” của Galaxy Note 7 đang diễn ra trên toàn cầu</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container" style="background-color: #fff;">
  <div class="row">
    <div class="container container-fixed">
      <div class="row" style="position: relative;">
        <div class="col-lg-2 col-sm-2 hidden-md hidden-sm hidden-xs wapper-menu" style="border-bottom: #dfdfdf solid 1px;display: block;">
         <?php
		 include 'bar_menu.php';
		 ?>
        <div class="col-xs-12 col-lg-7 col-md-8 col-sm-12" id="home-slide">
          <div class="row block-slide">
            <div id="owl-slide" class="owl-carousel owl-theme">
				<?php
				require("connect.php");
				$sql = "SELECT HINH FROM slideshow where ACTIVE=1 LIMIT 4";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_assoc())
					{
						echo'<div class="owl-item">
							<div class="item"> <a href="#"> <img alt="" class="lazyOwl" src="img/HinhSlideShow/'.$row["HINH"].'"> </a> </div>
							</div>';
					}
				}
			?>
            </div>
          
		  <div id="sync2" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
              <div class="owl-wrapper-outer">
                <div class="owl-wrapper" style="width: 1710px; left: 0px; display: block; transition: all 200ms ease; transform: translate3d(0px, 0px, 0px);">
				<?php
				require("connect.php");
				$sql = "SELECT TIEUDE FROM slideshow where ACTIVE=1 LIMIT 4";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) 
				{
					while($row = $result->fetch_assoc())
					{
						echo'<div class="owl-item" style="width: 171px;">
							<div class="item"> <img src="images/select-slide.png" alt="" class="select">
							<h3>'.$row["TIEUDE"].'</h3>
							</div>
							</div>';
					}
				}
			?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 hidden-sm hidden-xs">
		  <?php
		    require("connect.php");
			$sql="select * from quangcao where TRANGTHAI=1";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
					{
					?>
		
          <div class="row" style="padding-left: 11px;">
            <div id="owl-slide-2" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
              <div class="owl-wrapper-outer">
                <div class="owl-wrapper" style="width: 560px; left: 0px; display: block;">
                  <div class="owl-item" style="width: 280px;">
                    <div class="item"> <a href="#"> <img alt="" class="lazyOwl" src="img/HinhQuangCao/<?php echo $row["HINH1"] ?>" style="display: inline;"> </a> </div>
                  </div>
                </div>
              </div>
              <div class="owl-controls clickable" style="display: none;">
                <div class="owl-buttons">
                  <div class="owl-prev"></div>
                  <div class="owl-next"></div>
                </div>
              </div>
            </div>
          </div>
         <div class="row" style="padding-left: 11px; margin-top: 11px;">
            <div id="owl-slide-3" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
              <div class="owl-wrapper-outer">
                <div class="owl-wrapper" style="width: 560px; left: 0px; display: block;">
                  <div class="owl-item" style="width: 280px;">
                    <div class="item"> <a href="#"> <img alt="simbigbang" class="lazyOwl" src="img/HinhQuangCao/<?php echo $row["HINH2"] ?>" style="display: inline;"> </a> </div>
                  </div>
                </div>
              </div>
              <!--<div class="owl-controls clickable" style="display: none;">
                <div class="owl-buttons">
                  <div class="owl-prev"></div>
                  <div class="owl-next"></div>
                </div>
              </div>-->
            </div>
          </div>
		  <?php
		        
		  	  }
			}
//			 $result->close ();
				$conn->close();
		  ?>
        </div>
      </div>
    </div>
    <div class="container container-fixed" style="margin-top: 20px;">
      <div class="row">
        
		  <?php
			echo '<div class="l-block-new"> <a href="tintuc.php?lt=5"><i class="icons tt" title="Tin tức công nghệ"></i></a> <a href="tintuc.php?loaitin=5">
          <h2>TIN CÔNG NGHỆ</h2>
          </a> </div>';
		  ?>
        <div class="r-block-new">
          <div class="block-news" style="position: relative;">
            <div id="owl-news" class="owl-carousel owl-theme " style="opacity: 1; display: block;">
              <div class="owl-wrapper-outer" style="position: relative;width: 100%">
                <div class="owl-wrapper" style="width: 3888px; left: 0px; display: block;">
                 <?php
				require("connect.php");
				$sql = "SELECT * FROM tintuc limit 3";
				$result = $conn->query($sql);
				$buoi="";
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
					{
						echo '
						<div class="owl-item" style="width: 324px;">
						<div class="item">
						  <div class="news-item">
							<div class="item-wapper">
							  <div class="float-left img"><a href="chitiettintuc.php?matin='.$row["MATIN"].'&lt='.$row["LOAITIN"].'"><img src="img/HinhTinTuc/'.$row["HINH1"].'" alt="'.$row["TIEUDE"].'"></a></div>
							  <h2 class="float-left text"><a href="chitiettintuc.php?matin='.$row["MATIN"].'&lt='.$row["LOAITIN"].'">'.$row["TIEUDE"].'</a></h2>
							  <div class="float-left text2">'. date('d/m/Y | h:i A'.$buoi.'',strtotime($row["NGAYDANG"])).'</div>
							</div>
						  </div>
						</div>
						</div>
						';
					}
				}	
				$result->close ();
				$conn->close();
				
				?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container container-fixed">
      <div class="row phone-wapper" style="height: 619px;">
        <div class="h-item-active" style="top: 0px; left: 0px;">
          <h2 class="head"><?php
			echo '<a href="danh_muc.php?lsp=1&hsx=0">ĐIỆN THOẠI</a>';
		  ?></h2>
          <div class="item-left"> 
		  <?php
			require("connect.php");
			if($conn->connect_error)
			{
				die('ketnoi that bai'.$conn->connect_error);
				
			}
				echo"";
			$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=1";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc())
				{
					echo '<a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
					<h4>'.$row["TENHANGSANXUAT"].'</h4></a>';
				}
			}	
			$result->close ();
			$conn->close();
		  ?>
		  </div>
        </div>
        <?php
		require("connect.php");
		if($conn->connect_error)
						{
							die('ketnoi that bai'.$conn->connect_error);
							
						}
							echo"";
		 
		// Create and execute a MySQL query
		$sql = "SELECT * FROM sanpham sp,thongsokythuatdienthoai ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 1 and sp.TRANGTHAI=4 and sp.TINHTRANGXOA=0 LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				echo '<div class="h-item h-item-2 item-1" style="left: 195px; top: 0px;"> <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'"> <img src="img/HinhSP/'.$row["HINHDAIDIEN"].'" alt="" style="width: 100%; height: 100%; display: inline;" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage//sony-xz.jpg"></a> </div>';
			}
		}
		$sql = "SELECT * FROM sanpham sp,thongsokythuatdienthoai ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 1 and sp.TINHTRANGXOA=0 LIMIT 8";
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
				echo '<div class="h-item item-2" style="left: 585px; top: 0px;">
          <div class="content">
            <div style="height: 22px;width: 27px; position: relative;">
              <div class="title"></div><div class="title"> <i class="icons '.$ic.'"></i> </div></div>
            <div class="img"> <img src="img/HinhSP/'.$row["HINH1"].'" alt="" data-original="images/3333535190179.jpg" style="display: inline;"> </div>
            <div class="sell"></div>
            <div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
            <h3 class="name">'.$row["TENSP"].'</h3>
            <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'">
            <div class="h-detail" style="display: none;">
              <h3>' .$row["TENSP"].'</h3>
              <h4>' .number_format( $row["GIA"],0,'.','.').' ₫</h4>
			  <input type="button" class="order" value="Đặt ngay" style="border:0px"/>
			  <div class="line-top"> • '.$row["MANHINH"].'<br>
                • '.$row["CPU"].'<br>
                • '.$row["RAMROM"].'<br>
                • '.$row["CAMERA"].'<br>
                • '.$row["PIN"].' </div>
			</div>
			</a></div>
        </div>';
			}
		}
		// Loop through the returned data and output it
		
		$result->close ();
		$conn->close();
		?>
		
       
        
        
        <div class="h-item-active-2" style="top: 308px; left: 0px;"> <a href="danh_muc.php?lsp=1&hsx=0"> <i class="icons i-phone" title="phone"></i>
          <div style="margin-top: 15px;"> Xem tất cả<br>
            (<b>
			<?php
			require("connect.php");
			$sql = "SELECT sp.MASP FROM sanpham sp WHERE sp.MALOAISP = 1";
			$result = $conn->query($sql);
			echo $result->num_rows;
			
			?>
			</b> Điện thoại) </div>
          </a> </div>
      </div>
      <div class="row laptop-wapper" style="height: 619px;">
        <style type="text/css">
    
</style>
        <div class="h-item-active" style="top: 0px; left: 0px;">
          <h2 class="head"><?php
			echo'<a href="danh_muc.php?lsp=2&hsx=0">LAPTOP</a>';
		  ?></h2>
          <div class="item-left"> 
		  <?php
			require("connect.php");
			if($conn->connect_error)
			{
				die('ketnoi that bai'.$conn->connect_error);
				
			}
				echo"";
			$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=2";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc())
				{
					echo '<a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
					<h4>'.$row["TENHANGSANXUAT"].'</h4></a>';
				}
			}	
			$result->close ();
			$conn->close();
		  ?>
            </div>
        </div>
        <?php
		require("connect.php");
		if($conn->connect_error)
						{
							die('ketnoi that bai'.$conn->connect_error);
							
						}
							echo"";
		 
		// Create and execute a MySQL query
		$sql = "SELECT * FROM sanpham sp,thongsokythuatlaptop ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 2 and sp.TRANGTHAI=4 and sp.TINHTRANGXOA=0 LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				echo '<div class="h-item h-item-2 item-1" style="left: 195px; top: 0px;"> <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'"> <img src="img/HinhSP/'.$row["HINHDAIDIEN"].'" alt="" style="width: 100%; height: 100%; display: inline;" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage//sony-xz.jpg"></a> </div>';
			}
		}
		$sql = "SELECT * FROM sanpham sp,thongsokythuatlaptop ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 2 and sp.TINHTRANGXOA=0 LIMIT 8";
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
				echo '<div class="h-item item-2" style="left: 585px; top: 0px;">
		  <div class="content">
		  <div style="height: 22px;width: 27px; position: relative;">
              <div class="title"></div><div class="title"> <i class="icons '.$ic.'"></i> </div></div>
			  <div class="img"> <img src="img/HinhSP/'.$row["HINH1"].'" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/8784806691397426715.jpeg"> </div>
            <div class="sell"> ' .number_format( $row["GIA"],0,'.','.').' ₫</div>
            <div class="price">' .number_format( $row["GIA"],0,'.','.').' ₫</div>
            <h3 class="name">' .$row["TENSP"].'</h3>
            <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'">
            <div class="h-detail">
              <h3>' .$row["TENSP"].'</h3>
              <h4>' .number_format( $row["GIA"],0,'.','.').' ₫</h4>
			  <input type="button" class="order" value="Đặt ngay" style="border:0px"/>
              <div class="line-top"> • '.$row["BOVIXULY"].'<br>
                • '.$row["BONHO"].'<br>
                • '.$row["MANHINH"].'<br>
                • '.$row["OCUNG"].'<br>
                • '.$row["CARDDOHOA"].' </div>
            </div>
            </a> </div>
        </div>';
			}
		}
		// Loop through the returned data and output it
		
		$result->close ();
		$conn->close();
		?>
		
		
       
        <div class="h-item-active-2" style="top: 308px; left: 0px;"> <a href="danh_muc.php?lsp=2&hsx=0"> <i class="icons i-laptop" title="laptop"></i>
          <div style="margin-top: 15px;"> Xem tất cả<br>
            (<b>
			<?php
			require("connect.php");
			$sql = "SELECT sp.MASP FROM sanpham sp WHERE sp.MALOAISP = 2";
			$result = $conn->query($sql);
			echo $result->num_rows;
			
			?>
			</b> Laptop) </div>
          </a> </div>
      </div>
      <div class="row tablet-wapper" style="height: 619px;">
        <div class="h-item-active" style="top: 0px; left: 0px;">
          <h2 class="head">
		  <?php
			echo '<a href="danh_muc.php?lsp=3&hsx=0">Máy tính bảng</a>';
		  ?>
		  
		  </h2>
          <div class="item-left"> 
		  
		  <?php
			require("connect.php");
			if($conn->connect_error)
			{
				die('ketnoi that bai'.$conn->connect_error);
				
			}
				echo"";
			$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=3";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc())
				{
					echo '<a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
					<h4>'.$row["TENHANGSANXUAT"].'</h4></a>';
				}
			}	
			$result->close ();
			$conn->close();
		  ?>
		  
		  </div>
        </div>
		
         <?php
		require("connect.php");
		if($conn->connect_error)
						{
							die('ketnoi that bai'.$conn->connect_error);
							
						}
							echo"";
		 
		// Create and execute a MySQL query
		$sql = "SELECT * FROM sanpham sp,thongsokythuatmaytinhbang ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 3 and sp.TRANGTHAI=4 and sp.TINHTRANGXOA=0 LIMIT 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				echo '<div class="h-item h-item-2 item-1" style="left: 195px; top: 0px;"> <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'"> <img src="img/HinhSP/'.$row["HINHDAIDIEN"].'" alt="" style="width: 100%; height: 100%; display: inline;" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage//sony-xz.jpg"></a> </div>';
			}
		}
		$sql = "SELECT * FROM sanpham sp,thongsokythuatmaytinhbang ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 3 and sp.TINHTRANGXOA=0 LIMIT 8";
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
				echo '<div class="h-item item-2" style="left: 585px; top: 0px;">
          <div class="content">
            <div style="height: 22px;width: 27px; position: relative;"><div class="title"> <i class="icons '.$ic.'"></i> </div>
            </div>
            <div class="img"> <img src="img/HinhSP/'.$row["HINH1"].'" alt="" data-original="images/3333535190179.jpg" style="display: inline;"> </div>
            <div class="sell"></div>
            <div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
            <h3 class="name">'.$row["TENSP"].'</h3>
            <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'">
            <div class="h-detail" style="display: none;">
              <h3>' .$row["TENSP"].'</h3>
              <h4>' .number_format( $row["GIA"],0,'.','.').' ₫</h4>
			  <input type="button" class="order" value="Đặt ngay" style="border:0px"/>
			  <div class="line-top"> • '.$row["MANHINH"].'<br>
                • '.$row["CPU"].'<br>
                • '.$row["RAMROM"].'<br>
                • '.$row["CAMERA"].'<br>
                • '.$row["PIN"].' </div>
			</div>
			</a></div>
        </div>';
			}
		}
		// Loop through the returned data and output it
		
		$result->close ();
		$conn->close();
		?>
		
        <div class="h-item-active-2" style="top: 308px; left: 0px;"> <a href="danh_muc.php?lsp=3&hsx=0"> <i class="icons i-tablet" title="tablet"></i>
          <div style="margin-top: 15px;"> Xem tất cả<br>
            (<b>
			<?php
			require("connect.php");
			$sql = "SELECT sp.MASP FROM sanpham sp WHERE sp.MALOAISP = 3";
			$result = $conn->query($sql);
			echo $result->num_rows;
			
			?>
			</b> Máy tính bảng) </div>
          </a> </div>
      </div>
      <div class="row pk-wapper" style="height: 619px;">
        <div class="h-item-active" style="top: 0px; left: 0px;">
          <h2 class="head"><a href="danh_muc.php?lsp=4&hsx=0">Phụ Kiện</a></h2>
          <div class="item-left"> <a href="#">
            <h4>Thẻ nhớ</h4>
            </a><a href="#">
            <h4>Tấm dán</h4>
            </a><a href="#">
            <h4>Bao da/Ốp lưng</h4>
            </a><a href="#">
            <h4>Loa</h4>
            </a><a href="#">
            <h4>Pin dự phòng</h4>
            </a><a href="#">
            <h4>Tai nghe</h4>
            </a><a href="#">
            <h4>Cáp/Sạc</h4>
            </a><a href="#">
            <h4>USB</h4>
            </a><a href="#">
            <h4>Đế tản nhiệt</h4>
            </a><a href="#">
            <h4>Túi đựng laptop</h4>
            </a><a href="#">
            <h4>Ổ cứng di động</h4>
            </a><a href="#">
            <h4>Chuột</h4>
            </a><a href="#">
            <h4>Thiết bị mạng</h4>
            </a><a href="#">
            <h4>DCOM-3G</h4>
            </a> </div>
        </div>
		<?php
		require("connect.php");
		if($conn->connect_error)
						{
							die('ketnoi that bai'.$conn->connect_error);
							
						}
							echo"";
		 
		// Create and execute a MySQL query
		$sql = "SELECT * FROM sanpham sp,thongsophukien ts WHERE sp.MASP=ts.MASP and sp.MALOAISP = 4 and sp.TINHTRANGXOA=0 LIMIT 5";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
				echo ' <div class="h-item item-1" style="left: 195px; top: 0px;">
					  <div class="content">
						<div style="height: 22px;width: 27px; position: relative;"> </div>
						<div class="img"> <img src="img/HinhSP/'.$row["HINH1"].'" alt="" data-original="img/HinhSP/'.$row["HINH1"].'" style="display: inline;"> </div>
						<div class="sell"> </div>
						<div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
						<h3 class="name">' .$row["TENSP"].'</h3>
						<a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'">
						<div class="h-detail">
						  <h3>S' .$row["TENSP"].'</h3>
						  <h4>'.number_format( $row["GIA"],0,'.','.').' ₫</h4>
			  <input type="button" class="order" value="Đặt ngay" style="border:0px"/>
						  <div class="line-top"> '.$row["MOTANGAN"].' </div>
						</div>
						</a> </div>
					</div>';
				}
		}
		
		// Loop through the returned data and output it
		
		$result->close ();
		$conn->close();
		?>
        <div class="h-item-active-2" style="top: 308px; left: 0px;"> <a href="#"> <i class="icons i-pk" title="pk"></i>
          <div style="margin-top: 15px;"> Xem tất cả<br>
            (<b>18 </b> Phụ Kiện) </div>
          </a> </div>
      </div>
      <div class="row co-the-ban-quan-tam content-danh-muc">
        <div class="title-2"> SẢN PHẨM ĐÃ XEM </div>
        <div class="content right">
          <div style="margin-left: -1px;">
		  <?php
		  $ma;
		  require("connect.php");
		  if(isset($_SESSION["Viewed"]))
			{
				foreach($_SESSION["Viewed"] as $k=>$v)
				{	
				if($k<6)
				{
					$ma=$v;
					$sql = "SELECT * FROM sanpham WHERE MASP='".$ma."' and TINHTRANGXOA=0";
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
					?>
					<a href="chi_tiet.php?msp=<?php echo $row["MASP"]?>&lsp=<?php echo $row["MALOAISP"]?>" class="abc"><div class="item">
					  <div style="height: 22px;width: 27px; position: relative;">
						<div class="title"><i class="icons <?php echo $ic?>"></i></div>
					  </div>
					  <div class="img"> <img src="img/HinhSP/<?php echo $row["HINH1"] ?>" alt="" style="width: 100%;" > </div>
					  <div class="sell"> </div>
					  <div class="price"><?php echo number_format( $row["GIA"],0,'.','.')?></div>
					  <h3 class="name"><?php echo $row["TENSP"] ?></h3>
					  
					  <div class="h-detail">
						<h5><?php echo $row["TENSP"]?></h5>
						<h4><?php echo number_format( $row["GIA"],0,'.','.') ?></h4>
						<div class="order" onClick="muahang(107934); return false;">đặt ngay</div>
					  </div>
					  </a> </div>
						
			<?php
						}
						}
					}
				}
			}
			?>
          </div>
          <div class="clear-both"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="popup_payment1" class="dialog1">
  <div class="signup-ct">
    <div class="signup-header">
      <h4>Đặt hàng - nghe tư vấn miễn phí</h4>
      <h6 style="text-align: center; margin-top: -5px; margin-bottom: 3px; color: #fff;">(Mua là quyền của bạn - Tư vấn miễn phí là trách nhiệm của chúng tôi)</h6>
      <a class="modal_close" href="#"><i class="fa fa-close"></i></a> </div>
    <div class="form_payment">
      <div class="form_infor margin-right-20 margin-left-10">
        <div class="pro_infor">
          <h3 id="step1" style="text-transform: none; border-bottom: none;" class="title">Bước 1: Chọn màu</h3>
          <div id="Gen1spThanhToan"></div>
          <div class="box_payment_option" style="text-align: left; margin-top: 5px;">
            <ul class="payment_option">
              <li id="panel-loai-sim" class="simSo_showCls">
                <div style="color: #242424; font-size: 12px; font-weight: 600;">LOẠI SIM:</div>
                <div>
                  <label>
                  <input type="radio" value="3" name="ls" checked="checked">
                  Sim thường</label>
                  <label>
                  <input type="radio" value="2" name="ls">
                  Sim micro</label>
                  <label>
                  <input type="radio" value="1" name="ls">
                  Sim nano</label>
                </div>
              </li>
              <li>
                <label class="chk123">
                <input type="checkbox" value="2" id="chkXuatHoaDonCty">
                Xuất hóa đơn công ty </label>
                <div class="form-group w-icon chk114">
                  <input type="text" name="" id="Text2" class="form-control" placeholder="Tên công ty" style="margin-bottom: 10px;">
                  <input type="text" name="" id="Text3" class="form-control" placeholder="Địa chỉ" style="margin-bottom: 10px;">
                  <input type="text" name="" id="Text4" class="form-control" placeholder="Mã số thuế">
                </div>
              </li>
              <li>
                <label class="chk123" style="margin-top: 3px;">
                <input type="checkbox" value="2" id="chkHinhThucThanhToan" checked="checked">
                Hình thức thanh toán </label>
                <div class="form-group w-icon chk114" id="cardpayment1">
                  <label class="radio-inline">
                  <input type="radio" value="1bc34c41-b71f-4b15-b184-1dfe75e163a5" name="card_paymentTypes" class="infor_user" checked="checked">
                  Thanh toán tại Siêu thị (giữ hàng) </label>
                  <label class="radio-inline">
                  <input type="radio" value="fa7aa975-8628-450c-b84b-3304056ccfd7" name="card_paymentTypes" class="infor_user">
                  Giao hàng thu tiền tại nhà </label>
                  <label class="radio-inline">
                  <input type="radio" value="80c49087-1012-4891-b2d4-49c033ace909" name="card_paymentTypes" class="infor_user">
                  <img alt="back-plus" src="images/bankplus-lg_38549581314112014.png" class="img_bank"> </label>
                  <div class="desc">Xin mời quý khách dùng chức năng BankPlus trên điện thoại để thanh toán đến tài khoản sau:<br>
                    Ngân hàng: <strong>Ngân hàng TM Cổ phần Quân Đội</strong><br>
                    Tên tài khoản: Công ty TNHH NN MTV TM &amp; XNK Viettel<br>
                    Số tài khoản: <strong>0051133999888</strong><br>
                  </div>
                  <label class="radio-inline">
                  <input type="radio" value="e6551df2-083c-41b2-87e1-c9cc105f8a9c" name="card_paymentTypes" class="infor_user">
                  Chuyển khoản Ngân hàng </label>
                  <div class="desc">Thông tin tài khoản thụ hưởng của Viettelstore.  Sau khi chuyển khoản, xin vui lòng thông báo cho chúng tôi qua tổng đài <strong>1800 8123</strong> để được phục vụ nhanh nhất. <br>
                    Ngân hàng: <strong>Ngân hàng TM Cổ phần Quân Đội</strong><br>
                    Chi nhánh: Trần Duy Hưng <br>
                    Tên tài khoản: Công ty TNHH NN MTV TM &amp; XNK Viettel <br>
                    Số tài khoản: <strong>0051133999888</strong></div>
                  <p style="margin-top: 10px;"> Hướng dẫn thanh toán xem chi tiết <a href="#" style="font-weight: bold; color: #F83015; text-decoration: underline; margin-top: 10px;">tại đây</a> </p>
                </div>
				
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="form_infor">
        <h3 id="step2" class="title" style="text-transform: none;">Bước 2: Thông tin người mua</h3>
        <div class="form-group w-icon hidden">
          <label class="radio-inline" style="padding-left: 0;"> <span style="float: left; padding-right: 25px;">Anh</span>
          <input type="radio" class="infor_user" name="inlineRadioOptions" id="Radio4" value="option1">
          </label>
          <label class="radio-inline" style="padding-left: 0;"> <span style="float: left; padding-right: 25px;">Chị</span>
          <input type="radio" class="infor_user" name="inlineRadioOptions" id="Radio5" value="option2">
          </label>
        </div>
        <table>
          <tbody>
            <tr>
              <td><div class="box-select" style="margin: 0 10px 10px 0">
                  <select class="drop-city" id="inlineRadioOptions" style="width: 65px">
                    <option value="1">Anh</option>
                    <option value="2">Chị</option>
                  </select>
                </div></td>
              <td style="width: 100%"><div class="form-group w-icon">
                  <input type="text" placeholder="Họ và tên (*)" class="form-control" id="popup_payment_inp_hoten">
                </div></td>
            </tr>
          </tbody>
        </table>
        <div class="form-group w-icon">
          <input type="text" placeholder="Số điện thoại (*)" class="form-control" id="popup_payment_inp_sdt">
        </div>
        <div class="form-group w-icon simSo_showCls" id="popup_payment_inp_cmnd_div">
          <input type="text" placeholder="Số Chứng minh nhân dân (*)" class="form-control" id="popup_payment_inp_cmnd">
        </div>
        <div class="form-group w-icon dienThoai_showCls">
          <input type="text" placeholder="Email" class="form-control" id="popup_payment_inp_email">
        </div>
        <div id="payment-online" class="box">
          <label class="chk123" style="color: #333; display: none;">
          <input type="checkbox" value="1" id="chkNhapDiaChi">
          Nhập địa chỉ, thời gian để NHẬN HÀNG NHANH HƠN </label>
          <div id="paymentOnline" style="height: auto;" class="chk114">
            <form>
              <div class="form-group w-icon">
                <div class="box-select">
                  <select class="drop-city" id="popup_payment_inp_tinh">
                    <option value="1">Hồ Chí Minh</option>
                    <option value="2">Hà Nội</option>
                    <option value="3">An Giang</option>
                    <option value="5">Bắc Kạn</option>
                    <option value="6">Bắc Giang</option>
                    <option value="7">Bạc Liêu</option>
                    <option value="8">Bắc Ninh</option>
                    <option value="9">Bến Tre</option>
                    <option value="11">Bình Định</option>
                    <option value="12">Bình Phước</option>
                    <option value="13">Bình Thuận</option>
                    <option value="14">Cà Mau</option>
                    <option value="15">Cần Thơ</option>
                    <option value="16">Cao Bằng</option>
                    <option value="17">Đà Nẵng</option>
                    <option value="18">Đắk Lắk</option>
                    <option value="19">Điện Biên</option>
                    <option value="20">Đồng Nai</option>
                    <option value="21">Gia Lai</option>
                    <option value="22">Hà Giang</option>
                    <option value="23">Hà Nam</option>
                    <option value="24">Hậu Giang</option>
                    <option value="25">Hà Tĩnh</option>
                    <option value="26">Hải Dương</option>
                    <option value="27">Hải Phòng</option>
                    <option value="28">Hòa Bình</option>
                    <option value="30">Khánh Hòa</option>
                    <option value="32">Lai Châu</option>
                    <option value="33">Lâm Đồng</option>
                    <option value="34">Lạng Sơn</option>
                    <option value="35">Lào Cai</option>
                    <option value="36">Long An</option>
                    <option value="37">Nam Định</option>
                    <option value="38">Nghệ An</option>
                    <option value="39">Ninh Thuận</option>
                    <option value="40">Phú Thọ</option>
                    <option value="41">Phú Yên</option>
                    <option value="42">Quảng Bình</option>
                    <option value="43">Quảng Nam</option>
                    <option value="44">Quảng Ngãi</option>
                    <option value="45">Quảng Ninh</option>
                    <option value="46">Quảng Trị</option>
                    <option value="47">Sóc Trăng</option>
                    <option value="48">Tây Ninh</option>
                    <option value="49">Thái Bình</option>
                    <option value="50">Thái Nguyên</option>
                    <option value="51">Thanh Hóa</option>
                    <option value="52">Huế</option>
                    <option value="53">Tiền Giang</option>
                    <option value="54">Trà Vinh</option>
                    <option value="55">Tuyên Quang</option>
                    <option value="56">Kiên Giang</option>
                    <option value="57">Vĩnh Phúc</option>
                    <option value="58">Bà Rịa–Vũng Tàu</option>
                    <option value="59">Yên Bái</option>
                    <option value="60">Vĩnh Long</option>
                    <option value="61">Bình Dương</option>
                    <option value="62">Đắk Nông</option>
                    <option value="63">Đồng Tháp</option>
                    <option value="64">Hưng Yên</option>
                    <option value="65">Kon Tum</option>
                    <option value="66">Ninh Bình</option>
                    <option value="67">Sơn La</option>
                  </select>
                </div>
                <div class="box-select margin-left-10">
                  <select class="drop-city" id="popup_payment_inp_huyen">
                  </select>
                </div>
              </div>
              <div class="form-group w-icon">
                <div class="box-select" style="width: 100%">
                  <select class="drop-city" style="width: 100%" id="popup_payment_inp_phuong">
                  </select>
                </div>
              </div>
              <div class="form-group w-icon">
                <input type="text" name="signin_username" id="popup_payment_inp_diachi" class="form-control" placeholder="Nhập số nhà, tên đường để nhận hàng">
              </div>
              <div class="form-group w-icon">
                <h4 style="color: #4F4F4F; font-size: 15px; font-weight: bold;">Chọn thời gian nhận hàng</h4>
                <div class="box-select" style="width: 48%;">
                  <div class="input-group date "> <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <input type="text" data-date-format="d-m-yyyy" id="date01" class="form-control date-picker">
                  </div>
                </div>
                <div class="box-select margin-left-10" style="width: 48%;">
                  <div class="input-group date "> <span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
                    <input type="text" class="form-control time-picker" id="timepicker1">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div id="divCaptchaTT"></div>
        <input id="hidProductId" value="" type="hidden">
        <div class="btn-fld"> <a href="javascript:void(0);" id="buynow1" class="btn btn-buynow">Xác nhận</a> </div>
        <div class="margin-top-15">
          <p class="simSo_showCls" style="color: #e90000; font-size: 12px; line-height: 18px;"><b style="text-decoration: underline; color: #e90000; font-size: 12px; line-height: 18px;">*Lưu ý:</b> Do lượng đặt hàng quá lớn, sim Quý khách lựa chọn có thể bị trùng với sự lựa chọn của khách hàng khác. ViettelStore sẽ kiểm tra và liên hệ lại ngay với Quý khách!</p>
          <p class="advisory"><i class="icons pop-tu-van" style="margin-top: 0;"></i><span>Tư vấn bán hàng <strong style="color: #F83015; font-size: 18px; font-weight: bold;">1800 8123</strong></span></p>
          <ul class="u1">
            <li style="margin-bottom: 10px;"><i class="icons pop-giao-hang"></i>Giao hàng miễn phí (nếu cách Viettel Store dưới 10km)</li>
            <li><i class="icons pop-bao-hanh"></i>Bảo hành chính hãng</li>
          </ul>
        </div>
        <br>
      </div>
    </div>
  </div>
</div>
<div id="popup_finish" class="dialog1">
  <div class="signup-ct">
    <div class="signup-header">
      <h4>Đặt hàng - nghe tư vấn miễn phí</h4>
      <a class="modal_close" href="#"><i class="fa fa-close"></i></a> </div>
    <div class="form_infor" style="width: 100%">
      <div class="box">
        <div class="" style="height: auto;">
          <div class="panel-body">
            <ul class="card-payment ul_finish">
              <li> <img alt="" src="images/icon-cart.png"> </li>
              <li class="txt_success" style="margin-top: 25px; font-size: 20px; font-weight: 600; margin-bottom: 5px;">Đặt hàng thành công ! </li>
              <li>Cảm ơn bạn <strong id="popup_finish_name"></strong> đã cho chúng tôi cơ hội được phục vụ! </li>
              <li>Mã đơn hàng của bạn là <strong id="popup_finish_orderCode"></strong>bạn có thể kiểm tra trạng thái đơn hàng <a id="popup_finish_link" href="#" style="font-weight: 600; text-decoration: underline;">tại đây</a> </li>
              <li>Chúng tôi sẽ liên hệ với bạn trong vòng 30 phút và cam kết giao hàng miễn phí trong 60 phút. </li>
              <li> <span style=""><i class="fa fa-advisory-new" style="margin-right: 5px; float: none; display: inline-block;"></i>Tư vấn bán hàng <strong style="color: #e41111; font-size: 18px; font-weight: bold;">1800 8123</strong> (08:00 - 22:00 h)</span> </li>
            </ul>
          </div>
        </div>
        <div id="thanhtoan_bankplus"> Bạn sẽ được chuyển tới <a href="javascript:void();">trang thanh toán</a> BankPlus trong <span>10</span> giây nữa </div>
      </div>
    </div>
  </div>
</div>
			
			
<script type="text/javascript" src="js/cookie.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.js"></script>
<script type="text/javascript">
    function getRuleID_selected2() {
        var ruleid = '';
        var ok = true;

        var choosefeaturetype = $('#pi_checker').data('choosefeaturetype');
        if ($('#pi_checker > div.attr_box').length > 0) {
            $('#pi_checker > div.attr_box').each(function () {
                if (!ok) return;

                if (choosefeaturetype == "1") {
                    var v = $(this).find('select').val();
                    ruleid = ruleid + v + ',';
                }
                else {
                    var v = $(this).find('input:checked').val();
                    if (v == undefined) {
                        ok = false;
                        return;
                    }
                    ruleid = ruleid + v + ',';
                }
            });
        }

        return ruleid;
    }

    function muahang(Product_ID, ChooseFeatureType, ruleID) {
        if (ChooseFeatureType == undefined)
            ChooseFeatureType = 0;

        $('#hidProductId').val(Product_ID);

        $.ajax({
            url: '/Site/_Sys/Ajax.aspx',
            type: 'POST',
            data: {
                'a': 'cart-add',
                'Product_ID': Product_ID,
                'Rule_ID': ruleID,
                'quantity': 1,
                'muangay': 1
            },
            success: function (data) {
                var d = eval('(' + data + ')');
                if (d.stt < 0) {
                    alert(d.msg);
                }
                else if (d.stt == 1) {
                    showDialog1('popup_payment1');
                    $('.scrollToTop').click();
                    $('#Gen1spThanhToan').load('/gen-uc/Cart!Gen1spThanhToan(ChooseFeatureType=' + ChooseFeatureType + ')',
                        function () {
                            $('#pi_checker select').change();
                        }
                    );
                    $('#divCaptchaTT').load('/gen-uc/Cart!InpCaptchaTT');
                    reloadGioHangPopup1(false);
                }

                if (ChooseFeatureType == 0) {
                    $('#popup_payment_inp_cmnd').hide();
                    $('#popup_payment_inp_email').show();
                    $('#step1').show();
                    $('#step2').show();
                }
                else {
                    $('#popup_payment_inp_cmnd').show();
                    $('#popup_payment_inp_email').hide();
                    $('#step1').hide();
                    $('#step2').hide();
                    //option Off chức năgn Sim số
                    $('#cardpayment1 input[type=radio][value=fa7aa975-8628-450c-b84b-3304056ccfd7]').parent().hide();
                    $('.fa-giao-hang').parent().hide();
                }
                
                // eCommerce: add transaction 
                ga('require', 'ecommerce', 'ecommerce.js');
                ga('send', 'event', 'Dat-ngay', 'click', 'buy-now');

                var total = $('#last_cart_price').text().replace(/\./g, '').replace(' ₫', '').replace(' ', '');
                var cart = '319c8037-871b-4ce3-bc13-e609054143a2';

                ga('ecommerce:addTransaction', {
                    'id': cart, // Transaction ID. Required
                    'affiliation': 'Viettel Store', // Affiliation or store name
                    'revenue': parseFloat(total), // Grand Total
                    'shipping': 0, // Shipping
                    'tax': 0, // Tax
                    'currency': 'VND',
                });
            }
        });
    }

    function getPriceByFeatureValueID(RuleID, pid) {
        $('#hidProductId').val(Product_ID);

        $.ajax({
            url: '/Site/_Sys/Ajax.aspx',
            type: 'POST',
            data: {
                'a': 'cart-add',
                'Product_ID': pid,
                'Rule_ID': RuleID,
                'quantity': 1,
                'muangay': 1
            },
            success: function () {
            }
        });
        i_ajax("ProductRule_GetPriceByRule", {
            'id': RuleID,
            'pid': pid
        },
    function (d) {
        if (d.stt == 0) {
            alert(d.msg);
        }
        else if (d.stt == 1) {
            $('#pi_price_new').html((d.data.PriceDisplayType == 1 || d.data.PriceDisplayType == 2 ? d.data.Price : d.data.SellPrice).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + '<span class="unit_18"> ₫</span>');
            $('#price_tietkiem').html(d.data.Discount.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + '<span class="unit_18"> ₫</span>');
            var totalprice = d.data.PriceDisplayType == 1 || d.data.PriceDisplayType == 2 ? parseInt(d.data.Price) - parseInt(d.data.Discount) : parseInt(d.data.SellPrice) - parseInt(d.data.Discount);
            $('#last_cart_price').html(totalprice.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + '<span class="unit_18"> ₫</span>');
            if (parseInt(d.data.AmounInstock) > 0)
                $('#GenProducInfos_checker .orange_txt').text(parseInt(d.data.AmounInstock) > parseInt(d.data.AmountMin) ? "(Còn hàng)" : "(Còn ít)");
            else
                $('#GenProducInfos_checker .orange_txt').text("(Đã hết hàng)");
        }
    });
    }

    $(document).ready(function () {
        $('#date01').datepicker({
            format: 'd-m-yyyy',
        });
        $('#timepicker1').timepicker({
            minuteStep: 5,
            showMeridian: false
        });

        $('.card-payment .color-check').click(function () {
            $('.card-payment .color-check').removeClass('check');
            $(this).addClass('check');
        });

        if (window.location.hash == '#thanhtoan') {
            showDialog1('popup_payment1');
        }

        $('#full_overlay').click(hideDialog1);
        $('.modal_close').click(hideDialog1);

        $('#buynow1').click(function (ev) {
            var hoten_KH = $('#popup_payment_inp_hoten').val().replace(/([~!@#$%^&*()_+=`{}\[\]\|\\:;'<>,.\/? ])+/g, ' ').replace(/^(-)+|(-)+$/g, ' ');
            if (hoten_KH == ' ' || hoten_KH.length < 4) {
                alert('Xin vui lòng nhập họ tên của bạn');
                return false;
            }

            var popup_payment_inp_sdt = $('#popup_payment_inp_sdt');
            if (!(/^[\d \(\)\+\-\.]+$/.test(popup_payment_inp_sdt.val())) || popup_payment_inp_sdt.val().length < 10) {
                alert('Xin vui lòng nhập đúng số điện thoại');
                popup_payment_inp_sdt.focus();
                return false;
            }

            if ($('#popup_payment_inp_cmnd_div').is(":visible")) {
                var popup_payment_inp_cmnd = $('#popup_payment_inp_cmnd');
                if (!(/^[\d \(\)\.]+$/.test(popup_payment_inp_cmnd.val()))) {
                    alert('Xin vui lòng nhập đúng số cmnd');
                    popup_payment_inp_cmnd.focus();
                    return false;
                }
            }

            var paymentTypeID = $('#cardpayment1 input:checked').val();
            if (paymentTypeID == undefined) {
                alert('Xin vui chọn hình thức thanh toán');
                return false;
            }

            var ruleid = '';
            if ($('#pi_checker .color-check').length > 0) {
                ruleid = getRuleID_selected2();
                if (ruleid == '') {
                    alert('Xin vui lòng chọn màu');
                    return false;
                }
            }

            var loaiSim1 = 0;

            if ($('#panel-loai-sim').is(":visible")) {
                loaiSim1 = $('#panel-loai-sim input:checked').val();
                if (loaiSim1 == undefined) {
                    alert('Xin vui lòng chọn loại sim');
                    return false;
                }
            }

            setCookie('__HTTT_old', $('#cardpayment1 input:checked').val(), 30);

            $.ajax({
                url: '/Site/_Sys/ajax.aspx',
                type: 'POST',
                data: {
                    a: 'cart-complete',
                    captcha: $('#inpCaptchaTT').val(),
                    hoten: hoten_KH,
                    dienthoai: popup_payment_inp_sdt.val(),
                    cmnd: $('#popup_payment_inp_cmnd').val(),
                    email: $('#popup_payment_inp_email').val(),
                    phuongthucTT: paymentTypeID,
                    ruleid: ruleid,
                    loaiSim: loaiSim1,
                    xuathoadoncty: ($('#chkXuatHoaDonCty').is(':checked') ? 1 : 0),
                    cty_ten: $('#Text2').val(),
                    cty_diachi: $('#Text3').val(),
                    cty_masothue: $('#Text4').val(),
                    chkNhapDiaChi: ($('#chkNhapDiaChi').is(':checked') ? 1 : 0),
                    dc_idphuong: $('#popup_payment_inp_phuong').val(),
                    dc_ngay: $('#date01').val(),
                    dc_gio: $('#timepicker1').val(),
                    dc_diachi: $('#popup_payment_inp_diachi').val()
                },
                success: function (data) {
                    var d = eval("(" + data + ")");
                    if (d.stt < 0) {
                        alert(d.msg);
                    }
                    else if (d.stt == 1) {
                        setCookie('___CartHelper_CheckCookie', '');
                        hideDialog1();
                        ga('send', 'event', 'Xac-nhan', 'click', 'buy-now');                                                
                        $('#popup_finish_name').text(hoten_KH);                        
                        showDialog1('popup_finish');
                        //Code check google even
                        var pUrl = $('#pUrl').val();
                        if (document.getElementById('popup_payment_inp_cmnd').value !== '') {
                            pUrl = "#";
                        }
                        goog_report_conversion(pUrl);

                        var d2 = eval("(" + d.data + ")");
                        if (d2 != undefined) {
                            $('#popup_finish_orderCode').text(d2.oid + ' ');
                            $('#popup_finish_link').attr('href', "#?orderCode=" + d2.oid);

                            if (d2.action != '') {
                                $('#thanhtoan_bankplus').show();
                                $('#thanhtoan_bankplus a').attr('href', d2.action);
                                $('#thanhtoan_bankplus span').text('10');
                                setTimeout(CountDownForRedirectToBankPlus, 1000);
                            }
                        }
                    }
                    var pid = $('#hidProductId').val();
                    if (pid == 40427) {
                        // J5 Confirm button
                        ebConversionTracker(879969);
                    }
                    else if (pid == 107957) {
                        // J5 2016 Confirm button
                        ebConversionTracker(879971);
                    }
                    else if (pid == 40428) {
                        // J7 Confirm button
                        ebConversionTracker(879970);
                    } else if (pid == 107958) {
                        // J7 2016 Confirm button
                        ebConversionTracker(879972);
                    }
                }
            });

            ev.preventDefault();
            return false;

        });

        $('.chk123 input[type=checkbox]').change(function () {
            if ($(this).is(':checked'))
                $(this).parent().next().slideDown();
            else
                $(this).parent().next().slideUp();
        });

        $('#cardpayment1 label input').change(function () {
            $('#cardpayment1 .desc').slideUp();
            $(this).parent().next().slideDown();
        });

        var __HTTT_old = getCookie('__HTTT_old');
        if (__HTTT_old == undefined) {
            $('#cardpayment1 input[type=radio]').eq(0).attr('checked', 'checked');
        }
        else {
            $('#cardpayment1 input[value=' + __HTTT_old + ']').attr('checked', 'checked');
        }
    });

    function CountDownForRedirectToBankPlus() {
        var idx = parseInt($('#thanhtoan_bankplus span').text());
        idx = idx - 1;
        $('#thanhtoan_bankplus span').text(idx);
        if (idx <= 0) {
            window.location = $('#thanhtoan_bankplus a').attr('href');
            return;
        }

        setTimeout(CountDownForRedirectToBankPlus, 1000);
    }

</script>
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: '/Site/_Sys/ajax.aspx',
            type: 'POST',
            data: {
                a: 'Province_Load'
            },
            success: function (data) {
                var d = eval("(" + data + ")");

                if (d.stt <= 0) {
                    alert(d.msg);
                }
                else if (d.stt == 1) {
                    var inp = $('#popup_payment_inp_tinh');
                    inp.html('');
                    var a = eval('(' + d.data + ')');
                    $(a).each(function (idx, elm) {
                        inp.append('<option value="' + elm.id + '">' + elm.n + '</option>');
                    });
                }
            }
        });

        $('#popup_payment_inp_tinh').change(function () {
            $.ajax({
                url: '#',
                type: 'POST',
                data: {
                    a: 'District_LoadByProvinceID',
                    Province_ID: $('#popup_payment_inp_tinh').val()
                },
                success: function (data) {
                    var d = eval("(" + data + ")");

                    if (d.stt <= 0) {
                        alert(d.msg);
                    }
                    else if (d.stt == 1) {
                        var inp = $('#popup_payment_inp_huyen');
                        inp.html('');
                        var a = eval('(' + d.data + ')');
                        $(a).each(function (idx, elm) {
                            inp.append('<option value="' + elm.id + '">' + elm.n + '</option>');
                        });
                    }
                }
            });
        });

        $('#popup_payment_inp_huyen').change(function () {
            $.ajax({
                url: '#',
                type: 'POST',
                data: {
                    a: 'Ward_LoadByDistrict_ID',
                    District_ID: $('#popup_payment_inp_huyen').val()
                },
                success: function (data) {
                    var d = eval("(" + data + ")");

                    if (d.stt <= 0) {
                        alert(d.msg);
                    }
                    else if (d.stt == 1) {
                        var inp = $('#popup_payment_inp_phuong');
                        inp.html('');
                        var a = eval('(' + d.data + ')');
                        $(a).each(function (idx, elm) {
                            inp.append('<option value="' + elm.id + '">' + elm.n + '</option>');
                        });
                    }
                }
            });
        });
    });
</script>
<script type="text/javascript">
    function RefreshCartList() {
        $('#cart_lst1').parent().load('#');
        RefreshCartMenuHomePage();
    }

    function RemoveProduct(Cart_ID) {
        $.ajax({
            url: '#',
            type: 'POST',
            data: {
                'a': 'cart-remove',
                'Cart_ID': Cart_ID
            },
            success: function (data) {
                RefreshCartList();
            }
        });
    }

    function UpdateCartListQuantity() {
        var s = '';
        $('#cart_lst1 input[data-name="Product_Quantity"]').each(function (i, e) {
            s = s + $(e).data('id') + '=' + $(e).val() + ',';
        });

        $.ajax({
            url: '#',
            type: 'POST',
            data: {
                'a': 'cart-update',
                's': s
            },
            success: function (data) {
                RefreshCartList();
            }
        });
    }
</script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/slidejs.min.js"></script>
<script type="text/javascript" src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".phone-wapper .h-item img, .laptop-wapper .h-item img, .tablet-wapper .h-item img, .pk-wapper .h-item img, .content-danh-muc .right .item .img img").lazyload({
            effect: "fadeIn"
        });

        $(".phone-wapper .h-item img, .laptop-wapper .h-item img, .tablet-wapper .h-item img, .pk-wapper .h-item img, .content-danh-muc .right .item .img img").each(function () {
            $(this).attr("data-original", $(this).attr("src"));
            
        });

        $('#cartCount11234').text('0').show();
    });
    $(document).ready(function () {

        var sync1 = $("#owl-slide");
        var sync2 = $("#sync2");

        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            navigation: true,
            navigationText: ["", ""],
            pagination: false,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
            lazyLoad: true
        });

        sync2.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [991, 4],
            itemsTablet: [768, 4],
            itemsMobile: [479, 4],
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function (el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });

        function syncPosition(el) {
            var current = this.currentItem;
            $("#sync2")
                .find(".owl-item")
                .removeClass("synced")
                .eq(current+1)
                .addClass("synced");
            if ($("#sync2").data("owlCarousel") !== undefined) {
                center(current);
            }
        }

        $("#sync2").on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });

        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }

            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2);
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1]);
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1);
            }

        }

    });
    $(document).ready(function () {
        $("#owl-slide-2").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: false,
            pagination: false,
            lazyLoad: true,
            navigationText: ["", ""]
        });
        $("#owl-slide-3").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: false,
            pagination: false,
            lazyLoad: true,
            navigationText: ["", ""]
        });
        $("#owl-news").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [991, 2],
            itemsTablet: [768, 2],
            itemsMobile: [479, 2],
            responsiveRefreshRate: 100,
            pagination: false,
            paginationSpeed: 400,
            autoPlay: false,
            lazyLoad: true,
            navigationText: ["", ""]
        });
        $('.h-item > .content').hover(function () {
            $(this).addClass('hHover');
            $('.hHover .h-detail').fadeIn(200);
        }, function () {
            $(this).removeClass('hHover');
            $('.h-detail').hide();
        });

    });
    function resize() {
        resizeItem($('.phone-wapper'), $('.phone-wapper > .h-item'));
        resizeItem($('.laptop-wapper'), $('.laptop-wapper > .h-item'));
        resizeItem($('.tablet-wapper'), $('.tablet-wapper > .h-item'));
        resizeItem($('.pk-wapper'), $('.pk-wapper > .h-item'));
    }
    $(window).init(function () {
        resize();
    });
    $(document).ready(function () {
        $('.new-btn-menu').click(function () {
            var w = $('header .container').width();
            if (w >= 1140) {
                var a = $('#status-btnmenu').val();
                if (a == 0) {
                    $('#home-slide').css('margin-left', '0');
                } else {
                    $('#home-slide').css('margin-left', '195px');
                }
            }
        });
        // Hot News random
        $("#slides_News").slidesjs({
            navigation: false,
            pagination: false,
            generatePagination: false,
            width: 500,
            height: 10,
            play: {
                active: false,
                auto: true,
                effect: "fade",
                interval: 5000,
                swap: true,
                restartDelay: 2500
            },
            effect: {
                fade: {
                    speed: 600
                }
            }
        });
    });
</script>
<script type="text/javascript" async="" src="js/conversion.js"></script>
<script type="text/javascript">
    var ants_analytic = ants_analytic || [];
    ants_analytic.push({ conversionId: 'd6db816c' });
</script>
<div class="popup_advisory1"> <a href="tel:18008123"> <i class="icons advisory" id="telnumber" title="Tư vấn bán hàng"></i> </a> </div>
<?php
	include "footer.php";
?>
<div class="scrollToTop"> <i class="icons scrolltop" title="ScrollToTop"></i> </div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/nprogress.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/resizeproduce.js"></script>
<script type="text/javascript" src="js/i_ajax.js"></script>
<script type="text/javascript">
    $(function () {
        NProgress.settings.template = '<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"></div>';
        $(document).on('ajaxStart', function () { NProgress.start(); });
        $(document).on('ajaxComplete', function () { NProgress.done(); });
        $(document).on('ajaxError', function () { NProgress.done(); });
    });
</script>
<script type="text/javascript">
    $('.clsdanhmuc > #select-search, .clsdanhmuc > #select-ico').click(function () {
        $('.clsdanhmuc > .content').fadeToggle(100);
    });
    $('.clsdanhmuc > .content > p').click(function () {
        $('#select-search').html($(this).html());
        $('#select-search').data('stype', $(this).data('stype'));
        $('.clsdanhmuc > .content').fadeToggle(100);
    });

    $('.block-menu .item').hover(function () {
        $(this).addClass('menu-hover');
    }, function () {
        $(this).removeClass('menu-hover');
    });

    $('#bg-menu-cl').on('click', function () {
        $('.wapper-menu').removeClass('show-menu-tablet');
        $('#status-btnmenu').val(0);
        $('.nav-menu').removeClass('active-menu');
        $('#bg-menu-cl').css('display', 'none');
        try {
            $('#home-slide').css('margin-left', '0');
        } catch (er) {
        }
    });

    function puMenu() {
        var a = $('#status-btnmenu').val();
        if (a == 0) {
            $('.wapper-menu').addClass('show-menu-tablet');
            $('#status-btnmenu').val(1);
            $('.nav-menu').addClass('active-menu');
            $('#bg-menu-cl').css('display', 'block');
        } else {
            $('.wapper-menu').removeClass('show-menu-tablet');
            $('#status-btnmenu').val(0);
            $('.nav-menu').removeClass('active-menu');
            $('#bg-menu-cl').css('display', 'none');
        }
    }

    $(document).ready(function () {
        $(window).resize(function () {
            $('.wapper-menu').removeClass('show-menu-tablet');
            $('#status-btnmenu').val(0);
            $('.nav-menu').removeClass('active-menu');
            resize();
        });
    });

    $(function () {
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
        });

        $('.scrollToTop').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 500, 'linear');
            return false;
        });
    });

    function BindProHover() {
        $('.ProductList3Col_item').unbind('mouseenter').unbind('mouseleave');
        $('.ProductList3Col_item').mouseenter(function () {
            $(this).addClass('dHover');
            $('.dHover .detail').fadeIn(200);
        }).mouseleave(function () {
            $('.dHover .detail').hide();
            $(this).removeClass('dHover');
        });
    }

    $(document).ready(function () {          
        $('#telnumber').on('click', function () {
            ga('send', 'event', 'Goi-dien', 'click', 'call-telephone');
        });
        
        var a = $('.history .text1').width();
        a = 220 + a;
        $('.history > .text2').css('left', a + 'px');
    });
</script>
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 877363588;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
</body>
</html>