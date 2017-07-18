<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen" />
	    <script type="text/javascript" src="jquery-2.1.1.min.js"></script>

	</head>
	<body>
		<h1>JQuery - ajax</h1>	
		
		<div class="jquery-demo-input">
		<?php 
			$tenhoa = "Hoa hồng ";
		?>
			Tên hoa: <?php echo $tenhoa;?> <br />
			Đơn giá: 200.000 VNĐ<br />			
			Số lượng hoa: 
			<input type="text" value="" id="soluong" />
			<a href="javascript:void(0)" title="" onclick="getInfo();">Mua</a>
			
					
		</div>		
		<div class="demo-ajax">Lấy dữ liệu từ ajax</div>
	</body>
</html>
<script>
	function getInfo(){
		var tenhoa = '<?php echo $tenhoa;?>';
		var don_gia = 200;
		var so_luong = $('#soluong').val();
		//strat ajax
			$.ajax({
			url: 'ajax.php',
			type: 'POST',
			cache: false,
			data: {asoluong: so_luong, atenhoa: tenhoa, agiaban: don_gia},
			success: function(respon){
				//alert(respon);
				$('.demo-ajax').html(respon);
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});
		return false;

		
		//end ajax
	}
</script>