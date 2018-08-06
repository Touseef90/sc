<?php $this->load->view('header_u.php'); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="first-slide" src="<?php echo base_url('assets/images/banquet.jpg'); ?>" alt="First slide">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-left">
          <h1>Example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="second-slide" src="<?php echo base_url('assets/images/table.jpg'); ?>" alt="Second slide">
      <div class="container">
        <div class="carousel-caption d-none d-md-block">
          <h1>Another example headline.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img class="third-slide" src="<?php echo base_url('assets/images/food.jpg'); ?>" alt="Third slide">
      <div class="container">
        <div class="carousel-caption d-none d-md-block text-right">
          <h1>One more for good measure.</h1>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row">
    <div class="col-lg-4">
      <i class="fa fa-university fa-5x" aria-hidden="true"></i>
      <h2>بین قویٹ | لان</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('banquet'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-cutlery fa-5x" aria-hidden="true"></i>
      <h2>پکوان</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url(); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-car fa-5x" aria-hidden="true"></i>
      <h2>کراے پر گاری</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url(); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div>
  <div class="row">
    <div class="col-lg-4">
      <i class="fa fa-credit-card fa-5x" aria-hidden="true"></i>
      <h2>اِن ویٹیشن کارڈ</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url(); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-scissors fa-5x" aria-hidden="true"></i>
      <h2>کپڑے ڈیزاینر</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url(); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-female fa-5x" aria-hidden="true"></i>
      <h2>میک اُوّر</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url(); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-6">
      <h2 class="featurette-heading">اپنا بیزنس ریجسٹر کرواین۔ <span class="text-muted">بلکل فری۔</span></h2>
      <p class="lead">شادی چین پر حاصل تمام صحولیات بلکل فری ھیں۔ ساین اپ کرین اور دیٹیل اپڈیٹ کریں اور زِیادھ کسٹمرز کو متاوجا کریں۔ آفیشل ایکن ، کسٹمرز فیڈ بیک ، اور بھت کچ آپکو بھتر سروسز فراحم کرنے میں مدد کرگا۔</p>
    </div>
    <div class="col-md-6">
      <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url('assets/images/Claim-Your-Business.jpg'); ?>" alt="Claim Your Business">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">اپنی پسندیدھ سروس کو رینک کریں۔ <span class="text-muted">اپنے خیالات دوسروں سے شیّر کریں۔</span></h2>
      <p class="lead">دوسروں کی مدد کریں۔ شیّر کریں اپنا تجربا ، اپنی راۓ ، اپنا ایڈیا رنکینگ اور کومینٹس کے ساتھ۔</p>
      <p class="lead">اپنا ریوییو دیں ، اپنی کھانی دوسروں کے ساتھ شیّر کریں آپکا کھیال ، آپکا مشوارھ ، آپکا تجربا۔ ایسی کوئ بھی مالومات جو آپ کھنا چاھیں۔</p>
      <p class="lead">From the information given by you help others to make informed decisions. And you never know this help may comes around to you!</p>
    </div>
    <div class="col-md-5 order-md-1">
      <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url('assets/images/Likes-Comments-Ranking.jpg'); ?>" alt="Likes Comments Ranking">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">We'd love to here from you! <span class="text-muted">Give us Feedback.</span></h2>
      <p class="lead">Your needs, suggestions and ideas matters the most. Tell us which features should be added or how can we provide more better services. Please share your thoughts and concerns.</p>
      <p class="btn-danger" style="padding-left:5px;">Note: If you want us to contact you then please write your Name, Email or Contact number in the box.</p>
    </div>
    <div class="col-md-5">
    <form>
      <fieldset>
        <legend>We listen. We care. </legend>
        <div class="form-group">
          <textarea class="form-control" id="exampleTextarea" rows="6" placeholder="We do use your feedback to provide you better services"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </fieldset>
    </form>
    </div>
  </div>

  <hr class="featurette-divider">
</div>
  <!-- /END THE FEATURETTES -->

<?php $this->load->view('footer_u.php');
