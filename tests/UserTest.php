<?php

use App\models\Car;
use App\models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

   private $user;
   private $testUserData = [
      'name'     => 'admin',
      'email'    => 'admin@yandex.ru',
      'password' => '123qwe'
   ];

   protected function setUp(): void {
      $this->user = new User(
         $this->testUserData['name'],
         $this->testUserData['email'],
         $this->testUserData['password']
      );
   }

   protected function tearDown(): void {
   }

   public function testReturnFields() {
      $this->assertEquals($this->user->getName(), $this->testUserData['name']);
      $this->assertEquals($this->user->getEmail(), $this->testUserData['email']);
      $this->assertEquals($this->user->getPassword(), $this->testUserData['password']);
   }

   /**
    * @depends testReturnFields
    */
   public function testSetFields() {

      $fieldsToSet = [
         'name'     => 'testName',
         'email'    => 'testEmail@mail.ru',
         'password' => 'testPassword'
      ];

      $this->user->setName($fieldsToSet['name']);
      $this->user->setEmail($fieldsToSet['email']);
      $this->user->setPassword($fieldsToSet['password']);

      $this->assertEquals($this->user->getName(), $fieldsToSet['name']);
      $this->assertEquals($this->user->getEmail(), $fieldsToSet['email']);
      $this->assertEquals($this->user->getPassword(), $fieldsToSet['password']);
   }

   public function testUserInfo() {
      $userInfo = $this->user->getUserInfo();
      $this->assertIsArray($userInfo);
      $this->assertArrayHasKey('userCar', $userInfo, "Field userCar doesn't exist in array userInfo");
      $this->assertArrayHasKey('userHouse', $userInfo, "Field userHouse doesn't exist in array userInfo");
      $this->assertArrayHasKey('userJob', $userInfo, "Field userJob doesn't exist in array userInfo");


      $newUserInfo = [
         'userCar' => new Car('2000', 20000, 'Nissan', 5),
         'userAge' => 45
      ];
      $this->user->setUserInfo($newUserInfo);

      $gettingData = $this->user->getUserInfo();
      $this->assertEquals('2000', $gettingData['userCar']->getYear(), 'Not expected year!');
      $this->assertEquals(20000, $gettingData['userCar']->getCurrentPrice(), 'Not expected price!');
   }

   public function testUserCalculationAge() {
      $this->assertEquals(21, $this->user->calculateUserAge(2000, 2021), "Incorrect age!");
   }
}