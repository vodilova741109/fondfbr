<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Fondfbr
 */

get_header();
?>

<?php
// echo '<pre>';
// echo get_template_directory().'/single-dela.php';
// echo '<pre>';

if ( in_category( 'dela' ) ||  in_category( 'cases' ) ) { //слаг категории
   include( get_template_directory().'/single-dela.php' );
} else if ( in_category( 'repression'  ) || in_category( 'facts-of-repression'  )) {
	include( get_template_directory().'/single-repression.php' );
} else{
	include( get_template_directory().'/single-post1.php' );
}
?>


