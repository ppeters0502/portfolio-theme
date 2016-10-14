<?php get_header(); ?>
<section id="content" role="main">
<header class="header">
<h1 class="entry-title"><?php _e( 'Category Archives: ', 'blankslate' ); ?><?php single_cat_title(); ?></h1>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-lg-12">

                <center><h1 class="page-header">
                    <?php echo alx_site_title(); ?>
                    <small><?php bloginfo( 'description'); ?></small
>                </h1></center>

                <!-- First Blog Post -->
                <div class="row col-lg-12 about">
                    <div class="col-lg-12" style="margin-bottom:30px;">
                        <div class="bg-primary col-md-4 col-sm-offset-1">
                            <h2>
                                <a style="color:white;" href="#">1st Blog Post </a>
                            </h2>
                            <p class="lead">
                                by <a style="color:white;" href="index.php">Start Bootstrap</a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="col-sm-offset-1 col-md-4 col-sm-offset-2">
                            <img class="img-responsive" src="http://placehold.it/350X250" alt="">
                        </div>
                        <div class="col-md-5 col-sm-offset-1" style="border-radius:10px; border:1px solid #cccccc;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.orem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laboruorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laboruorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laboruorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laboru</p> 
                            <a style="margin-bottom:15px;" class="btn btn-dark" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>                   
                        </div>
                    </div>
                
                </div>
                

                

                <!-- Second Blog Post -->
                <div class="row col-lg-12">
                    <h2>
                    <a href="#">2nd Blog Post</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Start Bootstrap</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                    <hr>
                    <div class="col-md-6">
                        <img class="img-responsive" src="http://placehold.it/250X250" alt="">
                    </div>
                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
                <hr>
                <!-- Third Blog Post -->
                <div class="row col-lg-12">
                    <h2>
                        <a href="#">Blog Post Title</a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php">Start Bootstrap</a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                    <hr>
                    <div class="col-md-6">
                        <img class="img-responsive" src="http://placehold.it/250X250" alt="">
                    </div>

                    <div class="col-md-6">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>
                </div>
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>


        </div>
        <!-- /.row --> -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="./js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/menu-options.js"></script>

</body>

</html>
