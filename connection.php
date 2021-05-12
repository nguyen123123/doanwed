<!--
in this file we write code for connection with database.
-->
<?php
$conn = mysqli_connect("localhost","root","","dangkiDB");

if(!$conn)
{
	echo "Database connection faild...";
}

$IDtnv = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["IDtnv"])) { $IDtnv = $_POST['IDtnv']; }

$sql = "INSERT INTO Chitiet  (IDtnv)
    VALUES ('$IDtnv')";

    if (mysqli_query($conn, $sql)) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>