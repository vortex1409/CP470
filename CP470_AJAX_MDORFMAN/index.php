<?php
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
?>
<html>
	<head>
		<title>Michael Dorfman - CP470</title>
		
		<!--
			Class: CP470
			Lab: W10D2
			Date: 04/10/2018
			Description: 
			Name: Michael Dorfman
		-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
          First name:<br>
          <input type="text" name="firstname" id="firstname" value="Michael">
          <br>
          <button onclick="handleButton(document.getElementById('firstname').value, day1, 'day1')">Day 1</button>
          <button onclick="handleButton(document.getElementById('firstname').value, day2, 'day2')">Day 2</button>
        <hr>
        <div id="serverResponse">
            
        </div>
        <div id="day2Div">
            
        </div>
	</body>
	
	<script>
    function handleButton(FN, dayFunction, url) 
    {
        var xhttp;
        if (FN.length == 0) { 
            document.getElementById("serverResponse").innerHTML = "";
            document.getElementById("day2Div").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200)
            {
                dayFunction(this);
            }
        };
        xhttp.open("GET", url + ".php?q=" + FN, true);
        xhttp.send();
    }
    
    function day1(xhttp)
    {
        document.getElementById("serverResponse").innerHTML = xhttp.responseText;
    }
    
    function day2(xhttp)
    {
        document.getElementById("day2Div").innerHTML = xhttp.responseText;
    }
    </script>
</html>
