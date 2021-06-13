<?php
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);

function remove_attachment_dimensions( $html, $attachment_id, $size, $icon, $attr ){
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html;
}
add_filter('wp_get_attachment_image', 'remove_attachment_dimensions', 10, 5);