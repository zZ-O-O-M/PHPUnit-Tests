<?php

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

   public function testUserInfo() {
      $userInfo = $this->user->getUserInfo();
      $this->assertIsArray($userInfo);
      $this->assertArrayHasKey('userCar', $userInfo, "Field userCar doesn't exist in array userInfo");
      $this->assertArrayHasKey('userHouse', $userInfo, "Field userHouse doesn't exist in array userInfo");
      $this->assertArrayHasKey('userJob', $userInfo, "Field userJob doesn't exist in array userInfo");
      $this->assertArrayHasKey('userAge', $userInfo, "Field userAge doesn't exist in array userInfo");
   }
}