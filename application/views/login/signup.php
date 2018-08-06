<?php $this->load->view('header'); ?>

<div class="container" id="wrap">
<div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding:100px 0;">
            <h1 style="text-align:center;">Sign Up to Shaadichain</h1>
            <form >
            <fieldset>
                <div class="form-group">
                <label for="name">Full Name</label>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text" style="padding: 0 15px;">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <input class="form-control" id="name" placeholder="Full Name" required="" type="text">
                </div>
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
                <div class="form-group">
                <label for="passwordc">Confirm Password</label>
                <div class="input-group">
                <div class="input-group-prepend"><span class="input-group-text" style="padding: 0 15px;">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <input class="form-control" id="passwordc" placeholder="Confirm Password" type="password">
                </div>
                </div>
                <div class="form-group">
                <label>Birth Date</label>
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                    <select name="month" class = "form-control input-lg">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                    <select name="day" class = "form-control input-lg">
                        <?php
                        for ($i=1; $i <= 31; $i++) { 
                            echo "<option value='".$i."'>$i</option>";
                        }
                        ?>
                    </select>
                    </div>
                    <div class="col-xs-4 col-md-4">
                    <select name="year" class = "form-control input-lg">
                        <?php
                        for ($j=1935; $j <= 2010; $j++) { 
                            echo "<option value='".$j."'>$j</option>";
                        }
                        ?>
                    </select>
                    </div>
                </div>
                </div>
                <div class="form-group">
                <label>Gender</label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="M" id=male /> Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="F" id=female /> Female
                </label>
                </div>
                <div class="form-group">
                <label>I am a</label>
                <label class="radio-inline">
                    <input type="radio" name="usertype" value="U" id=user /> User
                </label>
                <label class="radio-inline">
                    <input type="radio" name="usertype" value="V" id=vendor /> Vendor
                </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Create my account</button>
            </fieldset>
            </form>
        </div>
</div>            
</div>

<?php $this->load->view('footer'); ?>
