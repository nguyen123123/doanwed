<?php
$connect = mysqli_connect("localhost", "root", "", "dangkiDB");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM tnvdb 
	WHERE IDtnv LIKE '%".$search."%'
	OR Tentnv LIKE '%".$search."%' 
	OR Diachi LIKE '%".$search."%' 
	OR Sdt_tnv LIKE '%".$search."%' 
	OR Phuongtien LIKE '%".$search."%'
	OR Thoigian LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM tnvDB ORDER BY IDtnv";
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
							<th>Phương tiện</th>
							<th>Thời gian</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["IDtnv"].'</td>
				<td>'.$row["Tentnv"].'</td>
				<td>'.$row["Diachi"].'</td>
				<td>'.$row["Sdt_tnv"].'</td>
				<td>'.$row["Phuongtien"].'</td>
				<td>'.$row["Thoigian"].'</td>
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
