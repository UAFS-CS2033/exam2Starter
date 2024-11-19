<?php
    class Dog{
        public $dogID;
        public $ownerName;
        public $dogName;
        public $dogBreed;
        public $dogColor;
        public $dogAge;

        public function load($row){
            $this->dogID = $row['dogID'];
            $this->ownerName=$row['ownerName'];
            $this->dogName=$row["dogName"];
            $this->dogBreed=$row['dogBreed'];
            $this->dogColor=$row["dogColor"];
            $this->dogAge=$row['dogAge'];
        }
    
    }
?>