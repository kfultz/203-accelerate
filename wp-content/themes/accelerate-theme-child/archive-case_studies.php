<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content sidebar">
  <div class="main-content" role="main">
    <?php while ( have_posts() ) : the_post();
      $services= get_field('services');
      $image_1 = get_field('image_1');
      $size = "full"; ?>

      <article class="case-study" style="display: flex;">
        <aside class="case-study-sidebar" style="width:30%;">
          <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
          <h4><?php echo $services; ?></h4>
          <?php the_excerpt(); ?>
          <p><strong><a href="<?php the_permalink();?>">View Project</a></strong></p>
        </aside>

        <div class="images" style="display: flex; flex-flow: column; justify-content: center; width:70%;">
          <a href="<?php the_permalink();?>">
          <?php if($image_1) {
            echo wp_get_attachment_image($image_1, $size);
            } ?>
          </a>
        </div>
      </article>
    <?php endwhile; // end of the loop. ?>
  </div><!-- .main-content -->
</div>

<?php get_footer(); ?>
