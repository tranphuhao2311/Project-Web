
				  <?php
					echo'<div class="row">
					<ul class="block-menu" id="divCatMenuHome112">
					<li class="item tab-phone">
					<div class="icon "><i class="icons phone"></i></div>
					<h4>ĐIỆN THOẠI</h4>
					<div class="content">
					<h5 style="padding: 10px 0 0 20px;
					font-weight: 600;
					font-size: 12px;">Hãng sản xuất</h5>
					<div class="col-xs-2">';
					require("connect.php");
					if($conn->connect_error)
					{
						die('ketnoi that bai'.$conn->connect_error);
						
					}
						echo"";
					$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=1";
					$result = $conn->query($sql);
					$sodong=$result->num_rows;
					$d=0;
					if ($sodong > 0) {
						while($row = $result->fetch_assoc())
						{
							$d++;
							echo '<h4><a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
							'.$row["TENHANGSANXUAT"].'</a></h4>';
							if($d>$sodong/2)
							{
								break;
							}
							
						}
					}	
					$result->close ();
					$conn->close();    
					echo  
					'</div>
					<div class="col-xs-2">';
				  ?>
                    <?php
					
						require("connect.php");
						if($conn->connect_error)
						{
							die('ketnoi that bai'.$conn->connect_error);
							
						}
							echo"";
						$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=1";
						$result = $conn->query($sql);
						$sodong=$result->num_rows;
						$d=0;
						if ($sodong > 0) {
							while($row = $result->fetch_assoc())
							{
								$d++;

								if($d>$sodong/2+1)
								{
								echo '<h4><a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
								'.$row["TENHANGSANXUAT"].'</a></h4>';
								}
								
							}
						}	
						$result->close ();
						$conn->close();
						echo'</div>
						</div>';
						echo '<a href="danh_muc.php?lsp=1&hsx=0"> <i class="bg-menu bg-1 icons" title="Danh mục điện thoại"></i> </a>';
						echo '</li>
						<li class="item tab-laptop">
						<div class="icon "><i class="icons laptop"></i></div>
						<h4>LAPTOP</h4>
						<div class="content">
						<div class="col-xs-2">
						<h5>Hãng sản xuất</h5>';
					?>
					 
                     <?php
					require("connect.php");
					if($conn->connect_error)
					{
						die('ketnoi that bai'.$conn->connect_error);
						
					}
						echo"";
					$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=2";
					$result = $conn->query($sql);
					$sodong=$result->num_rows;
					if ($sodong > 0) {
						while($row = $result->fetch_assoc())
						{
							echo '<h4><a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
							'.$row["TENHANGSANXUAT"].'</a></h4>';
							
							
						}
					}	
					$result->close ();
					$conn->close();
					echo '</div>
					</div>';
					echo '<a href="danh_muc.php?lsp=2&hsx=0"> <i class="bg-menu bg-2 icons" title="Danh mục laptop"></i> </a>';
					echo '</li>
					<li class="item tab-tablet">
					<div class="icon"><i class="icons tablet"></i></div>
					<h4>MÁY TÍNH BẢNG</h4>
					<div class="content">
					<div class="col-xs-2">
					<h5>Hãng sản xuất</h5>';
				  ?>
				  
                    <?php
					require("connect.php");
					if($conn->connect_error)
					{
						die('ketnoi that bai'.$conn->connect_error);
						
					}
						echo"";
					$sql = "SELECT * FROM hangsanxuat WHERE LOAISP=3";
					$result = $conn->query($sql);
					$sodong=$result->num_rows;
					if ($sodong > 0) {
						while($row = $result->fetch_assoc())
						{
							echo '<h4><a href="danh_muc.php?lsp='.$row["LOAISP"].'&hsx='.$row["MAHANGSANXUAT"].'">
							'.$row["TENHANGSANXUAT"].'</a></h4>';
							
							
						}
					}	
					$result->close ();
					$conn->close();
					echo'</div>
					</div>';
					echo '<a href="danh_muc.php?lsp=3&hsx=0"> <i class="bg-menu bg-3 icons" title="Danh mục máy tính bang"></i> </a>';
					echo'</li>
					<li class="item tab-pk">
					<div class="icon"><i class="icons pk"></i></div>
					<h4>PHỤ KIỆN</h4>
					<div class="content">
					<div class="col-xs-3">
					<h5>Phụ kiện Điện thoại</h5>
					<h4><a href="#">Thẻ nhớ</a></h4>
					<h4><a href="#">Bao da/Ốp lưng</a></h4>
					<h4><a href="#">Pin dự phòng</a></h4>
					<h4><a href="#">Tai nghe</a></h4>
					<h4><a href="#">Tấm dán</a></h4>
					<h4><a href="#">Cáp/Sạc</a></h4>
					<h4><a href="#">Loa</a></h4>
					</div>
					<div class="col-xs-3">
					<h5>Phụ kiện Laptop</h5>
					<h4><a href="#">USB</a></h4>
					<h4><a href="#">Chuột</a></h4>
					<h4><a href="#">Đế tản nhiệt</a></h4>
					<h4><a href="#">Túi đựng laptop</a></h4>
					<h4><a href="#">Ổ cứng di động</a></h4>
					<h4><a href="#">Thiết bị mạng</a></h4>
					<h4><a href="#">DCOM-3G</a></h4>
					</div>
					<div class="col-xs-3"></div>
					<div class="col-xs-3"></div>
					</div>
					<a href="#"> <i class="bg-menu bg-4 icons" title="Danh mục phụ kiện"></i> </a> </li>
					<li class="item tab-info">
					<div class="icon"><i class="icons info"></i></div>
					<h4>SIM SỐ</h4>
					<a href="#"> <i class="bg-menu bg-9 icons" title="Sim số"></i> </a> </li>
					<li class="item tab-yt">
					<div class="icon"><i class="icons yt"></i></div>
					<h4>THIẾT BỊ Y TẾ</h4>
					<a href="#"> <i class="bg-menu bg-5 icons" title="Thiết bị y tế"></i> </a> </li>
					<li class="item tab-vt">
					<div class="icon"><i class="icons vt"></i></div>
					<h4>DỊCH VỤ VIỄN THÔNG</h4>
					<a href="#"> <i class="bg-menu bg-6 icons" title="Dịch vụ viễn thông"></i> </a> </li>
					<li class="item tab-tv">
					<div class="icon"><i class="icons tv"></i></div>
					<h4>360 TIN TỨC</h4>
					<a href="#"> <i class="bg-menu bg-7 icons" title="Tin tức"></i> </a> </li>
					<li class="item tab-km">
					<div class="icon"><i class="icons km"></i></div>
					<h4>KHUYẾN MÃI</h4>
					<i class="icons sao"></i> <a href="#"> <i class="bg-menu bg-8 icons" title="Khuyễn mãi"></i> </a> </li>
					</ul>
					</div>
					</div>';
					
				  ?>
                  
				