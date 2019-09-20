<?php
namespace CjDennis\Message;

use Exception;

abstract class MessageException extends Exception {
  public function __construct($message, $code, \Throwable $previous = null) {
    parent::__construct($message, $code, $previous);
  }
}
