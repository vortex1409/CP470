<html>
	<head>
		<title>Michael Dorfman - CP470</title>
		
		<!--
			Class: CP470
			Lab: Week 3 - Day 2
			Date: 02/13/2018
			Description: RegEx
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
	    <h1>CP470 - W3D2 - REGEX - MICHAEL DORFMAN</h1>
	    <?php
	        $variable = "Jiwosdfuibyihkeltjfid8ioahelloahsyeorworldjklsibneisdfheil";
	        $variable2 = "(123) 123-1234";
	        
	        $url1 = "http://toronta";
	        $url2 = "http://toronta.ca";
	        $url3 = "htts:/here.there";
	        $url4 = "https://here.there.overthere";
	        $url5 = "This.doesnot.work";
	        
	        $pattern1 = '|(hello)(.){7}(world)|';
	        $pattern2 = '|(\([0-9]{3}\) [0-9]{3}-[0-9]{4})|';
	        $pattern3 = '/(http|https):\/\/(www\.)?[a-zA-Z0-9]+\.[a-zA-Z0-9]+(\.[a-zA-Z0-9]+)?/';
	        
	        if(preg_match($pattern1, $variable))
	        {
	            echo "hello world found";
	        }
	        else
	        {
	            echo "hello world not found";
	        }
	        echo "<br />(123) 123-1234 - ";
	        if(preg_match($pattern2, $variable2))
	        {
	            echo "phone number valid";
	        }
	        else
	        {
	            echo "phone number invalid";
	        }
	        echo "<br />http://toronta is ";
	        if(preg_match($pattern3, $url1))
	        {
	            echo "URL VALID";
	        }
	        else
	        {
	            echo "URL INVALID";
	        }
	        echo "<br />http://toronta.ca is ";
	        if(preg_match($pattern3, $url2))
	        {
	            echo "URL VALID";
	        }
	        else
	        {
	            echo "URL INVALID";
	        }
	        echo "<br /> https:/here.there is ";
	        if(preg_match($pattern3, $url3))
	        {
	            echo "URL VALID";
	        }
	        else
	        {
	            echo "URL INVALID";
	        }
	        echo "<br /> https://here.there.overthere is ";
	        if(preg_match($pattern3, $url4))
	        {
	            echo "URL VALID";
	        }
	        else
	        {
	            echo "URL INVALID";
	        }
	        echo "<br /> This.doesnot.work ";
	        if(preg_match($pattern3, $url5))
	        {
	            echo "URL VALID";
	        }
	        else
	        {
	            echo "URL INVALID";
	        }
	        echo "<br />";
	    ?>
	</body>
</html>