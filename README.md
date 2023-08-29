# PHP_constructor_function
Basic PHP constructor function

1. constructor function is nothin but create object for us
2. PHP, a constructor function is a special method within a class that gets called automatically when an object of that class is created. It's used to initialize the object's properties and perform any necessary setup.
3."constructor" In the example above, the __construct method is the constructor function of the 
4. "Public" "public" is an access modifier that determines the visibility of a class property or method. It defines how the property or method can be accessed from outside the class.
5. "Private" private: When a property or method is declared as private, it can only be accessed from within the class itself. It's not accessible from outside the class, including its subclasses.
###Example
```
class MyClass {
    public $publicProperty;
    protected $protectedProperty;
    private $privateProperty;

    public function __construct() {
        $this->publicProperty = "This is public.";
        $this->protectedProperty = "This is protected.";
        $this->privateProperty = "This is private.";
    }

    public function getProtectedProperty() {
        return $this->protectedProperty;
    }

    private function getPrivateProperty() {
        return $this->privateProperty;
    }
}

$obj = new MyClass();

echo $obj->publicProperty;  // This will work
// echo $obj->protectedProperty;  // This will result in an error
// echo $obj->privateProperty;  // This will result in an error

echo $obj->getProtectedProperty();  // This will work
// echo $obj->getPrivateProperty();  // This will result in an error


```

#### In this example, you can see that publicProperty is accessible from outside the class, protectedProperty is accessible through a method defined within the class, and privateProperty is not accessible directly or indirectly from outside the class.

<<<<<<< HEAD
1. 
=======
1. 
>>>>>>> 3b07835 (main)
