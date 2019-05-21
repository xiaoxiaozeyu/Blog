<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog - Publish</title>
<!--
Classic Template
http://www.cssmoban.com/tm-488-classic
-->
    <!-- load stylesheets -->
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
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link">Home</a>
                                </li>

                                <li class="nav-item">
                                    <a href="blog.php" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item active">
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

        <div class="tm-contact-img-container">
            
        </div>
<div style="margin-left: 30%">
        <section class="tm-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">

                        <section>
                            <h3 class="tm-gold-text tm-form-title">Publish My Article !</h3>
                            <p class="tm-form-description">Record every moment of your life.</p>

                            <form action="uploadArticle.php" method="post" class="tm-contact-form">
                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control" placeholder="tittle"  required/>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" id="author" name="author" class="form-control" placeholder="author" value="<?=$_SESSION['username']?>"  required/>
                                </div>
                                <div class="form-group">
                                    <textarea id="content" name="content" class="form-control" rows="6" placeholder="content" required></textarea>
                                </div>
                                <input name="publishtime" id="publishtime" type="hidden" value="<?php date_default_timezone_set('prc');echo date('Y-m-d H:i:s',time()); ?>" />
                                <button type="submit" class="tm-btn">Submit</button>
                            </form>   
                        </section>
                        

                 

                    </div>


                </div>

            </div>
        </section>

</div>
        
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
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> <!-- Tether for Bootstrap, http://stackoverflow.com/questions/34567939/how-to-fix-the-error-error-bootstrap-tooltips-require-tether-http-github-h --> 
        <script src="js/bootstrap.min.js"></script>                 <!-- Bootstrap (http://v4-alpha.getbootstrap.com/) -->
        <script>     
       
            /* Google map
            ------------------------------------------------*/
            var map = '';
            var center;

            function initialize() {
                var mapOptions = {
                    zoom: 16,
                    center: new google.maps.LatLng(13.758468,100.567481),
                    scrollwheel: false
                };
            
                map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

                google.maps.event.addDomListener(map, 'idle', function() {
                  calculateCenter();
                });
            
                google.maps.event.addDomListener(window, 'resize', function() {
                  map.setCenter(center);
                });
            }

            function calculateCenter() {
                center = map.getCenter();
            }

            function loadGoogleMap(){
                var script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
                document.body.appendChild(script);
            }
        
            // DOM is ready
            $(function() {

                // Google Map
                loadGoogleMap();
            });

        </script>             

</body>
</html>