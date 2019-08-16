<?php


  abstract class calculadora {


    public $value;
    public $result;
    public $operation;


    public function adition($a, $b) {
      $operation = $a + $b;
      $result = $operation;
      return $result;
    }


    public function subtraction($a, $b) {
      $operation = $a - $b;
      $result = $operation;
      return $result;
    }


    public function multiplication($a, $b) {
      $operation = $a * $b;
      $result = $operation;
      return $result;
    }


    public function division($a, $b) {
      $operation = $a / $b;
      $result = $operation;
      return $result;
    }


  }