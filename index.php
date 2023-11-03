<?php

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container">
      <div class="row">
        <div class="col">
        <?php
          if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) :
              ?>
              <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
              </header>
              <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              

            endwhile;

            the_posts_navigation();

          else :

          echo "No Post Found";

          endif;
          ?>
        </div>
      </div>
    </div>

	</main>

<?php

get_footer();
