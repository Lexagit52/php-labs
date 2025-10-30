
<?php
// Имя файла журнала
define('PATH_LOG', 'log/path.log');
include 'inc/log.inc.php';
?>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Сайт нашей школы</title>
    <link rel="stylesheet" href="inc/style.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php?id=about">О нас</a></li>
        <li><a href="index.php?id=contact">Контакты</a></li>
        <li><a href="index.php?id=info">Информация</a></li>
        <li><a href="index.php?id=gbook">Гостевая книга</a></li>
      <li><a href='index.php?id=log'>Журнал посещений</a></li>

    </ul>
</nav>

<main>
<?php
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
    case 'gbook':
        include 'inc/gbook.inc.php';
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
