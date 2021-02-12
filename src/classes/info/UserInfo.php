<?php

namespace App\info;

use App\models\Car;
use App\models\House;
use App\models\Job;


class UserInfo {
   private Car $userCar;
   private House $userHouse;
   private Job $userJob;
   private $userAge;

   /**
    * userInfo constructor.
    * @param null $userAge
    */
   public function __construct($userAge = null) {
      $this->userCar   = new Car();
      $this->userHouse = new House();
      $this->userJob   = new Job();
      $this->userAge   = $userAge;
   }

   /**
    * @return array
    */
   public function getAllUserInfo() {
      return [
         'userCar'   => $this->userCar,
         'userHouse' => $this->userHouse,
         'userJob'   => $this->userJob,
         'userAge'   => $this->userAge
      ];
   }

   /**
    * @return Car
    */
   public function getUserCar(): Car {
      return $this->userCar;
   }

   /**
    * @param Car $userCar
    */
   public function setUserCar(Car $userCar): void {
      $this->userCar = $userCar;
   }

   /**
    * @return House
    */
   public function getUserHouse(): House {
      return $this->userHouse;
   }

   /**
    * @param House $userHouse
    */
   public function setUserHouse(House $userHouse): void {
      $this->userHouse = $userHouse;
   }

   /**
    * @return Job
    */
   public function getUserJob(): Job {
      return $this->userJob;
   }

   /**
    * @param Job $userJob
    */
   public function setUserJob(Job $userJob): void {
      $this->userJob = $userJob;
   }

   /**
    * @return null
    */
   public function getAge() {
      return $this->userAge;
   }

   /**
    * @param null $userAge
    */
   public function setAge($userAge): void {
      $this->userAge = $userAge;
   }


}