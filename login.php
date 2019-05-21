<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>登陆</title>
<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/signin.css" rel="stylesheet" type="text/css"  />
</head>


<body class="text-center">
    <form class="form-signin" method="post" action="logincheck.php">
        <a href="index.php"><img class="mb-4" src="img/sign.jpg" alt="" width="72" height="72"></a>
      <h2>My Personal Blog !</h2>
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <div>
      <p align="left">用户名</p>
      <label for="inputEmail" class="sr-only">Username</label>
      <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required autofocus>
      </div>
      <br />
      <p align="left">密码</p>
      <div>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      </div>
      <br />
      <button class="btn btn-lg btn-info" style="width:145px" type="button" onclick="window.location.href='registrationPage.php'">注册</button>
      <button class="btn btn-lg btn-primary" style="width:145px" type="submit">登录</button>
      <p class="mt-5 mb-3 text-muted">Designed By ZeyuGuo</p>
    </form>
  </body>
</html>