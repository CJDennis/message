<?php
namespace CjDennis\Message;

use Exception;

abstract class MessageException extends Exception {
  public function __construct($message, $code, \Throwable $previous = null) {
    parent::__construct($message, $code, $previous);
  }

  public static function new($error_no): MessageException {
    return new static(static::MESSAGE[$error_no], $error_no);
  }
}
