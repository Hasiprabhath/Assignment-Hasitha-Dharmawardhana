<?php
/**
* Template Name: Product
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

<div id="product" style="background: linear-gradient(#fbf1e4, white, #fbf1e4);">

  <?php if( have_rows('section_1') ): ?>
    <?php while( have_rows('section_1') ): the_row();
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    ?>
    <section id="section_one">
      <div class="container">
        <div class="d-flex flex-column justify-content-center text-center">
          <h1 class="fw-bold"><?php echo $title; ?></h1>
          <div class="row pt-4">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <p><?php echo $description; ?></p>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php if( have_rows('section_2') ): ?>
  <?php while( have_rows('section_2') ): the_row();
  $row_1 = get_sub_field('row_1');
  $row_2 = get_sub_field('row_2');
  ?>
  <section id="section_two">
    <div class="container pt-5">
      <?php if( have_rows('row_1') ): ?>
        <?php while( have_rows('row_1') ): the_row();
        $subtitle_1 = get_sub_field('subtitle_1');
        $description = get_sub_field('description');
        $image = get_sub_field('image');
        $radio_button_value_1 = get_sub_field('radio_button_value_1');
        $radio_button_value_2 = get_sub_field('radio_button_value_2');
        $subtitle_2 = get_sub_field('subtitle_2');
        $cart_image = get_sub_field('cart_image');
        $nutritions = get_sub_field('nutritions');
        ?>
        <div class="row pb-5">
          <div class="col-lg-4">
            <h1 class="fw-bold"><?php echo $subtitle_1; ?></h1 class="fw-bold">
              <p class="text-center"><?php echo $description; ?></p>
            </div>
            <div class="col-lg-4 text-center">
               <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
              <div class="py-3">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item fw-bold mx-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label text-color" for="flexRadioDefault1">
                        <?php echo $radio_button_value_1; ?>
                      </label>
                    </div>
                  </li>
                  <li class="list-inline-item fw-bold mx-md-4">
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                      <label class="form-check-label1 text-color" for="flexRadioDefault2">
                        <?php echo $radio_button_value_2; ?>
                      </label>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="row">
                <div class="col px-md-0"></div>
                <div class="col px-md-0 " >
                  <ul class="list-inline mt-2" style="border:1px solid #80582c">
                    <li class="list-inline-item mx-md-2">
                      <span class="textColor fs-5">+</span>
                    </li>
                    <li class="list-inline-item mx-md-2">
                      <span class="textColor fs-5">01</span>

                    </li>
                    <li class="list-inline-item mx-md-2">
                      <span class="textColor fs-5">-</span>
                    </li>
                  </ul>
                </div>
                <div class="col mt-2" style="text-align: left;">
                  <?php if( !empty($cart_image) ): ?>
                <img class="img-fluid object-fit-cover" src="<?php echo $cart_image['url']; ?>" alt="<?php echo $cart_image['alt']; ?>" />
              <?php endif; ?>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <h4 class="fw-bold text-uppercase  pb-3 textColor"><?php echo $subtitle_2; ?></h4>
              <?php if( have_rows('nutritions') ): ?>
                <?php while( have_rows('nutritions') ): the_row();
                $neutrition_1 = get_sub_field('neutrition_1');
                $neutrition_2 = get_sub_field('neutrition_2');
                $neutrition_3 = get_sub_field('neutrition_3');
                $neutrition_4 = get_sub_field('neutrition_4');
                $neutrition_5 = get_sub_field('neutrition_5');
                $neutrition_6 = get_sub_field('neutrition_6');
                $neutrition_7 = get_sub_field('neutrition_7');
                $neutrition_8 = get_sub_field('neutrition_8');
                $neutrition_9 = get_sub_field('neutrition_9');
                $weight_1 = get_sub_field('weight_1');
                $weight_2 = get_sub_field('weight_2');
                $weight_3 = get_sub_field('weight_3');
                $weight_4 = get_sub_field('weight_4');
                $weight_5 = get_sub_field('weight_5');
                $weight_6 = get_sub_field('weight_6');
                $weight_7 = get_sub_field('weight_7');
                $weight_8 = get_sub_field('weight_8');
                $weight_9 = get_sub_field('weight_9');
                ?>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_1; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_1; ?></div>
                </div>
               <div class="element-container">
                  <div class="word"><?php echo $neutrition_2; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_2; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_3; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_3; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_4; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_4; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_5; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_5; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_6; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_6; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_7; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_7; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_8; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_8; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_9; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_9; ?></div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

     <?php if( have_rows('row_2') ): ?>
        <?php while( have_rows('row_2') ): the_row();
        $subtitle_1 = get_sub_field('subtitle_1');
        $description = get_sub_field('description');
        $image = get_sub_field('image');
        $radio_button_value_1 = get_sub_field('radio_button_value_1');
        $radio_button_value_2 = get_sub_field('radio_button_value_2');
        $subtitle_2 = get_sub_field('subtitle_2');
         $button_name = get_sub_field('button_name');
        $nutritions = get_sub_field('nutritions');
        ?>
        <div class="row pb-5">
          <div class="col-lg-4">
            <h1 class="fw-bold"><?php echo $subtitle_1; ?></h1 class="fw-bold">
              <p class="text-center"><?php echo $description; ?></p>
            </div>
            <div class="col-lg-4 text-center">
               <?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>

               <div class="py-3">
              <a href="#" class="btn primary-button text-decoration-none text-white"><?php echo $button_name; ?></a>
            </div>
            </div>
            <div class="col-lg-4">
              <h4 class="fw-bold text-uppercase  pb-3 textColor"><?php echo $subtitle_2; ?></h4>
              <?php if( have_rows('nutritions') ): ?>
                <?php while( have_rows('nutritions') ): the_row();
                $neutrition_1 = get_sub_field('neutrition_1');
                $neutrition_2 = get_sub_field('neutrition_2');
                $neutrition_3 = get_sub_field('neutrition_3');
                $neutrition_4 = get_sub_field('neutrition_4');
                $neutrition_5 = get_sub_field('neutrition_5');
                $neutrition_6 = get_sub_field('neutrition_6');
                $neutrition_7 = get_sub_field('neutrition_7');
                $neutrition_8 = get_sub_field('neutrition_8');
                $neutrition_9 = get_sub_field('neutrition_9');
                $weight_1 = get_sub_field('weight_1');
                $weight_2 = get_sub_field('weight_2');
                $weight_3 = get_sub_field('weight_3');
                $weight_4 = get_sub_field('weight_4');
                $weight_5 = get_sub_field('weight_5');
                $weight_6 = get_sub_field('weight_6');
                $weight_7 = get_sub_field('weight_7');
                $weight_8 = get_sub_field('weight_8');
                $weight_9 = get_sub_field('weight_9');
                ?>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_1; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_1; ?></div>
                </div>
               <div class="element-container">
                  <div class="word"><?php echo $neutrition_2; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_2; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_3; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_3; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_4; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_4; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_5; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_5; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_6; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_6; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_7; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_7; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_8; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_8; ?></div>
                </div>
                <div class="element-container">
                  <div class="word"><?php echo $neutrition_9; ?></div>
                  <div class="line"></div>
                  <div class="word"><?php echo $weight_9; ?></div>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

  </section>
<?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>
