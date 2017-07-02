{include file="partials/header.tpl" }
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
			{foreach $info as $k => $val}
				<tr>
					<td>{$val['TenDangNhap']}</td>
					<td>{$val['TenHienThi']}</td>
					<td>{$val['DiaChi']}</td>
					<td>{$val['SDT']}</td>
					<td>{$val['Email']}</td>
					<td>
						{if $val['Quyen'] == 0}
							user
						{else}
							Admin
						{/if}
					</td>
					<td>{$val['create_time']}</td>
					<td>
						<a href="index.php?c=home&m=edit&id={$val['id_tk']}" class="btn btn-primary">Edit</a>
						<a href="index.php?c=home&m=delete&id={$val['id_tk']}" class="btn btn-warning">Delete</a>
					</td>
				</tr>
			{/foreach}
			</tbody>
		</table>
	</div>
</div>
{include file="partials/footer.tpl" }