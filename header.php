<header class="container-fluid">
<script src="ajaxSapXep.js" type="text/javascript"></script>
  <div class="row" style="margin-top: -16px;">
    <div class="container container-fixed">
      <div class="row">
        <div class="col-xs-3 col-sm-4 col-md-3 col-lg-2 bg-logo">
          <div class="row menu-logo">
            <div class="nav-menu" id="main_menu" onClick="puMenu();" style="display: none;"> <img src="images/img-menu.png" alt="ViettelStore.vn"> </div>
            <h1 id="logo-bg"> <a href="index.php" class="icons" title="ViettelStore.vn, Công ty Thương mại và Xuất Nhập khẩu Viettel"> ViettelStore.vn, Công ty Thương mại và Xuất Nhập khẩu Viettel </a></h1>
          </div>
        </div>
        <div class="col-xs-6 col-sm-5 col-md-6 col-lg-7">
          <div class="row">
            <div class="col-xs-11 col-sm-11 col-md-10 col-lg-10 Search">
              <form class="form-horizontal" name="frm"action="" method="post">
			  <input name="txtTuKhoa" type="text" id="search" class="txtSearch col-lg-11" placeholder="Bạn cần tìm sản phẩm nào ..." onkeyup="showResult(this.value)">
			  </br><div class="btnSearch" id="search-cate"> <i class="icons sc"><button name="TimKiem" type="submit" class="btn btn-primary" style="margin-left: 517px;color: #fff;background-color: #f83015;border-color: #f83015;"></button></i></div>
			  </form>
			  </br>
			  </br>
			  <div id="livesearch" style=" width: 480px; margin-left: 73px;margin-top: -5px;box-shadow: 2px 5px 10px #888888; z-index: 100; position: relative;"></div>
			  <script>
				function showResult(str) {
				  if (str.length==0) { 
					document.getElementById("livesearch").innerHTML="";
					document.getElementById("livesearch").style.border="0px";
					return;
				  }
				  if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp=new XMLHttpRequest();
				  } else {  // code for IE6, IE5
					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				  xmlhttp.onreadystatechange=function() {
					if (this.readyState==4 && this.status==200) {
					  document.getElementById("livesearch").innerHTML=this.responseText;
					  document.getElementById("livesearch").style.width="480px";
					}
				  }
				  xmlhttp.open("GET","livesearch.php?q="+str,true);
				  xmlhttp.send();
				}
				</script>
				
             <div class="btnSearch" id="search-cate"> <a href="#" id="linktimkiem"> <i class="icons sc"></i></a></div>
			 
              <div class="clsdanhmuc"> <span id="select-search" data-stype="1">Sản phẩm</span> <i id="select-ico" class="icons tick"></i>
                <div class="content">
                  <p data-stype="1">Sản phẩm</p>
                  <hr style="margin: 0;">
                  <p data-stype="2">Tin tức</p>
                </div>
              </div>
              <ul id="result-autocomplete" class="SearchResult" style="display: none; margin-top: 35px; margin-left: 75px;">
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 menu-right">
          <div class="row">
            <div class="col-lg-3 hidden-md hidden-sm hidden-xs"> </div>
            <div class="col-xs-6 col-md-5 col-lg-4 location"> <a href="#">
              <div class="row">
                <div class="col-xs-5 col-sm-5 col-md-6 col-lg-5">
                  <div class="row" style="text-align: center;"> <i class="icons lc"></i> </div>
                </div>
                <div class="col-lg-7 col-md-6 hidden-sm hidden-xs">
                  <div class="row"> Siêu thị<br>
                    gần nhất </div>
                </div>
              </div>
              </a> </div>
            <div class="col-xs-6 col-md-7 col-lg-5"> <a href="#">
              <div class="row amount">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 right">
                  <div class="row"> <i class="icons gh" title="Giỏ hàng"></i>
                    <div style="border-left: #bebebe solid 1px; height: 19px; position: absolute; top: 10px; left: 2px;"></div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 hidden-sm hidden-xs">
                  <div class="row" style="margin-left: -6px;">Giỏ hàng</div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 right">
                  <div class="row"> <i class="icons bggh" style="margin-top: 4px;"></i> <span id="cartCount11234">0</span> </div>
                </div>
              </div>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>