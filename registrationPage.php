<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>My Personal Blog-注册界面</title>
<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/form-validation.css" rel="stylesheet" type="text/css"  />

<script>
function success()
{
	

	var username=myform.username.value;
	if (username.length <=0) {
       alert('用户名不正确！');
       username.focus();
       return false;
   }

	var password=myform.password.value;
	var repassword=myform.repassword.value;
	if (repassword!=password) {
		alert('两次密码输入不一致！');
		repassword.focus();
		return false;
		}

	}
	
</script>

</head>


<body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/sign.jpg" alt="" width="72" height="72">
        <h2>注册账户</h2>
        <p class="lead">注册成为用户，以发表文章。</p>
      </div>


        <div class="col-md-8 order-md-1">
          <form class="nneeds-validation" onsubmit="return success()" name="myform" method="post" action="regcheck.php">
            <div class="row">


            <div class="mb-3">
              <label for="username">用户名</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
              <br />
            </div>

            <div class="mb-3">
              <label for="password">密码</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
              <br />
            </div>

             <div class="mb-3">
              <label for="repassword">确认密码</label>
              <input type="password" class="form-control" id="repassword" name="repassword" placeholder="repassword" required>
              <br />
            </div>


                <div class="form-group" style="padding-left: 15px">
                    <button type="submit" class="btn btn-success btn-sm"  name="submit" style="width: 220px">注册用户</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-primary btn-sm"  onclick="window.location.href='login.php'" style="width: 220px">返回登陆</button>
                </div>
          </form>

        </div>
      </div>
 
  </body>
</html>