<?php

class ClassName
{
    // declare property
    public $classname;
    
    // declare property and init with a value
    public $number = 1;

    // define a method
    public function setClassName($name)
    {
        $this->classname = $name;
    }
}

// Create new class Instance:
$classInstance = new ClassName();
// Call class method:
$classInstance->setClassName('User');
// Get class property value:
echo $classInstance->classname;
