<!-- Header Part -->
<?php include('header.php'); ?>

<!-- Content Part -->
<div class="container">
	<div class="content-wrap business-page-custom-wrap create-ad wizard-container text-center">
		<h1>Here you can create your Facebook Campaign</h1>
		<h3>Fill the information below to create your first ad</h3>
		<div id="wizard-steps" class="wizard-steps">

			<!-- Campaign Setup Section -->
            <h6>Campaign setup</h6>
            <div class="wizard-inner-section">
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
		                    <div class="checkbox-col">
		                        <div class="form-inline">
		                            <input id="t-option3" name="selector" type="radio">
		                            <label for="t-option3">Custom</label>
		                            <div class="check"></div>
		                        </div>
		                    </div>
		                </div>
						<div class="range-slider">
		                    <div class="form-group">
		                        <label>Net Worth</label>
		                        <img src="assets/images/range-200.png" alt="Range">
		                    </div>
		                    <div class="form-group">
		                        <label>Income</label>
		                        <img src="assets/images/range-10.png" alt="Range">
		                    </div>
		                    <div class="form-group">
		                        <label>Age</label>
		                        <img src="assets/images/range-age.png" alt="Range">
		                    </div>
		                </div>
            		</div>
		            <div class="col-sm-6">
		            	<div class="form-group">
		                    <label>Campaign Name</label>
		                </div>
		                <div class="form-group">
		                    <input type="text" name="campaign-type" placeholder="My first campaign" class="form-control">
		                </div>
		                <div class="connections-wrap">
			                <div class="form-group">
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

        		<!-- Schedule -->
		        <div class="row text-left">
		            <div class="col-sm-12">
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
    		</div> <!-- End Campaign setup section -->

    		<!-- Ad creation Section -->
            <h6>Ad creation</h6>
            <div class="wizard-inner-section">
                <div class="row text-left">
                    <div class="col-md-5 col-sm-6">
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
                        </div><br>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control"></textarea>
                        </div><br>
                        <div class="form-group">
                            <label>Image / Video</label>
                            <a href="#image-video-popup" class="fancybox browse-option-outer">
	                            <div class="browse-option text-center">
	                                <img src="assets/images/upload-avatar.png" height="50" alt="avatar">
	                                <div><span>Upload image</span></div>
	                            </div>
	                        </a>
                            <span class="img-video">or</span>
                            <a href="#image-video-popup" class="fancybox browse-option-outer add-video-option">
                            	<div class="browse-option text-center">
	                                <img src="assets/images/upload-video.png" alt="video">
	                                <div><span>Add video from KW</span></div>
	                            </div>
                            </a>
                        </div>
                    </div>
                    <div id="image-video-popup">
                    	<?php include('add-video.php'); ?>
                    </div>

                    <!-- Ad Preview Section -->
                    <div class="col-md-4 col-sm-6 col-md-offset-3">
                        <div class="form-group">
                            <label>Ad Preview</label>
                            <div class="ad-preview-wrap">
                            	<div class="preview-outer">
                            		<div class="ad-title">
                            			<img src="assets/images/ad-img.png" alt="Ad">
                            			<h5>Jayna Love Homes - Keller Williams</h5>
                            			<span>Sponsored</span>
                            		</div>
                            		<div class="ad-desc">
                            			<p>
                            				Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum 
                            			</p>
                            		</div>
                            		<div class="preview-details">
	                            		<div class="preview-img text-center">
	                            			<img src="assets/images/ad-preview.png" alt="preview">
	                            		</div>
	                            		<div class="sell-home-wrap">
	                            			<h5>Sell your home without effort</h5>
	                            			<a href="#">https//someurl.com</a>
	                            		</div>
                            		</div>
                            		<p class="total-likes">9 Likes</p>
                            		<div class="social-status">
                            			<span><i class="fa fa-thumbs-up" aria-hidden="true"></i> Like</span>
                            			<span><i class="fa fa-commenting" aria-hidden="true"></i> Comment</span>
                            			<span><i class="fa fa-share" aria-hidden="true"></i> Share</span>
                            		</div>
                            	</div>
                            </div>
                        </div><br>
                    </div>
                </div>
            </div> <!-- End Ad Creation section -->
        </div>
	</div>
</div>

<!-- Footer Part -->
<?php include('footer.php'); ?>