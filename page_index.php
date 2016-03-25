<!DOCTYPE html>
    <?php
        require("includes/json_parse.php");
    ?>
    <head>
        <title>Assignment 02 AJAX – Zachary Bell</title>
        <meta charset="utf-8">
        
        <link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        
        <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
        <script type="application/javascript" src="js/ajax.js"></script>
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
                <div id="audioplayer" class="hidden pure-u-1 pure-u-md-1-3">
                    <h2>Current Song: <?php echo $fname; ?></h2>
                    <audio class="audio pure-u-1" controls preload="none"> 
                       <source src="<?php echo $filename; ?>" type="audio/mpeg">
                    </audio>
                </div>
            </div>
                        
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-1-3">
                    <div id="results">
                        <h2 id="sighting_title">
                            Find the most recent sighting:
                        </h2>
                        <h3 id="sighting_des">
                        	<img id="dataLoad" src="img/ajax-loader.gif" alt="ajax loading gif">
                        </h3>
                        <div id="loadUFO" class="pure-button pure-button-primary">               
                            Load Most Recent
                        </div>
                    </div>
                </div>
                <div class="pure-u-1 pure-u-md-1-3">
                  <div id="dropdown">
                    <h2>Find the most recent UFO sighting where you live:</h2>
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
                  </div>
                    </div>
                <div class="pure-u-1 pure-u-md-1-3">
                    <div id="newsighting">
                        <h2>Post your own UFO sighting:</h2>
                        <form method="POST" class="pure-form pure-form-stacked">
                         <fieldset>
                            <label for="newtitle">
                                Name your sighting
                            </label>
                            <input id="newtitle" required type="text" name="newtitle" placeholder="Sighting Title" value="">
                            <label for="newdes">
                                Describe what you saw
                            </label>
                            <input id="newdes" required type="text" name="newdes" placeholder="Sighting Description" value="">
                            <label for="newloc">
                                Where did you see it
                            </label>
                            <input id="newloc" required type="text" name="newloc" placeholder="Sighting Location" value="">
                            <input class="pure-button pure-button-primary" id="newsubmit" type="button" value="Submit a Sighting">
                         <fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal"><!-- loading gif --></div>
        </div>
    </body>
</html>