<section class="news-letter-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h3>
          <?php echo $title; ?>
        </h3>
        <p class="message text-center">
          <?php echo $promoText; ?>
        </p>

        <form action="" id="subscribe-form">
        
          <div class="content__input" id="content__input">
            <input id="email-subscribe" type="email" placeholder="name@email.com" name="email" >
            <div id="form-error-message" class="error-message display-none">Email field can't be empty.</div>
          </div>

          <button type="submit" id="btn-submit-form">
            <?php  echo $buttonText; ?>
          </button> 

          <div class="content__promocode display-none" id="content__promocode">
            Thanks for subscribing, your promocode is: <span id="promocode"> Create woocommerce promocode </span>
          </div>

        </form>

        <div class="info__spam">
          <span>
            <?php echo $spamMessage; ?>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>