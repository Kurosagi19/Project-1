<?php
include_once('Config/connect.php');
if(isset($_POST['sbm'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($query);
    // echo $username; echo $password; echo $num;
    if($num == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header('location:?controller=user');
    } else {
        $errorr = '<div class="alert alert-danger">Some thing was wrong !</div>';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Laptop Store - Administrator</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/bootstrap-table.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Online Laptop Store - Administrator</div>
				<div class="panel-body">

					<form role="form" method="post">
						<fieldset>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username..." required>
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password..." required>
                        </div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember
								</label>
							</div>
							<button type="submit" class="btn btn-primary" name="sbm">Login</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
</body>

</html>
