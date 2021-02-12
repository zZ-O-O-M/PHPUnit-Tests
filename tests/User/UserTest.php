<?php

use App\models\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

   private $user;

   protected function setUp(): void {
      $this->user = new User();
      $this->user->setAge(33);
   }

   protected function tearDown(): void {

   }

   /**
    * @dataProvider userProvider
    * @param $age
    */
   public function testAge($age) {
      $this->assertEquals($age, $this->user->getAge());
   }

   public function userProvider() {
      return [
         'one'     => [1],
         'two'     => [2],
         'correct' => [33]

         //         [1],
         //         [2],
         //         [33]
      ];
   }


}