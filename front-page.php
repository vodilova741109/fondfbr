<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


get_header();
?>

<?php	

// de
// echo '<pre>';
// echo get_template_directory().'/single-dela.php';
// echo '<pre>';
if ( isset($_COOKIE["pll_language"]) &&  pll_current_language() == 'en') { //слаг языка
	include( get_template_directory().'/front-page-en.php' );
 } 
 else if ( isset($_COOKIE["pll_language"]) && pll_current_language() == 'ru' ) {
	include( get_template_directory().'/front-page-ru.php' );
} else {
	include( get_template_directory().'/front-page-ru.php' );
}
// else if ( isset($_COOKIE["pll_language"]) || isset($_COOKIE["pll_language"]) === "fr" ) { //слаг языка
//    include( get_template_directory().'/front-page-fr.php' );
// } 

?>

