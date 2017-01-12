<div class="content">
                    <a href="">
					<?php
						include 'ketnoi.php';
						$sql = "SELECT * FROM loaitintuc where TRANGTHAI=0";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) 
						{
							while($row = $result->fetch_assoc())
							{
								if($row['MALOAI'] == $_GET['lt'] )
								{
									echo' <div id="015" class="item-bh active">
									'.$row["TENLOAI"].'
									<i class="icons nav-bh active"></i>
									</div>';
								}
								else
								{
									echo' <div id="015" class="item-bh">
									'.$row["TENLOAI"].'
									<i class="icons nav-bh"></i>
									</div>';
								}
							}
						}
					?>
                       
                    </a>
                    <input type="hidden" id="categoryId" value="012007">
</div>