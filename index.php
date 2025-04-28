<?php
include "bootstrap/init.php";
$location = false;
if (isset($_GET['loc']) and is_numeric($_GET['loc'])) {
    $id = $_GET['loc'];
    $location = getLocation($id);
}


include "tpl/tpl-index.php";
