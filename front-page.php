<?php get_header();
?>
<style type="text/css">
        body{
            background-image:url('<?php echo get_theme_file_uri("/img/fondo.jpg")  ?>');
            background-size: cover;
            background-repeat: repeat-y;
            height: 100vh;
            text-align: center;
        }
    </style>
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