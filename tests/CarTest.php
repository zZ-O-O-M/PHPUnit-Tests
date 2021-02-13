<?php


use App\models\Car;
use PHPUnit\Framework\TestCase;

class CarTest extends TestCase {

   private $car;
   private $testCarData = [
      'year'         => '2010',
      'currentPrice' => 15000,
      'brand'        => 'Nissan',
      'consumption'  => 13
   ];

   protected function setUp(): void {
      $this->car = new Car(
         $this->testCarData['year'],
         $this->testCarData['currentPrice'],
         $this->testCarData['brand'],
         $this->testCarData['consumption'],
      );
   }

   protected function tearDown(): void {
   }

   public function testReturnFields() {
      $this->assertEquals($this->car->getYear(), $this->testCarData['year']);
      $this->assertEquals($this->car->getCurrentPrice(), $this->testCarData['currentPrice']);
      $this->assertEquals($this->car->getBrand(), $this->testCarData['brand']);
      $this->assertEquals($this->car->getConsumption(), $this->testCarData['consumption']);
   }

   /**
    * @depends testReturnFields
    */
   public function testSetFields() {

      $fieldsToSet = [
         'year'         => '2222',
         'currentPrice' => 2222,
         'brand'        => '2222',
         'consumption'  => 2222
      ];

      $this->car->setYear($fieldsToSet['year']);
      $this->car->setCurrentPrice($fieldsToSet['currentPrice']);
      $this->car->setBrand($fieldsToSet['brand']);
      $this->car->setConsumption($fieldsToSet['consumption']);;

      $this->assertEquals($this->car->getYear(), $fieldsToSet['year']);
      $this->assertEquals($this->car->getCurrentPrice(), $fieldsToSet['currentPrice']);
      $this->assertEquals($this->car->getBrand(), $fieldsToSet['brand']);
      $this->assertEquals($this->car->getConsumption(), $fieldsToSet['consumption']);

   }
}
