<?php session_start(); ?>
<!-- kết nối csdl -->
<?php include("ketnoi.php"); ?>
<!-- end -->
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
                <h4 style="font-size: 20px;">Giỏ hàng<span id="cartCount11235" style="color: white; font-size: 20px;"></span></h4>

            </div>
            <div class="form_payment">

                <div>
                    <div>
                        <table class="table_giohang">
                            <tbody><tr class="h">
                                <th>Sản phẩm</th>
                                <th>Đơn giá</th>
                                <th>Số lượng</th>
                                <th class="amount">Thành tiền</th>
                                <th></th>
                            </tr>

                            <!-- giỏ hàng -->
                            <?php 

                            
                            //hiện thị sản phâm
                            $thanhtien=0;
                            $path="img/HinhSP/";
                            foreach ($_SESSION as $name => $value) {
                                       
                                $tongtien=0;
                                if ($value>0) {

                                    if (substr($name, 0,5)=='cart_') {
                                     $id=substr($name, 5);
                                     $Query="SELECT * FROM sanpham WHERE MASP='".$id."'";
									 
                                     $result = $conn->query($Query);
                                    // truy xuất từng phần tử trong mảng
									
                                     while ($row=mysqli_fetch_array($result)) {
                                        $gia=$row['GIA'];
										
                                        $tongtien=$gia*$value;
                                        ?>
                                        <!-- -->
                                        <!-- end giỏ hàng -->
                                        <tr class="r">
                                            <td class="product">
                                                <a href="/dien-thoai/samsung-galaxy-j7-prime-pid108322.html" class="img">
                                                    <img src="<?php echo $path.$row['HINHDAIDIEN']; ?>" alt="samsung-galaxy-j7-prime">
                                                </a>
                                                <p class="n">
                                                    <a class="name_product" style="color: #000000; font-weight: normal;" href="/dien-thoai/samsung-galaxy-j7-prime-pid108322.html"><?php echo $row['TENSP']; ?></a>
                                                </p>
                                                <p class="d">
                                                    <small></small>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="p">

                                                    <?php 

                                                    echo number_format($gia,0,".","."); 

                                                    ?> ₫
                                                </p>
                                            </td>
                                            <td class="quantity">
                                            <label for=""><?php echo $value;?></label>
                                            </td>
                                            <td>
                                                <p class="p">
                                                    <?php echo number_format($tongtien,0,".","."); ?> ₫
                                                </p>
                                            </td>
                                            <td class="remove" style="padding-top: 10px;">
                                                <a href="giohang.php?xem=gh&them=<?php echo $id;?>" class="remove">[+]</a>
                                            </td>
                                            <td class="remove" style="padding-top: 10px;">
                                                <a href="giohang.php?xem=gh&tru=<?php echo $id;?>" class="remove">[-]</a>
                                            </td>
                                            <td class="remove" style="padding-top: 10px;">
                                                <a href="giohang.php?xem=gh&xoa=<?php echo $id;?>" class="remove"><i class="fa fa-times" style="color: #494949; font-weight: normal;"></i></a>
                                            </td>
                                        </tr>
                                        <?php 
                                    }

                                }
                                
                                $thanhtien+=$tongtien;

                            }

                        }
                        ?>

                    </tbody></table>
                </div>

                <div class="sum_promotion cart_popup">

                    <div class="row last" style="padding-top: 5px;">
                        <div class="col-md-6"></div>
                        <div class="col-md-3"><strong style="color: #4f4f4f; font-size: 16px;">Giá thanh toán</strong></div>
                        <div class="col-md-3 txt_align_right"><strong class="txt_red" style="font-size: 16px; color: #F83015"> <?php echo number_format($thanhtien,0,".","."); ?> ₫</strong></div>
                    </div>
                </div>

                <div class="footer_btn">
                    <table style="width: 100%;">
                        <tbody><tr>
                            <td style="width: 50%; padding-right: 10px;">
                                <a href="#" id="giohang_thanhtoan8123" onclick="giohang_thanhtoan_click()" class="btn btn-payment btn-bg-payment margin-top-15 margin-left-20">Thanh toán</a>
                            </td>
                            <td style="width: 50%; padding-left: 10px;">
                                <a href="index.php" class="btn btn-payment btn-bg-continue margin-top-15 margin-left-20">Tiếp tục mua hàng</a>
                            </td>
                        </tr>
                    </tbody></table>
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

    .table_giohang .h {
        border-bottom: solid 1px #dadada;
    }

    .table_giohang .h th {
        padding-bottom: 10px;
        text-transform: uppercase;
        font-size: 12px;
        color: #4f4f4f;
    }

    .table_giohang .r td {
        padding-top: 15px;
        vertical-align: top;
    }

    .table_giohang .r .product {
        padding-right: 15px;
    }

    .table_giohang .r .product .img {
        float: left;
        width: 110px;
        height: 90px;
        max-height: 90px;
        border: #d5d5d5 solid 1px;
        text-align: center;
        margin-right: 10px;
        padding-top: 10px;
        padding-bottom: 6px;
        vertical-align: middle;
    }

    .table_giohang .r .product .img img {
        max-width: 90px;
        max-height: 70px;
    }

    .table_giohang .r .product .n {
        font-size: 14px;
        font-weight: 600;
    }

    .table_giohang .r .product .d {
        font-size: 12px;
        color: #b5b5b5;
    }

    .table_giohang .r .p {
        font-size: 16px;
        color: #f83015;
        font-weight: 600;
    }

    .table_giohang .r .quantity {
        font-size: 14px;
    }

    .table_giohang .r .quantity input {
        width: 45px;
    }

    .table_giohang .r .remove a {
        font-size: 20px;
        color: #c7c7c7;
    }

    .footer_btn {
        margin-bottom: 25px;
    }
</style>

<!-- <script type="text/javascript">
    function showDialog1(id) {
        var numProducts = parseInt($('#cartCount11234').text());
        if (numProducts > 1) {
            $('#step1').text('Danh sách sản phẩm');
            $('#step2').text('Thông tin người mua');
            $('#step1').css("border-bottom", "1px solid #ddd");
            $('#step1').css("margin-bottom", "10px");
        } else {
            $('#step1').text('Bước 1: Chọn màu');
            $('#step2').text('Bước 2: Thông tin người mua');
        }

        $('#full_overlay').fadeIn(function () {
            var dlg = $('#' + id);
            dlg.show();
            //dlg.css('left', parseInt((window.innerWidth - dlg.width()) / 2) + 'px');
        });
    }
    function hideDialog1() {
        $('.dialog1').hide();
        $('#full_overlay').fadeOut();
    }

    function giohang_thanhtoan_click() {
        hideDialog1();
        showDialog1('popup_payment1');
        $('#Gen1spThanhToan').load('/gen-uc/Cart!Gen1spThanhToan',
            function () { $('#pi_checker select:first').change(); }
        );
        return false;
    }
</script> -->

<!-- cập nhật giỏ hàng -->
<!-- <script type="text/javascript">
    function popup_giohang1_RefreshCartList() {
        reloadGioHangPopup1();
    }

    function popup_giohang1_RemoveProduct(Cart_ID) {
        $.ajax({
            url: '/Site/_Sys/ajax.aspx',
            type: 'POST',
            data: {
                'a': 'cart-remove',
                'Cart_ID': Cart_ID
            },
            success: function (data) {
                reloadGioHangPopup1();
            }
        });
    }

    function popup_giohang1_UpdateCartListQuantity() {
        var s = '';
        $('#popup_giohang1 select[data-name="Product_Quantity"]').each(function (i, e) {
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
                reloadGioHangPopup1();
            }
        });
    }
</script> -->
</div>
<?php $conn->close(); ?>
</body>
</html>
