<?php $this->load->view('admin/header.php') ?>

<div class="container">
    <div class="row">
    <form>
    <fieldset>
        <legend>Your Business Information</legend>
        <div class="form-group">
        <label for="InputEmail">Email address</label>
        <input class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" type="email">
        </div>
        <div class="form-group">
        <label for="InputPassword">Password</label>
        <input class="form-control" id="InputPassword" placeholder="Password" type="password">
        </div>
        <div class="form-group">
        <label for="DOB">Date Of Birth</label>
        <input class="form-control" id="DOB" type="date">
        </div>
        <div class="form-group">
        <label for="Select1">Gender &emsp;</label>
        <input class="form-check-input" name="gender" id="gender1" value="m" checked type="radio"> Male &emsp;
        <input class="form-check-input" name="gender" id="gender2" value="f" type="radio"> Female
        </div>
        <div class="form-group">
        <label for="InputAddress">Address</label>
        <input class="form-control" id="InputAddress" placeholder="Enter Address" type="text">
        </div>
        <div class="form-group">
        <label for="InputArea">Area</label>
        <input class="form-control" id="InputArea" placeholder="Enter Area" type="text">
        </div>
        <div class="form-group">
        <label for="InputCity">City</label>
        <input class="form-control" id="InputCity" placeholder="Enter City" type="text">
        </div>
        <div class="form-group">
        <label for="InputContact1">Contact 1</label>
        <input class="form-control" id="InputContact1" placeholder="Enter Contact 1" type="text">
        </div>
        <div class="form-group">
        <label for="InputContact2">Contact 2</label>
        <input class="form-control" id="InputContact2" placeholder="Enter Contact 2" type="text">
        </div>
        <div class="form-group">
        <label for="InputWhatsApp">WhatsApp</label>
        <input class="form-control" id="InputWhatsApp" placeholder="Enter WhatsApp" type="text">
        </div>
        <div class="form-group">
        <label for="InputName">Name</label>
        <input class="form-control" id="InputName" placeholder="Enter Name" type="text">
        </div>
        <div class="form-group">
        <label for="InputAbout">About</label>
        <input class="form-control" id="InputAbout" placeholder="Enter About" type="text">
        </div>
        <div class="form-group">
        <label for="InputCapacity">Capacity</label>
        <input class="form-control" id="InputCapacity" placeholder="Enter Capacity" type="number">
        </div>
        <div class="form-group">
        <label for="InputPrice">Price</label>
        <input class="form-control" id="InputPrice" placeholder="Enter Price" type="number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>
    </div>
    <br>
</div>

<?php $this->load->view('admin/footer.php') ?>