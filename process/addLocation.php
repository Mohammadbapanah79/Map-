<?php
include '../bootstrap/init.php';
if (!isAjaxRequest()) {
    die('Invalid request!');
}
// request is ajax
if (insertLocation($_POST)) {
    echo "مکان با موفقیت در پایگاه داده ذخیره شد! لطفا منتظر تایید باشید ";
} else {
    echo "مشکلی در ثبت مکان پیش آمده است لطفا بعد از مدتی دوباره امتحان کنید ";
}
