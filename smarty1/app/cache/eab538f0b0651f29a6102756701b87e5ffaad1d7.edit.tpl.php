<?php
/* Smarty version 3.1.30, created on 2017-03-07 14:22:52
  from "D:\xampp\htdocs\smarty1\app\templates\home\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bec23c722725_07007038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e981f6bfbd838cf6e11ed84250da815b41f435' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty1\\app\\templates\\home\\edit.tpl',
      1 => 1488895512,
      2 => 'file',
    ),
    '27ab82662dee323ade7ff3abac822266df0ef794' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty1\\app\\templates\\partials\\header.tpl',
      1 => 1488890631,
      2 => 'file',
    ),
    'c7bd4466b77a95e39b8f2b9eed7beaf2cd9a6bf8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty1\\app\\templates\\partials\\footer.tpl',
      1 => 1488889794,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 5,
),true)) {
function content_58bec23c722725_07007038 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo smarty</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css" type="text/css" />
	<script src="public/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="public/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-inverse nav-static-top" role="navigation">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Title</a>
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Link</a></li>
							<li><a href="#">Link</a></li>
						</ul>
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		</div>
		<div class="row">
			<div class="container">
		

<div class="container">
	<div class="row">
		<form action="index.php?c=home&m=handle&id=37" method="POST" role="form">
			<legend>Sửa thông tin tài khoản</legend>
			<div class="form-group">
				<label for="">Tên đăng nhập</label>
				<input type="text" class="form-control" id="" placeholder="Tên đăng nhập" value="admin11" name="txtUsername" />
			</div>
			<div class="form-group">
				<label for="">Tên hiển thị</label>
				<input type="text" class="form-control" id="" placeholder="Tên hiển thị" value="Lê Văn Long" name="txtFullname"/>
			</div>
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Số điện thoại" value="0969651118" name="txtPhone"/>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" id="" placeholder="E-Mail" value="vanlong121996@gmail.com" name="txtEmail"/>
			</div>
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Địa chỉ" value="Hà nội"  name="txtAddress"/>
			</div>
			<div class="form-group">
				<label for="input" class="control-label">Quyền:</label>
				<select id="input" class="form-control" required="required" name="txtRole">
					<option value="0" selected="selected">Admin</option>
					<option value="1" selected="">User</option>
				</select>
			</div>
			<button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
	</div>
		</div>
		<div class="row">
			<div class="container">
				<h2>Footer</h2>
			</div>
		</div>
	</div>
</body>
</html><?php }
}
