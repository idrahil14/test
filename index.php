<?php

  class Awesome {
  
    public function ThisIsAnAwesomeFunction($variable, $integer) {
    
      $val = $integer;
    
      if (is_numeric($variable)) {
        $val = $variable + $integer;
      }
    
      return $val;
    
    }
  
  
  }
  
  
  echo Awesome::ThisIsAnAwesomeFunction(11,25);

?>