<?php
function action_shortcode(){
	/* $date = get_field('footer_phone', 'options');
  if(empty($phone)) {
		return false;
	} */
  $img = THEME_DIR_URI.'/dist/images/poster.png';
  $video = THEME_DIR_URI.'/dist/images/webplayer.mp4';
  $link = esc_url( home_url( '/' ) ).'action/';
  $block = <<<HTML
<div id="action-block" class="z-depth-3 hide-on-med-and-down">
  <div class="action-wrapper">
    <video muted="" autoplay="" loop="" name="media" id="rz-banner-img" src="{$video}" poster="{$img}" type="video/mp4" width="400" height="300"></video>
    <div class="counter-line">
      <div class="counter-block">
        <div class="counter" id="counter" data-dateto="2021-07-28 12:20:00">
          <div data-role="days">0</div> :
          <div data-role="hours">00</div> :
          <div data-role="minutes">00</div> :
          <div data-role="seconds">00</div>
        </div>
      </div>
      <a href="{$link}">Go</a>
    </div>
  </div>
</div>
HTML;
  return $block;
}
add_shortcode( 'action_summer', 'action_shortcode' );
