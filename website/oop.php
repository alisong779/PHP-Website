<?php 
 class Person {
   private $name;
   private $email;

   //Constructor
   public function __construct($name, $email){
    $this->name = $name;
    $this->email = $email;
    echo __CLASS__.': '. $name .' created<br>';
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

 
class Customer extends Person{
  private $balance;

  public function __construct($name, $email, $balance){
    parent::__construct($name, $email, $balance);
    $this->balance = $balance;
    echo 'A new '.__CLASS__.' has been created<br>' .$name. ', your balance is: ';
  }

  public function setBalance($balance){
    $this->balance = $balance;
  }

  public function getBalance(){
    return $this->balance.'<br>';
  }

}

$customer1 = new Customer('John Doe', 'jd@gmail.com', 300);
echo $customer1->getBalance();
?>
