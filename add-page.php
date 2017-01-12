<!-- Header Part -->
<?php include('header.php'); ?>

<!-- Content Part -->
<div class="container">
	<div class="content-wrap business-page-custom-wrap wizard-container text-center">
		<h1>Welcome to the Business Account Manager</h1>
		<h3>Please complete steps below to add your page </h3>
		<div id="wizard-steps" class="wizard-steps">
                <h6>Informations</h6>
                <div class="wizard-inner-section">
                    <div class="row">
                    	<div class="col-sm-6">
                    		<div class="form-group">
                    			<input type="text" name="" placeholder="Name" class="form-control">
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
                <h6>About</h6>
                <div class="wizard-inner-section">
                    <ul class="tabs wizard-tabs">
                        <li class="tab col"><a class="active" href="#general">General</a></li>
                        <li class="tab col"><a href="#contact">Contact</a></li>
                        <li class="tab col"><a href="#location">Location</a></li>
                        <li class="tab col"><a href="#hours">Hours</a></li>
                        <li class="tab col"><a href="#more">More</a></li>
                    </ul>
                    <div id="general">
                        <h5 class="wizard-head">General</h5>
                        <div class="info-full-row">
                            <div class="info-col">
                                <label>Name</label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                            <div class="info-col">
                                <label>Page Category</label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                        </div>
                        <div class="info-full-row">
                            <div class="info-col">
                                <label>Subcategorie</label>
                                <div class="chips chips-initial"></div>
                            </div>
                            <div class="info-col">
                                <label>Impressum</label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                        </div>
                        <div class="info-full-row">
                            <div class="info-col full-width">
                                <label>Description</label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                        </div>
                    </div>
                    <div id="contact">
                        <h5 class="wizard-head">Contact</h5>
                        <div class="info-full-row contact-row">
                            <div class="info-col">
                                <label>Phone 
                                    <div class="right">
                                        <span>Has a phone number</span>
                                        <span>
                                            <input class="filled-in checkbox" id="has-number" type="checkbox" checked>
                                            <label for="has-number"></label>
                                        </span>
                                    </div>
                                </label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                            <div class="info-col">
                                <label>Website 
                                    <div class="right">
                                        <span>This page has a website</span>
                                        <span>
                                            <input class="filled-in checkbox" id="has-website" type="checkbox" checked>
                                            <label for="has-website"></label>
                                        </span>
                                    </div>
                                </label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                        </div>
                        <div class="info-full-row contact-row">
                            <div class="info-col">
                                <label>Email 
                                     <div class="right">
                                        <span>Has and email address</span>
                                         <span>
                                            <input class="filled-in checkbox" id="has-email" type="checkbox" checked>
                                            <label for="has-email"></label>
                                        </span>
                                    </div>
                                </label>
                                <input type="text" name="input" placeholder="Input Field Text">
                            </div>
                        </div>
                    </div>
                    <div id="location">
                        <h5 class="wizard-head">Location</h5>
                        <div class="info-full-row">
                            <div class="info-col full-width">
                                <label>Address 
                                    <div class="right">
                                        <span>Has a street address</span>
                                        <span>
                                            <input class="filled-in checkbox" id="has-number" type="checkbox" checked>
                                            <label for="has-number"></label>
                                        </span>
                                    </div>
                                </label>
                                <div class="row">
                                    <div class="col s5">
                                        <input type="text" name="input" placeholder="Input Field Text">
                                    </div>
                                    <div class="col s4">
                                        <input type="text" name="input" placeholder="Input Field Text">
                                    </div>
                                    <div class="col s3">
                                        <input type="text" name="input" placeholder="Input Field Text">
                                    </div>
                                </div>
                                <div class="map">
                                    <img src="img/map.png" alt="map">
                                </div>
                            </div>
                        </div>
                        <div class="info-full-row">
                            <div class="info-col full-width">
                                <label>Parking</label>
                                <span class="parking-check">
                                    <input class="filled-in checkbox" id="street" type="checkbox" checked>
                                    <label for="street">Street</label>
                                </span>
                                <span class="parking-check">
                                    <input class="filled-in checkbox" id="valet" type="checkbox" checked>
                                    <label for="valet">Valet</label>
                                </span>
                                <span class="parking-check">
                                    <input class="filled-in checkbox" id="parking-lot" type="checkbox" checked>
                                    <label for="parking-lot">Parking Lot</label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="hours">
                        <h5 class="wizard-head">Hours</h5>
                        <div class="info-full-row radio-bottom-margin">
                            <div class="info-col full-width">
                                <label>Hours</label>
                                <div class="row">
                                    <div class="radio-btn hours-radio col s4">
                                        <input class="with-gap" name="hours-radio" type="radio" id="selected-hours" checked />
                                        <label for="selected-hours">Open on selected hours</label>
                                    </div>
                                    <div class="radio-btn hours-radio col s4">
                                        <input class="with-gap" name="hours-radio" type="radio" id="always-open"  />
                                        <label for="always-open">Always open</label>
                                    </div>
                                    <div class="radio-btn hours-radio col s4">
                                        <input class="with-gap" name="hours-radio" type="radio" id="no-hours"  />
                                        <label for="no-hours">No hours available</label>
                                    </div>
                                     <div class="radio-btn hours-radio col s4">
                                        <input class="with-gap" name="hours-radio" type="radio" id="closed"  />
                                        <label for="closed">Permanently closed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="monday" type="checkbox" checked>
                                            <label for="monday">Monday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="tuesday" type="checkbox">
                                            <label for="tuesday">Tuesday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="wednesday" type="checkbox">
                                            <label for="wednesday">Wednesday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="thursday" type="checkbox">
                                            <label for="thursday">Thursday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="friday" type="checkbox">
                                            <label for="friday">Friday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="saturday" type="checkbox">
                                            <label for="saturday">Saturday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row days-row">
                            <div class="col s3">
                               <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <span class="days-check">
                                            <input class="filled-in checkbox" id="sunday" type="checkbox">
                                            <label for="sunday">Sunday</label>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                            <span class="separator-icon"></span>
                            <div class="col s3">
                                <div class="info-full-row">
                                    <div class="info-col full-width">
                                        <input type="text" name="input" placeholder="Time">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="more">
                        <h5 class="wizard-head">More</h5>
                        <div class="info-full-row">
                            <div class="info-col full-width">
                                <label>Price Range</label>
                                <div class="row">
                                    <div class="radio-btn hours-radio col s3">
                                        <input class="with-gap" name="price-radio" type="radio" id="dollar" checked />
                                        <label for="dollar">$</label>
                                    </div>
                                    <div class="radio-btn hours-radio col s3">
                                        <input class="with-gap" name="price-radio" type="radio" id="dollar1" />
                                        <label for="dollar1">$$</label>
                                    </div>
                                    <div class="radio-btn hours-radio col s3">
                                        <input class="with-gap" name="price-radio" type="radio" id="dollar2"  />
                                        <label for="dollar2">$$$</label>
                                    </div>
                                     <div class="radio-btn hours-radio col s3">
                                        <input class="with-gap" name="price-radio" type="radio" id="dollar3"  />
                                        <label for="dollar3">$$$$</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h6>Location</h6>
                <div class="wizard-inner-section">
                    <h5>Please fill below informations</h5>
                </div>
            </div>
	</div>
</div>

<!-- Footer Part -->
<?php include('footer.php'); ?>