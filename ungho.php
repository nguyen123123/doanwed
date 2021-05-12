<?php
$connect = mysqli_connect("localhost", "root", "", "dangkidb");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM uhdb 
	WHERE ID LIKE '%".$search."%'
	OR Ten LIKE '%".$search."%' 
	OR Diachi LIKE '%".$search."%' 
	OR Sdt LIKE '%".$search."%' 
	OR Vatpham LIKE '%".$search."%'
	OR Ghichu LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM uhdb ORDER BY ID";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>Họ và tên</th>
							<th>Địa chỉ</th>
							<th>Số điện thoại</th>
							<th>Vật phẩm</th>
							<th>Ghi chú</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["ID"].'</td>
				<td>'.$row["Ten"].'</td>
				<td>'.$row["Diachi"].'</td>
				<td>'.$row["Sdt"].'</td>
				<td>'.$row["Vatpham"].'</td>
				<td>'.$row["Ghichu"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>