<?php

class Nexmo {

  /**
   * @var NexmoMessage
   */
  private $_message;

  public function __construct($api_key, $api_secret){
    include ( "NexmoMessage.php" );

    $this->_message = new NexmoMessage($api_key, $api_secret);
  }

  public function sendMessage($to, $from_name, $message) {
    if(is_array($to)) {
      foreach($to as $t)
        $this->_message->sendText( $t, $from_name, $message);

      return true;
    } elseif(is_string($to)) {
      $this->_message->sendText( $to, $from_name, $message);

      return true;
    }

    throw new Exception('Param TO expecting string or array');
  }

}
