<?php
namespace CJDennis\Message;

use ArgumentCountError;
use Exception;

trait MessageExceptionTestCommon {
  protected function common_before() {
  }

  protected function common_after() {
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

  public function testShouldCreateANewExceptionWithAnErrorCode() {
    $example_message_exception = new ExampleMessageException('Test exception', 42);
    $this->assertSame(42, $example_message_exception->getCode());
  }

  public function testShouldCreateANewExceptionUsingOnlyAnErrorCode() {
    $example_message_exception = ExampleMessageException::new(ExampleMessageException::ERROR_CODE);
    $this->assertSame(ExampleMessageException::ERROR_CODE, $example_message_exception->getCode());
  }

  public function testShouldCreateANewExceptionWithAStandardMessageUsingOnlyAnErrorCode() {
    $example_message_exception = ExampleMessageException::new(ExampleMessageException::ERROR_CODE);
    $this->assertSame(ExampleMessageException::MESSAGE[ExampleMessageException::ERROR_CODE], $example_message_exception->getMessage());
  }
}
