$(document).ready(function(){
	// Unable automatic sliding and stops at last item
    $("#myCarousel").carousel({interval: false, wrap: false});
    
});

function vote(id){
	$.get("/vote/"+id);	
	$("#myCarousel").carousel("next");
}