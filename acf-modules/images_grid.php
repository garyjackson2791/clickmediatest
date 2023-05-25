<section class="images-grid">
  <div class="container">
    <div class="images">
      <?php while(have_rows('images')) : the_row(); ?>
        <div class="image">
          <img src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('image')['alt'];?>">
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>