<?php
    $name = "Michael Dorfman";
    $lab_date = "02/12/2018";
    $course = "CP470";
    $nations = array("Russia", 
                    "China", 
                    "Unified Korea", 
                    "Canada", 
                    "United States");
    $events = array("First"=>"Biathlon", 
                    "Second"=>"Nordic Combined", 
                    "Third"=>"Snowboarding", 
                    "Fourth"=>"Bobsledding");
?>
<html>
	<head>
		<title>Michael Dorfman - CP470</title>
		
		<!--
			Class: CP470
			Lab: Week 3 - Day 1
			Date: 02/12/2018
			Description: Arrays & Hashing
			Name: Michael Dorfman
		-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
	    <?php
	        echo "<h1>Olympic Review</h1>";
	        echo "<h2>Submitted by: $name to $course on $lab_date</h2>";
	        echo "<hr />";
	        echo "<h1>Five Countries in Contention</h1>";
	        for($i = 0; $i < sizeof($nations); $i++)
	        {
	            echo $nations[$i] . "<br />";
	        }
	        echo "<br />";
	        echo "<h1>My Top 4 Favorite Events</h1>";
	        echo "Second: " . $events['Second'] . "<br />";
	        echo "Fourth: " . $events['Fourth'] . "<br />";
	        echo "First: " . $events['First'] . "<br />";
	        echo "Third: " . $events['Third'] . "<br />";
	    ?>
	</body>
</html>