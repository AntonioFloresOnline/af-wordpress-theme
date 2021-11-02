<section class="container-fluid slideshow-section">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <?php $slidesIndex = 0; ?>
    <ol class="carousel-indicators">
      <?php foreach($slides as $slide): ?>
        <li 
          data-target="#carouselExampleIndicators" 
          data-slide-to="<?php echo $slidesIndex; ?>" 
          class="<?php active_slide($slidesIndex); ?>"
        >
        </li>
        <?php $slidesIndex++; ?>
      <?php endforeach; ?>
    </ol>
    <div class="carousel-inner">
    <?php $slidesIndex = 0; ?>
      <?php foreach($slides as $slide): ?>
        <div class="carousel-item <?php active_slide($slidesIndex); ?>">
          <img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <div class="top-caption">
              <h4><?php echo $slide['top_title']; ?></h4>
              <p>
                <?php echo $slide['top_sub_title']; ?>
              </p>
            </div>
            <div class="bottom-caption">
              <h5><?php echo $slide['bottom_title']; ?></h5>
              <p>
               <?php echo $slide['bottom_sub_title']; ?>
              </p>
              <a href="<?php echo $slide['cta_url']; ?>" target="_blank"> 
                <?php echo $slide['cta_text']; ?>
              </a>
            </div>
          </div>
        </div>
        <?php $slidesIndex++; ?>
      <?php endforeach; ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

