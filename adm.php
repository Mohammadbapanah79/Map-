<?php
include "bootstrap/init.php";
if (isset($_GET['logout']) && $_GET['logout'] == 1) {
    logout();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!login($_POST['username'], $_POST['password'])) {
        message("Invalid username or password", "danger");
    }
}

if (isloggedIn()) {
    $params = $_GET ?? [];
    $locations = getLocations($params);
    // dd($locations);
    include "tpl/tpl-adm.php";
} else {
    include "tpl/tpl-adm-form.php";
}
