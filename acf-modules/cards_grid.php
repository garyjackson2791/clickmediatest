<section class="cards-grid">
  <div class="container">
    <div class="cards">
      <?php while(have_rows('cards')) : the_row(); ?>
        <div class="card">
          <img src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('image')['alt'];?>">
          <div class="short-summary text-center text-dark-grey">
            <p><?php the_sub_field('short_summary');?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>