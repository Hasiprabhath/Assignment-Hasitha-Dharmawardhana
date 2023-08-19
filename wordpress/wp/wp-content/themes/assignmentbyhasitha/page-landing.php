<?php
/**
* Template Name: Landing
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

<div id="landing"  style="background: linear-gradient(#fbf1e4, white, #fbf1e4);">

  <?php if( have_rows('section_1') ): ?>
    <?php while( have_rows('section_1') ): the_row();
    $title = get_sub_field('title');
    $image = get_sub_field('image');
    $description = get_sub_field('description');
    $link_name = get_sub_field('link_name');
    $link = get_sub_field('link');
    ?>
    <section id="section_one">
      <div class="container">
        <div class="d-flex flex-column justify-content-center text-center">
          <h1 class="fw-bold"><?php echo $title; ?></h1 class="fw-bold">

            <div class="py-3">
              <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
            </div>
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <p><?php echo $description; ?></p>
              </div>
              <div class="col-lg-2"></div>
            </div>

            <div class="py-2 d-flex justify-content-center">
              <a href="<?php echo $link; ?>" class="text-decoration-none textColor text-uppercase"><?php echo $link_name; ?><i class='far fa-arrow-alt-circle-right ms-3'></i></a>
            </div>
          </div>
        </div>
      </section>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if( have_rows('section_2') ): ?>
    <?php while( have_rows('section_2') ): the_row();
    $column_1 = get_sub_field('column_1');
    $column_2 = get_sub_field('column_2');
    $column_3 = get_sub_field('column_3');
    ?>
    <section id="section_two" class="py-5">
      <div class="container">
        <div class="row">
          <?php if( have_rows('column_1') ): ?>
            <?php while( have_rows('column_1') ): the_row();
            $row_1 = get_sub_field('row_1');
            $row_2 = get_sub_field('row_2');
            ?>
            <div class="col-lg-4 px-lg-0 d-flex flex-column justify-content-center">
              <?php if( have_rows('row_1') ): ?>
                <?php while( have_rows('row_1') ): the_row();
                $subtitle_1 = get_sub_field('subtitle_1');
                $image = get_sub_field('image');
                $description_1 = get_sub_field('description_1');
                $link_name = get_sub_field('link_name');
                ?>
                <div class="row pb-3">
                  <div class="d-flex flex-column justify-content-start">
                    <h3><?php echo $subtitle_1; ?></h3>

                    <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" width="200" height="200" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
                    
                    <p class="pt-3"><?php echo $description_1; ?></p>

                      <div class="py-2 d-flex justify-content-start">
                        <a href="#" class="text-decoration-none textColor text-uppercase"><?php echo $link_name; ?><i class='far fa-arrow-alt-circle-right ms-3'></i></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('row_2') ): ?>
                <?php while( have_rows('row_2') ): the_row();
                $subtitle_1 = get_sub_field('subtitle_1');
                $image = get_sub_field('image');
                $description_1 = get_sub_field('description_1');
                $link_name = get_sub_field('link_name');
                ?>
                <div class="row pb-3">
                  <div class="d-flex flex-column justify-content-start">
                    <h3><?php echo $subtitle_1; ?></h3>
                    <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" width="200" height="200" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
                    <p class="pt-3"><?php echo $description_1; ?></p>

                      <div class="pt-3">
                        <p class="fw-bold">Product Standars</p>
                        <div class="d-flex">
                          <div>

                          </div>
                        </div>
                      </div>

                      <div class="py-2 d-flex justify-content-start">
                        <a href="#" class="text-decoration-none textColor text-uppercase"><?php echo $link_name; ?><i class='far fa-arrow-alt-circle-right ms-3'></i></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if( have_rows('column_2') ): ?>
          <?php while( have_rows('column_2') ): the_row();
          $image = get_sub_field('image');
          ?>
          <div class="col-lg-4 px-lg-0">
             <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>


       <?php if( have_rows('column_3') ): ?>
            <?php while( have_rows('column_3') ): the_row();
            $row_1 = get_sub_field('row_1');
            $row_2 = get_sub_field('row_2');
            ?>
            <div class="col-lg-4 px-lg-0 d-flex flex-column justify-content-center">
              <?php if( have_rows('row_1') ): ?>
                <?php while( have_rows('row_1') ): the_row();
                $subtitle_1 = get_sub_field('subtitle_1');
                $image = get_sub_field('image');
                $description_1 = get_sub_field('description_1');
                $link_name = get_sub_field('link_name');
                ?>
                <div class="row pb-3">
                  <div class="d-flex flex-column justify-content-start">
                    <h3><?php echo $subtitle_1; ?></h3>

                    <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" width="200" height="200" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
                    
                    <p class="pt-3"><?php echo $description_1; ?></p>

                      <div class="py-2 d-flex justify-content-start">
                        <a href="#" class="text-decoration-none textColor text-uppercase"><?php echo $link_name; ?><i class='far fa-arrow-alt-circle-right ms-3'></i></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>

              <?php if( have_rows('row_2') ): ?>
                <?php while( have_rows('row_2') ): the_row();
                $subtitle_1 = get_sub_field('subtitle_1');
                $image_sustain = get_sub_field('image_sustain');
                $description_1 = get_sub_field('description_1');
                $link_name = get_sub_field('link_name');
                ?>
                <div class="row pb-3">
                  <div class="d-flex flex-column justify-content-start">
                    <h3><?php echo $subtitle_1; ?></h3>
                    <?php if( !empty($image_sustain) ): ?>
                <img width="200" height="200" class="img-fluid object-fit-cover" src="<?php echo $image_sustain['url']; ?>" alt="<?php echo $image_sustain['alt']; ?>" />
              <?php endif; ?>
                    <p class="pt-3"><?php echo $description_1; ?></p>

                      <div class="pt-3">
                        <p class="fw-bold">Product Standars</p>
                        <div class="d-flex">
                          <div>

                          </div>
                        </div>
                      </div>

                      <div class="py-2 d-flex justify-content-start">
                        <a href="#" class="text-decoration-none textColor text-uppercase"><?php echo $link_name; ?><i class='far fa-arrow-alt-circle-right ms-3'></i></a>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
</div>

<?php get_footer(); ?>
