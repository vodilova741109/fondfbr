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

// de
// echo '<pre>';
// echo get_template_directory().'/single-dela.php';
// echo '<pre>';
if ( in_category( 'pisma') || in_category( 'letters-and-petitions') ) { //слаг категории
	include( get_template_directory().'/category-pisma.php' );
 } 
else if ( in_category( 'dela') || in_category( 'cases') ) { //слаг категории
   include( get_template_directory().'/category-dela.php' );
} 
else if ( in_category( 'zayavleniya' ) ||  in_category( 'terror' ) || in_category( 'statements' ) ||  in_category( 'terror-en' ) ) {
	include( get_template_directory().'/category-zayavleniya.php' );
} else{
	include( get_template_directory().'/category-all.php' );
}
?>



<?php
switch ($i) {
    case "яблоко":
        echo "i это яблоко";
        break;
    case "шоколадка":
        echo "i это шоколадка";
        break;
    case "пирог":
        echo "i это пирог";
        break;
}
?>


