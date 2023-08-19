<?php
/**
* Template Name: Giving Back
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

<div id="giving" style="background: linear-gradient(#fbf1e4, white, #fbf1e4);">

	<?php if( have_rows('section_1') ): ?>
    <?php while( have_rows('section_1') ): the_row();
    $main_title = get_sub_field('main_title');
    $description_1 = get_sub_field('description_1');
    $image = get_sub_field('image');
    $subtitle = get_sub_field('subtitle');
    $description_2 = get_sub_field('description_2');
    $description_3 = get_sub_field('description_3');
    ?>
	<section id="section_one">
		<div class="container">
			<div class="d-flex flex-column justify-content-center text-center">
				<h1 class="fw-bold"><?php echo $main_title; ?></h1 class="fw-bold">
					<div class="row pt-4">
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<p><?php echo $description_1; ?></p>
							</div>
							<div class="col-lg-2"></div>
						</div>
					</div>
				</div>
				<div class="pt-5">
					<?php if( !empty($image) ): ?>
                <img class="img-fluid object-fit-cover" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
              <?php endif; ?>
				</div>

				<div class="container pt-5">
					<div class="d-flex flex-column justify-content-center text-center">
						<h1 class="fw-bold"><?php echo $subtitle; ?></h1>
					</div>
					<div class="pt-4">
						<div class="row">
							<div class="col-lg-6">
								<p class="textColor"><?php echo $description_2; ?></p>
							</div>
							<div class="col-lg-6">
								<p class="textColor"><?php echo $description_3; ?></p>
							</div>
						</div>
					</div>
				</div>
			</section>
	<?php endwhile; ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
