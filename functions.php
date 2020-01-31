<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles');
function child_theme_enqueue_styles() {

    $version = time(); //'1.0.0';

    wp_register_script( 'html5shiv', get_stylesheet_directory_uri() . '/js/html5shiv.js', array(), $version, false );
    wp_register_script( 'global-script', get_stylesheet_directory_uri() . '/js/global.js', array('jquery'), $version, true );
    wp_enqueue_script( 'html5shiv' );
    wp_enqueue_script( 'global-script' );

    wp_enqueue_style('main-style', get_stylesheet_directory_uri(). '/css/main.css', true, $version, 'all' );
}

// OVERRIDE DIVI FUNCTIONS
// function et_divi_post_meta() {
// 	$postinfo = is_single() ? et_get_option( 'divi_postinfo2' ) : et_get_option( 'divi_postinfo1' );

// 	if ( $postinfo ) :
// 		echo '<p class="post-meta">';
// 		echo et_pb_postinfo_meta( $postinfo, et_get_option( 'divi_date_format', 'M j, Y' ), esc_html__( '0 comments', 'Divi' ), esc_html__( '1 comment', 'Divi' ), '% ' . esc_html__( 'comments', 'Divi' ) );
// 		echo '</p>';
// 	endif;
// }

// if ( ! function_exists( 'et_divi_post_meta' ) ) :
//     function et_pb_postinfo_meta( $postinfo, $date_format, $comment_zero, $comment_one, $comment_more ){
//     $postinfo_meta = array();

//     if ( in_array( 'author', $postinfo ) ) {
//         $postinfo_meta[] = ' ' . esc_html__( 'by', 'et_builder' ) . ' <span class="author vcard">' . et_pb_get_the_author_posts_link() . '</span>';
//     }

//     if ( in_array( 'date', $postinfo ) ) {
//         $postinfo_meta[] = '<span class="published">' . esc_html( get_the_time( wp_unslash( $date_format ) ) ) . '</span>';
//     }

//     if ( in_array( 'categories', $postinfo ) ) {
//         $categories_list = get_the_category_list('');

//         // do not output anything if no categories retrieved
//         if ( '' !== $categories_list ) {
//             $postinfo_meta[] = $categories_list;
//         }
//     }

//     if ( in_array( 'comments', $postinfo ) ){
//         $postinfo_meta[] = et_pb_get_comments_popup_link( $comment_zero, $comment_one, $comment_more );
//     }

//    return implode( ' | ', array_filter( $postinfo_meta ) );

// }
// endif;



/**
* NOTE: Function.php need to have closing php tag
* end of functions.php
*/
?>