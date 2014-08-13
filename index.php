<?php

  class Awesome {
  
    public function ThisIsAnAwesomeFunction($variable, $integer) {
    
      $val = $integer;
    
      if (is_numeric($variable)) {
        $val = $variable / $integer;
        $val = $val * 3.14 * $integer;
      }
    
      return $val;
    
    }
  
  
  }
  
  
  echo Awesome::ThisIsAnAwesomeFunction(11,25);

?>