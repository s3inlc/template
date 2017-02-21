<?php

/**
 * Created by IntelliJ IDEA.
 * User: sein
 * Date: 03.01.17
 * Time: 16:08
 */

require_once(dirname(__FILE__) . "/../init.php");

$TEMPLATE = new Template("if");

//$OBJECTS['user'] = "Testuser";
$OBJECTS['user'] = "Otheruser";

echo $TEMPLATE->render($OBJECTS);
