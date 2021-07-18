<?php
get_header();

echo get_theme_page_title_block(__('Team', 'rubicon'));

$departments_data = get_terms(array(
  'taxonomy' => 'departments'
));
$locations_data = get_terms(array(
  'taxonomy' => 'locations'
));
$locations = array();
foreach($locations_data as $loc) $locations[$loc->term_id] = $loc->name;
?>

  <div class="col s12">
    <div class="team">
      <?php
      $checked = ' checked';
      foreach($departments_data as $department) {
        echo '<input type="radio" id="depart'.$department->term_id.'" name="department" value='. $department->term_id . $checked . '>';
        $checked = '';
        echo '<label for="depart'.$department->term_id.'"><div>'.$department->name.'</div></label>';
        echo '<div class="members">';
        echo '<div class="row">';

        $team_data = get_posts(array(
          'post_type' => 'team',
          'meta_key'    => 'department',
          'meta_value'  => $department->term_id,
          'numberposts' => -1,
          'suppress_filters' => false,
        ));

        foreach($team_data as $team_item) {
          
          $member_avatar = get_the_post_thumbnail_url($team_item->ID);
          if(empty($member_avatar)) $member_avatar = THEME_DIR_URI .'/assets/images/no_avatar.jpg';
          
      ?>

        <div class="col s12 m6 l4">
          <div class="member">
            <a href="<?php echo get_permalink($team_item->ID); ?>" class="member-avatar">
              <img src="<?php echo $member_avatar; ?>">
              <div class="location"><?php echo $locations[get_field('location', $team_item->ID)]; ?></div>
            </a>
            <a href="<?php echo get_permalink($team_item->ID); ?>" class="member-name"><?php echo $team_item->post_title; ?></a>
            <div class="position"><?php echo get_field('position', $team_item->ID); ?></div>
          </div>
        </div>
      <?php
        }
        echo '</div></div>';
      }
      ?>
    </div>
  </div>


<?php

get_footer();