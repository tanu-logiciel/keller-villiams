<!-- Header Part -->
<?php include('header.php'); ?>

<!-- Content Part -->
<div class="container">
	<div class="content-wrap business-page-custom-wrap wizard-container text-center">
		<h1>Welcome to the Business Account Manager</h1>
		<h3>Please complete steps below to add your page </h3>
		<div id="wizard-steps" class="wizard-steps">

                <!-- Information Section -->
                <h6>Informations</h6>
                <div class="wizard-inner-section">
                    <div class="row">
                    	<div class="col-sm-6">
                    		<div class="form-group">
                    			<input type="text" name="" placeholder="Name" class="form-control">
                                <div class="fields-error">
                                    <span>This field is required.</span>
                                </div>
                    		</div>
                    	</div>
                    	<div class="col-sm-6">
                    		<select class="form-control">
                    			<option>Category</option>
                    		</select>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-6">
                    		<div class="browse-option form-group">
                    			<img src="assets/images/avatar.png" alt="avatar">
                    			<p>Avatar</p>
                    		</div>
                    	</div>
                    	<div class="col-sm-6">
                    		<div class="browse-option form-group">
                    			<img src="assets/images/cover.png" alt="avatar">
                    			<p>Cover</p>
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group">
                    	<input type="text" name="" placeholder="Website" class="form-control">
                    </div>
                </div>

                <!-- About Section -->
                <h6>About</h6>
                <div class="wizard-inner-section">
                    <div class="form-group">
                    	<textarea class="form-control" rows="4" placeholder="Tell us about your page"></textarea>
                    </div>
                    <div class="form-group">
                    	<textarea class="form-control" rows="4" placeholder="Page Description"></textarea>
                    </div>
                </div>

                <!-- Location Section -->
                <h6>Location</h6>
                <div class="wizard-inner-section">
                    <div class="row">
                    	<div class="col-sm-6">
                    		<div class="form-group">
                    			<select class="form-control">
	                    			<option>Country</option>
	                    		</select>
                    		</div>
                    	</div>
                    	<div class="col-sm-6">
                    		<div class="form-group">
	                    		<select class="form-control">
	                    			<option>State</option>
	                    		</select>
	                    	</div>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-6">
                    		<div class="form-group">
                    			<input type="text" name="" placeholder="City" class="form-control">
                    		</div>
                    	</div>
                    	<div class="col-sm-6">
                    		<div class="form-group">
                    			<input type="text" name="" placeholder="Zip" class="form-control">
                    		</div>
                    	</div>
                    </div>
                    <div class="form-group">
                    	<input type="text" name="" placeholder="Address" class="form-control">
                    </div>
                    <div class="form-group">
                    	<input type="text" name="" placeholder="Phone" class="form-control">
                    </div>
                </div>
            </div>
	</div>
</div>

<!-- Footer Part -->
<?php include('footer.php'); ?>