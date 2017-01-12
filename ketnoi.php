<?php
                $servername="localhost";
				$username="root";
				$password="";
				$dbname="cuahangdienthoai";
				$conn= new mysqli($servername,$username,$password,$dbname);
				mysqli_set_charset($conn, 'UTF8');
				if($conn->connect_error)
				{
					die('ketnoi that bai'.$conn->connect_error);
					
				}
?>