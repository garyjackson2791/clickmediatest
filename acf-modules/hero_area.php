<section class="hero-area" style="background: linear-gradient(180deg, rgb(98 88 88 / 40%) 40%, rgba(0,0,0,0.1) 100%), url(<?php the_sub_field('background_image'); ?>) bottom / cover;">
  <div class="container">
    <div class="content text-center text-white">
      <h1 class="page-title"><?php the_sub_field('page_title'); ?></h1>
      <?php if($summary = get_sub_field('summary')): ?>
        <div class="summary wysiwyg">
          <?php echo $summary; ?>
        </div>
      <?php endif; ?>
      <?php if($cta_button = get_sub_field('cta_button')): ?>
        <a href="<?php echo $cta_button['url'];?>" class="cta-button btn btn-white"><?php echo $cta_button['title'];?></a>
      <?php endif; ?>
    </div>
  </div>
</section>