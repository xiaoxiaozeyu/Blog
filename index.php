<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog - Home</title>

    <!-- load stylesheets -->
      <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="http://fonts.useso.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
</head>

<?php
session_start();
?>

<?php
    try{
        $dsn="mysql:host=54.250.182.87;dbname=blog";
        $db=new PDO($dsn, 'root', '13141314');
        $db->query('set names utf8');
    }catch( PDOException $e){
        echo "数据库连接失败:". $e->getMessage() . '<br>';
        exit();
    }

    $sql="select * from article order by publishtime desc";
    $result=$db -> query($sql);
?>


    <body>
       
        <div class="tm-header">
            <div class="container-fluid">
                <div class="tm-header-inner">
                    <a href="#" class="navbar-brand tm-site-name">ZeyuGuo</a>
                    
                    <!-- navbar -->
                    <nav class="navbar tm-main-nav">

                        <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar">
                            &#9776;
                        </button>
                        
                        <div class="collapse navbar-toggleable-sm" id="tmNavbar">
                            <ul class="nav navbar-nav">
                                <li class="nav-item active">
                                    <a href="index.php" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <?php
                                    if(isset($_SESSION['username']))
                                    {
                                        echo "<a href=\"publish.php\" class=\"nav-link\">Publish</a>";
                                    }
                                    else{
                                        echo "<a href=\"login.php\" class=\"nav-link\">Login</a>";}
                                    ?>
                                </li>
                                <li class="nav-item">
                                    <?php
                                    if(isset($_SESSION['username']))
                                    {
                                        echo "<a href=\"destroySession.php?action=logout\" class=\"nav-link\">Logout</a>";
                                    }
                                    ?>
                                </li>
                            </ul>                        
                        </div>
                        
                    </nav>  

                </div>                                  
            </div>            
        </div>

        <div class="tm-home-img-container">
            <img src="img/tm-home-img.jpg" alt="Image" class="hidden-lg-up img-fluid">
        </div>

        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-xs-center">
                        <h2 class="tm-gold-text tm-title">Welcome</h2>
                        <p class="tm-subtitle">The Home Page will display the latest four articles.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <?php
                            $row=$result->fetch(1);
                            ?>
                            <h4 class="tm-margin-b-20 tm-gold-text">#1 <?=$row['title'] ?></h4>
                            <p class="tm-margin-b-20"><?=mb_substr(trim($row['content']),0,36,"utf-8")  ?></p>
                            <a href="blog.php?id=<?=$row['id'] ?>" class="tm-btn text-uppercase">Detail</a>
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <?php
                            $row=$result->fetch(1);
                            ?>
                            <h4 class="tm-margin-b-20 tm-gold-text">#2 <?=$row['title'] ?></h4>
                            <p class="tm-margin-b-20"><?=mb_substr(trim($row['content']),0,36,"utf-8")  ?></p>
                            <a href="blog.php?id=<?=$row['id'] ?>" class="tm-btn text-uppercase">Read More</a>
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <?php
                            $row=$result->fetch(1);
                            ?>
                            <h4 class="tm-margin-b-20 tm-gold-text">#3 <?=$row['title'] ?></h4>
                            <p class="tm-margin-b-20"><?=mb_substr(trim($row['content']),0,36,"utf-8")  ?></p>
                            <a href="blog.php?id=<?=$row['id'] ?>" class="tm-btn text-uppercase">Detail</a>
                        </div>  

                    </div>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">

                        <div class="tm-content-box">
                            <img src="img/tm-img-310x180-4.jpg" alt="Image" class="tm-margin-b-20 img-fluid">
                            <?php
                            $row=$result->fetch(1);
                            ?>
                            <h4 class="tm-margin-b-20 tm-gold-text">#4 <?=$row['title'] ?></h4>
                            <p class="tm-margin-b-20"><?=mb_substr(trim($row['content']),0,36,"utf-8")  ?></p>
                            <a href="blog.php?id=<?=$row['id'] ?>" class="tm-btn text-uppercase">Read More</a>
                        </div>  

                    </div>
                </div> <!-- row -->



            </div>
        </section>
        
        <footer class="tm-footer">
            <div class="container-fluid">
                <div class="row">
                    




                    <!-- Add the extra clearfix for only the required viewport 
                        http://stackoverflow.com/questions/24590222/bootstrap-3-grid-with-different-height-in-each-item-is-it-solvable-using-only
                    -->



                </div>

                <div class="row">
                    <div class="col-xs-12 tm-copyright-col">
                        <p class="tm-copyright-text" align="right">Designed by ZeyuGuo&nbsp;&nbsp;&nbsp;&nbsp;Date:2019.5.20</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
        <script src="js/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
       
</body>
</html>