<section class="text-and-image">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex flex-column justify-content-center">
        <?php while(have_rows('text')): the_row(); ?>
          <div class="text">
            <h3 class="section-title text-sea-blue"><?php the_sub_field('section_title');?></h3>
            <?php if($content = get_sub_field('content')): ?>
              <div class="content wysiwyg text-dark-grey">
                <?php echo $content; ?>
              </div>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
      <div class="col-md-6">
        <div class="image">
          <img src="<?php echo get_sub_field('image')['url'];?>" alt="<?php echo get_sub_field('image')['alt'];?>">
        </div>
      </div>
    </div>
  </div>
</section>