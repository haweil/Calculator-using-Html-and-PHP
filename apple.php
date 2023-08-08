<?php
  /* 
    Class and object
    apple 
    Apple Blueprint Design =Class
  */
  class AppleDevice{
    // properties
    public $ram ;
    public $inch ;
    public $space;
  }
   $iphone13plus = new AppleDevice();
   echo "<pre>";
   var_dump($iphone13plus);
   echo "</pre>";
   $iphone12plus = new AppleDevice();
   echo "<pre>";
   var_dump($iphone12plus);
   echo "</pre>";
  ?>