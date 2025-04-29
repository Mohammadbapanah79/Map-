<?php
usleep(500 * 1000); // 500ms delay
include '../bootstrap/init.php';
if (!isAjaxRequest()) {
    die('Invalid request!');
}
$keyword = $_POST['keyword'];
if (!isset($keyword) || empty($keyword)) {
    diePage('شروع به تایپ کنید ... ');
}
$locations = getLocations(['keyword' => $keyword]);
if (sizeof($locations) == 0) {
    diePage('مکانی با این نام پیدا نشد!');
}

#send header content type json 
foreach ($locations as $loc) {
    echo "<a href='" . BASE_URL . "?loc=$loc->id'><div class='result-item' data-lat='$loc->lat' data-lng='$loc->lng' data-loc='$loc->id'>
        <span class='loc-type'>" . locationTypes[$loc->type] . "</span>
        <span class='loc-title'>$loc->title</span>
    </div></a>";
}
