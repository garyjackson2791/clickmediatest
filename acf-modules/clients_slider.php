<section class="clients-slider">
  <div class="container">
    <h3 class="section-title text-center text-sea-blue"><?php the_sub_field('section_title');?></h3>
    <div class="clients">
      <?php while(have_rows('clients')) : the_row(); ?>
        <?php $link = get_sub_field('link') ?>
        <div class="single-client">
          <?php if($link): ?>
            <a href="<?php echo $link['url'];?>" target="_blank">
          <?php endif; ?>
            <img src="<?php echo get_sub_field('client_logo')['url'];?>" alt="<?php echo get_sub_field('client_logo')['alt'];?>">
          <?php if($link): ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>