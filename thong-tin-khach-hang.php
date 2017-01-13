<?php session_start(); ?>
<!-- kết nối csdl -->
<?php include("ketnoi.php"); ?>
<!-- end -->

<?php
    if(isset($_POST['hoten'])){
        $hoten = isset($_POST['hoten']) ? $_POST['hoten'] : '';
        $diachi = isset($_POST['diachi']) ? $_POST['diachi'] : '';
        $dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : '';
		
		$thongbao = ''; //khai báo biến thông báo

        $sql = "INSERT INTO `donhang` (`hoten`, `diachi`, `dienthoai`) VALUES ('$hoten', '$diachi', '$dienthoai')";
        $result = $conn->query($sql);

        $iddh = $conn->insert_id;

        foreach ($_SESSION as $key => $val) {
            if (strpos($key,'cart_') !== false){
                $masp = substr($key,5);
                $sql = "INSERT INTO `donhangchitiet` (`iddh`, `masp`) VALUES ('$iddh', '$masp')";
                $result = $conn->query($sql);
				
				$thongbao = 'Đơn hàng đã được lưu'; // gán giá trị bào biến thông báo rằng đơn hàng đã đc lưu
            }
        }
    }

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

<style>
  .owl-carousel .owl-wrapper-outer {
    overflow: visible;
    position: relative;
    width: 100%;
}
</style>

</head>
<body>
    <div id="GioHangPopup1_div">
       <?php

       if(isset($_GET['masp']) && !empty($_GET['masp']))
       {
        $masp=$_GET['masp'];
        @$_SESSION['cart_'.$masp]+=1;
        header('location:giohang.php');
		}
    if(isset($_GET['them']))
    {
        @$_SESSION['cart_'.$_GET['them']]+=1;
        header('location:giohang.php');
    }
    if(isset($_GET['tru']))
    {
        @$_SESSION['cart_'.$_GET['tru']]--;
        header('location:giohang.php');
    }
    //xóa
    if(isset($_GET['xoa']))
    {
        @$_SESSION['cart_'.$_GET['xoa']]=0;
        header('location:giohang.php');

    }
    ?>

    <!--popup-->
    <div id="popup_giohang1" class="dialog1" style="display: block;">
        <div class="signup-ct">
            <div class="signup-header">
                <h4 style="font-size: 20px;">Thông tin khách hàng<span id="cartCount11235" style="color: white; font-size: 20px;"></span></h4>
				<p style="color: #ff0000;font-size: 16px;font-weight: bold;"><?php echo ($thongbao != '') ? $thongbao : ''; //kiểm tra nếu biến thông báo khác rỗng thì hiện ra; cái này tương đương với code này nè e. if($thongbao != '') echo $thongbao; else echo ''; a viết tắt đó nếu muốn dễ thì e viết lại. ok không em. ?></p>

            </div>
            <div class="form_payment">

                <div>
                    <div>
                    <form action="" method="post" accept-charset="utf-8">
                        <table class="table_giohang">
                            <tr>
                                <th>Họ Tên</th>
                                <td>
                                    <input type="text" name="hoten" value="" >
                                </td>
                            </tr>
                            <tr>
                                <th>Điện thoại</th>
                                <td>
                                    <input type="text" name="dienthoai" value="" >
                                </td>
                            </tr>
                            <tr>
                                <th>Địa chỉ</th>
                                <td>
                                    <input type="text" name="diachi" value="" >
                                </td>
                            </tr>
                            <tr style="text-align: center;">
                                <td colspan="2" style="width: 100%;">
                                    <button type="submit"  style="width: 100%;" class="btn btn-payment btn-bg-payment margin-top-15 margin-left-20">
                                        Thanh toán
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    #popup_giohang1 {
        display: none;
        left: 50%;
        margin-left: -370px;
        width: 740px;
        background: white;
    }

    #popup_giohang1 .footer_btn {
        margin-top: 0px;
    }

    .table_giohang {
        width: 100%;
    }
    .table_giohang tr{padding: 10px 5px;display: block;width: 100%;clear: both;}
    .table_giohang tr th{width: 40%;float: left;}
    .table_giohang tr td{width: 60%;float: left;}
    .table_giohang tr:after{display: block;clear: both;width: 100%;height: 1px;}
    .table_giohang tr td input{width: 100%;display: block;}

    .footer_btn {
        margin-bottom: 25px;
    }
</style>

</div>
<?php $conn->close(); ?>
</body>
</html>
