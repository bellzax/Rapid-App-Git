<!DOCTYPE html>
    <?php
        require("includes/json_parse.php");
    ?>
    <head>
        <title>Assignment 01 AJAX – Zachary Bell</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        
        <script type="text/javascript">
			//placeholder text fall back support
			function clearText(field){
				if(field.defaultValue == field.value){
					field.value = "";
				}else if(field.value == ""){
					field.value = field.defaultValue;
				}
			}
		</script>
    </head>
    <body>
        <div id="container">
            <div class="section group">
                <div class="col span_2_of_3">
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
            <div class="section group">
                <div class="col span_1_of_3">
                    <div id="results">
                        <h2 id="sighting_title">
                            Find the most recent sighting
                        </h2>
                        <h3 id="sighting_des">&nbsp;
                        	
                        </h3>
                        <div id="ajaxButton">               
                            Load Data
                        </div>
                    </div>
                </div>
                <div class="col span_1_of_4">
                        <div id="dropdown">
                            Where do you live?
                            <br>
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
                        </div>
                    </div>
                </div>
                <div class="col span_1_of_3">
                    <div id="newsighting">
                        Post a New Sighting
                        <form method="POST">
                            <label for="newtitle">
                                Name your Sighting
                            </label>
                            <input id="newtitle" required type="text" name="newtitle" placeholder="Sighting Title" value="Sighting Title" onFocus="clearText(this)" onBlur="clearText(this)">
                            <label for="newdes">
                                Describe what you saw
                            </label>
                            <input id="newdes" required type="text" name="newdes" placeholder="Sighting Description" value="Sighting Description" onFocus="clearText(this)" onBlur="clearText(this)">
                            <label for="newloc">
                                Where did you see it
                            </label>
                            <input id="newloc" required type="text" name="newloc" placeholder="Sighting Location" value="Sighting Location" onFocus="clearText(this)" onBlur="clearText(this)">
                            <input id="newsubmit" type="button" value="Submit a Sighting">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    <script type="application/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
    <script type="application/javascript" src="js/ajax.js"></script>
    </body>
</html>