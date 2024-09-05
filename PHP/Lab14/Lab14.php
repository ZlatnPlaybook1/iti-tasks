<?php
// Const example 
class Hello{
    const meassage = "Thank you" ; 
    public function access(){
        echo self::meassage ; 
    }
}

$hello = new Hello() ; 
$hello->access() ;
echo "<br>";
// To Print Const ouside the class
echo Hello::meassage ;
echo "<hr>";
// -----------------------------------
//  In composition, a class is composed of one or 
// more objects of other classes, establishing a "has-a" relationship.
class Class1{
public function start(){
    return "Class 1" ;
   }
}
class Class2{
    public function end(){
        return "Class 2" ;
    }
}

class Student{
    private $nameclass1 ; 
    private $nameclass2 ; 
    public function __construct($nameclass1 , $nameclass2)
    {
        $this->nameclass1 = $nameclass1 ;
        $this->nameclass2 = $nameclass2;
    }
    public function startClass(){
        return $this->nameclass1->start() . "," . $this->nameclass2->end();
    }
}
$class1 = new Class1() ;
$class2 = new Class2() ;

$student = new Student($class1 , $class2 ) ; 
echo $student->startClass() ;


echo "<hr>";
// -----------------------------------


// Abstract classes can be used to represent
//  abstract concepts or entities in your code
abstract class Animal{
    protected $name ; 
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function makesound();
}
class Dog extends Animal{
    public function makesound()
    {
        return "Woof!" ;
    }
}
class Cat extends Animal{
    public function makesound()
    {
        return "Meow!" ;
    }
}
$dog = new Dog("dog");
echo $dog->makeSound(); // Output: Woof!
echo "<br>";
$cat = new Cat("cat");
echo $cat->makeSound(); // Output: Meow!


echo "<hr>";
// -----------------------------------

// Interfaces resemble abstract 
// classes in that they include abstract methods
// interfaces can have only public methods, and cannot have variables.
interface Car { 
    public function setModel($name);
    
    public function getModel();
}

class Minicar implements Car{
    private $model ; 

    public function setModel($name)
    { 
      $this -> model = $name; 
    }
    
    public function getModel()
    {
      return $this -> model; 
    }
}
$myCar = new Minicar();
$myCar->setModel("Toyota");
echo $myCar->getModel();