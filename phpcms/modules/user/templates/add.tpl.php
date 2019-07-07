<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>add</title>
	<link rel="stylesheet" href="<?php echo BS_PATH ?>css/bootstrap.min.css">
	<script src="<?php echo BS_PATH ?>js/jquery.min.js"></script>
	<script src="<?php echo BS_PATH ?>js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">

		<hr>

		<form action="?m=user&c=user&a=insert&pc_hash=<?php echo $hash  ?>" method="post">
			<div class="form-group">
				<label for="exampleInputEmail1">用户名称</label>
				<input type="text" class="form-control" name="u_name" placeholder="用户名称">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">用户密码</label>
				<input type="password" name="u_password" class="form-control" id="exampleInputPassword1" placeholder="用户密码">
			</div>	
			<button type="submit" class="btn btn-default">提交</button>
		</form>

	</div>
</body>

</html>