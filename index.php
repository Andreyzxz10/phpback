<?php
class Employee
{

  public $valor1;
  public $valor2;
  public $result;
 
  public function __construct($valor1, $valor2)
  {
    $this->valor1 = $valor1;
    $this->valor2 = $valor2;
  }


  public function getSumaFrist(){
    $result = $this->valor1 + $this->valor2;
    return $result;
  }

  // public function getFirstName()
  // {
  //   return $this->first_name;
  // }

  // public function getLastName()
  // {
  //   return $this->last_name;
  // }

  // public function getAge()
  /
<?php
include_once './Controladores/procesar.php';


$objEmployee = new Employee(12,4);

echo $objEmployee->getSumaFrist(); //resultado de la suma



?>
