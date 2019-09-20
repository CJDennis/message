<?php
namespace CjDennis\Message;

use ArgumentCountError;
use Codeception\Test\Unit;
use Exception;

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

  public function testShouldCreateAnInstanceOfException() {
    $example_message_exception = new ExampleMessageException('Test exception', 42);
    $this->assertInstanceOf(Exception::class, $example_message_exception);
  }
}
