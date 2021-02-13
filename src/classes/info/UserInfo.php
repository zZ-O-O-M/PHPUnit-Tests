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
      $this->userCar   = new Car('2010', 15000, 'Nissan', 13);
      $this->userHouse = new House('12 24 Soz', 15000, 35000,);
      $this->userJob   = new Job('RUFUS', "12-44 PI", '+ 231 331 23 11',);
   }

   /**
    * @return array
    */
   public function getAllUserInfo(): array {
      return [
         'userCar'   => $this->userCar,
         'userHouse' => $this->userHouse,
         'userJob'   => $this->userJob,
         'userAge'   => $this->userAge
      ];
   }

   /**
    * @param array $userData
    */
   public function setUserInfo(array $userData) {
      if (isset($userData['userCar'])) $this->userCar = $userData['userCar'];
      if (isset($userData['userHouse'])) $this->userHouse = $userData['userHouse'];
      if (isset($userData['userJob'])) $this->userJob = $userData['userJob'];
      if (isset($userData['userAge'])) $this->userAge = $userData['userAge'];
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