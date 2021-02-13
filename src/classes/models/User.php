<?php

namespace App\models;


use App\info\UserInfo;

class User {
   private $name;
   private $email;
   private $password;
   private UserInfo $userInfo;

   /**
    * User constructor.
    * @param $name
    * @param $email
    * @param $password
    */
   public function __construct($name, $email, $password) {
      $this->name     = $name;
      $this->email    = $email;
      $this->password = $password;
      $this->userInfo = new UserInfo();
   }

   /**
    * @param int $birthYear
    * @param int $currentYear
    * @return int
    */
   public function calculateUserAge(int $birthYear, int $currentYear): int {
      return $currentYear - $birthYear;
   }


   /**
    * @return array
    */
   public function getUserInfo() {
      return $this->userInfo->getAllUserInfo();
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
   public function getEmail() {
      return $this->email;
   }

   /**
    * @param mixed $email
    */
   public function setEmail($email): void {
      $this->email = $email;
   }

   /**
    * @return mixed
    */
   public function getPassword() {
      return $this->password;
   }

   /**
    * @param mixed $password
    */
   public function setPassword($password): void {
      $this->password = $password;
   }
}