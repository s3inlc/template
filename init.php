<?php
/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 03.01.17
 * Time: 15:52
 */

define("TEMPLATES_PATH", dirname(__FILE__)."/exampleTemplates/");
define("LANGUAGES_PATH", dirname(__FILE__)."/lang/");

$entries = scandir(dirname(__FILE__));
foreach ($entries as $entry) {
  if (strpos($entry, ".class.php") !== false) {
    require_once(dirname(__FILE__) . "/" . $entry);
  }
}

$LANG = new Lang();

$OBJECTS = array();
$OBJECTS['TEMPLATE_VERSION'] = "1.0.0";
