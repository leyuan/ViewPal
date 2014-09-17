$(document).ready(function() {

	//------------- jGrowl notification -------------//
    setTimeout(function() {
    	$.jGrowl("<i class='icon16 i-checkmark-3'></i> Login is successfull", {
    		group: 'success',
    		position: 'center',
    		sticky: false,
    		closeTemplate: '<i class="icon16 i-close-2"></i>',
    		animateOpen: {
		        width: 'show',
		        height: 'show'
		    }
    	});
    }, 250);
});