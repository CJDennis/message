<?php
namespace CjDennis\Message;

use ArgumentCountError;
use Codeception\Test\Unit;

class MessageExceptionTest extends Unit {
  /**
   * @var \UnitTester
   */
  protected $tester;

  protected function _before() {
  }

  protected function _after() {
  }

  // tests
  public function testShouldNotCreateANewExceptionWithoutAnErrorCode() {
    try {
      /** @noinspection PhpParamsInspection */
      new ExampleMessageException('Test exception');
    }
    catch (ArgumentCountError $e) {
      $this->assertTrue(true);
    }
  }
}
