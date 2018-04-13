<?php
    class S
    {
        var $program;
        var $school;
        var $city;
        var $province;
        var $country;
    }
        
    $TB = new S;
    
    function GetArray()
    {
        return array("Program" => "Computer Programmer", "School" => "Confederation College","City" => "Thunder Bay","Province" => "Ontario","Country" => "Canada",);
    }
    
    function GetObject()
    {
        
        $TB->program = "Computer Programmer";
        $TB->school = "Confederation College";
        $TB->city = "Thunder Bay";
        $TB->province = "Ontario";
        $TB->country = "Canada";
        return $TB;
    }
    
    function ConvertJSON($object)
    {
        return json_encode($object);
    }
    
    function ConvertXML(array $object)
    {
        $xml = new SimpleXMLElement('<root/>');
        foreach ($object as $key => $value) 
        {
            $xml->addChild($key, $value);
        }
        return $xml;
    }
?>