<?php
/**
* shortcode
*/
function imageUri() {
    return AKIM_IMG_URI;
}
add_shortcode('akim_img_uri', 'imageUri');

function cssUri() {
    return AKIM_CSS_URI;
}
add_shortcode('akim_css_uri', 'cssUri');

function jsUri() {
    return AKIM_JS_URI;
}
add_shortcode('akim_js_uri', 'jsUri');

function topUri() {
    return AKIM_URI;
}
add_shortcode('akim_uri', 'topUri');


function childPage() {
    global $post;
    $html = '';
    $args = array(
        'post_parent' => get_the_ID(),
        'post_type' => 'page',
        'orderby' => 'menu_order'
    );
    $children = get_children( $args );

    foreach( $children as $child ){
        $url = get_permalink( $child->ID );
        $title = $child->post_title;
        $img = wp_get_attachment_image_src( get_post_thumbnail_id($child->ID) , 'full');        

        $html .= '<li class="panel">
                    <figure class="panel__img">
                        <img src="'.$img[0].'" alt="">
                    </figure>
                    <div class="button panel__button"><a href="'. $url.'">' .  $title. '</a></div>
                </li>';
    }

    return $html;

}
add_shortcode('childpages', 'childPage');


?>