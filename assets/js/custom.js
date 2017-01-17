$(function(){
	//Intro Js
	// introJs().start();
	
	//Wizard
    $(".wizard-steps").steps({
        headerTag: "h6",
        bodyTag: ".wizard-inner-section",
        transitionEffect: "slideLeft",
        autoFocus: true,
        labels: {
            cancel: "<button class='btn btn-primary custom-btn-style'>Cancel</button>",
            finish: "<button class='btn btn-primary custom-btn-style'>Finish</button>",
            next: "<button class='btn btn-primary custom-btn-style'>Next step</button>",
            previous: "<button class='btn btn-primary custom-btn-style'>Previous</button>",
        },
        onStepChanged: function (event, currentIndex) { 
            tabs_section();
        }
    });
    
    /* Dropdown selection for connect page */
    $('#connect-page-selection').find('li').click(function() {
        $('#selected').html($(this).html());
    });

     // Add slideDown animation to Bootstrap dropdown when expanding.
    $('#connect-page-selection').on('show.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideDown();
    });

    // Add slideUp animation to Bootstrap dropdown when collapsing.
    $('#connect-page-selection').on('hide.bs.dropdown', function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideUp();
    });
})