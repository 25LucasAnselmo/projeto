<?php
/*
 * Index.php
 * @author: Lucas Anselmo
 * 
 */


get_header(); ?>

<section id="content">
    
    <?php if (have_posts()) : the_post(); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div id="slideshow">
                <?php do_action('slideshow_deploy', '5'); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12">
                <h1><?php echo get_the_title(); ?></h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12">
                
            </div>
        </div>
    </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>