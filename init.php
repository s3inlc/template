<?php
/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 03.01.17
 * Time: 15:52
 */

namespace Templating;

define("TEMPLATES_PATH", dirname(__FILE__)."/exampleTemplates");
$entries = scandir(dirname(__FILE__));
foreach ($entries as $entry) {
  if (strpos($entry, ".class.php") !== false) {
    require_once(dirname(__FILE__) . "/" . $entry);
  }
}


$OBJECTS = array();
$OBJECTS['TEMPLATE_VERSION'] = "1.0.0";