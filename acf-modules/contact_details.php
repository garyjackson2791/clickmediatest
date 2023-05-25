<section class="contact-details text-white">
  <div class="container">
    <h3 class="section-title text-center"><?php the_sub_field('section_title');?></h3>
    <div class="row justify-content-center contact-methods">
      <div class="col-lg-4 col-sm-6 justify-content-between d-flex flex-column">
        <div class="contact-method d-flex align-items-center">
          <div class="icon">
            <img src="<?php vector('phone-call-1.svg'); ?>" alt="">
          </div>
          <?php $phone_number = get_sub_field('phone_number');?>
          <a href="tel:<?php echo str_replace(' ', '', $phone_number);?>">Call Us</br><?php echo $phone_number;?></a>
        </div>
        <div class="contact-method d-flex align-items-center">
          <div class="icon">
            <img src="<?php vector('mail-icon.svg'); ?>" alt="">
          </div>
          <a href="mailto:<?php the_sub_field('email_address');?>">Email Us</br><?php the_sub_field('email_address');?></a>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="contact-method d-flex align-items-start">
          <div class="icon">
            <img src="<?php vector('house-icon.svg'); ?>" alt="">
          </div>
          <div class="address">
            <?php the_sub_field('address'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>