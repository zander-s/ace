<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ace in the Hole | Multisport Event | Portland, OR</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800i,900i" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon_ace.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php require_once 'includes/header.php'; ?>

<main>
    <section>
            <div class="row">
                <!-- Carousel ================================================== -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img class="first-slide" src="images/running.jpg" alt="Image of person running">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>RUN</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore Courses</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="second-slide" src="images/cycling.jpg" alt="Image of people cycling">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>BIKE</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore Courses</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img class="third-slide" src="images/swimming.jpg" alt="Image of person swimming">
                            <div class="container">
                                <div class="carousel-caption">
                                    <h1>SWIM</h1>
                                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Explore Courses</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.carousel -->
            </div>

            <section class="home-widget-section">
                <div class="row">
                    <h2 class="home-heading">Stay Informed</h2>

                    <div class="col-md-4 home-widget">
                        <a href="https://www.accuweather.com/en/us/portland-or/97209/weather-forecast/350473" class="aw-widget-legal">
                        <!--
                        By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at https://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at https://www.accuweather.com/en/privacy.
                        -->
                        </a><div id="awcc1494298080570" class="aw-widget-current"  data-locationkey="350473" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1494298080570"></div><script type="text/javascript" src="https://oap.accuweather.com/launch.js"></script>
                    </div>

                    <div class="col-md-4 home-widget">
                        <iframe class="fb-iframe" src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2Fposts%2F259004971229898&width=500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>

                    <div class="col-md-4 home-widget">
                        <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">A new term brings new possibilities!</p>&mdash; CAS 222 (@pcccas222) <a href="https://twitter.com/pcccas222/status/850036082158649345">April 6, 2017</a></blockquote>
                        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </section>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
<!-- Custom JS -->
<script src="js/scripts.js"></script>
    
<!-- FontAwesome -->
<script src="https://use.fontawesome.com/09c029033f.js"></script>
</body>
</html>
