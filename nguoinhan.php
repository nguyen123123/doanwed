<?php
$connect = mysqli_connect("localhost", "root", "", "dangkiDB");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM nndb 
	WHERE Sohk LIKE '%".$search."%'
	OR Ten1 LIKE '%".$search."%' 
	OR Diachi LIKE '%".$search."%' 
	OR Sdt LIKE '%".$search."%' 
	OR Mucdo LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM nndb ORDER BY Sohk";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Số Sổ hộ khẩu</th>
							<th>Họ và tên</th>
							<th>Địa chỉ</th>
							<th>Số điện thoại</th>
							<th>Mức độ</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Sohk"].'</td>
				<td>'.$row["Ten1"].'</td>
				<td>'.$row["Diachi"].'</td>
				<td>'.$row["Sdt"].'</td>
				<td>'.$row["Mucdo"].'</td>
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
