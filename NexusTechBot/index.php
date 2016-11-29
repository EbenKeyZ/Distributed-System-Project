<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/full-slider.css" rel="stylesheet" type="text/css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    

</head>
<body>
    
    <nav class="nav navbar-inverse navbar-fixed-top">
        <div class="container">
            <img id="m_logo" width="200px" src="img/log0.png" >       
                <div class="navbar-collapse collapse">
                    <ul id="menu_bar" class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="htm/News.php">News</a></li>
                        <li><a href="htm/about_us.php">About Us</a></li>
                    </ul>
                </div>  
            </div>
    </nav>
    
    <!-- Beginning Slider -->
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!-- Set the first background image using inline CSS below. -->
                       <div class="fill" style="background-image:url('img/NexusTechBot/slider1.jpg');"></div>

                    </div>
                    <div class="item">
                        <!-- Set the second background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('img/NexusTechBot/slider2.jpg');"></div>

                    </div>
                    <div class="item">
                        <!-- Set the third background image using inline CSS below. -->
                        <div class="fill" style="background-image:url('img/NexusTechBot/slider3.jpg')"></div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="icon-prev"></span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="icon-next"></span>
                </a>
            </div>
    <!-- Ending Slider -->
    
<!--jQuery (necessary for Bootstrap's JavaScript plugins))-->
            <script src="https://ajax.googleapi.com/ajas/libs/jquery/1.11.3/jquery.min.js"></script>
            <!--Include all compiled plugins (below), or include individual files as needed-->
            <script src="js/bootstrap.min.js"></script>
</body>

</html>
