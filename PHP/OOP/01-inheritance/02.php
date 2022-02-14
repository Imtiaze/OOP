<?php

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function talk(){
        //Do stuff here
    }

    protected function walk(){
        //Do stuff here
    }

    private function swim(){
        //Do stuff here
    }
}

class Tom extends Person
{
    /* 
        Since Tom class extends Person class this means
        that class Tom is a child class and class person is
        the parent class and child class will inherit all public
        and protected members(properties and methods) from
        the parent class
    */

    /* So class Tom will have these properties and methods */

     //public $name;
     //protected $age;
     //public function talk(){}
     //protected function walk(){}

     //but it will not inherit the private members
     //this is all what Object inheritance means
}