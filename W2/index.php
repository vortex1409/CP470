<html>
	<head>
		<title>Michael Dorfman - CP470 - 02/06/2018</title>
		
		<!--
			Class: CP470
			Lab: Week 2 - Day 2
			Date: 02/06/2018
			Description: Includes, Requires & Functions
			Name: Michael Dorfman
		-->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <?php
            // Error Checking
            include 'err.php';
            
            // Support File
            require 'support.php';
            
            // Missing File (Throws Error)
            include 'theMissingFile.php';
            
            // Variables
            $name = "Michael Dorfman";
            $lab_date = "02/06/2018";
            $course = "CP470";
        ?>
	</head>
	<body>		
		<?php
		    
		    // Output Variables
		    echo "I am $name <br />";
		    echo "$course rocks! <br />";
		    echo "Today's Date: $lab_date <br />";
		    
		    // Function Calls
		    ShowIt("Elysium", 7);
		    echo "<br />";
		    ShowIt("EndWar", 84);
		    echo "<br />";
		    ShowIt("Earth", 2345);
		    echo "<br />";
		    ShowIt("Michael Dorfman", "Q");
		    echo "<br />";
		?>
	</body>
</html>
