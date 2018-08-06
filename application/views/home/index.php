<?php $this->load->view('header.php'); ?>

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
      <h2>Banquet | Lawn</h2>
      <p>Find which Banquets or Lawn are available on dates you want. You can search from a wide range of venue on specific date with also on a specific location.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('banquet'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-cutlery fa-5x" aria-hidden="true"></i>
      <h2>Catering</h2>
      <p>Finding a good catering is tough We Agree! That's why our ratings service will help you to find an excellent catering service that fit your needs.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('catering'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-car fa-5x" aria-hidden="true"></i>
      <h2>Rent a Car</h2>
      <p>Rent a car and other transportations that you need. You can find a wide range of vendors providing you luxurious and new models all in one place.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('rent_a_car'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div>
  <div class="row">
    <div class="col-lg-4">
      <i class="fa fa-credit-card fa-5x" aria-hidden="true"></i>
      <h2>Invitation Cards</h2>
      <p>A lovely invitation card makes a good impression you can browse an entire gallery of invitation cards from different vendors at home. Time saving Right?</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('cards'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-camera fa-5x" aria-hidden="true"></i>
      <h2>Photographer</h2>
      <p>View all the talented photographers and movie makers to capture your special moments with your loved ones. Get it on a competitive price.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('photographer'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <i class="fa fa-female fa-5x" aria-hidden="true"></i>
      <h2>Make Over</h2>
      <p>Who doesn't want to look good on a wedding. Find all the services that you require from different beauty parlors, hair stylers and other make over providers.</p>
      <p><a class="btn btn-secondary" href="<?php echo base_url('beauty'); ?>" role="button">View All &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->
  


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-6">
      <h2 class="featurette-heading">Claim your business. <span class="text-muted">It's absolutely free.</span></h2>
      <p class="lead">Benefits you get from Shaadi Chain are free. By signing up and updating your business details you get <span style="color:black;">more customers</span>, the official icon on your business which proves that you are actively participating and more. Your customers can give you reviews and feedback that help you improve your services.</p>
    </div>
    <div class="col-md-6">
      <img class="featurette-image img-fluid mx-auto" src="<?php echo base_url('assets/images/Claim-Your-Business.jpg'); ?>" alt="Claim Your Business">
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7 order-md-2">
      <h2 class="featurette-heading">Rank your favorite businesses. <span class="text-muted">Share your thoughts with others.</span></h2>
      <p class="lead">Help others. Share your experience, thoughts and ideas with your ranking and comments.</p>
      <p class="lead">Review your favorite businesses share your story with the community your evaluation, your thoughts or any piece of information that you like to share with others.</p>
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

<?php $this->load->view('footer.php');
