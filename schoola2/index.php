<?php
define('PATH_LOG', 'log/path.log');


include 'inc/log.inc.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Сайт нашей школы</title>
    <link rel="stylesheet" href="schoola2\inc\style.css">
</head>
<body>

<nav>
    <ul>

        <li><a href="index.php?id=about">О нас</a></li>
        <li><a href="index.php?id=contact">Контакты</a></li>
        <li><a href="index.php?id=info">Информация</a></li>

        <li><a href="index.php?id=log">Журнал посещений</a></li>
    </ul>
</nav>

<main>
<?php
// Вывод содержимого страниц
$id = $_GET['id'] ?? 'home';
switch($id){
    case 'about':
        include 'inc/about.inc.php';
        break;
    case 'contact':
        include 'inc/contact.inc.php';
        break;
    case 'info':
        include 'inc/info.inc.php';
        break;
    case 'guest':
        include 'inc/guest.inc.php';
        break;
    case 'log':
        include 'inc/view-log.inc.php';
        break;
    default:
        include 'inc/home.inc.php';
}
?>
</main>

</body>
</html>
