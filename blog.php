<?php
/**
 * Template Name: Blog Page
 *
 * @package WordPress
 * @subpackage blankslate
 * @since Twenty Fourteen 1.0
 */
?>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php get_header(); ?>

<section class="portfolio">
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-lg-12">

                <center><h1 class="page-header">
                    Pat's Blog of Projects
                </h1></center>
                <?php query_posts('cat=3');?>
                <?php if(have_posts()): while(have_posts()) : the_post();; ?>
                <!-- Blog Post -->
                <div class="row col-lg-12 about">
                    <div class="col-lg-12" style="margin-bottom:30px;">
                        <div class="row">
                        <div class="bg-primary col-md-12">
                            <h2>
                                <a style="color:white;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="lead">
                                by <a style="color:white;" href="index.php"><?php the_author(); ?></a>
                            </p>
                            <p><span class="glyphicon glyphicon-time"></span><?php the_time('F jS, Y') ?></p>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-12">
                        
                        <div class="col-sm-offset-1 col-md-4 col-sm-offset-2">
                            <?php the_post_thumbnail('port-page', array('class' => 'img-responsive')); ?>
                        </div>
                        
                        <div class="col-md-5 col-sm-offset-1" style="border-radius:10px; border:1px solid #cccccc; background-color:white;">
                            <p><?php the_excerpt() ?></p> 
                            <a style="margin-bottom:15px;" class="btn btn-dark" href="<?php the_permalink(); ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>                   
                        </div>
                    </div>
                
                </div>
                <?php endwhile; ?>
            <?php endif; ?>

                <hr>
               
        </div>
        <!-- /.row -->

        <hr>
</section>
        <!-- Footer -->
        <?php get_footer();?>