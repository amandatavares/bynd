$(document).ready(function(){
	// Unable automatic sliding and stops at last item
    $("#myCarousel").carousel({interval: false, wrap: false});
    
});

function vote(id){
	$.get("/vote/"+id);	
	$("#myCarousel").carousel("next");
}
function showRanking(){
	$('.modal-body').empty();

	$.ajax({
		type: "POST",
		url: "/show_votes",
		success: function(e){
			$('.modal-body').append(e);
			$('#rank').modal();		
		}
	});
}
