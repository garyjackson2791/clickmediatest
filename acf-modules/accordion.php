<section class="accordion text-white">
  <div class="container">
    <h3 class="section-title text-center"><?php the_sub_field('section_title');?></h3>
    <?php $topics = get_sub_field('topics'); ?>
    <div class="accordion-container" id="topic-accordion">
      <?php $count = 1; ?>
      <?php foreach($topics as $topic): ?>
        <div class="topic">
          <div class="question" id="question-<?php echo $count; ?>" data-bs-toggle="collapse" data-bs-target="#answer-<?php echo $count; ?>" aria-expanded="false<?php /* if($count == 0){ ?>true<?php } else { ?>false<?php } */ ?>" aria-controls="answer-<?php echo $count; ?>">
            <?php echo $topic['question']; ?>
          </div>
          <div id="answer-<?php echo $count; ?>" class="answer accordion-collapse collapse<?php /* if($count == 0){ ?> show<?php } */?>" aria-labelledby="question-<?php echo $count; ?>" data-bs-parent="#topic-accordion">
            <div class="wysiwyg">
              <?php echo $topic['answer']; ?>
            </div>  
          </div>
        </div>
      <?php $count++; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>