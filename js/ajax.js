// JavaScript Document
//select input field ajax
$("#stateSelect").change(function(){
	ajax_post();
});
function ajax_post() {	

	selectedText = $("#stateSelect option:selected").text();
 
	$.ajax({
	type: "POST",
	 url: "includes/get_ufo_data.php",
		 data: {"ufoLoc":selectedText},
		 cache: false,
		 success: function(data) {
			var return_data = data;	
			obj = jQuery.parseJSON(return_data);
			$("#sighting_des").html(obj);
			console.log("sucess");
			console.log(data);
		 },
		 error: function(data){
			console.log("error");
			console.log(data);
		}
	  });
}


//mysql data ajax
$("#newsubmit").click(function(){
	sighting_post();
});
function sighting_post() {	

	inputTitle = $("#newtitle").val();
	inputDes = $("#newdes").val();
	inputLoc = $("#newloc").val();
 
	$.ajax({
	type: "POST",
	 url: "includes/update_sighting.php",
		 data: {"newtitle":inputTitle, "newdes":inputDes, "newloc":inputLoc},
		 cache: false,
		 success: function(data) {
			var return_data = data;
			obj = jQuery.parseJSON(return_data);
			$("#sighting_title").html('The most recently reported UFO sighting: <br><br>'+obj.title+' in '+obj.location);
			$("#sighting_des").html(obj.shortdes);
			console.log("sucess");
			console.log(data);
		 },
		 error: function(data){
			console.log("error");
			console.log(data);
		}
	  });
}

//xml to json info load
$("#ajaxButton").click(function(){
	makeRequest();
});
function makeRequest() {	

	inputTitle = $("#newtitle").val();
	inputDes = $("#newdes").val();
	inputLoc = $("#newloc").val();
 
	$.ajax({
	type: "GET",
	 url: "data/sightings.txt",
		 data: {},
		 cache: false,
		 success: function(data) {
			var return_data = data;			
			var obj = jQuery.parseJSON(return_data);
			$("#sighting_title").html("The most recently reported UFO sighting: <br><br>"+ obj.Title);
			$("#sighting_des").html(obj.ShortDes);
			console.log("sucess");
			console.log(data);
		 },
		 error: function(data){
			console.log("error");
			console.log(data);
		}
	  });
}