<?php
/**
* The template for displaying all the pages
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package assignmentbyhasitha
*/

get_header();
?>

<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
  <div id="page-wrapper"><!-- MAIN CONTENT-->

    <main>
      <div class="container pb-5" style="padding-top: 10%;">
        <div class="row-fluid">
          <?php
          //If there are any posts
          if (have_posts() ):
            //Load posts loop
            while ( have_posts() ): the_post();
            ?>
            <div style="width: 100%;">
              <div class="container text-center">
                <div class="d-flex justify-content-center pb-5">
                  <h1 style="text-transform: uppercase;">
                    <?php the_title(); ?>
                  </h1>
                </div>
              </div>
              <div class="container text-justify">
                <?php the_content(); ?>
              </div>
            </div>
            <?php
          endwhile;
        else:
          ?>
          <p>Nothing to display.</p>
        <?php endif; ?>
      </div>
    </div>
  </main>

</div>
</div>

<?php get_footer(); ?>
