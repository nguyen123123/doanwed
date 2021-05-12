
<?php
include_once('link.php');
include_once('header1.php');

require_once('connection.php');
 
?>

<!DOCTYPE html>
<html>

<body>
	 <?php 
        require("connection.php");
        $sql = "select *from tnvDB";
        
        $result = mysqli_query($conn,$sql);
    ?>
<form action="#" method="post">
	<div class="container">
		<div class="box">
			<h1>Danh Sách Tình Nguyện Viên</h1>

			<table class="table table-striped"  border="1px" cellspacing="0">
			  <thead>
			    <tr align="center">
			    <th scope="col">STT</th>
			      <th scope="col">ID</th>
			      <th scope="col">Tên</th>
			      <th scope="col">Địa chỉ</th>
			      <th scope="col">Số điện thoại</th>
			      <th scope="col">Phương tiện</th>
			      <th scope="col">Thời gian</th>
<!-- 			      <th scope="col">Hoạt động</th>
 -->			    </tr>
			  </thead>
			  
			  	<?php 
        $stt = 1;
			while ($row = mysqli_fetch_array($result)) {
                echo "<tr align='center'>";
                    echo "<td>" . $stt . "</td>";
                    echo"<td>".$row["IDtnv"]."</td>";            
                    echo"<td>".$row["Tentnv"]."</td>";
                    echo"<td>".$row["Diachi"]."</td>";
                    echo"<td>".$row["Sdt_tnv"]."</td>";
                    echo"<td>".$row["Phuongtien"]."</td>";
                    echo"<td>".$row["Thoigian"]."</td>";

                    // echo"<td><a href='Dsnn.php?id=".$row['IDtnv']."'>Phân Công</a></td> ";

                    // echo"<td><a href='Dstnv_code.php?id=".$row['IDtnv']."'>Phân Công</a></td> ";
			      	 
			      
                                 
                echo "</tr>";
                $stt++;

            }
		?>
			    
							      
			   
			</table>
	
		</div>
	</div>
</form>
</body>
</html>