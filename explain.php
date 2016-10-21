<?php

/* Template Name: Explain Template */

get_header();



?>

  <link rel="import" href="<?php bloginfo('template_directory'); ?>/src/potato-explain.html">

  <potato-explain></potato-explain>






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