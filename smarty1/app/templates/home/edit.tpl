{include file="partials/header.tpl" }

<div class="container">
	<div class="row">
		<form action="index.php?c=home&m=handle&id={$info['id_tk']}" method="POST" role="form">
			<legend>Sửa thông tin tài khoản</legend>
			<div class="form-group">
				<label for="">Tên đăng nhập</label>
				<input type="text" class="form-control" id="" placeholder="Tên đăng nhập" value="{$info['TenDangNhap']}" name="txtUsername" />
			</div>
			<div class="form-group">
				<label for="">Tên hiển thị</label>
				<input type="text" class="form-control" id="" placeholder="Tên hiển thị" value="{$info['TenHienThi']}" name="txtFullname"/>
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Số điện thoại" value="{$info['SDT']}" name="txtPhone"/>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" id="" placeholder="E-Mail" value="{$info['Email']}" name="txtEmail"/>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Địa chỉ" value="{$info['DiaChi']}"  name="txtAddress"/>
			</div>
			<div class="form-group">
				<label for="input" class="control-label">Quyền:</label>
				<select id="input" class="form-control" required="required" name="txtRole">
					<option value="0" selected="{if $info['Quyen'] == 0}selected{/if}">Admin</option>
					<option value="1" selected="{if $info['Quyen'] == 1}selected{/if}">User</option>
				</select>
			</div>
			<button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
{include file="partials/footer.tpl" }