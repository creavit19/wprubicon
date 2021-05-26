<?php
/*
Template Name: FBI Wanted
*/

$offices = get_transient( 'fbi_offices' );
if(empty($offices)){
  $fbi_offices_page = file_get_contents("https://www.fbi.gov/contact-us/field-offices");
  preg_match_all('/(?<=<h3 class="title">\n<a href="https:\/\/www.fbi.gov\/contact-us\/field-offices\/)([a-z]+)"\>(.*)</', $fbi_offices_page, $offices_data);
  foreach ($offices_data[1] as $key => $value) {
    $offices[$key]['city'] = $offices_data[2][$key];
    $offices[$key]['id'] = $value;
  };
  set_transient( 'fbi_offices', $offices,  86400);
}

get_header(); ?>
<main>
  <div class="col s12 lime lighten-5">

  <?php 
  
  var_dump($offices);
  
  ?>


  <br>
    111111111111111111111111111111
  </div>
</main>

<?php get_footer(); ?>