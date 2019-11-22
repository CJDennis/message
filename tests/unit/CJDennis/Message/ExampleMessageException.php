<?php
namespace CJDennis\Message;

class ExampleMessageException extends MessageException {
  const ERROR_CODE = 10;

  const MESSAGE = [
    self::ERROR_CODE => 'Example message',
  ];
}
