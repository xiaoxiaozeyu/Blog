<?php  
        //session_start();
        if(1)  
        {  
            $author = $_POST["author"];
            $title=$_POST['title'];
            $content = $_POST["content"];
            $publishtime = $_POST["publishtime"];
			
            //连接数据库  
              try{
             $dsn='mysql:host=54.250.182.87;dbname=blog';
             $db=new PDO($dsn, 'root', '13141314');
			 $db->query('set names utf8');
            }catch( PDOException $e){
               echo "数据库连接失败:". $e->getMessage() . '<br>';
           	   exit();
		       }
            $sql_insert = "insert into article (title,author,content,publishtime) values('$title','$author','$content','$publishtime')";
            if($db->exec($sql_insert)==true)
                        {                            
                           echo "<script>alert(' 发布成功！$publishtime'); location.href='publish.php';</script>";
                        }
                        else  
                        {  
                           echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";  
                        }  
		}else{
			echo "<script>alert('请登录系统操作！');</script>";
			echo "<script>location.href='login.php';</script>";
			}
?>  