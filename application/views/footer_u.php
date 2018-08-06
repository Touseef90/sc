</main>
  <!-- FOOTER -->
  <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
        <img src="http://localhost/shaadichain/assets/images/LOGO.png" alt="">
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Vendors</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">بین قویٹ | لان</a></li>
            <li><a class="text-muted" href="#">پکوان</a></li>
            <li><a class="text-muted" href="#">کراے پر گاری</a></li>
            <li><a class="text-muted" href="#">اِن ویٹیشن کارڈ</a></li>
            <li><a class="text-muted" href="#">کپڑے ڈیزاینر</a></li>
            <li><a class="text-muted" href="#">میک اُوّر</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Give Review</a></li>
            <li><a class="text-muted" href="#">Offers</a></li>
            <li><a class="text-muted" href="#">Advance Search</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Information</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">About Us</a></li>
            <li><a class="text-muted" href="#">Contact Us</a></li>
            <li><a class="text-muted" href="#">Blog</a></li>
            <li><a class="text-muted" href="#">Site Map</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Get Social</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Follow us on Twitter</a></li>
            <li><a class="text-muted" href="#">Like us on Facebook</a></li>
            <li><a class="text-muted" href="#">Subscribe us on Youtube</a></li>
            <li><a class="text-muted" href="#">Follow us on Instagram</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script>
    function myMap() {
      var mapCanvas = document.getElementById("map");
      var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.2), zoom: 10
      };
      var map = new google.maps.Map(mapCanvas, mapOptions);
    }
    </script>
    <script>$.fn.raty.defaults.path = '<?php echo base_url('assets/lib/images'); ?>';</script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script> -->
  </body>
</html>
