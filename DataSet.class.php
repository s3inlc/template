<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 13.11.16
 * Time: 21:38
 */

namespace Template;

class DataSet {
  private $values;
  
  public function __construct($arr = array()) {
    $this->values = $arr;
  }
  
  public function setValues($arr) {
    $this->values = $arr;
  }
  
  public function addValue($key, $val) {
    $this->values[$key] = $val;
  }
  
  public function getVal($key) {
    if (isset($this->values[$key])) {
      return $this->values[$key];
    }
    return false;
  }
  
  public function getAllValues() {
    return $this->values;
  }
}