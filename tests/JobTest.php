<?php

use App\models\Job;
use PHPUnit\Framework\TestCase;

class JobTest extends TestCase {
   private $job;
   private $testJobData = [
      'name'        => 'RUFUS',
      'address'     => "12-44 PI",
      'phoneNumber' => '+ 231 331 23 11',
   ];

   protected function setUp(): void {
      $this->job = new Job(
         $this->testJobData['name'],
         $this->testJobData['address'],
         $this->testJobData['phoneNumber'],
      );
   }

   protected function tearDown(): void {
   }

   public function testReturnFields() {
      $this->assertEquals($this->job->getName(), $this->testJobData['name']);
      $this->assertEquals($this->job->getAddress(), $this->testJobData['address']);
      $this->assertEquals($this->job->getPhoneNumber(), $this->testJobData['phoneNumber']);
   }

   /**
    * @depends testReturnFields
    */
   public function testSetFields() {

      $fieldsToSet = [
         'name'        => 'testName',
         'address'     => 'testAddress',
         'phoneNumber' => 'testPhoneNumber',
      ];

      $this->job->setName($fieldsToSet['name']);
      $this->job->setAddress($fieldsToSet['address']);
      $this->job->setPhoneNumber($fieldsToSet['phoneNumber']);

      $this->assertEquals($this->job->getName(), $fieldsToSet['name']);
      $this->assertEquals($this->job->getAddress(), $fieldsToSet['address']);
      $this->assertEquals($this->job->getPhoneNumber(), $fieldsToSet['phoneNumber']);
   }
}