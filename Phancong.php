
<?php
include_once('link.php');
include_once('header1.php');

require_once('connection.php');
 
?>

<!DOCTYPE html>
<html>

<body>

	<div class="container">
		<div class="box">
			<h1>Danh sách công việc</h1>

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
        			$sql = "select nnDB.Sohk, nnDB.Ten1, nnDB.Diachi, nnDB.Sdt, nnDB.Mucdo, tnvDB.Tentnv, tnvDB.Sdt_tnv from nnDB, tnvDB ,Chitiet WHERE nnDB.Sohk=Chitiet.Sohk && tnvDB.IDtnv = Chitiet.IDtnv group by nnDB.Sohk, nnDB.Ten1, nnDB.Diachi, nnDB.Sdt, nnDB.Mucdo, tnvDB.Tentnv, tnvDB.Sdt_tnv

 " ;
        			 
			  	     // $sql = "select * from tnvDB where IDtnv In(select distinct(IDtnv) from Chitiet)"
        
        			$result = mysqli_query($conn,$sql);
        			$stt = 1;

					while ($row = mysqli_fetch_array($result)) {
                	echo "<tr align='center'>";
                    echo "<td>" . $stt . "</td>";
                    echo"<td>".$row["Sohk"]."</td>";            
                    echo"<td>".$row["Ten1"]."</td>";
                    echo"<td>".$row["Diachi"]."</td>";
                    echo"<td>".$row["Sdt"]."</td>";
                    echo"<td>".$row["Mucdo"]."</td>";
                    echo"<td>".$row["Tentnv"]."</td>";
                    echo"<td>".$row["Sdt_tnv"]."</td>";


                    
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