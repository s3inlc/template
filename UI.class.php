<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 10.11.16
 * Time: 14:46
 */

class UI {
  public static function printError($level, $message) {
    $OBJECTS = array();
    $TEMPLATE = new Template("errors/error");
    $OBJECTS['message'] = $message;
    $OBJECTS['level'] = $level;
    echo $TEMPLATE->render($OBJECTS);
    die();
  }
  
  public static function printFatalError($message) {
    echo $message;
    die();
  }
  
  public static function addMessage($type, $message) {
    global $OBJECTS;
    
    $OBJECTS['messages'][] = new DataSet(array('type' => $type, 'message' => $message));
  }
}
