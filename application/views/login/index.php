<?php $this->load->view('header'); ?>
<div class="logIn">
<div class="container" >
    <div class="row" style="margin-top:25px;">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding:100px 0;">
            <h1 style="text-align:center;">Log In to Shaadichain</h1>
            <form >
            <fieldset>
                <div class="form-group row">
                </div>
                <div class="form-group">
                <label for="email">Email address</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <input class="form-control" id="email" placeholder="Email" required="" type="text">
                </div>
                </div>
                <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text" style="padding: 0 15px;">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <input class="form-control" id="password" placeholder="Password" type="password">
                </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
            </form>
            <p>Don't have an account ? <a href="<?php echo base_url('login/signup'); ?>" style="color:red;">Sign Up</a></p>
        </div>
    </div>
</div>
</div>
<?php $this->load->view('footer'); ?>