<?php
/* Smarty version 3.1.30, created on 2017-03-07 14:21:08
  from "D:\xampp\htdocs\smarty1\app\templates\home\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bec1d4a9d534_10074474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e981f6bfbd838cf6e11ed84250da815b41f435' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty1\\app\\templates\\home\\edit.tpl',
      1 => 1488895512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_58bec1d4a9d534_10074474 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2025158bec1d491a950_70001704';
$_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container">
	<div class="row">
		<form action="index.php?c=home&m=handle&id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id_tk'];?>
" method="POST" role="form">
			<legend>Sửa thông tin tài khoản</legend>
			<div class="form-group">
				<label for="">Tên đăng nhập</label>
				<input type="text" class="form-control" id="" placeholder="Tên đăng nhập" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TenDangNhap'];?>
" name="txtUsername" />
			</div>
			<div class="form-group">
				<label for="">Tên hiển thị</label>
				<input type="text" class="form-control" id="" placeholder="Tên hiển thị" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['TenHienThi'];?>
" name="txtFullname"/>
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Số điện thoại" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['SDT'];?>
" name="txtPhone"/>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" id="" placeholder="E-Mail" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['Email'];?>
" name="txtEmail"/>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Địa chỉ" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['DiaChi'];?>
"  name="txtAddress"/>
			</div>
			<div class="form-group">
				<label for="input" class="control-label">Quyền:</label>
				<select id="input" class="form-control" required="required" name="txtRole">
					<option value="0" selected="<?php if ($_smarty_tpl->tpl_vars['info']->value['Quyen'] == 0) {?>selected<?php }?>">Admin</option>
					<option value="1" selected="<?php if ($_smarty_tpl->tpl_vars['info']->value['Quyen'] == 1) {?>selected<?php }?>">User</option>
				</select>
			</div>
			<button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
