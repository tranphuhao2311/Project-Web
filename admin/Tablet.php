<?php
session_start();
if(!isset($_SESSION["NguoiDung"])||$_SESSION["NguoiDung"]=="")
{
	header('location: dangnhap.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	
	<script src="../ckeditor.js"></script>
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Metro</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white warning-sign"></i>
							</a>
							<ul class="dropdown-menu notifications">
								<li class="dropdown-menu-title">
 									<span>You have 11 notifications</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon yellow"><i class="icon-shopping-cart"></i></span>
										<span class="message">2 items sold</span>
										<span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-user"></i></span>
										<span class="message">User deleted account</span>
										<span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										<span class="icon red"><i class="icon-shopping-cart"></i></span>
										<span class="message">New comment</span>
										<span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon green"><i class="icon-comment-alt"></i></span>
										<span class="message">New comment</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="icon blue"><i class="icon-user"></i></span>
										<span class="message">New user registration</span>
										<span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li class="dropdown-menu-sub-footer">
                            		<a>View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white tasks"></i>
							</a>
							<ul class="dropdown-menu tasks">
								<li class="dropdown-menu-title">
 									<span>You have 17 tasks in progress</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim red">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim green">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim yellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim greenLight">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim orange">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white envelope"></i>
							</a>
							<ul class="dropdown-menu messages">
								<li class="dropdown-menu-title">
 									<span>You have 9 messages</span>
									<a href="#refresh"><i class="icon-repeat"></i></a>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="halflings-icon white wrench"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> <?php echo $_SESSION["NguoiDung"];?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="dangnhap.php"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<?php include_once "sidebar.php" ?>
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Forms</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span><strong>MÁY TÍNH BẢNG</strong></h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" name="frm" action="InsertTablet.php" method="post" enctype="multipart/form-data">
						  <fieldset>
						  <!--Tên điện thoại-->
						 <div class="control-group">
							  <label class="control-label" for="typeahead"><strong>Tên máy tính bảng: </strong></label>
							  <div class="controls">
								<input name="TenTablet" type="text" class="span6 typeahead" id="TenTablet" style="width: 220px;" />
							  </div>
							</div>
						  
							<!--Hãng sản xuất-->
						  <div class="control-group">
								<label class="control-label" for="selectError3"><strong>Hãng sản xuất</strong></label>
								<div class="controls" >
								  <select id="HSX" name="HSX">
								  <?php
									require("connect.php");
									$sql="Select * From HANGSANXUAT where LOAISP=3";$result = $conn->query($sql);
									if ($result->num_rows > 0) 
									{
										while($row = $result->fetch_assoc())
										{
								  ?>
								  <option value="<?php echo $row["MAHANGSANXUAT"]?>"><?php echo $row["TENHANGSANXUAT"]?></option>
								  <?php
										}
									}
								  ?>
								  </select>
								</div>
							</div>
							<!--Giá-->
							<div class="control-group">
							  <label class="control-label" for="typeahead"><strong>Giá: </strong></label>
							  <div class="controls">
								<input name="Gia" type="text" class="span6 typeahead" id="Gia" style="width: 220px;" />
							  </div>
							</div>
							<!--Màn hình-->
							 <div class="control-group">
							  <label class="control-label" for="typeahead"><strong>MÀN HÌNH: </strong></label>
							  <div class="controls">
								<input name="ManHinh" type="text" class="span6 typeahead" id="ManHinh" style="width: 220px;" />
							  </div>
							</div>
							<!--CPU-->
							 <div class="control-group">
							  <label class="control-label" for="typeahead"><strong>CPU: </strong></label>
							  <div class="controls">
								<input name="CPU" type="text" class="span6 typeahead" id="CPU" style="width: 220px;" />
							  </div>
							</div>
							<!--RAM/ROM-->
							 <div class="control-group">
							  <label class="control-label" for="typeahead"><strong>RAM/ROM: </strong></label>
							  <div class="controls">
								<input name="RAMROM" type="text" class="span6 typeahead" id="RAMROM" style="width: 220px;" />
							  </div>
							</div>
							<!--CAMERA-->
							 <div class="control-group">
							  <label class="control-label" for="typeahead"><strong>CAMERA: </strong></label>
							  <div class="controls">
								<input name="CAMERA" type="text" class="span6 typeahead" id="CAMERA" style="width: 220px;" />
							  </div>
							</div>
							<!--PIN-->
							 <div class="control-group">
							  <label class="control-label" for="typeahead"><strong>Pin: </strong></label>
							  <div class="controls">
								<input name="PIN" type="text" class="span6 typeahead" id="PIN" style="width: 220px;" />
							  </div>
							</div>
							<!--Hinh sp-->
							<div class="control-group">
							  <label class="control-label" for="typeahead"><strong>Hình ảnh đại diện: </strong></label>
							  <div class="controls">
								<input type="file" name="HinhDaiDien" id="HinhDaiDien"/>
								</div>
								</div>
							<div class="control-group">
							  <label class="control-label" for="typeahead"><strong>Hình sản phẩm: </strong></label>
							  <div class="controls">
								<input type="file" name="Hinh1" id="Hinh1"/>
								<input type="file" name="Hinh2" id="Hinh2"/>
								<input type="file" name="Hinh3" id="Hinh3"/>
								<input type="file" name="Hinh4" id="Hinh4"/>
							  </div>
							</div>
							<!--Mô tả dài-->
							 <div class="control-group" style="width: 83.5%;float: right;">
								<textarea id="MOTADAI" name="MOTADAI" cols="80" rows="10">
								
								</textarea>
								<script>CKEDITOR.replace( 'MOTADAI' );</script> 
							 </div>
							<div class="control-group">
								<label class="control-label" for="selectError3"><strong>Đặc điểm nổi bật: </strong></label>
							</div>
							<!--Thông số kỹ thuật-->
							 <div class="control-group" style="width: 83.5%;float: right;">
								<textarea id="THONGSO" name="THONGSO" cols="80" rows="10">
								<table cellpadding="0" cellspacing="0">
                        
                        <table cellpadding="0" cellspacing="0">
                        
                        <tbody><tr>
                            <td style="width: 180px;">Thiết kế:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Chất liệu:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Màn hình:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Kích thước:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">CPU:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">RAM:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Bộ nhớ trong:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Camera:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">3G:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Thẻ nhớ:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Wifi:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Trọng lượng:</td>
                            <td></td>
                        </tr>
                        
                        <tr>
                            <td style="width: 180px;">Pin:</td>
                            <td>Li-Ion 5124 mAh--------------------------</td>
                        </tr>
                        
                    </tbody></table>
								</textarea>
								<script>CKEDITOR.replace( 'THONGSO' );</script> 
							 </div>
							<div class="control-group">
								<label class="control-label" for="selectError3"><strong>Thông số kỹ thuật: </strong></label>
							</div>
							<!--Thông số kỹ thuật chi tiết-->
							 <div class="control-group" style="width: 83.5%;float: right;">
								<textarea id="ChiTietThongSo" name="ChiTietThongSo" cols="80" rows="10">
									<div id="panel-cau-hinh" style="display: block;">
                            <table cellpadding="0" cellspacing="0">
                                
                                <tbody><tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Màn hình</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Loại màn hình</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Màu màn hình</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Độ phân giải</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Kích thước màn hình</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Công nghệ cảm ứng</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">CPU &amp; RAM</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Chipset</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Số nhân CPU</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Chip đồ họa (GPU)</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">RAM</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Hệ điều hành</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Hệ điều hành</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Camera</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Camera sau</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Camera trước</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Quay phim</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Bộ nhớ &amp; Lưu trữ</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Bộ nhớ trong</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Thẻ nhớ ngoài</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Hỗ trợ thẻ nhớ</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">SIM</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Đàm thoại</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Kết nối</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">3G</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">4G</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Wifi</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">GPS</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Bluetooth</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">GPRS/EDGE</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Kích thước</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Kích thước</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Trọng lượng</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Trọng lượng</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">Thời gian bảo hành</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Thời gian bảo hành</td>
                            <td class="right_row_item"></td>
                        </tr>
                                
                                <tr>
                                    <td colspan="2">
                                        <div style="background-color: #f2f2f2; margin: -1px -20px; height: 40px; padding-left: 20px; line-height: 40px;"><b style="color: #ff6600;">PIN</b></div>
                                    </td>
                                </tr>
                                
                        <tr class="row_item">                                    
                            <td class="left_row_item">Dung lượng Pin</td>
                            <td class="right_row_item"></td>
                        </tr>
                        <tr class="row_item">                                    
                            <td class="left_row_item">Loại pin</td>
                            <td class="right_row_item">Li-Ion --------------------------------------------</td>
                        </tr>
                                
                            </tbody></table>
                        </div>
									</div>
								</textarea>
								<script>CKEDITOR.replace( 'ChiTietThongSo' );</script> 
							 </div>
							<div class="control-group">
								<label class="control-label" for="selectError3"><strong>Chi tiết thông số: </strong></label>
							</div>
							<div class="form-actions">
							  <input name="Them" type="submit" value="Lưu lại" class="btn btn-primary"/>
							</div>
						  </fieldset>
						</form>   
					</div>
				</div><!--/span-->

			</div><!--/row-->

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Bootstrap Metro Dashboard</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js/jquery.ui.touch-punch.js"></script>
	
		<script src="js/modernizr.js"></script>
	
		<script src="js/bootstrap.min.js"></script>
	
		<script src="js/jquery.cookie.js"></script>
	
		<script src='js/fullcalendar.min.js'></script>
	
		<script src='js/jquery.dataTables.min.js'></script>

		<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.js"></script>
	<script src="js/jquery.flot.pie.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
	
		<script src="js/jquery.chosen.min.js"></script>
	
		<script src="js/jquery.uniform.min.js"></script>
		
		<script src="js/jquery.cleditor.min.js"></script>
	
		<script src="js/jquery.noty.js"></script>
	
		<script src="js/jquery.elfinder.min.js"></script>
	
		<script src="js/jquery.raty.min.js"></script>
	
		<script src="js/jquery.iphone.toggle.js"></script>
	
		<script src="js/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js/jquery.gritter.min.js"></script>
	
		<script src="js/jquery.imagesloaded.js"></script>
	
		<script src="js/jquery.masonry.min.js"></script>
	
		<script src="js/jquery.knob.modified.js"></script>
	
		<script src="js/jquery.sparkline.min.js"></script>
	
		<script src="js/counter.js"></script>
	
		<script src="js/retina.js"></script>

		<script src="js/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>