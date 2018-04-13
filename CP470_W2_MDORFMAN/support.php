<?php
    
    /*
        Class: CP470
		Lab: Week 2 - Day 2
		Date: 02/06/2018
		Description: Includes, Requires & Functions
		Name: Michael Dorfman
    */
    
    // Include Error Checking
    include 'err.php';
    
    // ShowIt Function
    // Takes in 2 variables
    function ShowIt($string_in, $int_in)
    {
        // Checks if int_in is an integer
        if(is_numeric($int_in))
        {
            // If Structure - Checks Int
            if($int_in < 10)
            {
                // Prints out string for value of int_in
                for($i = 0; $i < $int_in; $i++)
                {
                    echo $string_in . "</br>";
                }
            }
            elseif($int_in >= 11 && $int_in <= 100)
            {
                print_r("I really should print " . $string_in . " " . $int_in . ". I do not what to do that");
                
            }
            elseif($int_in > 100)
            {
                print_r("Ya, right!");
            }
            else
            {
                print_r("I cannot work with that integer value");
            }
        }
        else
        {
            print_r("Invalid Values");
        }
        
    }
?>