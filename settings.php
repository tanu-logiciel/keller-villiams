<!-- Header Part -->
<?php include('header.php'); ?>

<!-- Content Part -->
<div class="container">
	<div class="content-wrap business-page-custom-wrap settings-wrap wizard-container">
		<h1 class="text-center">Settings</h1>
		<div class="settings-form-wrap">
            <h3 class="title-text">Personal Details</h3><br><br>
            <div class="row">
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<input type="text" name="first-name" placeholder="First Name" class="form-control">
            		</div>
            	</div>
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<input type="text" name="last-name" placeholder="Last Name" class="form-control">
            		</div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<input type="text" name="city" placeholder="City" class="form-control">
            		</div>
            	</div>
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<select class="form-control">
	                        <option>State</option>
	                    </select>
            		</div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<div class="form-group">
            			<input type="text" name="address" placeholder="Address" class="form-control">
            		</div>
            	</div>
            	<div class="col-md-12">
            		<div class="form-group">
            			<input type="number" name="phone" placeholder="phone" class="form-control">
            		</div>
            	</div>
            	<div class="col-md-12">
            		<button class="btn btn-lg custom-btn-style settings-btn">Update</button>
            	</div>
            </div>
        </div><br><br><br>

        <div class="settings-form-wrap">
            <h3 class="title-text">Credit Card Details</h3><br><br>
            <div class="row">
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<input type="text" name="first-name" placeholder="First Name" class="form-control">
            		</div>
            	</div>
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<input type="text" name="last-name" placeholder="Last Name" class="form-control">
            		</div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-12">
            		<div class="form-group">
            			<input type="number" name="credit" placeholder="Credit Card Number" class="form-control">
            		</div>
            	</div>
            </div>
            <div class="row">
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<div class="form-group">
	            			<select class="form-control">
		                        <option>Expiration Month</option>
		                    </select>
	            		</div>
            		</div>
            	</div>
            	<div class="col-md-6 col-sm-6">
            		<div class="form-group">
            			<select class="form-control">
	                        <option>Expiration year</option>
	                    </select>
            		</div>
            	</div>
            	<div class="col-md-12">
            		<div class="form-group">
            			<input type="text" name="cvv" placeholder="CVV" class="form-control">
            		</div>
            	</div>
            	<div class="col-md-12">
            		<button class="btn btn-lg custom-btn-style settings-btn">Add Card</button>
            	</div>
            </div>
        </div><br><br><br><br><br>
	</div>
</div>

<!-- Footer Part -->
<?php include('footer.php'); ?>