<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 03.01.17
 * Time: 16:08
 */

require_once(dirname(__FILE__) . "/../init.php");

$TEMPLATE = new Templating\Template("loops");

$OBJECTS['list'] = array("Book", "Car", "Child", "Bus");
$OBJECTS['counts'] = 10;

echo $TEMPLATE->render($OBJECTS);
