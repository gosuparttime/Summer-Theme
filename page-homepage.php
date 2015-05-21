<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<div id="content" class="clearfix">
  <div id="first" class="container white-bg orange-text" role="main">
    <div class="orange-bg pad-one-t"></div>
    <div class="row-fluid">
      <div class="two-thirds">
        <div id="myCarousel" class="carousel slide" > 
          
          <!-- Carousel items -->
          <div class="carousel-inner">
            <?php
			$post_num = 0;
            $query = new WP_Query(array( 'post_type' => 'slide'));
			while ( $query->have_posts() ) : $query->the_post();
			$post_num++;
			// Image swaps?
			$attachment_id = get_field('slide_image');
			$size = "summer-slide";
			$image = wp_get_attachment_image_src( $attachment_id, $size );
            echo '<div class="item ';
			if($post_num == 1){ 
				echo 'active';
			}
            echo '"><img src="';
			echo $image[0];
			echo '" alt="';
			the_title();
			echo '" />';
			?>
          </div>
          <?php endwhile; ?>
        </div>
        <!-- Carousel nav --> 
        <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a> <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a> 
        <!-- Carousel nav --> 
      </div>
      <div class="row-fluid clearfix">
        <h3 class="tagline" role="heading">
          <?php bloginfo('description'); ?>
        </h3>
      </div>
    </div>
    <div class="one-third white-bg">
      <div class="main-col" style="padding-top:1em;">
        <?php display_module('plan-for-summer', '2', false); ?>
        <?php display_module('request-a-catalog', '3', true, true); ?>
        <div class="pad-one-b hidden-desktop"></div>
      </div>
    </div>
  </div>
</div>
<!-- end #main -->
<div class="container" id="student-menu">
  <h2 class="block" style="background-color:transparent; padding-top: 1em;">What type of student are you?</h2>
  <?php main_student_nav(); ?>
</div>
<!-- end #main -->
<div id="second" class="container clearfix white-bg red-text mar-two-tb second-col">
  <div class="row-fluid clearfix pad-one-t">
    <div class="one-third">
      <div class="below list-links">
        <?php display_module('summer-sessions', '2', false); ?>
      </div>
    </div>
    <div class="one-third">
      <div class="below list-links">
        <?php display_module('summer-programs', '2', false); ?>
       </div>
    </div>
    <div class="one-third last visible-desktop" id="summer-feature">
      <div>
        <?php display_module('summer-feature', '2', false, true); ?>
      </div>
    </div>
  </div>
</div>
<!-- end #main -->
<div id="third" class="container clearfix white-bg blue-text second-col visible-desktop">
  <div class="row-fluid clearfix pad-one-t">
    <div class="half">
      <div class="pad-one-lr">
        <h3 style="border:none;">What others are saying about Summer @ Syracuse</h3>
        <div class="video-player">
          <iframe width="560" height="315" src="http://www.youtube.com/embed/-hnScGtAYZU" frameborder="0" allowfullscreen></iframe>
        </div>
        <a href="http://www.youtube.com/user/SUUniversityCollege?feature=watch" target="_blank" class="btn-blue"><i class="icon-chevron-right"></i>See More Videos</a></div>
    </div>
    <div class="one-quarter">
      <div class="pad-one-lr">
        <h4>Calendar Of Events</h4>
        <?php the_widget('SummerEventsListWidget', '', array( 'title' => 'Upcoming Events', 'limit' => '3', 'no_upcoming_events' => false)); ?>
      </div>
    </div>
    <div class="one-quarter">
      <div class="below list-links">
        <div class="row-fluid clearfix" id="important-links">
          <?php display_module('summer-links', '3', false, true); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end #main -->
</div>
<!-- end #content -->
<?php get_footer(); ?>
