<?php
/* Smarty version 3.1.30, created on 2017-03-07 13:35:04
  from "D:\xampp\htdocs\smarty1\app\templates\home\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58beb7081889d0_66133226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70dc4b196a2d33491c2194c02278ca698dcfbf54' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty1\\app\\templates\\home\\index.tpl',
      1 => 1488892535,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_58beb7081889d0_66133226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '693658beb708029082_47507208';
$_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2>Content</h2>
<div class="container">
	<div class="row">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>TenDangNhap</th>
					<th>TenHienThi</th>
					<th>DiaChi</th>
					<th>SDT</th>
					<th>Email</th>
					<th>Quyen</th>
					<th>create_time</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['info']->value, 'val', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['TenDangNhap'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['TenHienThi'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['DiaChi'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['SDT'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['Email'];?>
</td>
					<td>
						<?php if ($_smarty_tpl->tpl_vars['val']->value['Quyen'] == 0) {?>
							user
						<?php } else { ?>
							Admin
						<?php }?>
					</td>
					<td><?php echo $_smarty_tpl->tpl_vars['val']->value['create_time'];?>
</td>
					<td>
						<a href="index.php?c=home&m=edit&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id_tk'];?>
" class="btn btn-primary">Edit</a>
						<a href="index.php?c=home&m=delete&id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id_tk'];?>
" class="btn btn-warning">Delete</a>
					</td>
				</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</tbody>
		</table>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
