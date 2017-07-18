<?php
	$tenhoa = $_REQUEST['atenhoa'];
	$soluong = $_REQUEST['asoluong'];
	$giaban = $_REQUEST['agiaban'];
	$thanhtien = $soluong*$giaban;
?>
<h2>Phiếu tính tiền</h2>
<p>Tên hoa:<?php echo $tenhoa;?></p>
<p>Số lượng:<?php echo $soluong;?></p>
<p>Giá Bán:<?php echo $giaban;?></p>
<p>Thành tiền:<?php echo $thanhtien;?></p>
