<div class="row-fluid">
  <div class="span6">
    <?php 
    $query = new WP_Query( 
	$args = array(
		'posts_per_page' => '-1',
		'post_type' => 'class-list',
		'order' => 'ASC',
		'post_parent' => '761',
		'orderby'   => 'menu_order',
    ) );
	$parent_permalink = get_permalink('761');
	echo '<form id="page-changer">';
	echo '<select ONCHANGE="location = this.options[this.selectedIndex].value;" class="span11">';
	//echo '<option value="">Select Board Member</option>';
	$query = new WP_Query($args);
	echo '<option value="">';
		echo 'Choose Your School/College'; 
		echo '</option>';
	 while ( $query->have_posts() ) : $query->the_post();
		echo '<option value="'.$parent_permalink.''.$post->post_name.'">';
		echo the_title();
		echo '</option>';
	endwhile;
	echo '</select>';
	//echo '<input type="submit" value="Go" id="page-change" />';
	echo '</form>';
    wp_reset_postdata();      
	?>
  </div>
  <div class="span6">
    <?php
    if (get_field('add_index', 'option')):
	echo '<form id="anchor-changer">';
	echo '<select ONCHANGE="location = this.options[this.selectedIndex].value;" class="span11">';
	echo '<option value="">';
		echo 'Choose Your Department Prefix'; 
		echo '</option>';
	while(has_sub_field('add_index', 'option')):
 	$post_object = get_sub_field('add_school');
	echo '<option value="';
		echo get_the_title($post_object->ID);
		echo '" disabled>';
		echo get_the_title($post_object->ID);
		echo '</option>';
	$prefixes = get_sub_field('add_department');
	foreach ($prefixes as $prefix):
		echo '<option value="';
		echo get_permalink($post_object->ID);
		echo '#'.$prefix->slug.'">';
		echo '&#8226; ';
		echo $prefix->name;
		echo '</option>';
	endforeach;
	endwhile; 
	echo '</select>';
	//echo '<input type="submit" value="Go" id="page-change" />';
	echo '</form>';
	endif;
?>
  </div>
</div>
