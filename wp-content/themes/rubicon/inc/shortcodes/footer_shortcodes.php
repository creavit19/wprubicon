<?php
function footer_phone_shortcode(){
	$phone = get_field('footer_phone', 'options');
  if(empty($phone)) {
		return false;
	}
  $html_phone = <<<HTML
<div class="center-align">
  $phone
</div>
HTML;
  return $html_phone;
}
add_shortcode( 'footer-phone', 'footer_phone_shortcode' );

function footer_social_shortcode(){
	$social_list = get_field('footer_social_icons', 'options');
  if(empty($social_list)) {
		return false;
	}
  $html_socials = null;
  foreach($social_list as $social_item){
    $icon_class = 'fa fa-'.$social_item['social_network_name'];
    $network_url = $social_item['network_url'];
    $html_socials .= '<li><a href="'. $network_url .'" target="_blank"><i class="'. $icon_class .'"></i></a></li>';
  }
  
  $block = <<<HTML
<div class="social-network">
  <ul class="center-align">
    {$html_socials}
  </ul>
</div>     
HTML;
  return $block;
}
add_shortcode( 'footer-social', 'footer_social_shortcode' );
