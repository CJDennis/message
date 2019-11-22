<?php
namespace CJDennis\Message;

use PHPUnit\Framework\TestCase;

/**
 * @covers \CJDennis\Message\MessageException
 */
class MessageExceptionTest extends TestCase {
  use MessageExceptionTestCommon;

  protected function setUp(): void {
    $this->common_before();
  }

  protected function tearDown(): void {
    $this->common_after();
  }
}
