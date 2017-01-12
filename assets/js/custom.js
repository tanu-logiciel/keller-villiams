$(function(){
	//Intro Js
	introJs().start();
	
	//Wizard
    $("#wizard-steps").steps({
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
})