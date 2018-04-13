<?php

// CP470 - Open Source Programming
// Name: Michael Dorfman
// Date: 03/06/2018

// Header heredoc
$headerdoc =  <<<HEADER
<html>
    <head>
        <title>CP470 | W6D2</title>
        <style>
        
        </style>
    </head>
    <body>
    <p>Header</p>
    <hr>
HEADER;

// Footer heredoc
$footerdoc =  <<<FOOTER
        <hr>
        <p>Footer</p>
    </body>
</html>
FOOTER;

    // Print Header
    echo $headerdoc;

    // Gamer Interface
    interface IGamer
    {
        public function play();
    }
    
    // Scholar Interface
    interface IScholar
    {
        public function study();
    }

    // Student Class
    // Implements IGamer Interface
    // Implements IScholar Interface
    class student implements IGamer, IScholar
    {
        public function play()
        {
            echo " playing generic games<br />";
        }
        
        public function study()
        {
            echo " just studies stuff<br />";
        }
    }
    
    // College Student Class
    // Extends Student
    class collegestudent extends student
    {
        public function play()
        {
            echo " Will play advanced war-time strategy games<br />";
        }
        
        public function study()
        {
            echo " Will study very hard for finals<br />";
            echo " But I really want to ";
            echo student::study() . "<br />";
        }
    }
    
    // High School Student Class 
    // Extended Student Class
    class highschoolstudent extends student
    {
        public function play()
        {
            echo " Will play hacky sack<br />";
        }
        
        public function study()
        {
            echo " Will not take studying seriously<br />";
        }
    }

    //-----------------------

    // Create Objects
    $GS =  new student();
    $CS =  new collegestudent();
    $HSS = new highschoolstudent();
    
    // playGames Function
    function playGames(IGamer $inValue)
    {
        $inValue->play();
    }
    
    // doSchoolWork Function
    function doSchoolWork(IScholar $inValue)
    {
        $inValue->study();
    }
    
    // Generic Student Outout
    echo "<u>Generic Student</u><br />";
    playGames($GS);
    doSchoolWork($GS);
    
    // College Student Output
    echo "<br /><u>College Student</u><br />";
    playGames($CS);
    doSchoolWork($CS);
    
    // High School Student Output
    echo "<br /><u>High School Student</u><br />";
    playGames($HSS);
    doSchoolWork($HSS);
    
    //-----------------------

    // Print Footer
    echo $footerdoc;
?>