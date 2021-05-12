<?php
include_once('link.php');
include_once('header1.php');
require_once('connection.php');
 
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 		<title>Webslesson Demo - Ajax Live Data Search using Jquery PHP MySql</title>
 -->		
	</head>
	<body>
		<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Danh sách người nhận</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Tìm kiếm</span>
					<input type="text" name="search_text" id="search_text" placeholder="Tìm kiếm" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
		<br />
		
		<br />
		<br />
		<br />
	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"nguoinhan.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




