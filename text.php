
<?php
include_once('link.php');
include_once('header1.php');

require_once('connection.php');
 
?>

<!DOCTYPE html>a
<html>

<body>

	<div class="container">
		<div class="box">
			<h1>Danh sách người nhận</h1>
			<form action="#" method="post"></form>
			<table class="table table-striped" border="1px" cellspacing="0" >
			  <thead>
			    <tr align="center">
			    <th scope="col">STT</th>
			      <th scope="col">Số Sổ hộ khẩu</th>
			      <th scope="col">Họ và tên</th>
			      <th scope="col">Địa chỉ</th>
			      <th scope="col">Số điện thoại</th>
			      <th scope="col">Mức độ</th>
			  	  <th scope="col">Tình nguyện viên</th>
			  	  <th scope="col">SDT TNV</th>
			  	 
			    </tr>
			  </thead>
			  
			  	<?php 
			  	     require("connection.php");
        			$sql = "select nnDB.Sohk, nnDB.Ten1, nnDB.Diachi, nnDB.Sdt, nnDB.Mucdo, tnvDB.Ten, tnvDB.Sdt from nnDB, tnvDB group by nnDB.Sohk, nnDB.Ten1, nnDB.Diachi, nnDB.Sdt, nnDB.Mucdo, tnvDB.Ten, tnvDB.Sdt order by rand() limit 4 " ;
        			
        
        			$result = mysqli_query($conn,$sql);
        			$stt = 1;

					while ($row = mysqli_fetch_array($result)) {
                	echo "<tr align='center'>";
                    echo "<td>" . $stt . "</td>";
                    echo"<td>".$row["Sohk"]."</td>";            
                    echo"<td>".$row["Ten"]."</td>";
                    echo"<td>".$row["IDtnv"]."</td>";
                    echo"<td>".$row["Ten"]."</td>";
                    echo"<td>".$row["Mucdo"]."</td>";
                    echo"<td>".$row["Ten"]."</td>";
                    echo"<td>".$row["Sdt"]."</td>";


                    
                    // echo"<td><a href='update.php?id=".$row['Sohk']."'>Phân Công</a>
                    // </td> ";
			      	 
			      
                                 
                echo "</tr>";
                $stt++;

            }
		?>
			
							      
			   
			</table>
	
		</div>
	</div>
</body>
</html>