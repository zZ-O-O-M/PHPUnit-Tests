<?php


use App\models\House;
use PHPUnit\Framework\TestCase;

class HouseTest extends TestCase {
   private $house;
   private $testHouseData = [
      'address' => '12 24 Soz',
      'size'    => 15000,
      'price'   => 35000,
   ];

   protected function setUp(): void {
      $this->house = new House(
         $this->testHouseData['address'],
         $this->testHouseData['size'],
         $this->testHouseData['price'],
      );
   }

   protected function tearDown(): void {
   }

   public function testReturnFields() {
      $this->assertEquals($this->house->getAddress(), $this->testHouseData['address']);
      $this->assertEquals($this->house->getSize(), $this->testHouseData['size']);
      $this->assertEquals($this->house->getPrice(), $this->testHouseData['price']);
   }

   /**
    * @depends testReturnFields
    */
   public function testSetFields() {

      $fieldsToSet = [
         'address' => '2222',
         'size'    => 2222,
         'price'   => 2222,
      ];

      $this->house->setAddress($fieldsToSet['address']);
      $this->house->setPrice($fieldsToSet['price']);
      $this->house->setSize($fieldsToSet['size']);

      $this->assertEquals($this->house->getAddress(), $fieldsToSet['address']);
      $this->assertEquals($this->house->getSize(), $fieldsToSet['size']);
      $this->assertEquals($this->house->getPrice(), $fieldsToSet['price']);
   }
}