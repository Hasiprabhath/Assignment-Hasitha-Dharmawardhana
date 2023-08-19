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
* @package assignmentbyhasitha
*/

get_header();
?>

<div class="content-area">
  <main>
    <div class="container">
      <div class="row">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
          <div class="row">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
              <div>
                <h1><?php the_title(); ?></h1>
              </div>
                <p><?php the_content(__('(more...)')); ?></p>
              </div>
            <?php endwhile; else: ?>
              <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>

<?php get_footer(); ?>
