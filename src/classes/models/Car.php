<?php


namespace App\models;


class Car {
   private $year;
   private $currentPrice;
   private $name;
   private $consumption;

      /**
       * @return mixed
       */
   public function getCurrentPrice() {
   return $this->currentPrice;
}

   /**
    * @param mixed $currentPrice
    */
   public function setCurrentPrice($currentPrice): void {
      $this->currentPrice = $currentPrice;
   }

   /**
    * @return mixed
    */
   public function getYear() {
      return $this->year;
   }

   /**
    * @param mixed $year
    */
   public function setYear($year): void {
      $this->year = $year;
   }

   /**
    * @return mixed
    */
   public function getName() {
      return $this->name;
   }

   /**
    * @param mixed $name
    */
   public function setName($name): void {
      $this->name = $name;
   }

   /**
    * @return mixed
    */
   public function getConsumption() {
      return $this->consumption;
   }

   /**
    * @param mixed $consumption
    */
   public function setConsumption($consumption): void {
      $this->consumption = $consumption;
   }

}