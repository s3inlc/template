<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 03.01.17
 * Time: 16:08
 */

require_once(dirname(__FILE__) . "/../init.php");

$TEMPLATE = new Template("include/index");

$OBJECTS['values'] = array("Book", "Car", "Child", "Bus");

echo $TEMPLATE->render($OBJECTS);
