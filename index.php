<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php wp_title('|', true, 'right' ); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
   

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php get_header(); ?>
</head>


<div class="header-container">
    	<div class="video-container">
        <video preload = "true" autoplay = "autoplay" loop = "loop" volume="0" poster = "http://localhost/portfolio/wp-content/uploads/kitty.jpg" >
        <source src = "http://localhost/portfolio/wp-content/themes/portfolio-theme/video/kitty.mp4" type = "video/mp4" > 
        </video>
        <div class="col-lg-12 text-center video-headline">
        <h1>Hello, I'm Pat Peters</h1>
        <h3>I like to make things.</h3>
        </div> 
        </div><!--end of video container-->
    </div><!--end of header container-->
    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>My Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-code fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Web Development</strong>
                                </h4>
                                <p>Website building, wordpress theme development.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-crop fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Graphic Design</strong>
                                </h4>
                                <p>Website design, web graphic creation, icon and logo design.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-desktop fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Software Development</strong>
                                </h4>
                                <p>Java application development, SQL reporting, Unity game development.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-microphone fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Audio Recording/Editing</strong>
                                </h4>
                                <p>Video production, audio mastering, audio/video recording, voiceovers.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

 <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="col-sm-3">
                    <img class="img-circle img-responsive img-center" src="img/bio-pic.jpg" alt="">
                    </div>
                    <div class="col-md-9">
                    <h2>About Me</h2>
                    <p class="lead" style="text-align:justify;">Hello, my name is Patrick Peters. I am 25 years old, and live in Omaha Nebraska. I graduated from the University of Nebraska Omaha in 2013 with a Bachelors Degree in Music Performance - Technology Emphasis. I have 3 years working experience in the tech industry, and 5 years of freelance experience building websites, designing web graphics and brand icons, and producing audio and video for clients. I'm currently in Graduate School for Computer Science, and am building up my experience in software development, while working in the tech indestry.</br>Check out my <a href="#portfolio" >Professional Portfolio!</a></p>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h1>Follow my personal blog of projects!</h1>
            </br>
            <a href=# class="btn btn-dark">See my blog</a>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>My Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <img class="img-portfolio img-responsive" src="img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191857.50876102946!2d-96.22133520562633!3d41.29203211704001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87938dc8b50cfced%3A0x46424d4fae37b604!2sOmaha%2C+NE!5e0!3m2!1sen!2sus!4v1471805875862">
            <small>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191857.50876102946!2d-96.22133520562633!3d41.29203211704001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87938dc8b50cfced%3A0x46424d4fae37b604!2sOmaha%2C+NE!5e0!3m2!1sen!2sus!4v1471805875862"></a>
            </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Pat Peters</strong>
                    </h4>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (712) 308-6136</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:pspeters93@gmail.com">pspeters93@gmail.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/patrick.s.peters.3"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/Pat_Peters?lang=en"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/ppeters0502/?hl=en"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/patrick-peters-1641b99b?trk=nav_responsive_tab_profile_pic">
                            <i class="fa fa-linkedin fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Pat Peters 2016</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
