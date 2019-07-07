<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo BS_PATH ?>css/bootstrap.min.css">
	<script src="<?php echo BS_PATH ?>js/jquery.min.js"></script>
	<script src="<?php echo BS_PATH ?>js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h3>
			<a href="?m=user&c=user&a=init&pc_hash={$hash}" class="btn btn-primary">查看用户</a>
			<a href="?m=user&c=user&a=add&pc_hash=<?php echo $hash  ?>" class="btn btn-danger">添加用户</a>
		</h3>
		<table class="table table-bordered">
			<tr>
				<td class="active">用户ID</td>
				<td class="success">用户名称</td>
				<td class="warning">用户密码</td>
				<td class="info">操作</td>
				<td class="info">操作</td>
			</tr>
			<?php 
				foreach($rows as $row){
					echo "<tr>";
					echo "<td class='active'>{$row[u_id]}</td>";
					echo "<td class='success'>{$row[u_name]}</td>";
					echo "<td class='warning'>{$row[u_password]}</td>";
					echo "<td class='info'><a href='?m=user&c=user&a=edit&id={$row[u_id]}&pc_hash={$hash}'' > 修改</a></td>";
					echo "<td class='info'><a href='?m=user&c=user&a=delete&id={$row[u_id]}&pc_hash={$hash}' > 删除</a></td>";
					echo "</tr>";
				}
			?>
		</table>
	</div>
</body>

</html>