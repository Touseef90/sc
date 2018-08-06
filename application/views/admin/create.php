<?php $this->load->view('admin/header.php'); ?>
<div class="container">
    <form>
    <fieldset>
        <legend>Manage Your Details</legend>
        <div class="form-group">
        <label for="Select1">Select Your Business Type</label>
        <select class="form-control" id="Select1">
            <option>Banquet/Lawn</option>
            <option>Catering</option>
            <option>Rent a Car</option>
            <option>Invitation Cards</option>
            <option>Photographer</option>
            <option>Make Over</option>
        </select>
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
        <label for="InputContact1">Contact1</label>
        <input class="form-control" id="InputContact1" placeholder="Enter Contact1" type="text">
        </div>
        <div class="form-group">
        <label for="InputContact2">Contact2</label>
        <input class="form-control" id="InputContact2" placeholder="Enter Contact2" type="text">
        </div>
        <div class="form-group">
        <label for="InputWApp">WhatsApp</label>
        <input class="form-control" id="InputWApp" placeholder="Enter WhatsApp" type="text">
        </div>
        <div class="form-group">
        <label for="InputBName">Business Name</label>
        <input class="form-control" id="InputBName" placeholder="Enter Business Name" type="text">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>
    <br><br>
</div>