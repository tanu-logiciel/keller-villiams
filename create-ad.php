<!-- Header Part -->
<?php include('header.php'); ?>

<!-- Content Part -->
<div class="container">
	<div class="content-wrap business-page-custom-wrap create-ad wizard-container text-center">
		<h1>Here you can create your Facebook Campaign</h1>
		<h3>Fill the information below to create your first ad</h3>
		<div class="row text-left">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Campaign Type</label>
					<div class="checkbox-col">
						<div class="form-inline">
						    <input id="t-option" name="selector" type="radio">
						    <label for="t-option">Luxury</label>
						    <div class="check"></div>
						</div>
					</div>
					<div class="checkbox-col">
						<div class="form-inline">
						    <input id="t-option1" name="selector" type="radio">
						    <label for="t-option1">Homeowner</label>
						    <div class="check"></div>
						</div>
					</div>
					<div class="checkbox-col">
						<div class="form-inline">
						    <input id="t-option2" name="selector" type="radio">
						    <label for="t-option2">First time buyer</label>
						    <div class="check"></div>
						</div>
					</div>
					<input type="text" name="campaign-type" placeholder="Campaign name" class="form-control">
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<div class="age-group">
						<label>Age</label>
						<span>from</span>
						<input type="text" name="" class="form-control">
						<span>to</span>
						<input type="text" name="" class="form-control">
					</div>
					<label>Connections</label>
					<div class="checkbox-col">
						<div class="form-inline">
						    <input id="t-option3" name="selector1" type="radio">
						    <label for="t-option3">All</label>
						    <div class="check"></div>
						</div>
					</div>
					<div class="checkbox-col">
						<div class="form-inline">
						    <input id="t-option4" name="selector1" type="radio">
						    <label for="t-option4">Who like the page</label>
						    <div class="check"></div>
						</div>
					</div>
					<div class="checkbox-col">
						<div class="form-inline">
						    <input id="t-option5" name="selector1" type="radio">
						    <label for="t-option5">Friends of friends</label>
						    <div class="check"></div>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row text-left">
			<div class="col-sm-6">
				<div class="range-slider">
					<div class="form-group">
						<label>Net Worth</label>
						<img src="assets/images/range-200.png" alt="Range">
					</div>
					<div class="form-group">
						<label>Income</label>
						<img src="assets/images/range-10.png" alt="Range">
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="location-group">
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>Location</label>
							</div>
							<div class="col-sm-5">
								<select class="form-control">
									<option>Las Vegas</option>
								</select>
							</div>
							<div class="col-sm-4">
								<input type="text" name="" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>Budget</label>
							</div>
							<div class="col-sm-5">
								<input type="text" name="" class="form-control">
							</div>
							<div class="col-sm-4">
								<input type="text" name="" class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><br>
		<div class="row text-left">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Schedule</label>
					<div class="form-inline">
					    <input id="t-option6" name="selector3" type="radio">
					    <label for="t-option6">Start Today</label>
					    <div class="check"></div>
					</div>
					<div class="form-inline">
					    <input id="t-option7" name="selector3" type="radio">
					    <label for="t-option7">Start date / End date&nbsp;
					    	<span class="schedule-select">
					    		<select class="form-control">
					    			<option>Start Date</option>
					    		</select>
					    	</span>
					    	<span class="schedule-select">
					    		<select class="form-control">
					    			<option>End Date</option>
					    		</select>
					    	</span>
					    </label>
					    <div class="check"></div>
					</div>
				</div>
			</div>
		</div>
		<br><br><br>
		<div class="row text-left">
			<div class="col-sm-6">
				<h2>Ad Creation</h2>
			</div>
		</div>
		<div class="row text-left">
			<div class="col-sm-5">
				<div class="form-group">
					<label>Select Page</label>
					<select class="form-control">
						<option>Jayna Love Homes - Keller Williams</option>
					</select>
				</div><br>
				<div class="form-group">
					<label>Headline</label>
					<select class="form-control">
						<option>Sell your home without effort</option>
					</select>
				</div>
			</div>
			<div class="col-sm-4 col-sm-offset-3">
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control"></textarea>
				</div><br>
				<div class="form-group">
					<label>Ad image</label>
					<div class="browse-option text-center">
            			<img src="assets/images/upload-avatar.png" height="50" alt="avatar">
            			<div><span>Upload image</span></div>
            		</div>
				</div><br><br>
				<div class="text-right">
					<button class='btn btn-primary custom-btn-style'>Create Ad</button>
				</div><br><br><br><br>
			</div>
		</div>
	</div>
</div>

<!-- Footer Part -->
<?php include('footer.php'); ?>