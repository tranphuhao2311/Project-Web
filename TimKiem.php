<!DOCTYPE html>
<html class=" ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Siêu thị điện thoại di động vietel – Bảng giá mua bán - ViettelStore.vn</title>
<meta name="keywords" content="Điện thoại di động, smartphone, điện thoại thông minh, điện thoại trả góp">
<meta name="description" content="Siêu thị điện thoại di động viettel cập nhật bảng giá điện thoại di động mới nhất. Mua bán điện thoại di động tại cửa hàng được bảo hành chính hãng, uy tín">
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
<body>
 <?php include'header.php';?>
<?php include 'bar_danhmuc.php'?>
<div id="full_overlay" onClick="hideDialog1()"></div>
<div id="GioHangPopup1_div"> </div>
<script type="text/javascript">
function onSearch() {
	if ($('#txtsearch').val() == '') {
		$('#txtsearch').focus();
	}
	else {
		if ($('#select-search').data('stype') == "2")
			window.location = '#?keyword=' + $('#txtsearch').val();
		else
			window.location = '#?keyword=' + $('#txtsearch').val();
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
<div class="container container-fixed">
  <div class="row" style="position: relative;">
    <div class="col-lg-2 col-sm-2 hidden-md hidden-sm hidden-xs wapper-menu">
     <?php
		include "bar_menu.php";
	 ?>
    <div class="col-xs-12 col-lg-7 col-md-8 col-sm-12"> </div>
    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"> </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="container container-fixed">
      <div class="row history"> 
	  
	  </div>
    </div>
  </div>
</div>
<div class="container" style="overflow: hidden; padding-bottom: 10px;">
  <div class="row banner-detail-news">
    
  </div>
  <div class="row content-danh-muc" style="margin-top: 20px;">
    <table cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 60px;">
      <tbody>
        <tr>
          <td class="right"><div data-hascategories="true" id="div_Danh_Sach_San_Pham">
		  <?php 
			$key=$_GET['key'];
			require("connect.php");
			$sql = "SELECT * FROM sanpham where TINHTRANGXOA=0 and TENSP like '%".$key."%' Order By MALOAISP, GIA DESC ";
			$result = $conn->query($sql);
			echo '<div>Có <b>'.$result->num_rows;
			echo '</b> sản phẩm có từ khóa <b>'.$key.'</b></div>';
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc())
				{
					echo '
					<div class="item ProductList3Col_item">
                <div style="height:22px; width: 27px; position: relative;"> </div>
                <div class="img"> <img src="img/HinhSP/'.$row["HINH1"].'" alt=""> </div>
                <div class="sell">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
                <div class="price">'.number_format( $row["GIA"],0,'.','.').' ₫</div>
                <h2 class="name">'.$row["TENSP"].'</h2>
                <a href="chi_tiet.php?msp='.$row["MASP"].'&lsp='.$row["MALOAISP"].'" style="position: absolute;left: 0;top: 0;width: 100%;height: 100%;text-decoration: none; border-top:1px solid #dfdfdf;border-left: 1px solid #dfdfdf">
                <div class="detail" style="display: none;">
                  <h2>'.$row["TENSP"].'</h2>
                  <h4>'.number_format( $row["GIA"],0,'.','.').' ₫</h4>
                  <div class="order" onClick="muahang(38217); return false;">đặt ngay</div>
                  <div name="ttnoibat" class="line-top"> • Màn hình: 4.0 inch WVGA&nbsp;LCD<br>
                    • CPU: Qualcomm Snapdragon 200, Dual-core 1.2 GHz<br>
                    • RAM/ROM: 1 GB/8 GB<br>
                    • Camera: 2 MP/0.3 MP<br>
                    • Pin: 1500 mAh </div>
                </div>
                </a> </div>
					';
				}
			}
		  ?> 
             
            </div>
            <div class="clear-both" style="text-align: center; position: relative; width: 100%;">
              <div style="width: 100%; text-align: center; position: absolute; top: 0; left: 0;">
                <div id="div_Danh_Sach_San_Pham_loadMore_btn" style="display: block;"> <a href="javascript:void();">Xem thêm sản phẩm</a> </div>
              </div>
            </div></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script src="js/UrlHelper.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script type="text/javascript">
    function getParameterByName(name) {
        name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
        var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(location.search);
        return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
    }
    
    var Pagination_CurrentPage = 1;
    var FeatureFilter = '';
    var SpecOrder = '';
    var filterManuID = '0';
    var filterPriceFrom = -1;
    var filterPriceTo = -1;

    function LoadTheoDK() {
        var gia = getParameterByName('gia');
        filterPriceFrom = 0;
        filterPriceTo = gia;
        SpecOrder = 'GiaCaoDan';
        $('#li_sapxep').val('GiaCaoDan');
        GenProductList();
    }

    function GenProductList(div, callback) {
        if (div == undefined || div == '')
            div = 'div_Danh_Sach_San_Pham';

        FeatureFilter = '';

        $('#dropdown-advanced input[type=checkbox]:checked').each(function (idx, inp) {
            FeatureFilter += '_' + $(inp).val();
        });
        SpecOrder = $('#li_sapxep').val();
        FeatureFilter = FeatureFilter.substr(1);
        
        $('#' + div).load('#', {
            'path': 'ProductList3Col',
            'PaginationVisiable': 0,
            'CatID': '010001',
            'ManID': filterManuID,
            'Tags': '',
            'PageSize': 20,
            'CurrentPage': Pagination_CurrentPage,
            'SpecOrder': SpecOrder,
            'SpecFilter': '',
            'FeatureFilter': FeatureFilter,
            'PriceFrom': filterPriceFrom,
            'PriceTo': filterPriceTo,
            'isHot': ''
        },
        function () {

            var c = $('#' + div).find('> .ProductList3Col_item').length;

            if (c == 20)
                ///$('#div_Danh_Sach_San_Pham_loadMore_btn').show();
            else
               // $('#div_Danh_Sach_San_Pham_loadMore_btn').hide();

            if (callback != undefined && callback != null)
                callback();

            if (c > 0)
                BindProHover();
            else
                $('#' + div).html('<div><p style="text-align:center; margin-top:75px;">Không tìm thấy sản phẩm nào..</p></div>');
        });
    }

    function Pagination_ChangePage(p) {
        if (p == null)
            return;
        if (p < 1) p = 1;
        UrlHelper_HashAdd('page', p);
        Pagination_CurrentPage = p;

        GenProductList();
    }

    function reloadCate() {
        window.location = window.location.href;
    }
    function MoiNhat() {
        $('#li_sapxep').val('MoiNhat');
        Pagination_CurrentPage = 1; GenProductList();
    }
    $(document).ready(function () {

        var s = UrlHelper_HashGet('SpecOrder');
        if (s != '')
            $('#li_sapxep').val(s);

        s = UrlHelper_HashGet('page');
        if (s != '' && parseInt(s) > 0) {
            Pagination_ChangePage(s);
        }

        if ($('#div_Danh_Sach_San_Pham').data('hascategories') == true) {
            if (getParameterByName('gia').trim() !== '') {
                LoadTheoDK();
            } else {
                setTimeout('GenProductList()', 1000);
            }
        } else {
            $('.locnangcao.container').hide();
            $('#div_Danh_Sach_San_Pham').html('<span style="text-align: center; font-weight: bold; font-size: 14px;">Sản phẩm này tạm thời ngừng bán.<br/>Quý khách vui lòng quay về <a href="/" title="Trang chủ ViettelStore.vn" style="color: #13938E;">trang chủ</a> hoặc ghé thăm các sản phẩm khác..');
        }

        $('#li_sapxep').change(function () { Pagination_CurrentPage = 1; GenProductList(); });
        $('#dropdown-advanced input[type=checkbox]').change(function () { Pagination_CurrentPage = 1; GenProductList(); });

        $('#filterPrice input[type=radio]').change(function () {
            filterPriceFrom = $(this).data('pricefrom');
            filterPriceTo = $(this).data('priceto');
            Pagination_CurrentPage = 1;
            GenProductList();
        });

        $('#filterManu input[type=radio]').click(function () {
            filterManuID = $(this).val();
            Pagination_CurrentPage = 1;
            GenProductList();
        });

        $('#filter_lst .title .r').click(function () {
            $(this).parent().next().toggle(400);
        });

        $('#div_Danh_Sach_San_Pham_loadMore_btn a').click(function () {
            Pagination_CurrentPage += 1;
            GenProductList('div_Danh_Sach_San_Pham_loadMore', loadMoreSP);
            return false;
        });
    });

    function loadMoreSP() {
       // $('#div_Danh_Sach_San_Pham').append($('#div_Danh_Sach_San_Pham_loadMore').html());
        //$('#div_Danh_Sach_San_Pham_loadMore').html('');
    }
</script>
<script type="text/javascript">

    $(document).ready(function () {
        $('#filter_lst .content').slimscroll({
            alwaysVisible: true,
            height: '157'
        });

        try {
            
        }
        catch (ex) { }
    });

    $(document).ready(function () {
        $("#owl-dv-vt").owlCarousel({
            items: 2,
            itemsDesktop: [1199, 2],
            itemsDesktopSmall: [979, 1],
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            autoPlay: true,
            pagination: false,
            navigationText: ["", ""]
        });

        $('#dropdown-advanced input[type=checkbox]').removeClass('check');
        $('#dropdown-advanced input[type=checkbox]').removeAttr('checked');
        $('#filterManu input[type=radio]').eq(0).attr('checked', 'checked');
        $('#filterPrice input[type=radio]').eq(0).attr('checked', 'checked');
    });

</script>
<script type="text/javascript" async="" src="js/conversion.js"></script>
<script type="text/javascript">
    var ants_analytic = ants_analytic || [];
    ants_analytic.push({ conversionId: 'd6db816c' });
</script>
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
                    Tên tài khoản: Công ty TNHH MTV &amp; XNK Viettel<br>
                    Số tài khoản: <strong>123456789</strong><br>
                  </div>
                  <label class="radio-inline">
                  <input type="radio" value="e6551df2-083c-41b2-87e1-c9cc105f8a9c" name="card_paymentTypes" class="infor_user">
                  Chuyển khoản Ngân hàng </label>
                  <div class="desc">Thông tin tài khoản thụ hưởng của Viettelstore.  Sau khi chuyển khoản, xin vui lòng thông báo cho chúng tôi qua tổng đài <strong>1800 8123</strong> để được phục vụ nhanh nhất. <br>
                    Ngân hàng: <strong>Ngân hàng TM Cổ phần Quân Đội</strong><br>
                    Chi nhánh: Trần Duy Hưng <br>
                    Tên tài khoản: Công ty TNHH NN MTV TM &amp; XNK Viettel <br>
                    Số tài khoản: <strong>123456789</strong></div>
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
            url: '#',
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
                ga('require', 'ecommerce', 'ecommerce');
                ga('send', 'event', 'Dat-ngay', 'click', 'buy-now');

                var total = $('#last_cart_price').text().replace(/\./g, '').replace(' ₫', '').replace(' ', '');
                var cart = 'c06ccb1a-e6f5-4d52-bea7-c56717fda65f';

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
            url: '#',
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
                url: '#',
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
<!-- load tinh thanh pho -->
<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            url: '#',
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
<!-- cập nhật giỏ hàng -->
<script type="text/javascript">
    function RefreshCartList() {
        $('#cart_lst1').parent().load('/gen-uc/Cart!ShopCart');
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
<div class="popup_advisory1"> <a href="tel:18008123"> <i class="icons advisory" id="telnumber" title="Tư vấn bán hàng"></i> </a> </div>
<!-- Begin Footer -->
<footer class="container-fluid">
  <div class="row">
    <div class="container container-fixed">
      <div class="row cam-ket">
        <div class="col-lg-6">
          <div class="row item2">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-4 col-xs-4 it-cam-ket"> <i class="icons ck06"></i> </div>
                <div class="col-lg-7 col-md-9 col-sm-8 col-xs-8">
                  <div class="row">
                    <h5>Sản phẩm</h5>
                    <h4>CHÍNH HÃNG</h4>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-4 col-xs-4 it-cam-ket"> <i class="icons ck08"></i> </div>
                <div class="col-lg-7 col-md-9 col-sm-8 col-xs-8">
                  <div class="row">
                    <h5>Giao hàng tận nơi</h5>
                    <h4>63 TỈNH THÀNH</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="row item2">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-4 col-xs-4 it-cam-ket"> <i class="icons ck10"></i> </div>
                <div class="col-lg-7 col-md-9 col-sm-8 col-xs-8">
                  <div class="row">
                    <h5>Tư vấn miễn phí</h5>
                    <a href="tel:18008123">
                    <h4>1800 8123</h4>
                    </a> </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
              <div class="row">
                <div class="col-lg-5 col-md-3 col-sm-4 col-xs-4 it-cam-ket"> <i class="icons ck03"></i> </div>
                <div class="col-lg-7 col-md-9 col-sm-8 col-xs-8">
                  <div class="row">
                    <h5>Chính sách đổi trả</h5>
                    <h4>LINH HOẠT</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 col-md-12">
          <div class="row">
            <div class="col-xs-4">
              <div class="row">
                <h4>CHĂM SÓC KHÁCH HÀNG</h4>
                <a href="tel:18008123">
                <p> <span class="color_ff6600">1800 8123 </span>: Tư vấn bán hàng </p>
                </a> <a href="tel:19008096">
                <p> <span class="color_ff6600">1900 8096 </span>: Khiếu nại, Bảo hành </p>
                </a>
                <p> Thời gian làm việc: <span class="color_ff6600">8h - 22h </span> </p>
                <a href="mailto:hanhntp@viettelstore.vn">
                <p>Góp ý: <span class="color_333333">tran.phu.hao.it@gmail.com</span></p>
                </a> </div>
            </div>
            <div class="col-xs-4">
              <div class="row">
                <h4>HỖ TRỢ KHÁCH HÀNG</h4>
                <a href="#">
                <p>Những câu hỏi thường gặp</p>
                </a> <a href="#">
                <p>Phương thức thanh toán</p>
                </a> <a href="#">
                <p>Hướng dẫn đặt hàng</p>
                </a> <a href="#">
                <p>Tra cứu đơn hàng trực tuyến</p>
                </a> <a href="#">
                <p style="color: red !important;">Tìm trung tâm bảo hành</p>
                </a> </div>
            </div>
            <div class="col-xs-4">
              <div class="row">
                <h4>CHÍNH SÁCH</h4>
                <a href="#">
                <p>Chính sách giao hàng</p>
                </a> <a href="#">
                <p>Chính sách đổi sản phẩm</p>
                </a> <a href="#">
                <p>Chính sách bảo hành</p>
                </a> <a href="#">
                <p>Chính sách bảo mật</p>
                </a> </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12">
          <div class="row">
            <div class="col-xs-8">
              <div class="row">
                <h4>VIETTEL STORE</h4>
                <div class="col-xs-6">
                  <div class="row"> <a href="#">
                    <p style="color: red;">Siêu thị gần nhất (291)</p>
                    </a> <a href="#">
                    <p>Tư vấn sử dụng</p>
                    </a> <a href="#">
                    <p>Đánh giá sản phẩm</p>
                    </a> <a href="#">
                    <p>Bệnh viện công nghệ</p>
                    </a> <a href="#">
                    <p>Liên hệ</p>
                    </a> </div>
                </div>
                <div class="col-xs-6">
                  <div class="row"> <a href="#">
                    <p>Tin công nghệ</p>
                    </a> <a href="#">
                    <p>Tin khuyến mãi</p>
                    </a> <a href="#">
                    <p>Tin tuyển dụng</p>
                    </a> <a href="#">
                    <p>Tin Viettel</p>
                    </a> </div>
                </div>
              </div>
            </div>
            <div class="col-xs-4">
              <div class="row">
                <h4>LIÊN KẾT</h4>
                <p class="group-xh"> <a href="#"> <i class="icons f"></i> </a> <a href="#"> <i class="icons g"></i> </a> <a href="https://play.google.com/store/apps/details?id=eviettel.eviettel"> <i class="icons a"></i> </a> </p>
                <h4 style="margin-top: 10px; margin-bottom: 0;">CHỨNG NHẬN</h4>
                <a href="#">
                <p> <i class="icons cnbct" title="Đã đăng ký với bộ công thương"></i> </p>
                </a> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row line">
        <h4>CÔNG TY THƯƠNG MẠI VÀ XUẤT NHẬP KHẨU</h4>
        <p>Địa chỉ: 227 Nguyễn Văn Cừ, Q5, TP.HCM</p>
        <p> Coppyright © 2017 </p>
        <p> <a href="#"><span class="color_ff6600"> <i class="icons mb"></i> Xem bản mobile </span></a> </p>
      </div>
      <div class="row"> </div>
    </div>
  </div>
</footer>
<div class="scrollToTop" style="display: block;"> <i class="icons scrolltop" title="ScrollToTop"></i> </div>
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
        // Dem so luot dat mua qua goi dien            
        $('#telnumber').on('click', function () {
            ga('send', 'event', 'Goi-dien', 'click', 'call-telephone');
        });
        
        var a = $('.history .text1').width();
        a = 220 + a;
        $('.history > .text2').css('left', a + 'px');
    });
</script>
</body>
</html>
