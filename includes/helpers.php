<?php

/**
 * Return partial path
 *
 * @param  $source
 */
function component($source) {
    return get_template_directory() . '/components/' . $source;
}

/**
 * Return asset image path
 *
 * @param  $source
 */
function image($source) {
    echo get_template_directory_uri() . '/library/images/' . $source;
    return;
}

/**
 * Return asset vector path
 *
 * @param  $source
 */
function vector($source) {
    echo get_template_directory_uri() . '/library/vectors/' . $source;
    return;
}

/**
 * Return url path
 *
 * @param  $segment
 */
function url($segment = null, $withParent = false) {
    if($withParent):
        echo site_url($segment);
        return;
    endif;

    echo home_url($segment);
    return;
}




/**
 * Return img data-src, src, srcset, sizes
 *
 * @param  $image_id, $image_size, $max_width
 */
function awesome_acf_responsive_image($image_id,$image_size,$max_width){

	// check the image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

		// generate the markup for the responsive image
		echo 'data-src="'.$image_src.'" src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';
        
	}
}




?>
