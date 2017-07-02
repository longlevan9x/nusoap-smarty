<h2><?php echo $title ?></h2>
<!-- Begin Sản phẩm hoa -->
<?php foreach ($data['data'] as $k => $f): ?>
	<div class="product_box">
	    <a href="#"><img src="public/images/hoa/<?php echo $f->Hinh; ?>" alt="floral set 1" width="165px" height="165px" /></a>
	    <h3><?php echo $f->TenHoa; ?></h3>
	    <p class="product_price"><?php echo number_format($f->Gia); ?>đ/bó </p>
	    <p class="add_to_cart"><a href="#">Chi tiết</a> <a href="#">Mua hàng</a></p>
	</div>
<!-- End Sản phẩm hoa -->
<?php endforeach ?>
<!-- Phân trang-->
<style type="text/css" media="screen">
	
	ul.pagination li{
		display: inline-block;
		background-color: white;
        border: 1px solid;
	}
	ul.pagination li a{

	   padding: 15px;
	}
	ul.pagination li.active{
		background-color: blue;
	}
</style>
<div style="clear:both" class="div_phan_trang"><?php echo $data['paging']['html']; ?></div>