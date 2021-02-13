<?php


namespace App\models;


class Job {

   private $name;
   private $address;
   private $phoneNumber;

   /**
    * JobTest constructor.
    * @param $name
    * @param $address
    * @param $phoneNumber
    */
   public function __construct($name, $address, $phoneNumber) {
      $this->name        = $name;
      $this->address     = $address;
      $this->phoneNumber = $phoneNumber;
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
   public function getAddress() {
      return $this->address;
   }

   /**
    * @param mixed $address
    */
   public function setAddress($address): void {
      $this->address = $address;
   }

   /**
    * @return mixed
    */
   public function getPhoneNumber() {
      return $this->phoneNumber;
   }

   /**
    * @param mixed $phoneNumber
    */
   public function setPhoneNumber($phoneNumber): void {
      $this->phoneNumber = $phoneNumber;
   }
}