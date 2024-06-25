<?php

class employee
{
  public $name;
  public $salary;

  function __construct($name, $salary)
  {
    $this->name = $name;
    $this->salary = $salary;
    echo "Employee Created: $name with Salary: $salary" . "<br>";
  }
}

// Creating objects with name and salary
$imran = new employee("Imran", 50000);
$dip = new employee("Dip", 60000);
$akash = new employee("Akash", 70000);

// Outputting the properties
echo "Name: " . $imran->name . ", Salary: " . $imran->salary . "<br>";
echo "Name: " . $dip->name . ", Salary: " . $dip->salary . "<br>";
echo "Name: " . $akash->name . ", Salary: " . $akash->salary . "<br>";
