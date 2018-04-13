<?php
    require 'data.php';
    foreach(ConvertXML(GetArray()) as $key => $value)
    {
        print_r($key . " = " . $value . "<br />");
    }
?>