<?php 
 class Person {
   private $name;
   private $email;

   //Constructor
   public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;
    echo 'Person created<br>';
   }

    //Setters
    public function setName($name){
      $this->name = $name;
    }
    public function setEmail($email){
      $this->email = $email;
    }

   //Getters
   public function getName(){
     return $this->name.'<br>';
   }
   public function getEmail(){
    return $this->email.'<br>';
  }
 }

 $person1 = new Person('Alison', 'ag123@gmail.com');
 echo $person1->getName();

//  $person1->setName('Alison');
//  echo $person1->getName();
 



?>
