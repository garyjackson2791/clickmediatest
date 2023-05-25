<section class="testimonial-slider">
  <div class="testimonials">
    <?php while(have_rows('testimonials')) : the_row(); ?>
      <div class="single-testimonial text-center text-white" style="background: linear-gradient(rgb(0 0 0 / 19%) 0 0), url(<?php echo get_sub_field('background_image')['url'];?>) center / cover;">
        <div class="headshot d-flex justify-content-center">
          <img src="<?php echo get_sub_field('headshot_image')['url'];?>" alt="<?php echo get_sub_field('headshot_image')['alt'];?>">
        </div>
        <div class="content">
          <?php the_sub_field('quote');?>
        </div>
        <p class="name"><?php the_sub_field('name_role_company');?></p>
      </div>
    <?php endwhile; ?>
  </div>
</section>