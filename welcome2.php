<!--
Into this file, we create a layout for welcome page.
-->

<?php
include_once('link.php');
include_once('header.php');
require_once('connection.php');



?>

<div id="contener">
	
	
	<div id="content" style="width: 100%; height: auto;  " >
		<form style="width: 100%">
			<table>
				<tr>
					<td style="width: 60%">
						<img  id="slider" src="TamThoi/Mi-Tom.jpg" style="width: 100%; height: 400px">
						 	
					</td>
					<td style="width: 40%">
						<h1 style="color: red ; text-align: center;" >Câu truyện cứu trợ</h1>
						<p style="text-align:center;margin-left: 20px ">Những ngày qua, Miền Trung đang phải chịu những trận lũ lớn nhất từ trước đến nay. Mọi sự giúp đỡ, đóng góp cứu trợ đồng bào bị lũ lụt lúc này đều rất đáng quý và cần thiết.
						</p>
						<p style="text-align:center;margin-left: 20px ">Trên thực tế, có nhiều nhu yếu phẩm khác nhau được gửi đến hỗ trợ người dân vùng lũ, nhưng chủ yếu vẫn là những thùng mì ăn liền. Vấn đề này nổ ra tranh cãi, nên hay không việc cứu trợ bằng mì tôm, loại thực phẩm khó đun nấu trong điều kiện nước ngập, mất điện.
						</p>
						<br>
						<p style="text-align:center;margin-left: 20px "><a href="https://laodong.vn/suc-khoe/tranh-cai-ve-cuu-tro-lu-lut-bang-mi-tom-chuyen-gia-dinh-duong-noi-cuu-doi-la-quan-trong-847170.ldo">Xem thêm</a></p>
					
					</td>
				</tr>
			</table>
		</form>	
		<div><img src="ha.png"></div>
		<div id="abc" style="width: 100%; height: 800px; margin-left: 50px; margin-top: 50px;">
			<div style="width: 45%; float: left;">
	            <div id="sk1" style="height: 150px;">
	            	<img src="https://img.nhandan.com.vn/Files/Images/2021/02/11/namtramy4-1613037062079.jpg" style="width: 40%;float: left;padding-right: 10px;">
	                
	                <a href="#" style="text-decoration: none;"><H3>Xuân ấm trên vùng bão lũ</H3></a>
	            </div>
	            <div id="sk2" style="height: 150px;">
	            	<img src="https://img.nhandan.com.vn/Files/Images/2020/12/21/oxfamhotro4tinhmientrung-1608509174041.jpg" style="width: 40%;float: left;padding-right: 10px;">
	                
	                <a href="#" style="text-decoration: none;"><H3>Khởi động dự án gần 1 triệu đô-la hỗ trợ người dân ở bốn tỉnh miền trung</H3></a>
	            </div>
	            <div id="sk3" style="height: 150px;">
	            	<img src="https://img.nhandan.com.vn/Files/Images/2020/12/08/VDH-1607434489994.jpg" style="width: 40%;float: left;padding-right: 10px;">
	                
	                <a href="#" style="text-decoration: none;"><H3>Hà Nội tặng 91 tỷ đồng hỗ trợ các tỉnh khắc phục hậu quả bão lũ</H3></a>
	            </div>
	            <div id="sk4" style="height: 150px;">
	            	<img src="https://img.nhandan.com.vn/Files/Images/2020/12/07/unfpa-1607341810706.jpg" style="width: 40%;float: left;padding-right: 10px;">
	                
	                <a href="#"  style="text-decoration: none;"><H3>Thêm 800 nghìn USD giúp phụ nữ, trẻ em gái bị lũ lụt ảnh hưởng ở miền trung</H3></a>
	            </div>
	        </div>
	        <div style="width: 45%; float: left; margin: 50px;">
	        	<iframe width="560" height="315" src="https://www.youtube.com/embed/3YbSSZmBYHs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        	<iframe width="560" height="315" src="https://www.youtube.com/embed/H1ntv90tsqo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	        </div>
	    </div>
	
	</div>
	<div id="footer" style="width: 100%; height: 200px; background: #0099FF; ">
			    <div id="logofooter" style="width: 30%; float: left; margin: 30px;">     
			            <img style="width: 25%;" src="https://balotuixachkity.vn/upload/02f10270bceb2e1a8e6ac8580ba26816.jpg" alt="logo-footer">
				</div>
				<div style=" width: 50%; float: left;">
					<h3>THÔNG TIN LIÊN HỆ</h3>
					<p>Địa chỉ: 534/7 Núi Thành, Hải Châu, Đà Nẵng</p>
					<p>Hotline: 0395121517 - 0702645043 - 0949213792</p>
					<p>Email: ngocha17.1999@gmail.com</p>
				</div>
	</div>	
</div>

	<script>
    var images = [
       "https://file1.qdnd.vn/data/images/0/2020/10/22/thuthuytv/03.jpg",
        "https://photo-cms-plo.zadn.vn/w653/Uploaded/2021/bpivpuiv/2020_10_18/quangtri_gcyh_thumb.jpg",
        "https://cdnimg.vietnamplus.vn/uploaded/bojoka/2020_07_13/ttxvn_tqngaplut.jpg",
        "https://photo-baomoi.zadn.vn/w700_r1/2020_10_20_281_36760415/b8ef51c4aa8743d91a96.jpg",
        "https://photo-cms-sggp.zadn.vn/w580/Uploaded/2021/dudbexqdre/2020_10_14/baosggptang-qua_ljvm.jpg",
    ];
    var num = 0;

    function next() {
        var slider = document.getElementById("slider");
        num++;
        if(num >= images.length) {
            num = 0;
        }
        slider.src = images[num];
    }

    function prev() {
        var slider = document.getElementById("slider");
        num--;
        if(num < 0) {
            num = images.length-1;
        }
        slider.src = images[num];
    }
    setInterval(function(){
        next()
    },2000);
</script>

</div>
