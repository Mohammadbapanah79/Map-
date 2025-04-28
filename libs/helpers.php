<?php defined('BASE_PATH') or die('access denied!');

function getCurrentUrl()
{
    return 1;
}

function diePage($msg)
{
    echo "<div style='padding: 30px;width: 80%;margin: 50px auto; background: #f9dede;border-radius: 5px; border: 1px solid #cca4a4;font-family: sans-serif'>$msg</div>";
    die;
}
function redirect($url){
    header("Location: $url");
    die();
}

function message($msg,$cssClass = 'info')
{
    echo "<div class='$cssClass' style='padding: 20px;width: 80%;margin: 10px auto; color: #22bb33;border-radius: 5px; border: 1px solid #cca4a4;font-family: sans-serif'>$msg</div>";
}


function isAjaxRequest()
{
    if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
        return true;
    }
    return false;
}

function dd($variable)
{
    echo "<pre style='color: red;background: black;z-index: 99999;position:relative;font-family: vazir;line-height: 1.4em;padding: 10px;border-radius: 5px;margin: 10px;border-left: 3px solid red;direction: ltr;text-align: left; '>";
    var_dump($variable);
    echo "</pre>";
}

function siteUrl($uri = '')
{

    return BASE_URL . $uri;
}