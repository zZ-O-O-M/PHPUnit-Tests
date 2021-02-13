<?php


namespace App\models;


class Car {
   private $year;
   private $currentPrice;
   private $brand;
   private $consumption;

   /**
    * Car constructor.
    * @param $year
    * @param $currentPrice
    * @param $brand
    * @param $consumption
    */
   public function __construct($year, $currentPrice, $brand, $consumption) {
      $this->year         = $year;
      $this->currentPrice = $currentPrice;
      $this->brand        = $brand;
      $this->consumption  = $consumption;
   }


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
   public function getBrand() {
      return $this->brand;
   }

   /**
    * @param mixed $brand
    */
   public function setBrand($brand): void {
      $this->brand = $brand;
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