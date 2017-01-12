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
            cancel: "Cancel",
            finish: "Finish",
            next: "<button class='btn btn-primary custom-btn-style'>Next step</button>",
            previous: "<button class='btn btn-primary custom-btn-style'>Previous step</button>",
        },
        onStepChanged: function (event, currentIndex) { 
            tabs_section();
        }
    });
})