<div id="sidebar-nav" class="fluid-sidebar sidebar span4 mar-one-b-neg" role="complementary"> 
  <!-- Collapse Nav -->
  <?php summer_main_nav(); // Adjust using Menus in Wordpress Admin ?>
  <!-- close nav --> 
  <!-- Calendar Of Events -->
  <div class="hidden-phone pad-two-t clearfix">
    <div class="row">
      <div class="pad-two-b" id="events-cal"> <a class="btn-large btn-blue" data-target="#calendar" data-toggle="collapse"><i class="icon-chevron-right"></i>Calendar Of Events</a>
        <div class="collapse" id="calendar">
          <div class="pad-one mar-two-l">
            <?php the_widget('SummerEventsListWidget', '', array( 'limit' => '3', 'no_upcoming_events' => true)); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- close calendar --> 
    <!-- Important Links -->
    <div class="row">
      <div class="pad-one-b" id="important-links"> <a class="btn-large btn-blue" data-target="#links" data-toggle="collapse"><i class="icon-chevron-right"></i>Important Links</a>
        <div class="collapse" id="links">
          <div class="pad-one mar-two-l list-links"> <?php echo do_shortcode('[display-links cat="Important Links"]') ?> </div>
        </div>
      </div>
    </div>
    <!-- close links --> 
  </div>
</div>
