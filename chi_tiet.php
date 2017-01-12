<?php 
	session_start();
	$ma=$_GET["msp"];
	$d=0;
	if(!isset($_SESSION["Viewed"]))
	{
		$_SESSION["Viewed"]=array();
		array_push($_SESSION["Viewed"],$ma);
	}
	else  
	{
		foreach($_SESSION["Viewed"] as $k=>$v)
		{
			if($ma==$v)
			{
				$d=$d+1;
			}
		}
		if($d==0)
		{
			array_unshift($_SESSION["Viewed"],$ma);
		}
	}
	
?>
<!DOCTYPE html>
<html class=" ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php
			require("connect.php");
			$sql="select TENSP from sanpham where MASP='".$_GET["msp"]."'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo $row["TENSP"];
			?></title>
<meta name="keywords" content="Samsung Galaxy J7 2016, Sam sung, đánh giá Galaxy J7 2016, Galaxy J7 2016">
<meta name="description" content="Samsung Galaxy J7 2016 ra mắt cùng với Galaxy J5 2016 nhưng Galaxy J7 được ưu ái hơn khi được tích hợp một số tính năng đáng giá và sở hữu cấu hình ở mức khá cao. Lần này, Samsung đã thổi hồn cho Galaxy J7 2016 với bộ viền kim loại tinh tế. Đây thực sự là một lựa chọn cực kỳ đáng giá ở phân khúc tầm trung cận cao cấp trên thị trường hiện nay.">
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
<link href="#favicon.ico" rel="shortcut icon" type="image/x-icon">
<script src="js/cb=gapi.loaded_1" async=""></script>
<script src="js/cb=gapi.loaded_0" async=""></script>
<script id="facebook-jssdk" src="js/sdk.js"></script>
<script async="" src="js/analytics.js"></script>
<link href="css/main.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-58097290-1', 'auto');
        ga('send', 'pageview');
    </script>
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
<script id="livezilla_pollscript" src="images/server.php" async=""></script>
</head>
<body cz-shortcut-listen="true">

<?php
	include "header.php";
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
            // Search by suggestion
            var ajaxUrl = "/AjaxAction.aspx";
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

            $('#GioHangPopup1_div').load('/Site/_Sys/GetUserControl.aspx', {
                'path': 'Cart!GioHangPopup'
            },
                function () {
                    $('#cartCount11234').text($('#cartCount11235').text()).show();
                    if (showCart)
                        showDialog1('popup_giohang1');
                });
        }
    </script>
<!-- End Header -->
<link href="css/lightbox.css" rel="stylesheet">
<script src="js/jquery.slimscroll.min.js"></script>
<style type="text/css">
    #panel-dd-noi-bat {
        display: none;
    }

    #owl-feature {
        padding-bottom: 20px;
        text-align: justify;
    }

    #owl-related-news {
        margin-bottom: 20px;
    }

        #owl-related-news > .owl-controls > .owl-buttons {
            position: absolute;
            top: calc(50% - 59px);
            left: 0;
            width: 100%;
        }

            #owl-related-news > .owl-controls > .owl-buttons > .owl-prev {
                width: 34px;
                height: 78px;
                background:url('/Assets/icons.png');
                background-position: -650px -450px;
                left: -20px;
                -ms-opacity: 0.8;
                opacity: 0.8;
            }

            #owl-related-news > .owl-controls > .owl-buttons > .owl-next {
                width: 34px;
                height: 78px;
                background:url('/Assets/icons.png');
                background-position: -690px -450px;
                right: -20px;
                -ms-opacity: 0.8;
                opacity: 0.8;
            }

    .wapper-menu {
        display: none;
    }

    .box-attr .orange_txt {
        margin-left: 10px;
        font-size: 12px;
        display: inline-block;
    }

    .box-attr .color-check img {
        border: solid 1px #ccc;
    }

    .box-attr input[type=radio] {
        display: none;
    }

    .attr_box .name_attr {
        display: inline-block;
    }

    .attr_box .box-attr {
        display: inline-block;
    }

    .attr_box .child_box {
        display: inline-block;
    }

        .attr_box .child_box .color-check {
            display: inline-block;
        }

        .attr_box .child_box label {
            margin-bottom: -8px;
        }

    #gioithieu1.close1 {
        height: 550px;
        overflow: hidden;
        position: relative;
    }

    #gioithieu1_viewmore {
        padding: 80px 20px 0;
        position: absolute;
        left: 0;
        bottom: 0;
        right: 0;
        background-image: url("images/bgopacity.png");
        background-repeat: repeat-x;
        height: 122px;
    }

    #gioithieu1 {
        position: relative;
    }

    .moreproduct {
        margin: 30px auto 0;
        text-align: center;
    }

    .ul_more {
        margin-left: 0;
        margin: 0 auto;
        padding: 0;
    }

        .ul_more li {
            list-style: none;
            display: inline-block;
            margin-right: 30px;
        }

            .ul_more li a {
                color: #000000;
                font-size: 14px;
                text-transform: uppercase;
                text-decoration: underline;
            }

    .produce-info-2 ul, .produce-info-2 li {
        list-style: url('images/ulli.png');
        margin: 0;
        padding-right: 5px;
        color: #323232;
        font-size: 12px;
        line-height: 24px;
        font-weight: normal;
    }

    .produce-info-2 {
        margin-left: 0 !important;
        color: #323232;
        font-size: 12px;
        line-height: 24px;
        max-height: 140px;
        overflow: auto;
        padding-right: 20px;
    }

    .produce-info .slimScrollDiv {
        margin-left: -15px;
    }

    .compare-produce .content .item .img-produce img {
        max-width: 100%;
        max-height: 220px;
        padding: 5px;
    }

    .anhtt .content .row img {
        width: 100%;
        padding: 5px;
    }

    .anhtt .content {
        height: auto;
        padding-left: 5px;
        padding-top: 5px;
        padding-right: 5px;
    }

    .anhtt .more1 .content {
        display: none;
    }

    #_price_new437 {
        text-decoration: line-through;
        color: #A6A6A6;
        margin-left: 15px;
        font-size: 18px;
        font-weight: normal;
    }

    #toolbar {
        z-index: 99 !important;
    }

    label {
        margin-bottom: 0;
    }

    #GenProducInfos_checker .color-check img {
        width: 20px !important;
        height: 20px !important;
    }

    #GenProducInfos_checker {
        font-weight: bold;
    }

    .xem-anh {
        border: 1px solid #D8D8D8;
        height: 43px;
        color: #F60;
        font-size: 20px;
        line-height: 43px;
        text-align: center;
        margin-top: 20px;
        cursor: pointer;
        margin-left: -21px;
        margin-right: -21px;
        margin-bottom: -1px;
    }
    .tratruoc0 {
       background-position: -450px -665px !important;
    }
    .tratruoc10 {
       background-position: 0 -695px !important;
    }
</style>
<!-- Begin Content -->
<div class="container container-fixed">
  <div class="row" style="position: relative;">
  <div class="col-lg-2 col-sm-2 hidden-md hidden-sm hidden-xs wapper-menu">
  <?php
	include "bar_menu.php";
 ?>
	<style type="text/css">
	.block-menu .item .content .col-xs-3 {
	padding-left: 20px !important;
	}
	</style>
</div>
 
    <div class="col-xs-12 col-lg-7 col-md-8 col-sm-12"> </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="container container-fixed">
      <div class="row history"> 
	  <?php
		require("connect.php");
		$msp=$_GET["msp"];
		$loaisp=(int)$_GET["lsp"];
		$TenLoaiSP="";
		if($loaisp==1)
		{
			$TenLoaiSP="Điện thoại";
		}
		else
		{
			if($loaisp==2)
			{
				$TenLoaiSP="Laptop";
			}
			else
			{
				if($loaisp==3)
				{
					$TenLoaiSP="Máy tính bảng";
				}
				else
					$TenLoaiSP="Phụ kiện";
			}
				
		}		
		if($conn->connect_error)
		{
			die('ketnoi that bai'.$conn->connect_error);
			
		}
			echo"";
		$sql = "SELECT * FROM sanpham WHERE MASP='".$msp."'";
		$result = $conn->query($sql); 
		if($result->num_rows == 0){
			echo "Chua co du lieu";
		}
		else{
			while($row = $result->fetch_assoc()){
				$Tensanpham= $row['TENSP'];
			}
		}
		echo '<span class="text1"> <a href="index.php">Trang chủ <i class="fa fa-angle-right" style="color: #949494;"></i></a> <a href="danh_muc.php?lsp='.$loaisp.'&hsx=0">'.$TenLoaiSP.'</a> <i class="fa fa-angle-right"></i> </span> <span class="text2" style="left: 348px;">'.$Tensanpham.'</span> ';
	  ?>
	  </div>
    </div>
  </div>
</div>
<div style="background-color: white; margin-bottom: -20px; width: 100%;">
  <div class="container container-fixed">
    <div class="row">
      <div class="col-xs-12 detail-info">
        <div style="height: 22px;width: 27px;position: absolute;top: 10px;left: 10px;z-index: 989;"> </div>
        <div class="clear-both"></div>
        <div class="row">
          <div class="col-lg-5">
            <div class="row" id="srpgs-slideshow-wapper">
              <div class="srpgs-container">
                <!-- Photo placeholders -->
                <div id="srpgs-slideshow">
				<?php
						$msp=$_GET["msp"];
						require("connect.php");
						$sql = "SELECT * FROM sanpham WHERE MASP='".$msp."'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) 
						{
							
							while($row = $result->fetch_assoc())
							{
								echo'<div id="srpgs-rotate-1" class="srpgs-holder" style="display: none; z-index: 3;"> <img src="img/HinhSP/'.$row["HINH1"].'" alt="" data-original="javascript:void(0);" style="max-width: 1345px;"> </div>
								<div id="srpgs-rotate-2" class="srpgs-holder" style="display: block; z-index: 4;"> <img src="img/HinhSP/'.$row["HINH1"].'" alt="" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/1789093788.jpeg" style="max-width: 1345px; display: inline;"> </div>';
							}
						}
						?>
                  <div id="srpgs-rotate-1" class="srpgs-holder" style="display: none; z-index: 3;"> <img src="http://cdn.viettelstore.vn/Images/Product/ProductImage/1245475716.jpeg" alt="" data-original="javascript:void(0);" style="max-width: 1345px;"> </div>
                  <div id="srpgs-rotate-2" class="srpgs-holder" style="display: block; z-index: 4;"> <img src="http://cdn.viettelstore.vn/Images/Product/ProductImage/2064967723.jpeg" alt="" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/1789093788.jpeg" style="max-width: 1345px; display: inline;"> </div>
                  <a href="javascript:void(0);" class="srpgs-control-btns" id="srpgs-control-back"><i class="fa fa-angle-left"></i></a> <a href="javascript:void(0);" class="srpgs-control-btns" id="srpgs-control-next"><i class="fa fa-angle-right"></i></a> </div>
                <div class="clear-both"></div>
                <!-- Photo slideshow controls -->
                <div id="srpgs-control">
                  <!--<a class="srpgs-thumbs-nav up" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>-->
                  <div id="srpgs-thumbs-gallery" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                      <div class="owl-wrapper" style="width: 1160px; left: 0px; display: block;">
					  <?php
						$msp=$_GET["msp"];
						require("connect.php");
						$sql = "SELECT * FROM sanpham WHERE MASP='".$msp."'";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) 
						{
							while($row = $result->fetch_assoc())
							{
								echo'<div class="owl-item" style="width: 116px;">
									 <div class="border-thumbs-gallery"><img src="img/HinhSP/'.$row["HINH1"].'" id="srpgs-thumb-0" title=""></div>
									</div>
									<div class="owl-item" style="width: 116px;">
									  <div class="border-thumbs-gallery"><img src="img/HinhSP/'.$row["HINH2"].'" id="srpgs-thumb-1" title=""></div>
									</div>
									<div class="owl-item" style="width: 116px;">
									  <div class="border-thumbs-gallery active"><img src="img/HinhSP/'.$row["HINH3"].'" id="srpgs-thumb-2" title=""></div>
									</div>
									<div class="owl-item" style="width: 116px;">
									  <div class="border-thumbs-gallery"><img src="img/HinhSP/'.$row["HINH4"].'" id="srpgs-thumb-3" title=""></div>
									</div>';
							}
						}
						?>
                    </div>
                  </div>
                  <!--<a class="srpgs-thumbs-nav down" href="javascript:void(0)"><i class="fa fa-angle-down"></i></a>-->
                </div>
              </div>
              <script src="js/srpgs.minified.js"></script>
             <script type="text/javascript">
                                var srpgs_slideshowSpeed = 10000,	// speed of the automatic slideshow
                                    srpgs_scroll_delay = 700,		// speed of the scrolling controls
                                    //srpgs_path_pics = $("#owl-wapper"),		// path to large photos
                                    srpgs_path_thumb = $("#owl-wapper");
                                var srpgs_photos = $("#owl-wapper");
                                $(document).ready(function() {
                                    $("#srpgs-thumbs-gallery").owlCarousel({
                                        autoPlay: false,
                                        items: 4,
                                        pagination: false,
                                        itemsDesktop: [1199, 8],
                                        itemsDesktopSmall: [979, 6]
                                    });
                                });
                            </script> 
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row">
			<?php
				require("connect.php");
				$msp=$_GET["msp"];
				$loaisp=(int)$_GET["lsp"];
				// Create and execute a MySQL query
				if($loaisp==1)
					{		
					$sql = "SELECT * FROM sanpham sp,thongsokythuatdienthoai ts WHERE sp.MASP=ts.MASP and sp.MASP = '".$msp."'";
					$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
					{
						$maloai=$row["MALOAISP"];
					echo '
					  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 produce-info">
						<div class="row">
						  <div>
							<h1>'.$row["TENSP"].'</h1>
							<span id="_price_new436">'.number_format( $row["GIA"],0,'.','.').'<span class="unit_18"> ₫</span></span> </div>
						  <ul>
							<li id="GenProducInfos_checker" class="">
							  <div class="attr_box size-color" data-row="attribute">
								<div class="name_attr">Màu sắc: </div>
								<div class="box-attr">
								  <div class="child_box">
									<label class="color-check " id="145a17cf-7334-4603-ae95-8ee9ddd10d19" title="WHITE">
									<div for="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568"><img class="img-color" alt="" src="images/35129916.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568" value="1e8931ba-88b8-4105-ad47-6e66a0212568" onClick="getPriceByFeatureValueID2(&#39;145a17cf-7334-4603-ae95-8ee9ddd10d19&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="281ddb2b-159b-454b-ae75-b364e4f75635" title="GOLD">
									<div for="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8"><img class="img-color" alt="" src="images/888897838.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" value="10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" onClick="getPriceByFeatureValueID2(&#39;281ddb2b-159b-454b-ae75-b364e4f75635&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="333b7a26-58bc-4245-9847-f83f469e9bda" title="BLACK">
									<div for="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9"><img class="img-color" alt="" src="images/1852268806.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" value="4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" onClick="getPriceByFeatureValueID2(&#39;333b7a26-58bc-4245-9847-f83f469e9bda&#39;, 107958)">
									</div>
									</label>
									<span class="orange_txt"></span> </div>
								</div>
							  </div>
							</li>
							<li class="">
							  <p style="margin: 0;"><b>Bộ sản phẩm chuẩn:</b> Hộp, Pin, Sạc, Cáp, Tai nghe, Sách hướng dẫn.</p>
							</li>
						  </ul>
						</div>
						<div class="row">
						  <table cellpadding="0" cellspacing="0" style="width: 100%;">
							<tbody>
							  <tr>
								<td><a  href="giohang.php?masp='.$row['MASP'].'" id="dathang1"> <img src="images/them-vao-gh_03.png" style="width: 100%" alt="">
								  <!--<i class="icons add-gh-them-vao-gh_03.png"></i>-->
								  </a> </td>
							  </tr>
							  <tr>
								<td colspan="2"><a href="javascript:void(0);" id="datmua1" onClick="muahang(107958);"> <img src="images/order.png" style="width: 100%; margin-top: 8px;" alt=""> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div class="row">
						  <table style="width: 100%; margin-top: 10px;">
							<tbody>
							  <tr>
								<td style="width: 200px;">
								  <script>
															(function(d, s, id) {
																var js, fjs = d.getElementsByTagName(s)[0];
																if (d.getElementById(id)) return;
																js = d.createElement(s);
																js.id = id;
																js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
																fjs.parentNode.insertBefore(js, fjs);
															}(document, \'script\', \'facebook-jssdk\'));
														</script>
								  <!-- Place this tag in your head or just before your close body tag. -->
								  <script src="js/platform.js" async="" defer="" gapi_processed="true">
															{
																lang: \'vi\'
															}
														</script>
								 </td>
								<td><a href="#"> <i class="icons connectfb"></i> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div style="padding-top: 20px;"></div>
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 140px;">
						  <div class="row produce-info-2" style="overflow: hidden; width: auto; height: 140px;">• '.$row["MANHINH"].'<br>
							• '.$row["CPU"].'<br>
							• '.$row["RAMROM"].'<br>
							• '.$row["CAMERA"].'<br>
							• '.$row["PIN"].'</div>
							}
						  <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 140px;"></div>
						  <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
						</div>
					  </div>';
					}
				}
					}
					if($loaisp==2)
					{
						$sql = "SELECT * FROM sanpham sp,thongsokythuatlaptop ts WHERE sp.MASP=ts.MASP and sp.MASP = '".$msp."' LIMIT 6";
						$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
					{
						$maloai=$row["MALOAISP"];
					echo '
					  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 produce-info">
						<div class="row">
						  <div>
							<h1>'.$row["TENSP"].'</h1>
							<span id="_price_new436">'.number_format( $row["GIA"],0,'.','.').'<span class="unit_18"> ₫</span></span> </div>
						  <ul>
							<li id="GenProducInfos_checker" class="">
							  <div class="attr_box size-color" data-row="attribute">
								<div class="name_attr">Màu sắc: </div>
								<div class="box-attr">
								  <div class="child_box">
									<label class="color-check " id="145a17cf-7334-4603-ae95-8ee9ddd10d19" title="WHITE">
									<div for="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568"><img class="img-color" alt="" src="images/35129916.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568" value="1e8931ba-88b8-4105-ad47-6e66a0212568" onClick="getPriceByFeatureValueID2(&#39;145a17cf-7334-4603-ae95-8ee9ddd10d19&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="281ddb2b-159b-454b-ae75-b364e4f75635" title="GOLD">
									<div for="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8"><img class="img-color" alt="" src="images/888897838.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" value="10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" onClick="getPriceByFeatureValueID2(&#39;281ddb2b-159b-454b-ae75-b364e4f75635&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="333b7a26-58bc-4245-9847-f83f469e9bda" title="BLACK">
									<div for="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9"><img class="img-color" alt="" src="images/1852268806.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" value="4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" onClick="getPriceByFeatureValueID2(&#39;333b7a26-58bc-4245-9847-f83f469e9bda&#39;, 107958)">
									</div>
									</label>
									<span class="orange_txt"></span> </div>
								</div>
							  </div>
							</li>
							<li class="">
							  <p style="margin: 0;"><b>Bộ sản phẩm chuẩn:</b> Hộp, Pin, Sạc, Cáp, Tai nghe, Sách hướng dẫn.</p>
							</li>
						  </ul>
						</div>
						<div class="row">
						  <table cellpadding="0" cellspacing="0" style="width: 100%;">
							<tbody>
							  <tr>
								<td><a  href="giohang.php?masp='.$row['MASP'].'" id="dathang1"> <img src="images/them-vao-gh_03.png" style="width: 100%" alt="">
								  <!--<i class="icons add-gh-them-vao-gh_03.png"></i>-->
								  </a> </td>
							  </tr>
							  <tr>
								<td colspan="2"><a href="javascript:void(0);" id="datmua1" onClick="muahang(107958);"> <img src="images/order.png" style="width: 100%; margin-top: 8px;" alt=""> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div class="row">
						  <table style="width: 100%; margin-top: 10px;">
							<tbody>
							  <tr>
								<td style="width: 200px;">
								  <script>
															(function(d, s, id) {
																var js, fjs = d.getElementsByTagName(s)[0];
																if (d.getElementById(id)) return;
																js = d.createElement(s);
																js.id = id;
																js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
																fjs.parentNode.insertBefore(js, fjs);
															}(document, \'script\', \'facebook-jssdk\'));
														</script>
								  <!-- Place this tag in your head or just before your close body tag. -->
								  <script src="js/platform.js" async="" defer="" gapi_processed="true">
															{
																lang: \'vi\'
															}
														</script>
								 </td>
								<td><a href="#"> <i class="icons connectfb"></i> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div style="padding-top: 20px;"></div>
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 140px;">
						  <div class="row produce-info-2" style="overflow: hidden; width: auto; height: 140px;">• '.$row["BOVIXULY"].'<br>
							• '.$row["BONHO"].'<br>
							• '.$row["MANHINH"].'<br>
							• '.$row["OCUNG"].'<br>
							• '.$row["CARDDOHOA"].'</div>
							}
						  <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 140px;"></div>
						  <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
						</div>
					  </div>';
					}
				}
					}
					if($loaisp==3)
					{
						$sql = "SELECT * FROM sanpham sp,thongsokythuatmaytinhbang ts WHERE sp.MASP=ts.MASP and sp.MASP = '".$msp."' LIMIT 6";
						$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
					{
						$maloai=$row["MALOAISP"];
					echo '
					  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 produce-info">
						<div class="row">
						  <div>
							<h1>'.$row["TENSP"].'</h1>
							<span id="_price_new436">'.number_format( $row["GIA"],0,'.','.').'<span class="unit_18"> ₫</span></span> </div>
						  <ul>
							<li id="GenProducInfos_checker" class="">
							  <div class="attr_box size-color" data-row="attribute">
								<div class="name_attr">Màu sắc: </div>
								<div class="box-attr">
								  <div class="child_box">
									<label class="color-check " id="145a17cf-7334-4603-ae95-8ee9ddd10d19" title="WHITE">
									<div for="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568"><img class="img-color" alt="" src="images/35129916.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568" value="1e8931ba-88b8-4105-ad47-6e66a0212568" onClick="getPriceByFeatureValueID2(&#39;145a17cf-7334-4603-ae95-8ee9ddd10d19&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="281ddb2b-159b-454b-ae75-b364e4f75635" title="GOLD">
									<div for="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8"><img class="img-color" alt="" src="images/888897838.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" value="10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" onClick="getPriceByFeatureValueID2(&#39;281ddb2b-159b-454b-ae75-b364e4f75635&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="333b7a26-58bc-4245-9847-f83f469e9bda" title="BLACK">
									<div for="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9"><img class="img-color" alt="" src="images/1852268806.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" value="4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" onClick="getPriceByFeatureValueID2(&#39;333b7a26-58bc-4245-9847-f83f469e9bda&#39;, 107958)">
									</div>
									</label>
									<span class="orange_txt"></span> </div>
								</div>
							  </div>
							</li>
							<li class="">
							  <p style="margin: 0;"><b>Bộ sản phẩm chuẩn:</b> Hộp, Pin, Sạc, Cáp, Tai nghe, Sách hướng dẫn.</p>
							</li>
						  </ul>
						</div>
						<div class="row">
						  <table cellpadding="0" cellspacing="0" style="width: 100%;">
							<tbody>
							  <tr>
								<td><a href="giohang.php?masp='.$row['MASP'].'" id="dathang1"> <img src="images/them-vao-gh_03.png" style="width: 100%" alt="">
								  <!--<i class="icons add-gh-them-vao-gh_03.png"></i>-->
								  </a> </td>
							  </tr>
							  <tr>
								<td colspan="2"><a href="javascript:void(0);" id="datmua1" onClick="muahang(107958);"> <img src="images/order.png" style="width: 100%; margin-top: 8px;" alt=""> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div class="row">
						  <table style="width: 100%; margin-top: 10px;">
							<tbody>
							  <tr>
								<td style="width: 200px;">
								  <script>
															(function(d, s, id) {
																var js, fjs = d.getElementsByTagName(s)[0];
																if (d.getElementById(id)) return;
																js = d.createElement(s);
																js.id = id;
																js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
																fjs.parentNode.insertBefore(js, fjs);
															}(document, \'script\', \'facebook-jssdk\'));
														</script>
								  <!-- Place this tag in your head or just before your close body tag. -->
								  <script src="js/platform.js" async="" defer="" gapi_processed="true">
															{
																lang: \'vi\'
															}
														</script>
								 </td>
								<td><a href="#"> <i class="icons connectfb"></i> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div style="padding-top: 20px;"></div>
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 140px;">
						  <div class="row produce-info-2" style="overflow: hidden; width: auto; height: 140px;">• '.$row["MANHINH"].'<br>
							• '.$row["CPU"].'<br>
							• '.$row["RAMROM"].'<br>
							• '.$row["CAMERA"].'<br>
							• '.$row["PIN"].'</div>
							}
						  <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 140px;"></div>
						  <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
						</div>
					  </div>';
					}
				}
					}
					if($loaisp==4)
					{
						$sql = "SELECT * FROM sanpham sp,thongsophukien ts WHERE sp.MASP=ts.MASP and sp.MASP = '".$msp."' LIMIT 6";
						$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
					{
						$maloai=$row["MALOAISP"];
					echo '
					  <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 produce-info">
						<div class="row">
						  <div>
							<h1>'.$row["TENSP"].'</h1>
							<span id="_price_new436">'.number_format( $row["GIA"],0,'.','.').'<span class="unit_18"> ₫</span></span> </div>
						  <ul>
							<li id="GenProducInfos_checker" class="">
							  <div class="attr_box size-color" data-row="attribute">
								<div class="name_attr">Màu sắc: </div>
								<div class="box-attr">
								  <div class="child_box">
									<label class="color-check " id="145a17cf-7334-4603-ae95-8ee9ddd10d19" title="WHITE">
									<div for="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568"><img class="img-color" alt="" src="images/35129916.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i1e8931ba-88b8-4105-ad47-6e66a0212568" value="1e8931ba-88b8-4105-ad47-6e66a0212568" onClick="getPriceByFeatureValueID2(&#39;145a17cf-7334-4603-ae95-8ee9ddd10d19&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="281ddb2b-159b-454b-ae75-b364e4f75635" title="GOLD">
									<div for="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8"><img class="img-color" alt="" src="images/888897838.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" value="10e22c8f-45b1-4ff4-a9d2-86aaa3bbb2d8" onClick="getPriceByFeatureValueID2(&#39;281ddb2b-159b-454b-ae75-b364e4f75635&#39;, 107958)">
									</div>
									</label>
									<label class="color-check " id="333b7a26-58bc-4245-9847-f83f469e9bda" title="BLACK">
									<div for="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9"><img class="img-color" alt="" src="images/1852268806.jpeg">
									  <input type="radio" name="attr_g010008015" id="attr_g010008015_i4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" value="4f2afaa2-8f4c-4dcf-93de-a0cd90b06ad9" onClick="getPriceByFeatureValueID2(&#39;333b7a26-58bc-4245-9847-f83f469e9bda&#39;, 107958)">
									</div>
									</label>
									<span class="orange_txt"></span> </div>
								</div>
							  </div>
							</li>
							<li class="">
							  <p style="margin: 0;"><b>Bộ sản phẩm chuẩn:</b> Hộp, Pin, Sạc, Cáp, Tai nghe, Sách hướng dẫn.</p>
							</li>
						  </ul>
						</div>
						<div class="row">
						  <table cellpadding="0" cellspacing="0" style="width: 100%;">
							<tbody>
							  <tr>
								<td><a  href="giohang.php?masp='.$row['MASP'].'" id="dathang1"> <img src="images/them-vao-gh_03.png" style="width: 100%" alt="">
								  <!--<i class="icons add-gh-them-vao-gh_03.png"></i>-->
								  </a> </td>
							  </tr>
							  <tr>
								<td colspan="2"><a href="javascript:void(0);" id="datmua1" onClick="muahang(107958);"> <img src="images/order.png" style="width: 100%; margin-top: 8px;" alt=""> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div class="row">
						  <table style="width: 100%; margin-top: 10px;">
							<tbody>
							  <tr>
								<td style="width: 200px;">
								  <script>
															(function(d, s, id) {
																var js, fjs = d.getElementsByTagName(s)[0];
																if (d.getElementById(id)) return;
																js = d.createElement(s);
																js.id = id;
																js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
																fjs.parentNode.insertBefore(js, fjs);
															}(document, \'script\', \'facebook-jssdk\'));
														</script>
								  <!-- Place this tag in your head or just before your close body tag. -->
								  <script src="js/platform.js" async="" defer="" gapi_processed="true">
															{
																lang: \'vi\'
															}
														</script>
								 </td>
								<td><a href="#"> <i class="icons connectfb"></i> </a> </td>
							  </tr>
							</tbody>
						  </table>
						</div>
						<div style="padding-top: 20px;"></div>
						<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 140px;">
						  <div class="row produce-info-2" style="overflow: hidden; width: auto; height: 140px;"> '.$row["MOTANGAN"].'</div>
							}
						  <div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 140px;"></div>
						  <div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div>
						</div>
					  </div>';
					}
				}
					}
				
			  ?>
              <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                <!-- BEGIN KM_Block1 -->
                <div class="gift">
                  <div class="title"> <i class="icons qt"></i> QUÀ TẶNG </div>
                  <div class="content"> - Tặng 1 trong 2 gói quà:&nbsp;<br>
                    - Gói quà 1: Nhận bộ quà 5 ưu đãi: 7.200 phút gọi nội mạng, 7.2GB tốc độ cao, 7200 tin nhắn, 250.000đ tài khoản khuyến mãi, 1 đổi 1 trong vòng 1 tháng<br>
                    HOẶC&nbsp;<br>
                    - Gói quà 2: Nhận Phiếu mua hàng phụ kiện 200,000 đồng.<br>
                    <div>&nbsp;</div>
                    <em>(Áp dụng từ 01/09 đến 30/09/2016)</em><br>
                  </div>
                </div>
                <!-- END KM_Block1 -->
                <div class="mr-top" style="margin-top: 20px;">
                  <div id="owl-advSlide" class="owl-carousel owl-theme" style="opacity: 0;"> </div>
                </div>
                <div class="guarantee" style="margin-top: 0px;">
                  <table cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td style="width: 25px;"><i class="icons bh"></i> </td>
                        <td>Bảo hành chính hãng </td>
                      </tr>
                      <tr>
                        <td><i class="icons phone"></i> </td>
                        <td>Tư vấn bán hàng: 1800 8123</td>
                      </tr>
                      <tr>
                        <td><i class="icons giaohang"></i> </td>
                        <td>Giao hàng miễn phí (nếu cách Viettel Store dưới 10km)</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div style="position: relative; display: block;" id="wptoolbar">
        <div id="toolbar" class="toolbar" style="z-index: 99; position: absolute; top: 0px; display: block;">
          <div onClick="view_block(1);" id="step11" class="">
            <div class="icon" style="top: 15px; left: -5px;"><i class="icons step"></i></div>
            <div class="text" style="top: 15px; left: 15px;">Đặc điểm nổi bật</div>
          </div>
          <div onClick="view_block(2);" id="step12" class="">
            <div class="icon" style="top: 15px; left: -5px;"><i class="icons step"></i></div>
            <div class="text" style="top: 15px; left: 15px;">Thông số kỹ thuật</div>
            <div class="line "></div>
          </div>
          <div onClick=" view_block(3); " id="step13" class="hidden active">
            <div class="icon" style="top: 15px; left: -5px;"><i class="icons step"></i></div>
            <div class="text" style="top: 15px; left: 15px;"> Tin tức liên quan
              <!--(0)-->
            </div>
            <div class="line"></div>
          </div>
          <div onClick="view_block(6);" id="step17" class="">
            <div class="icon" style="top: 15px; left: -5px;"><i class="icons step"></i></div>
            <div class="text" style="top: 15px; left: 15px;"> Hình ảnh thực tế
              <!--(0)-->
            </div>
            <div class="line"></div>
          </div>
          <div onClick="view_block(4);" id="step14" class="">
            <div class="icon" style="top: 15px; left: -5px;"><i class="icons step"></i></div>
            <div class="text" style="top: 15px; left: 15px;">So sánh sản phẩm</div>
            <div class="line"></div>
          </div>
          <div onClick="view_block(5);" id="step15" class="">
            <div class="icon" style="top: 15px; left: -5px;"><i class="icons step"></i></div>
            <div class="text" style="top: 15px; left: 15px;">Bình luận (344)</div>
            <div class="line"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-9">
        <div class="row feature  close1" id="gioithieu1" style="padding-bottom: 50px; margin-bottom: 20px;     height: 100%;">
          <h4>Đặc điểm nổi bật</h4>
          <div id="owl-feature">
		  <?php
			require("connect.php");
			$lsp=$_GET["lsp"];
			if($lsp==1)
			{
				$sql="select * from sanpham sp, thongsokythuatdienthoai ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
			}
			else
				if($lsp==2)
				{
					$sql="select * from sanpham sp, thongsokythuatlaptop ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
				}
				else
					if($lsp==3)
					{
						$sql="select * from sanpham sp, thongsokythuatmaytinhbang ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
					}
					else
					{
						$sql="select * from sanpham sp, thongsophukien ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
					}
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo $row["MOTADAI"];
			?>
            </div>
          <div id="gioithieu1_viewmore">
            <input type="hidden" value="1" id="hd_gioithieu1_viewmore">
            <div class="detail"> Xem thêm đặc điểm nổi bật <i class="icons bottomIcon"></i> </div>
          </div>
        </div>
        <div class="row digital ">
          <h4>Thông số kỹ thuật</h4>
          		  <?php
			require("connect.php");
			$lsp=$_GET["lsp"];
			if($lsp==1)
			{
				$sql="select * from sanpham sp, thongsokythuatdienthoai ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
			}
			else
				if($lsp==2)
				{
					$sql="select * from sanpham sp, thongsokythuatlaptop ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
				}
				else
					if($lsp==3)
					{
						$sql="select * from sanpham sp, thongsokythuatmaytinhbang ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
					}
					else
					{
						$sql="select * from sanpham sp, thongsophukien ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
					}
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo $row["THONGSOKYTHUAT"];
			?>
          <div class="">
            		  <?php
			require("connect.php");
			$lsp=$_GET["lsp"];
			if($lsp!=4)
			{
				echo '<h4>THÔNG SỐ KỸ THUẬT CHI TIẾT<h4>';
				if($lsp==1)
				{
					$sql="select * from sanpham sp, thongsokythuatdienthoai ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
				}
				else
					if($lsp==2)
					{
						$sql="select * from sanpham sp, thongsokythuatlaptop ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
					}
					else
						if($lsp==3)
						{
							$sql="select * from sanpham sp, thongsokythuatmaytinhbang ts where sp.MASP=ts.MASP and sp.MASP='".$_GET["msp"]."'";
						}
				$result = $conn->query($sql);
				$row = $result->fetch_assoc();
				echo $row["CHITIETTHONGSO"];
			}
			?>
          </div>
        </div>
        <div class="row related-news hidden">
          <h4>Tin tức sản phẩm (Samsung Galaxy J7 (2016))</h4>
          <div id="owl-related-news" class="owl-carousel owl-theme" style="opacity: 0;"> </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="wapper-pk-detail ">
          <div class="title"> Phụ kiện tương thích </div>
          <div class="item">
            <div class="image"> <a href="#"> <img src="images/31167081031.jpg" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/31167081031.jpg" style="display: inline;"></a> </div>
            <div class="price">300.000 ₫</div>
            <div class="name">Sạc dự phòng SSK SRBC 525 6000mAh</div>
          </div>
          <div class="item">
            <div class="image"> <a href="#"> <img src="images/6270856345279319.jpeg" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/6270856345279319.jpeg" style="display: inline;"></a> </div>
            <div class="price">100.000 ₫</div>
            <div class="name">Thẻ nhớ Silicon Power Micro 8GB SDHC </div>
          </div>
          <div class="item">
            <div class="image"> <a href="#"> <img src="images/1939731091751585599.png" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/1939731091751585599.png" style="display: inline;"></a> </div>
            <div class="price">190.000 ₫</div>
            <div class="name">Thẻ nhớ microSDHC Adata 16GB Class10</div>
          </div>
          <div class="item">
            <div class="image"> <a href="#"> <img src="images/26057130447574398.jpeg" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/26057130447574398.jpeg" style="display: inline;"></a> </div>
            <div class="price">100.000 ₫</div>
            <div class="name">Thẻ nhớ microSDHC Adata 8GB Class4</div>
          </div>
          <div class="item">
            <div class="image"> <a href="#"> <img src="images/21259592756.jpg" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/21259592756.jpg" style="display: inline;"></a> </div>
            <div class="price">1.299.000 ₫</div>
            <div class="name">Sạc dự phòng iCore 15.000 mAh</div>
          </div>
        </div>
        <div class="wapper-pk-detail ">
          <div class="title" style="border-bottom: 0; padding-bottom: 0;"> Tag </div>
          <div class="item tagSanPham"> <a href="#" title="j2016">
            <h3>j2016</h3>
            </a> <a href="# title="ss4g">
            <h3>ss4g</h3>
            </a>
            <div class="clear-both"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row hasptt anhtt ">
      <h4>Hình ảnh sản phẩm thực tế</h4>
      <div class="content">
	  <?php
	  require("connect.php");
		$msp=$_GET["msp"];
		if($conn->connect_error)
						{
							die('ketnoi that bai'.$conn->connect_error);
							
						}
							echo"";
		 
		// Create and execute a MySQL query
		
		$sql = "SELECT * FROM sanpham sp,thongsokythuatdienthoai ts WHERE sp.MASP=ts.MASP and sp.MASP = '".$msp."' LIMIT 6";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
	  echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="row"><a class="example-image-link" href="img/HinhSP/'.$row["HINHTHUCTE1"].'" data-lightbox="example-set"><img src="img/HinhSP/'.$row["HINHTHUCTE1"].'" class="example-image" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/1644540598.jpeg" style="display: inline;"></a><a class="example-image-link" href="img/HinhSP/'.$row["HINHTHUCTE6"].'" data-lightbox="example-set"><img src="img/HinhSP/'.$row["HINHTHUCTE6"].'" class="example-image" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/412815374.jpeg" style="display: inline;"></a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="row"><a class="example-image-link" href="img/HinhSP/'.$row["HINHTHUCTE5"].'" data-lightbox="example-set"><img src="img/HinhSP/'.$row["HINHTHUCTE5"].'" class="example-image" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/722146006.jpeg" style="display: inline;"></a><a class="example-image-link" href="img/HinhSP/'.$row["HINHTHUCTE2"].'" data-lightbox="example-set"><img src="img/HinhSP/'.$row["HINHTHUCTE2"].'" class="example-image" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/673181927.jpeg" style="display: inline;"></a></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="row"><a class="example-image-link" href="img/HinhSP/'.$row["HINHTHUCTE3"].'" data-lightbox="example-set"><img src="img/HinhSP/'.$row["HINHTHUCTE3"].'" class="example-image" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/1186369336.jpeg" style="display: inline;"></a><a class="example-image-link" href="img/HinhSP/'.$row["HINHTHUCTE4"].'" data-lightbox="example-set"><img src="img/HinhSP/'.$row["HINHTHUCTE4"].'" class="example-image" data-original="http://cdn.viettelstore.vn/Images/Product/ProductImage/1825799060.jpeg" style="display: inline;"></a></div>
        </div>';
			}
		}
			$result->close ();
		$conn->close();
	  ?>
        
      </div>
      <div class="clear-both"></div>
    </div>
    <div class="row compare-produce ">
      <h4>So sánh cùng sản phẩm tương đương</h4>
      <div class="content">
        <div class="item-add col-lg-2 col-md-3 col-sm-3 col-xs-3">
          <div class="img-add"> <i class="icons add-pro"></i> <br>
            Thêm sản phẩm <br>
            so sánh<br>
            <input type="text" placeholder="Nhập tên sản phẩm" id="txtsearch1">
            <ul id="result-autocomplete1" class="SearchResult" style="display: none">
            </ul>
          </div>
        </div>
       <?php
		require("connect.php");
		$msp=$_GET["msp"];
		$loaisp=(int)$_GET["lsp"];
		$gia=0; 
		$sql = "SELECT GIA FROM sanpham WHERE MASP='".$msp."'";
		 $result = $conn->query($sql);
		 if ($result->num_rows >=1 ) {
			while($row = $result->fetch_array())
			{
				$gia=$row[0];
			}
			}
			$max=$gia+2000001;
			$min=$gia-4000000;
		if($loaisp==1)
		{
		$sql="SELECT * FROM sanpham sp,thongsokythuatdienthoai ts WHERE sp.MASP=ts.MASP and sp.MASP <>'".$msp."'and sp.GIA >= ".$min." and sp.GIA<=".$max." and sp.MALOAISP=1 ORDER BY sp.GIA DESC LIMIT 5";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
			 echo' <div class="item col-lg-2 col-md-3 col-sm-3 col-xs-3"> <img class="close-produce" src="images/1px.png" alt="" data-original="/assets/images/close-produce.jpg">';
			echo'<div class="img-produce"> <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'"> <img src="img/HinhSP/'.$row["HINHDAIDIEN"].'" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/sUntitled-1591431483.png" style="display: inline;"></a> </div>';
			echo'<div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>';
              echo'   <a href="#">
               <div class="name">'.$row["TENSP"].'</div>
               </a>';
            echo' <div class="detail"> •'.$row["MANHINH"].'<br>
            • '.$row["CPU"].'<br>
            • RAM/ROM: '.$row["RAMROM"].'<br>
            •'.$row["CAMERA"].'<br>
            • '.$row["PIN"].' </div>';
			  echo'</div>';
			}
			}
		}
		else if($loaisp==2)
		{
			$sql="SELECT * FROM sanpham sp,thongsokythuatlaptop ts WHERE sp.MASP=ts.MASP and sp.MASP <>'".$msp."'and sp.GIA > ".$min." and sp.GIA<".$max." and sp.MALOAISP=2 ORDER BY sp.GIA DESC LIMIT 5";
		 $result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
			 echo' <div class="item col-lg-2 col-md-3 col-sm-3 col-xs-3"> <img class="close-produce" src="images/1px.png" alt="" data-original="/assets/images/close-produce.jpg">';
			echo'<div class="img-produce"> <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'"> <img src="img/HinhSP/'.$row["HINHDAIDIEN"].'" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/sUntitled-1591431483.png" style="display: inline;"></a> </div>';
			echo'<div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>';
              echo'   <a href="#">
               <div class="name">'.$row["TENSP"].'</div>
               </a>';
            echo' <div class="detail"> •'.$row["BOVIXULY"].'<br>
            •'.$row["BONHO"].'<br>
              </div>';
			  echo'</div>';
			}
			}
		}
		else if($loaisp==3)
		{
		 $sql="SELECT * FROM sanpham sp,thongsokythuatmaytinhbang ts WHERE sp.MASP=ts.MASP and sp.MASP <>'".$msp."'and sp.GIA > ".$min." and sp.GIA<".$max." and sp.MALOAISP=3 ORDER BY sp.GIA DESC LIMIT 5";
		 $result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc())
			{
			 echo' <div class="item col-lg-2 col-md-3 col-sm-3 col-xs-3"> <img class="close-produce" src="images/1px.png" alt="" data-original="/assets/images/close-produce.jpg">';
			echo'<div class="img-produce"> <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'"> <img src="img/HinhSP/'.$row["HINHDAIDIEN"].'" alt="" data-original="http://cdn.viettelstore.vn/images/Product/ProductImage/small/sUntitled-1591431483.png" style="display: inline;"></a> </div>';
			echo'<div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>';
              echo'   <a href="#">
               <div class="name">'.$row["TENSP"].'</div>
               </a>';
            echo' <div class="detail"> •'.$row["MANHINH"].'<br>
            •'.$row["CPU"].'<br>
            •'.$row["RAMROM"].'<br>
               </div>';
			  echo'</div>';
			}
			}
		}
		?>
      </div>
      <a href="javascript:void();" class="hidden">
      <div class="bottom"> So sánh sự khác biệt <img src="images/1px.png" alt="" data-original="/assets/images/Shape8.png"> </div>
      </a> </div>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="row">
          <!-- Bình luận -->
          <div class="tab-pane fade active in" id="tabs-comment">
            <div class="panel nonebackground">
              <h4 onClick="cmt_post_complete()">Mời bạn đánh giá hoặc đặt câu hỏi về <?php
			require("connect.php");
			$sql="select TENSP from sanpham where MASP='".$_GET["msp"]."'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			echo $row["TENSP"];
			?></h4>
              <div class="cmt-body" id="comment_contain" data-load="0">
                <p class="cmt_postnew_link hidden"> <a href="#" class="btnAddCmt">Tạo bình luận mới</a> </p>
                <div id="cmt_postnew_div">
                  <div class="frm-comment">
				  <form action="" method="post">
                    <table>
                      <tbody>
                        <tr>
                          <td><textarea name="BinhLuan" class="form-control" placeholder="Mời bạn gửi bình luận (*)"></textarea>
                          </td>
                          <td class="c2"><div class="form-control cmt_name1" style="background: none; display: none;"><a href="#"></a></div>
                            <input name="Ten" type="text" placeholder="Tên của bạn (*)" class="form-control cmt_name2" value=""/>
                            <input name="Email" type="text" placeholder="Email của bạn" class="form-control"/>
                            <button name="GuiBL" class="btn btn-block" data-cmid="">GỬI</button></td>
                        </tr>
                      </tbody>
                    </table>
					</form>
					<?php
						if(isset($_POST["GuiBL"]))
						{
							require("connect.php");
							$BinhLuan=$_POST["BinhLuan"];
							$Ten=$_POST["Ten"];
							$Email=$_POST["Email"];
							$sql="insert into binhluan(NGUOIBINHLUAN,EMAIL,NOIDUNG,NGAYGIO,MASP) values ('".$Ten."','".$Email."','".$BinhLuan."',now(),'".$_GET["msp"]."')";
							$result=$conn->query($sql);
							if($result)
							{
								echo "<script type='text/javascript'>alert('Chờ Admin duyệt...');</script>";
							}
							
						}
					
					?>
                  </div>
                </div>
				<?php
						require("connect.php");
						$sql="select * from binhluan where MASP='".$_GET["msp"]."' and DUYETBL=1";
						$result = $conn->query($sql);
						$row = $result->num_rows;
						echo ' <h3 style="margin-bottom: 15px; margin-top: 30px;">Bình luận mới nhất <span class="cmt_count1">('.$row.')</span></h3>';
					?>
               
                <div class="cmt-lst" id="div_cmt_lst">
				
					<?php
						require("connect.php");
						$sql="select * from binhluan where MASP='".$_GET["msp"]."' and DUYETBL=1";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc())
							{
					?>
					<div class="cmt-item  cmt-stt-1"> <i class="icons userdefault"></i>
                    <div class="cmt-item-content">
                      <div class="ar"><i class="icons peak"></i></div>
                      <div class="h">
                        <div class="l"> <span class="name"><?php echo $row["NGUOIBINHLUAN"];?></span> <span class="time"><span title="26/09 20:22"><?php echo $row["NGAYGIO"];?></span></span> </div>
                        <div class="r"> <a href="#" onClick="cmt_reply(75988); return false;">Trả lời</a> <a href="#" onClick="cmt_like(75988); return false;"><span class="ico-like icons like"></span> Thích <span id="cmt_like_div75988"></span></a> </div>
                      </div>
                      <div class="c"> <?php echo $row["NOIDUNG"];?> </div>
                      <div class="rep">
                        <div class="isadmin cmt-stt-1">
                          <div class="cmt-item-content">
                            <div class="h">
                              <div class="l"> <span class="name"><?php echo $row["NVTRALOI"];?><span class="ad_cmt">QUẢN TRỊ VIÊN</span></span></div>
                              <div class="r"> <a href="#" onClick="cmt_reply(75988); return false;">Trả lời</a> <a href="#" onClick="cmt_like(75992); return false;"><span class="ico-like icons like"></span> Thích <span id="cmt_like_div75992"></span></a> </div>
                            </div>
                            <div class="c"> <?php echo $row["NOIDUNGTL"];?><br>
                            </div>
                          </div>
                        </div>
                        <div class="rep_form" id="rep_form_75988"> </div>
                      </div>
                    </div>
                  </div>
					<?php
							}
						}
					?>
                  <!---->
                  <style type="text/css">
    .cmt-lst .cmt-item .cmt-item-content .h .name .ad_cmt {
        padding: 5px 6px 3px 6px;
        margin-left: 10px;
        background-color: #13938e;
        -ms-border-radius: 5px;
        border-radius: 5px;
        color: white;
        font-size: 9px;
        font-weight: normal;
    }
    .cmt-lst .cmt-item .cmt-item-content .c a {
        text-decoration: underline;
        color: #13938e;
    }
</style>
                  <script type="text/javascript">
    function replaceURLWithHTMLLinks(text) {
        var exp = /\s((https?|ftp|file):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/i;
        return text.replace(exp, " <a href='$1' target='_blank'>tại đây</a>");
    }
    $(document).ready(function() {
        $('.cmt-lst .cmt-item .cmt-item-content .c').each(function () {
            $(this).html(replaceURLWithHTMLLinks($(this).html()));
        });
    });
</script>
                </div>
                <div class="cmt_loadmore " style="margin-bottom: 30px; text-align: center;"> <a href="#" onClick="LoadMoreComment(); return false;" class="btnAddCmt">Xem thêm bình luận</a> </div>
                <script type="text/javascript">
    var IsAdmin = '0';
    var LoadMoreComment_p = 0;
    function LoadMoreComment() {
        LoadMoreComment_p += 1;
        $.post('/Site/_Sys/GetUserControl.aspx', {
            'path': 'Product!cmt_item',
            'Product_ID': '107958',
            'News_ID': '',
            'PageSize': '10',
            'cmt_name': '',
            'CurrentPage': LoadMoreComment_p
        },
        function (responseText, textStatus, jqXHR) {
            if (responseText.trim().replace('\n', '') == '')
                $('.cmt_loadmore').hide();
            else {
                if (textStatus == 'success' && responseText.indexOf("viewport") == -1) {
                    $('#div_cmt_lst').append(responseText);
                }                
            }
        });
    }

    function cmt_reply(id) {
        $('.cmt_postnew_link').removeClass('hidden');
        $('#rep_form_' + id).append($('.frm-comment'));
        $('.frm-comment button').data('cmid', id);
        $('html, body').animate({ scrollTop: $('.frm-comment').offset().top - 270 }, 500, 'linear');
    }

    function cmt_action(action, id) {
        i_ajax('Comment_action', {
            action: action,
            commentid: id
        },
        function (d) {
            alert(d.msg);
        });
    }

    function cmt_like(id) {
        i_ajax('Comment_like', {
            commentid: id,
            fullName: getCookie('cmt_name')
        },
        function (d) {
            $('#cmt_like_div' + id).text('(' + d.data.NumLike + ')');
        });
    }
</script>
                <script type="text/javascript">

    $(document).ready(function () {
        LoadMoreComment();
        if (IsAdmin == "1") {
            $('.cmt_name1').show();
            $('.cmt_name2').hide();
        }
        else {
            var cmt_name = getCookie('cmt_name');
            if (cmt_name != undefined && cmt_name.trim() != '') {
                $('.cmt_name1 a').text(cmt_name);
                $('.cmt_name1').show();
                $('.cmt_name2').val(cmt_name).hide();
            }
            else {
                $('.cmt_name1').hide();
                $('.cmt_name2').show();
            }
        }

        $('.frm-comment button').click(function () {
            var btn = $(this);
            var frm = btn.parents('.frm-comment');

            var txt_cmt = frm.find('textarea');
            if (txt_cmt.val().trim() == '') { txt_cmt.addClass('er'); return; }
            else txt_cmt.removeClass('er');

            var txt_name = frm.find('input').eq(0);
            if (txt_name.val().trim() == '') { txt_name.addClass('er'); return; }
            else txt_name.removeClass('er');

            var txt_email = frm.find('input').eq(1);
            setCookie('cmt_name', txt_name.val().trim(), 30);

            i_ajax('Comment_post', {
                Parent_ID: btn.data('cmid'),
                News_ID: '',
                Title: 'Samsung Galaxy J7 (2016)',
                Tel: '',
                Product_ID: '107958',
                Content: txt_cmt.val().trim(),
                Fullname: txt_name.val().trim(),
                Email: txt_email.val().trim()
            },
            function (d) {
                if (d.stt == 1) {
                    txt_cmt.val('');
                    try {
                        cmt_post_complete();
                    }
                    catch (ex) { }
                }
                else {
                    alert(d.msg);
                }
            });
        });

        $('.cmt_name1 a').click(function () {
            $('.cmt_name1').hide();
            $('.cmt_name2').show().focus();
            return false;
        });

        $('.cmt_postnew_link a').click(function () {
            $('.cmt_postnew_link').addClass('hidden');
            $('#cmt_postnew_div').append($('.frm-comment'));
            $('.frm-comment button').data('cmid', '');
            return false;
        });
    });

</script>
              </div>
            </div>
          </div>
          <!-- End -->
        </div>
        <div class="moreproduct margin-top-25" style="margin-top: 0; margin-bottom: 15px;">
          <ul class="ul_more">
            <li><a href="#">Xem thêm khuyến mãi tháng <i class="fa fa-angle-right"></i></a></li>
            <li><a href="#">Xem thêm điện thoại <i class="fa fa-angle-right"></i></a></li>
            <li><a href="#">Xem thêm máy tính bảng <i class="fa fa-angle-right"></i></a></li>
            <li><a href="#">Xem thêm laptop <i class="fa fa-angle-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Content -->
<script src="js/fixed-menu.js"></script>
<div id="load-srpgs">
</div>
<link href="js/srpgs.minified.css" rel="stylesheet">
<script type="js/cookie.js"></script>
<!-- Dat hang -->
<script type="text/javascript">

    function getRuleID_selected1(){
        var ruleid = '';
        var ok = true;

        if ($('#GenProducInfos_checker > div.attr_box').length > 0) {
            $('#GenProducInfos_checker > div.attr_box').each(function () {
                if (!ok) return;

                var v = $(this).find('input:checked').val();
                if (v == undefined) {
                    ok = false;
                    return;
                }
                ruleid = ruleid + v + ',';
            });
        }
        return ruleid;
    }

    function getPriceByFeatureValueID2(RuleID, pid) {
        i_ajax("ProductRule_GetPriceByRule", {
                'id': RuleID,
                'pid': pid
            },
            function(d) {
                if (d.stt == 0) {
                    alert(d.msg);
                }
                else if (d.stt == 1) {
                    if(d.data.Price == 0 && d.dat.SellPrice == 0) {
                        $('#_price_new436').html('Liên hệ');
                    }
                    else {
                        $('#_price_new436').html((d.data.PriceDisplayType > 2 ?  d.data.Price : d.data.SellPrice).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1.") + '<span class="unit_18"> ₫</span>');
                    }

                    if (d.data.AmounInstock > 0) {
                        $('#GenProducInfos_checker .orange_txt').text(parseInt(d.data.AmounInstock) > parseInt(d.data.AmountMin) ? "(Còn hàng)" : "(Còn ít)");
                        $('#quickAdd').removeClass('hidden');
                        $('#dathang1').removeClass('hidden');
                        $('#quickAdd2').addClass('hidden');
                    }
                    else{
                        $('#GenProducInfos_checker .orange_txt').text("(Đã hết hàng)");
                        $('#quickAdd').addClass('hidden');
                        $('#dathang1').addClass('hidden');
                        $('#quickAdd2').removeClass('hidden');
                    }
                }
            });
    }

    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }

    //chọn mua sp
    $(document).ready(function () {
        // checked mau theo ma ruleid
        var ruleId = getParameterByName("ruleid");
        if(ruleId != "") {
            ruleId = ruleId.toLowerCase();
            getPriceByFeatureValueID2(ruleId, '107958');
            $('#' + ruleId).removeClass('check');
            $('#' + ruleId).addClass('check');
        }

        // hien tin lien quan khi bai viet va tinh nang an
        if ($('#detail').is(":hidden")  && $('#technique').is(":hidden")) {
            $('#detail').removeClass("active");
            $('#newsrefer').addClass("active");

            $('#tabs-detail').removeClass("active in");
            $('#tabs-param').removeClass("active in");
            $('#tabs-assess').addClass("active in");
        }

        if ($('#GenProducInfos_checker .color-check').length == 1) $('#GenProducInfos_checker .color-check').click();
        $('#datmua1').click(function() {
            var pid = 107958;
            if (pid == 40427) {
                // J5 Confirm button
                ebConversionTracker(879965);
            }
            else if (pid == 107957) {
                // J5 2016 Confirm button
                ebConversionTracker(879967);
            }
            else if (pid == 40428) {
                // J7 Confirm button
                ebConversionTracker(879966);
            } else if (pid == 107958) {
                // J7 2016 Confirm button
                ebConversionTracker(879968);
            } 
        });
        $('#dathang1').click(function () {
            var ruleid = '';
            if ($('#GenProducInfos_checker .color-check').length > 0){
                ruleid = getRuleID_selected1();
                if (ruleid == '') {
                    alert('Xin vui lòng chọn màu sắc!');
                    return;
                }
            }
        
        var pid = 107958;
        var muangay = 0;
        $.ajax({
            url: '/Site/_Sys/ajax.aspx',
            type: 'POST',
            data: {
                'a': 'cart-add',
                'Product_ID': '107958',
                'Rule_ID': ruleid,
                'quantity': 1,
                'muangay': muangay
            },
            success: function (data) {
                var d = eval('(' + data + ')');
                if (d.stt < 0){
                    alert(d.msg);
                }
                else if (d.stt == 1){
                    alert('Đã cho vào giỏ');
                    reloadGioHangPopup1();

                    if (pid == 40427) {
                        // J5 Confirm button
                        ebConversionTracker(879976);
                    }
                    else if (pid == 107957) {
                        // J5 2016 Confirm button
                        ebConversionTracker(879974);
                    }
                    else if (pid == 40428) {
                        // J7 Confirm button
                        ebConversionTracker(879973);
                    } else if (pid == 107958) {
                        // J7 2016 Confirm button
                        ebConversionTracker(879975);
                    }
                }
            }
        });
    });

    $('#GenProducInfos_checker .color-check').click(function () {
        $('#GenProducInfos_checker .color-check').removeClass('check');
        $(this).addClass('check');
        ruleId = $(this).attr('id');
        GetImgColor(ruleId);
    });

    $('#id1233474747456').click(function(){
        $('#GenProducInfo_Details_div').slideToggle(function(){
            $('#id1233474747456 i').removeClass('fa-plus-square-o').removeClass('fa-minus-square-o');
            $('#id1233474747456 i').addClass($('#GenProducInfo_Details_div').is(':visible') ? 'fa-minus-square-o' : 'fa-plus-square-o');
        });
    });

    $('#tabs-hot a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('html, body').animate({ scrollTop: $('#tabs-hot-container').offset().top - 35 }, 500, 'linear');
    });

    $('#So_Sanh_San_Pham_div a.plink').each(function(){
        $(this).attr('href', '?id1=107958&id2=' + $(this).data('pid'));
    });

    var h = window.location.hash;
    if (h != ''){
        if(h.substr(0,6) == '#attr_')
            $(h).parents('label').click();
    }
    });

</script>
<!-- comment -->
<script type="text/javascript">

    function cmt_post_complete() {
        $('#comment_contain').load('/Site/_Sys/GetUserControl.aspx', {
            'path': 'Product!cmt',
            'Product_ID': '107958',
            'Product_Title': 'Samsung Galaxy J7 (2016)',
            'PageSize': 10,
            'cmt_name': getCookie('cmt_name')
        });
    }
    
    $(document).ready(function () {
        setTimeout("cmt_post_complete();", 1500);
    });
</script>
<script type="text/javascript">
    $('.produce-info .produce-info-2').slimscroll({
        alwaysVisible: true,
        height: '140'
    });
    function active(top) {
        $('html, body').animate({ scrollTop: top }, 500, 'linear');
    }

    function view_block(id) {
        var offset;
        if (id == 1) {
            offset = $('.feature').offset();
            active(offset.top);
        }
        if (id == 2) {
            offset = $('.digital').offset();
            active(offset.top);
        }
        if (id == 3) {
            offset = $('.related-news').offset();
            active(offset.top);
        }
        if (id == 4) {
            offset = $('.compare-produce').offset();
            active(offset.top);
        }
        if (id == 5) {
            offset = $('#tabs-comment').offset();
            active(offset.top);
        }
        if (id == 6) {
            offset = $('.hasptt').offset();
            active(offset.top);
        }
    }
    $('.toolbar').scrollToFixed();

    $(function () {
        $('#navcau-hinh').click(function () {
            if ($('#hd-cau-hinh').val() == 0) {
                $('#navcau-hinh').css('width', '140px');
                $('#navcau-hinh').html('Ẩn cấu hình chi tiết <i class="icons topIcon"></i>');
                $('#panel-cau-hinh').fadeIn(300);
                $('#hd-cau-hinh').val(1);
            } else {
                $('#navcau-hinh').css('width', '170px');
                $('#navcau-hinh').html('Hiển thị cấu hình chi tiết <i class="icons bottomIcon"></i>');
                $('#panel-cau-hinh').fadeOut(300);
                $('#hd-cau-hinh').val(0);
            }
        });
    });

    $(document).ready(function () {
        $("#owl-related-news").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: false,
            pagination: false,
            navigationText: ["", ""]
        });

        if ($('#gioithieu1').height() > 500){
            $('#gioithieu1').addClass('close1');
            $('#gioithieu1_viewmore').show();
            $('#gioithieu1_viewmore').click(function(){
                if ($('#hd_gioithieu1_viewmore').val() == '1') {
                    $('#gioithieu1').removeClass('close1');
                    $('#gioithieu1_viewmore .detail').html('Ẩn đặc điểm nổi bật <i class="icons topIcon"></i>');
                    $('#gioithieu1_viewmore .detail').css('width','145px');
                    $('#gioithieu1_viewmore').css('padding-top','0');
                    $('#gioithieu1_viewmore').css('height','50px');
                    $('#hd_gioithieu1_viewmore').val(0);


                } else {
                    $('#gioithieu1').addClass('close1');
                    $('#gioithieu1_viewmore .detail').html('Xem thêm đặc điểm nổi bật <i class="icons bottomIcon"></i>');
                    $('#gioithieu1_viewmore .detail').css('width','190px');
                    $('#gioithieu1_viewmore').css('padding-top','80px');
                    $('#gioithieu1_viewmore').css('height','120px');
                    var offset = $('.feature').offset();
                    active(offset.top);
                    $('#hd_gioithieu1_viewmore').val(1);
                }
            });
        }
    });
    
    function GetImgColor(rulesId) {
        var root = location.protocol + '//' + location.host;
        $.ajaxSetup({
            async: false
        });

        $.post(root + "/AjaxAction.aspx", {
            action: "GetImgInColor",
            productId: '107958',
            rulesId: rulesId
        }, function (response) {
            $('#srpgs-slideshow-wapper').html(response);
        });
    }

    $(function () {
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 100) {
                $('.scrollToTop').fadeIn();
            } else {
                $('.scrollToTop').fadeOut();
            }
            //active quick menu
            var vt = $(window).scrollTop() + 150;
            if ($('.feature').offset().top < vt) {
                $('#step11').addClass('active');
            } else {
                $('#step11').removeClass('active');
            }
            if ($('.digital').offset().top < vt) {
                $('#step12').addClass('active');
            } else {
                $('#step12').removeClass('active');
            }
            if ($('.related-news').offset().top < vt) {
                $('#step13').addClass('active');
            } else {
                $('#step13').removeClass('active');
            }
            if ($('.compare-produce').offset().top < vt) {
                $('#step14').addClass('active');
            } else {
                $('#step14').removeClass('active');
            }
            if ($('#tabs-comment').offset().top < vt) {
                $('#step15').addClass('active');
            } else {
                $('#step15').removeClass('active');
            }
            if ($('.wapper-pk-detail').offset().top < vt) {
                $('#step16').addClass('active');
            } else {
                $('#step16').removeClass('active');
            }
            if ($('.hasptt').offset().top < vt) {
                $('#step17').addClass('active');
            } else {
                $('#step17').removeClass('active');
            }
            if ($('footer').offset().top < vt + 250) {
                $('#toolbar').fadeOut(300);
            } else {
                $('#toolbar').fadeIn(300);
            }
        });
        $('.scrollToTop').on('click', function () {
            $('html, body').animate({ scrollTop: 0 }, 300, 'linear');
            return false;
        });
    });
</script>
<script type="text/javascript">
    var search_timeout1 = 0;
    $(document).ready(function () {
        // Them gio hang
        $('#dathang1').on('click', function () {
            ga('send', 'event', 'Them-gio-hang', 'click', 'quick-add');
        });
        
        // Tra gop
        $('#tragop1').on('click', function () {
            ga('send', 'event', 'Tra-gop', 'click', 'quick-add');
        });
        
        // Search by suggestion
        var ajaxUrl = "/AjaxAction.aspx";
        $(document).on('keyup', '#txtsearch1', function (e) {
            e.preventDefault();
            var keyword = $(this).val();
            if (keyword.length > 1) {
                if (e.which == 13) { clearTimeout(search_timeout1); return false; }

                if (search_timeout1 == 0) {
                    search_timeout1 = setTimeout(function () {
                        if ($('#txtsearch1').val().length > 1) {
                            $.get(ajaxUrl, {
                                action: "search-autocomplete",
                                keyword: $('#txtsearch1').val(),
                                stype: "1"
                            }, function (response) {
                                $('#result-autocomplete1').html(response);
                                if ($('#result-autocomplete1 li').length > 0) {
                                    $('#result-autocomplete1').show();
                                    $('#result-autocomplete1 li').each(function () {
                                        $(this).find('a').attr('href', '/so-sanh-san-pham.html?id1=107958&id2=' + $(this).data('pid'));
                                    });
                                }
                                else {
                                    $('#result-autocomplete1').hide();
                                }
                            });
                        }
                        search_timeout1 = 0;
                    }, 700);
                }
            }
        });

        $('#txtsearch1').focus(function () {
                if ($('#result-autocomplete1 li').length > 0)
                    $('#result-autocomplete1').slideDown();
            })
            .blur(function () {
                setTimeout("$('#result-autocomplete1').slideUp();", 350);
            });

    });
    $(document).ready(function () {
        function toolbarHide() {
            var a = $('header .container').width() + 30;
            if (($(window).width() - a) > 160) {
                $('#wptoolbar').css('display', 'block');
            } else {
                $('#wptoolbar').css('display', 'none');
            }
        }

        $(function() {
            toolbarHide();
        });
        $(window).resize(function () {
            toolbarHide();
        });

        $('.anhtt .more1 .xem-anh').click(function(){
            $(this).slideUp();
            $(this).parent().find('.content').slideDown();
        });
    });

    $(function() {
        var a = 1;
        $('.compare-produce > .content > .item').each(function () {
            if (a >= 4) {
                $(this).addClass('it-hd');
            }
            a ++;
        });
    });

</script>
<script src="js/lightbox-plus-jquery.min.js"></script>
<div id="lightboxOverlay" class="lightboxOverlay" style="display: none;"></div>
<div id="lightbox" class="lightbox" style="display: none;">
  <div class="lb-outerContainer">
    <div class="lb-container"><img class="lb-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
      <div class="lb-nav"><a class="lb-prev" href="#"></a><a class="lb-next" href="#"></a></div>
      <div class="lb-loader"><a class="lb-cancel"></a></div>
    </div>
  </div>
  <div class="lb-dataContainer">
    <div class="lb-data">
      <div class="lb-details"><span class="lb-caption"></span><span class="lb-number"></span></div>
      <div class="lb-closeContainer"><a class="lb-close"></a></div>
    </div>
  </div>
</div>
<script src="js/jquery.lazyload.min.js"></script>
<script type="text/javascript">
    function LoadAnhTT() {
        $("#owl-feature img, .example-image").each(function() {
            if ($(this).attr("src") == "/Assets/1px.png") {
                $(this).attr("src", $(this).data("original"));
            } else {
                return;
            }
        });
    }

    $(document).ready(function() {
        // Lazy load
        $("#srpgs-slideshow img").lazyload({
            effect: "fadeIn"
        });
        $("#srpgs-slideshow img").each(function() {
            $(this).attr("data-original", $(this).attr("src"));
            $(this).attr("src", "/Assets/1px.png");
        });
        $(".wapper-pk-detail img").lazyload({
            effect: "fadeIn"
        });
        $(".wapper-pk-detail img").each(function() {
            $(this).attr("data-original", $(this).attr("src"));
            $(this).attr("src", "/Assets/1px.png");
        });
        $("#owl-feature img, .example-image").lazyload({
            effect: "fadeIn"
        });
        $("#owl-feature img, .example-image").each(function() {
            $(this).attr("data-original", $(this).attr("src"));
            $(this).attr("src", "/Assets/1px.png");
        });
        $(".compare-produce img").lazyload({
            effect: "fadeIn"
        });
        $(".compare-produce img").each(function() {
            $(this).attr("data-original", $(this).attr("src"));
            $(this).attr("src", "/Assets/1px.png");
        });
        setTimeout(LoadAnhTT, 3000);
    });
    //Slide Adv top right
    $(document).ready(function() {
        $("#owl-advSlide").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            pagination: false,
            navigationText: ["", ""],
            autoHeight: true,
            lazyLoad: false,
            lazyFollow: true,
            lazyEffect: "fade",
            autoPlay: true,
            stopOnHover: true
        });
        $('.owl-prev, .owl-next').css('display', 'none');
        $('#owl-advSlide').hover(function() {
            $('.owl-prev, .owl-next').fadeIn();
        }, function() {
            $('.owl-prev, .owl-next').fadeOut();
        });
    });
    $(function() {
        if ($('#owl-advSlide .item').length > 0) {
            $('.guarantee').hide();
        } else {
            $('.guarantee').show();
            $('.guarantee').css('margin-top', '0');
        }
        if ($('.gift').length == 0) {
            $('.mr-top').css('margin-top', '0');
        }
    });
</script>
<!--tracking traffic-->
<script type="text/javascript">
        function ebConversionTracker(conv) {
            var ebConversionImg = new Image();
            var ebConversionURL = "HTTP://bs.serving-sys.com/BurstingPipe/ActivityServer.bs?";
            ebConversionURL += "cn=as&ActivityID=" + conv + "&ns=1";
            ebConversionImg.src = ebConversionURL;
        }
    </script>
<style>
    #cardpayment1 {
        display: block;
    }

        #cardpayment1 > label {
            margin-left: 10px;
        }

    .u1 {
        list-style: none;
        padding: 0;
    }

        .u1 li {
            padding-left: 0;
        }

    #pi_checker {
        margin-bottom: 5px;
    }

    .simSo_showCls {
        display: none;
    }
</style>
<!--popup-->
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
        <input id="hidProductId" value="107958" type="hidden">
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
                var cart = '2434957b-42fe-440a-8bfc-b31dcdad9867';

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
                            pUrl = "";
                        }
                        goog_report_conversion(pUrl);

                        var d2 = eval("(" + d.data + ")");
                        if (d2 != undefined) {
                            $('#popup_finish_orderCode').text(d2.oid + ' ');
                            $('#popup_finish_link').attr('href', "?orderCode=" + d2.oid);

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
<!-- load tinh thanh pho -->
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
                url: '/Site/_Sys/ajax.aspx',
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
                url: '/Site/_Sys/ajax.aspx',
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
<!-- cập nhật giỏ hàng -->
<script type="text/javascript">
    function RefreshCartList() {
        $('#cart_lst1').parent().load('/gen-uc/Cart!ShopCart');
        RefreshCartMenuHomePage();
    }

    function RemoveProduct(Cart_ID) {
        $.ajax({
            url: '/Site/_Sys/ajax.aspx',
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
            url: '/Site/_Sys/ajax.aspx',
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
<div class="popup_advisory1"> <a href="tel:18008123"> <i class="icons advisory" id="telnumber" title="Tư vấn bán hàng"></i> </a> </div>
<!-- Begin Footer -->
<?php
	include "footer.php";
?>
<!-- End Footer -->
<style type="text/css">
    footer {
        background-repeat: repeat-x;
        background-position: top center;
        margin-bottom: -30px;
    }
</style>
<!-- scrollToTop -->
<div class="scrollToTop" style="display: none;"> <i class="icons scrolltop" title="ScrollToTop"></i> </div>
<!-- Begin Script -->
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
<div style="width: 100%; height: 100%; position: fixed; top: 0; left: 0; display: none; z-index: 99; opacity: 0;" id="bg-menu-cl"></div>
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
        // Dem so luot dat mua qua goi dien            
        $('#telnumber').on('click', function () {
            ga('send', 'event', 'Goi-dien', 'click', 'call-telephone');
        });
        
        var a = $('.history .text1').width();
        a = 220 + a;
        $('.history > .text2').css('left', a + 'px');
    });
</script>
<!-- Google Code dành cho Thẻ tiếp thị lại Account NOVA-->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 877363588;
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="js/conversion.js">
</script>
</body>
</html>
