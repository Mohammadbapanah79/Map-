<?php
include '../bootstrap/init.php';
if (!isAjaxRequest()) {
    die('Invalid request!');
}
if(is_null($_POST['loc']) or !is_numeric($_POST['loc'])){
    echo "Invalid Location";
    die();
}
// request is Ajax and OK
echo toggleStatus($_POST['loc']);
