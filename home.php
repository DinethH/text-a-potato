<?php

/* Template Name: Home Template */

get_header();



?>

  <link rel="import" href="<?php bloginfo('template_directory'); ?>/src/potato-home.html">

  <potato-home></potato-home>






  <?php

echo "<div class='container default-container'>";

if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
echo "<div>";

get_footer();
?>