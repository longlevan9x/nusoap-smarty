<form action="tim_kiem.php" method="post">
  <input type="text" value="" name="keyword" id="keyword" title="keyword" class="txt_field" placeholder="Tìm kiếm hoa" />
  <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn" />
</form>

<script type="text/javascript" charset="utf-8" async defer>
$(document).ready(function() {
	$('.sub_btn').click(function() {
		var key = $.trim($('#keyword').val());
		if (key.length < 1) {
			alert("Không được để rỗng");
		}

	});
});
</script>