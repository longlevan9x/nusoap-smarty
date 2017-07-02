<?php
/* Smarty version 3.1.30, created on 2017-03-07 13:35:04
  from "D:\xampp\htdocs\smarty1\app\templates\partials\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58beb7081afae3_17346768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ab82662dee323ade7ff3abac822266df0ef794' => 
    array (
      0 => 'D:\\xampp\\htdocs\\smarty1\\app\\templates\\partials\\header.tpl',
      1 => 1488890631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58beb7081afae3_17346768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '241758beb7081abc67_81032696';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo smarty</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css" type="text/css" />
	<?php echo '<script'; ?>
 src="public/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer><?php echo '</script'; ?>
>
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
		<?php }
}
