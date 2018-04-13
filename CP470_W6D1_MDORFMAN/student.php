<?php
    class student
    {
        private $FirstName = "";
        private $LastName = "";
        private $Major = "";
        private $StudentNumber = 0;
        
        public function __construct($ID, $FNAME, $LNANE)
        {
            $this->$StudentNumber = $ID;
            $this->$FirstName = $FNAME;
            $this->$LastName = $LNANE;
        }
        
        public function displayName()
        {
            return $this->$FirstName . " " . $this->$LastName;
        }
        
        public function setMajor($InputMajor)
        {
            $this->$Major = $InputMajor;
        }
        
        public function getMajor()
        {
            return $this->$Major;
        }
    }
    
    class resident extends student
    {
        private $residence = "";
        
        public function setResidence($RES_IN)
        {
            $this->$residence = $RES_IN;
        }
        
        public function getResidence()
        {
            return $this->$residence;
        }
    }
?>