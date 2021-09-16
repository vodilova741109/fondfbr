<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */



// de
// echo '<pre>';
// echo get_template_directory().'/single-dela.php';
// echo '<pre>';
if ( isset($_COOKIE["pll_language"]) &&  pll_current_language() == 'en') { //слаг языка
	include( get_template_directory().'/footer-en.php' );
 } 
 else if ( isset($_COOKIE["pll_language"]) && pll_current_language() == 'ru' ) {
	include( get_template_directory().'/footer-ru.php' );
} else {
	include( get_template_directory().'/footer-ru.php' );
}
// else if ( isset($_COOKIE["pll_language"]) || isset($_COOKIE["pll_language"]) === "fr" ) { //слаг языка
//    include( get_template_directory().'/front-page-fr.php' );
// } 

?>

