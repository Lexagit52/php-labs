<?php


$visitCounter = 0;
$lastVisit = "";

if (isset($_COOKIE['visitCounter'])) {
    $visitCounter = (int)$_COOKIE['visitCounter'];
}

$visitCounter++;

if (isset($_COOKIE['lastVisit'])) {
    $lastVisit = date("d-m-Y H:i:s", (int)$_COOKIE['lastVisit']);
}

setcookie("visitCounter", $visitCounter, time() + 3600 * 24 * 30); // хранится 30 дней
setcookie("lastVisit", time(), time() + 3600 * 24 * 30);

if (isset($_COOKIE['lastVisit'])) {
    if (date('d-m-Y', $_COOKIE['lastVisit']) != date('d-m-Y')) {
        setcookie("visitCounter", $visitCounter, time() + 3600 * 24 * 30);
        setcookie("lastVisit", time(), time() + 3600 * 24 * 30);
    }
}
?>
