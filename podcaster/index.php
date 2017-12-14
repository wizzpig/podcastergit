<?php
/* =======================================================================================
 
	 Shows the episodes.
	 There are two ways to show, "Standard Layout with Sidebar" (standard.php)
	  and "Full Width Boxed" (boxed.php)
	  
	 We default to using standard.
	 
 ===================================================================================== */
?>

<?php get_header(); ?>

            <?php 
            if (get_option('podcaster_layout_setting_id') == 'standard') 
            	{
    	        	get_template_part('template-parts/standard');
            	} elseif (get_option('podcaster_layout_setting_id') == 'boxed') 
            	{
	            	get_template_part('template-parts/boxed');
            	} else {
            		// default to list/standard
    	        	get_template_part('template-parts/standard');
            	}
            	
            	?>
    <div class="latest-posts">
        <style>
            .latest-posts{
            background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase-one.jpg'); ?>);
            /* Set a specific height */

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            }
        </style>
        <h2><?php echo get_theme_mod('subscribe_text', 'Subscribe'); ?></h2>
        <br />
    </div> 

    <div id="cta-section" class="container">
        <div class="row-fluid">
            <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_one', 'https://www.apple.com/itunes/podcasts/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_one' , get_template_directory_uri().'/img/Sub-ApplePodcast.png' ); ?>"></a>
            </div>
            <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_two', 'https://play.google.com/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_two' , get_template_directory_uri().'/img/Sub-GooglePlay.png' ); ?>"></a>
            </div>
            <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_three', 'https://stitcher.com/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_three' , get_template_directory_uri().'/img/Sub-Stitcher.png' ); ?>"></a>
            </div>
             <div id="sub-box-content" class="col-xs-3">
                <a href="<?php echo get_theme_mod('subscribe_image_four', 'https://overcast.fm/'); ?>" ><img src="<?php echo get_theme_mod( 'subscribe_image_four' , get_template_directory_uri().'/img/Sub-OverCastFM.png' ); ?>"></a>
            </div>
       </div>
    </div>
    <?php get_footer(); ?>
