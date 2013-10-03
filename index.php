<?php

require_once('Nexmo/Nexmo.php');

class ApplicationNexmo {
  protected static $instance = null;

  /**
   * @return Nexmo
   */
  public static function getInstance() {
    if(self::$instance == null)
      self::$instance = new Nexmo('api_key', 'api_secret');

    return self::$instance;
  }
}


ApplicationNexmo::getInstance()->sendMessage('to', 'from-name', 'message');