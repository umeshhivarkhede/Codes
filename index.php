<?php
// chjjd
//jjdjd
//on git
trait Car{
    public function color($name){
        return "Car Color Red";
    }
}

trait Bike{
    private function color($name){
        return $name."  Bike Color is black";
    }
        
    }
    trait Shirt{
        public function color($name){
            return $name."  Bike Color is black";
        }
            
        }
class Employee{
     use Car ,Bike,Shirt{
    Bike::color insteadof Car,Shirt;
    Bike::Color as Public;
   }
//    use Car ,Bike,Shirt{
//     Bike::color insteadof Car,Shirt;
//     Bike::Color as Public;
//    }
}
$employee=new Employee();
echo $bike_color=$employee->color('Suresh')
// trait hello{
//  public function sayhi(){
//     return "hi";
//  }fgfdg
// }

// trait bye{
//     public function sayhi(){
//         return "hi wiitth bye";
//      }
//  public function saybye(){
//         return "bye";
//     }
// }
// class base{
//    use hello,bye{
//     bye::sayhi insteadof  hello;
//    }
// }
// class base1{
//     use hello;

// }

// $base=new base();
// $bsae1=new base1();
// echo $hello=$base->sayhi(); 
// echo "<br>";
// echo $hello=$base->saybye();

// abstract class Car {
//     public $name;
//     // public function __construct($name) {
//     //   $this->name = $name;
//     // }
//     abstract public function intro($name);
//   }
  
//   // Child classes
//   class Audi extends Car {
//     public function intro($name)  {
//       return "Choose German quality! I'm an $name!";
//     }
//   }
  
//   class Volvo extends Car {
//     public function intro($name)  {
//       return "Proud to be Swedish! I'm a $this->name!";
//     }
//   }
  
//   class Citroen extends Car {
//     public function intro($name) {
//       return "French extravagance! I'm a $this->name!";
//     }
//   }
  
//   // Create objects from the child classes
//   $audi = new audi();
//   echo $audi->intro("Audi");
//   echo "<br>";
  
//   $volvo = new volvo();
//   echo $volvo->intro("Volvo");
//   echo "<br>";
  
//   $citroen = new citroen();
//   echo $citroen->intro("Citroen");
// abstract class Car {
//     public $name;
   
//     abstract public function intro($name);
//   }
  
// // abstract class Employee{
// //     abstract public function employeeInfo($name);
// // }

// class Hrm extends Car{
//     public function intro($name){
//         return  $this->name = $name;
//     }
// }

//   $Hrm=new Hrm();

//   echo $employeename=$Hrm->intro('Umesh');
// $cars = array("Volvo", "BMW", "Toyota");
// sort($cars);

// foreach ($cars as $key => $val) {
//     echo "cars[" . $key . "] = " . $val . "<br>";
// }
//  $a=array(0=>"number",1=>"digit");

//  $b=array(0=>"twos",1=>"2");
//  $d=array("twod","ss");
//  $c=asort($d);
// print_r($d);
// function Division($n){
//     if($n<='0'){
       
//         throw new MyException("Enter Valid No");
//     }
//    echo $ans=10/$n;
// }

// // try{
// // Division(0);

// // }catch(Exception $e){
// // echo $e->getFile();
// // echo "<br>";
// // echo $e->getLine();
// // }



// class MyException extends Exception{
//     public Function myError(){
//         $error="Error in File".$this->getFile();
//         $error.="<br> error in line".$this->getLine();
//        return $error;
//     }
// }


// try{
//     Division(0);
// }catch(MyException $e){
// echo $e->myError();
// }catch(Exception $e){
//     echo $e->getMessage();
// }
































// function checkNum($number) {
//     if($number>1) {
//       throw new Exception("Value must be 1 or below");
//     }
//     return true;
//   }
  
//   //trigger exception in a "try" block
//   try {
//     checkNum(0);
//     //If the exception is thrown, this text will not be shown
//     echo 'If you see this, the number is 1 or below';
//   }
  
//   //catch exception
//   catch(Exception $e) {
//     echo 'Message: ' .$e->getMessage();
//   }
// class MyException extends Exception{
//     public function myError(){
//         $err="My Exceptiom Msg".$this->getMessage()."<br> Error of line".$this->getLine();
//         return $err;
//     }
// }
// try{
//     $n=3;
//     if($n<=0){
//         throw new Exception("entet valid No");
//     }
//     if($n===3){
//         throw new Myexception("no is 3");
//     }
//     echo $value=2/$n; 
// }catch(MyException $e){
//     echo $e->myError();
// }catch(Exception $e){
//     echo $e->getFile();
// }
// finally{
//     echo "<br>Finalyy gg";
// }

// try{
// //    function divison($n){
//     $n=0;
//     if($n<=0){
//  echo $n;
//   throw new Exception("enter valid No");
//     }
//     $ans=10/$n;
//       echo $ans;
//  // }
 
// }catch(Exception $e){
//  echo $e->getMessage();
// }finally{
//     echo "finally";
// }

//divison(0);
?>
