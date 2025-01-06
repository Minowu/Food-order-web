<?php
	session_start();
 	require_once('config/config.php'); 
?>
<?php
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = ($_POST['matkhau']);
		if($taikhoan=='' || $matkhau ==''){
			echo '<p> Xin nhập đủ</p>';
		}else{
            $sql = "SELECT * FROM tbl_admin WHERE user_name='" . $taikhoan . "' AND password='" . $matkhau . "' LIMIT 1";
			$sql_select_admin = mysqli_query($con, $sql);
            $count = mysqli_num_rows($sql_select_admin);
			$row_dangnhap = mysqli_fetch_array($sql_select_admin);
			if($count>0){
				$_SESSION['dangnhap'] = $row_dangnhap['user_name'];
				header('Location: dashboard.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập Admin</title>
	<link rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<h2 align="center">Đăng nhập Admin</h2>
	<div class="col-md-6">
	<div class="form-group">
		<form action="" method="POST">
		<label>Tài khoản</label>
		<input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
		<label>Mật khẩu</label>
		<input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>
		<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
		</form>
	</div>
	</div>
</body>
</html>