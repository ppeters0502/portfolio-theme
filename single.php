<?php
/**
 * Single Post Template: Blog entry
 *
 * @package WordPress
 * @subpackage portfolio-theme
 * @since Twenty Sixteen 1.0
 */
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="container">
        <div class="row">
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">
                <!-- Blog Post -->
                <!-- Title -->
                <h1><?php the_title(); ?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php the_author(); ?></a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> <?php the_time('l, F j, Y'); ?></p>

                <hr>

                <!-- Preview Image -->
                <div class="col-md-8">
                    <?php the_post_thumbnail('port-page', array('class' => 'img-portfolio img-responsive')); ?>
                </div>

                <hr>

                <!-- Post Content -->
                <?php the_content(); ?>

                <hr>

                <!-- Blog Comments -->
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <hr>

                <!-- Comment -->
                <?php comments_template(); ?>

            </div>

            

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php get_footer(); ?>

    </div>
    <!-- /.container -->