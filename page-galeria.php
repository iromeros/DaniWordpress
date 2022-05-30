<?php get_header();
?>

BIENVENIDOS A MI GALERIA a

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
        ?>
        <h1>
            <?php
        the_title();
        ?>
        </h1>
        <?php
        the_content();
	} 
} 
?>
<?php get_footer();
?>