
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- Portfolio Item Heading -->
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php the_title(); ?> |
                    <small><?php the_subtitle(); ?></small>
                </h1>
            </div>
        </div>
        <!--Portfolio content-->
         <div class="row">

            <div class="col-md-8">
                <?php the_post_thumbnail('port-page', array('class' => 'img-portfolio img-responsive')); ?>
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <?php the_content(); ?>
            </div>
 <?php endwhile; ?>
 <?php wp_reset_postdata(); ?>
        </div>
    </div>
<section  class="bg-primary">

            <div class="row text-center">
            <div class="col-lg-12">
                <h3 class="page-header">Related Projects</h3>
            </div>
            <div class="col-lg-10 col-lg-offset-1">
            	<?php 
            	$categories = get_the_category(); 
            	foreach ($categories as $category ) :
            	?>

            	<?php 
            	$args = array(
            		'numberposts' => 3,
            		'category' => $category->term_id,
            		'post__not_in' => array( $post->ID )
            		);
            	$posts = get_posts($args);
            	foreach($posts as $post) : ?>
            	<div class="col-sm-3 col-xs-6">
                	<a href="<?php the_permalink(); ?>">
                    	<?php the_post_thumbnail('port-page', array('class' => 'img-responsive portfolio-item')); ?>
                	</a>
            	</div>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            </div>
            

           

        </div>
        <!-- /.row -->

        <hr>
    </div>
 </section>
<?php endif; ?>
<?php get_footer(); ?>


