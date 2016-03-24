<!DOCTYPE html>
    <?php
        require("includes/json_parse.php");
    ?>
    <head>
        <title>Assignment 01 AJAX – Zachary Bell</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        
        <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
        
        <script type="text/javascript">
			var apiurl, myresult;
			apiurl = "https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=4ef2fe2affcdd6e13218f5ddd0e2500d&tags=crop+circle&per_page=1&format=json&nojsoncallback=1";
			$(document).ready(function() {
					$.getJSON(apiurl, function(json) {
						$.each(json.photos.photo, function(i, myresult) {
							$('body').css('background', 'url(https://farm6.staticflickr.com/' + myresult.server + '/' + myresult.id + '_' + myresult.secret + '_h.jpg) no-repeat scroll left top / cover');
						});
					});
			});
        </script>
    </head>
    <body>
        <div id="container">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1">
                    <div id="header_container">
                        <div id="header">
                            <img alt="ufo logo" src="img/logo.png">
                            <h1 id="title">
                                Have you been visited by aliens?
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-3">
                    <div id="results">
                        <h2 id="sighting_title">
                            Find the most recent sighting
                        </h2>
                        <h3 id="sighting_des">&nbsp;
                        	
                        </h3>
                        <div id="loadUFO" class="pure-button pure-button-primary">               
                            Load Data
                        </div>
                        <button class="pure-button" id="play">Play</button>
                        <button class="pure-button" id="pause">Stop</button>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                        <div id="dropdown">
                          <h2>Where do you live?</h2>
                          <form method="POST" class="pure-form pure-form-stacked">
                             <fieldset>
                                <select id="stateSelect" name="state">
                                    <option selected disabled value="">Pick a State</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                </select>
                             </fieldset>
                         </form>
                         
                            <audio class="audioDemo" controls preload="none"> 
                               <source src="data/RAMONES-ZeroZeroUFO.mp3" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <div id="newsighting">
                        <h2>Post a New Sighting</h2>
                        <form method="POST" class="pure-form pure-form-stacked">
                         <fieldset>
                            <label for="newtitle">
                                Name your Sighting
                            </label>
                            <input id="newtitle" required type="text" name="newtitle" placeholder="Sighting Title" value="" onFocus="clearText(this)" onBlur="clearText(this)">
                            <label for="newdes">
                                Describe what you saw
                            </label>
                            <input id="newdes" required type="text" name="newdes" placeholder="Sighting Description" value="" onFocus="clearText(this)" onBlur="clearText(this)">
                            <label for="newloc">
                                Where did you see it
                            </label>
                            <input id="newloc" required type="text" name="newloc" placeholder="Sighting Location" value="" onFocus="clearText(this)" onBlur="clearText(this)">
                            <input class="pure-button pure-button-primary" id="newsubmit" type="button" value="Submit a Sighting">
                         <fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    <script type="application/javascript" src="js/ajax.js"></script>
    <script>
		$(".audioDemo").trigger('load');
	</script>
    <script>
		$(document).ready(function() {
			var audioElement = document.createElement('audio');
			audioElement.setAttribute('src', 'data/RAMONES-ZeroZeroUFO.mp3');
			
			audioElement.addEventListener('ended', function() {
				this.currentTime = 0;
				this.play();
			}, false);
			
			$('#play').click(function() {
				audioElement.play();
			});
			
			$('#pause').click(function() {
				audioElement.pause();
			});
		});
	</script>
    </body>
</html>