// JavaScript Document

//loading flickr image as body background image
var apiurl, myresult, pageNum;
pageNum = Math.floor(Math.random() * 20) + 1;
console.log(pageNum);
apiurl = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=4ef2fe2affcdd6e13218f5ddd0e2500d&tags=crop+circle&per_page="+pageNum+"&format=json&nojsoncallback=1";
$(document).ready(function() {
		$("body").addClass("loading"); 
		$('body').css('background', 'url(https://farm6.staticflickr.com/1568/23623376569_89796d818c_h.jpg) no-repeat scroll left top / cover');
		$.getJSON(apiurl, function(json) {
			$.each(json.photos.photo, function(i, myresult) {
				$('body').css('background', 'url(https://farm6.staticflickr.com/' + myresult.server + '/' + myresult.id + '_' + myresult.secret + '_h.jpg) no-repeat scroll left top / cover');
				$("body").removeClass("loading"); 
			});
		});
});


//loading gif show and hide on jaxa call control
$('#dataLoad').ajaxStart(function() {
    $(this).show();
}).ajaxComplete(function() {
    $(this).hide();
});


//song loading and control functions
var audio;
$(document).ready(function() {
	audio = $(".audio");
	addEventHandlers();
});

function addEventHandlers(){
	$("a.load").click(loadAudio);
	$("a.start").click(startAudio);
	$("a.pause").click(pauseAudio);
	$("a.stop").click(stopAudio);
	$("a.mute").click(toggleMuteAudio);
}

function loadAudio(){
	audio.bind("load",function(){
		$(".alert-success").html("Audio Loaded succesfully");
	});
	audio.trigger('load');
}

function startAudio(){
	audio.trigger('play');
}

function pauseAudio(){
	audio.trigger('pause');
}

function stopAudio(){
	pauseAudio();
	audio.prop("currentTime",0);
}

function toggleMuteAudio(){
	audio.prop("muted",!audio.prop("muted"));
}


//pull in the most recent ufo sighting in your state: select input field ajax
$(document).ready(function() {
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
			 $("#sighting_title").empty();
			 $("#sighting_des").empty();
			//obj = jQuery.parseJSON(return_data);
			//$("#sighting_des").html(obj);
			console.log("sucess");
			console.log(data);
			var firstResult = data.split('; ');
			var spiltResult = firstResult[0].split(' - ');
			
			$("#sighting_title").html('The most recently reported UFO sighting: <br><br>'+spiltResult[0]);
			$("#sighting_des").html(spiltResult[1]);
			
			startAudio();
			$("#audioplayer").removeClass("hidden");	
		 },
		 error: function(data){
			console.log("error");
			console.log(data);
		}
	  });
}
});


//Post new sighting: mysql data ajax
$(document).ready(function() {
$("#newsubmit").click(function(){
	sighting_post();
});
function sighting_post() {	
	console.log("hello");
	inputTitle = $("#newtitle").val();
	inputDes = $("#newdes").val();
	inputLoc = $("#newloc").val();
 
	$.ajax({
	type: "POST",
	 url: "includes/update_sighting.php",
		 data: {"newtitle":inputTitle, "newdes":inputDes, "newloc":inputLoc},
		 cache: false,
		 success: function(data) {
			$("#sighting_title").empty();
			$("#sighting_des").empty();
			var return_data = data;
			obj = jQuery.parseJSON(return_data);
			$("#sighting_title").html('The most recently reported UFO sighting: <br><br>'+obj.title+' in '+obj.location);
			$("#sighting_des").html(obj.shortdes);
			console.log("sucess");
			console.log(data);
			startAudio();
			$("#audioplayer").removeClass("hidden");	
		 },
		 error: function(data){
			console.log("error");
			console.log(data);
		}
	  });
}
});


//Pull in the most recent ufo sighting: xml to json info load
$(document).ready(function() {
$("#loadUFO").click(function(){
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
			$("#sighting_title").empty();
			$("#sighting_des").empty();
			var return_data = data;			
			var obj = jQuery.parseJSON(return_data);
			$("#sighting_title").html("The most recently reported UFO sighting: <br><br>"+ obj.Title);
			$("#sighting_des").html(obj.ShortDes);
			console.log("sucess");
			console.log(data);	
			startAudio();
			$("#audioplayer").removeClass("hidden");		
		 },
		 error: function(data){
			console.log("error");
			console.log(data);
		}
	  });
}
});