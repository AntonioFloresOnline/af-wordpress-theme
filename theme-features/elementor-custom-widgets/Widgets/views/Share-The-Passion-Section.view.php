<section class="share-the-passion-section">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4">
        <h3 class="title__section">
          <?php echo $title; ?>
        </h3>

        <p class="text message">
          <?php echo $subtitle; ?>
        </p>

        <div class="navigate__shop">
          <a href="<?php echo $buttonUrl; ?>" target="_blank">
            <strong class="text-yellow"> 
              <?php echo $buttonText ?>
            </strong>
          </a>
        </div>
      </div>

      <?php echo do_shortcode('[products limit="2" columns="2" ]'); ?>

    </div>
  </div>
</section>