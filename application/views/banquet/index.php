<?php $this->load->view('header.php'); ?>
<style>body {
  min-height: 75rem;
}

.navbar {
  margin-bottom: 0;
}

.jumbotron {
  padding-top: 6rem;
  padding-bottom: 6rem;
  margin-bottom: 0;
  background-color: #fff;
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron-heading {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

.album {
  min-height: 50rem;
  padding-top: 3rem;
  padding-bottom: 3rem;
  background-color: #f7f7f7;
}

.card {
  float: left;
  width: 33.333%;
  padding: .75rem;
  margin-bottom: 2rem;
  border: 0;
}

.card > img {
  margin-bottom: .75rem;
}

.card-text {
  font-size: 85%;
}

footer {
  padding-top: 3rem;
  padding-bottom: 3rem;
}

footer p {
  margin-bottom: .25rem;
}
</style>
<div class="album text-muted">
    <div class="container">
        
        <div class="row">
          <div class="col-md-2">
            <div class="form-group">
              <label for="from">From Date</label>
              <input type="date" class="form-control" name="from" id="from">
            </div>
            <div class="form-group">
              <label for="to">To Date</label>
              <input type="date" class="form-control" name="to" id="to">
            </div>
            <div class="form-group">
              <label for="area">Select Your Area</label>
              <select class="custom-select" id="area">
              <option selected="">Select Area</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Search</button>
          </div>
          <div class="col-md-9">
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly1">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly2">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly3">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly4">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly5">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly6">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>

            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly7">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly8">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3><a href="<?php echo base_url('banquet/show/darbar'); ?>">Darbar</a></h3>
                <img src="<?php echo base_url('assets/images/banquet.jpg'); ?>" style="height:170px;" alt="Image size 356x280">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <div id="readOnly9">Rankings: </div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <button type="button" onclick="window.location='<?php echo base_url('banquet/show/darbar'); ?>';" class="btn btn-sm btn-outline-secondary">View</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Rank</button>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</div>
    <script>$(function() { $('#readOnly1').raty({ readOnly: true, score: 4 }); });</script>
    <script>$(function() { $('#readOnly2').raty({ readOnly: true, score: 5 }); });</script>
    <script>$(function() { $('#readOnly3').raty({ readOnly: true, score: 4 }); });</script>
    <script>$(function() { $('#readOnly4').raty({ readOnly: true, score: 3 }); });</script>
    <script>$(function() { $('#readOnly5').raty({ readOnly: true, score: 4 }); });</script>
    <script>$(function() { $('#readOnly6').raty({ readOnly: true, score: 2 }); });</script>
    <script>$(function() { $('#readOnly7').raty({ readOnly: true, score: 1 }); });</script>
    <script>$(function() { $('#readOnly8').raty({ readOnly: true, score: 4 }); });</script>
    <script>$(function() { $('#readOnly9').raty({ readOnly: true, score: 4 }); });</script>

<?php $this->load->view('footer.php');
