<?php
    // Error Scripts
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require 'student.php';
    
    $MyResident = new resident(333, 'Michael', 'Dorfman');
    $MyResident->setMajor("CP");
    $MyResident->setResidence("Thunder Bay");
    print_r($MyResident->displayName . "<br />");
    print_r($MyResident->majorName . "<br />");
    print_r($MyResident->getResidence . "<br />");
    
?>