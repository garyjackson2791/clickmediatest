<section class="enquiry-form">
  <div class="container">
    <h3 class="section-title text-center text-sea-blue"><?php the_sub_field('section_title'); ?></h3>
    <?php if($short_summary = get_sub_field('short_summary')): ?>
      <p class="short-summary text-center text-dark-grey"><?php echo $short_summary; ?></p>
    <?php endif; ?>
    <div class="form-container">
      
    </div>
  </div>
</section>