<?php
namespace CJDennis\Message;

use Codeception\Test\Unit;

class MessageExceptionTest extends Unit {
  use MessageExceptionTestCommon;

  /**
   * @var \UnitTester
   */
  protected $tester;

  protected function _before() {
    $this->common_before();
  }

  protected function _after() {
    $this->common_after();
  }

}
