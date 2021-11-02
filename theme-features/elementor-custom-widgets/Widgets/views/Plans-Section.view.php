<section class="find-the-right-plan-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="title__section text-center">
          <?php echo $title; ?>
        </h3>
      </div>

    <?php $listIndex = 0; ?>
    <?php foreach($plans as $plan): ?>
      <div 
        class="col-md-4 col-lg-4 plan <?php show_border($listIndex); ?>"
      >
        <div class="content">
          <h4 class="title__plan">
            <?php echo $plan['plan_name']; ?>
          </h4>

          <?php echo $plan['list_of_services']; ?>

          <a href="<?php echo $plan['plan_button_url']; ?>" target="_blank" >
            <?php echo $plan['plan_button_text']; ?>
          </a>
        </div>
      </div>
      <?php $listIndex++; ?>
    <?php endforeach; ?>
    
   </div>
  </div>
</section>