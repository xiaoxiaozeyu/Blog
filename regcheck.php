 <?php  
        session_start();
        if(isset($_POST["submit"]))
        {  
            $userame = $_POST["username"];
            $password = $_POST["password"];  
            $repassword = $_POST["repassword"];

            if(false)  
            {  
                echo "<script>alert('请确认信息完整性！'); history.go(-1);</script>";  
            }  
            else  
            {  
                if($password == $repassword)  
                {  
                    //mysql_connect("localhost","root","123");   //连接数据库  
                     try{
             $dsn='mysql:host=54.250.182.87;dbname=blog';
             $db=new PDO($dsn, 'root', '13141314');
			 $db->query('set names utf8');
            }catch( PDOException $e){
               echo "数据库连接失败:". $e->getMessage() . '<br>';
           	   exit();
		       }
            $sql = "select username from userinfo where username = '$_POST[username]'"; 
            $rs=$db->query($sql); 
            $result=$rs->fetchAll(PDO::FETCH_ASSOC);
            $num = $result; //统计执行结果影响的行数  
            if($num)    //如果已经存在该用户  
            {  
               echo "<script>alert('用户名已存在'); location.href='registrationPage.php';</script>";  
            }  
            else    //不存在当前注册用户名称  
            {    
               $sql_insert = "insert into userinfo (username,password) values('$_POST[username]','$_POST[password]')";
                        if($db->exec($sql_insert)==true)
                        {                            
                           echo "<script>alert(' 注册成功！'); location.href='login.php';</script>"; 
                        }
                        else  
                        {  
                           echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
             } 
         }
         else  
         {  
            echo "<script>alert('密码不一致！'); history.go(-1);</script>";  
         }  
   
    }
}
        else  
        {  
            echo "<script>alert('提交未成功！'); history.go(-1);</script>";  
        }  
?>  