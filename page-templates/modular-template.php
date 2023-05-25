<?php
/*
	Template Name: Modular Template
*/
?>

<?php get_header(); ?>

  <main>

    <?php while(have_rows('sections')): the_row(); ?>
      <?php $section = get_row_layout(); ?>
      <?php get_template_part('acf-modules/'.$section); ?>
    <?php endwhile; ?>

  </main>

<?php get_footer(); ?>
