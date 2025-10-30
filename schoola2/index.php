<?php 
  include 'inc/headers.inc.php'; 
  include 'inc/cookie.inc.php'; 
?>
<!DOCTYPE html>
<html>

<head>
  <title><?=$title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="inc/style.css" />
</head>

<body>

  <div id="header">
    <img src="logo.gif" width="187" height="29" alt="Наш логотип" class="logo" />
    <span class="slogan">обо всём сразу</span>
  </div>

  <div id="content">
    <h1><?= $header ?></h1>

    <div class="cookie-block">
      <?php if ($visitCounter == 1): ?>
        <p>Спасибо, что зашли </p>
      <?php else: ?>
        <p>Вы зашли к нам <strong><?= $visitCounter ?></strong> раз(а).</p>
        <p>Последнее посещение: <strong><?= $lastVisit ?></strong></p>
      <?php endif; ?>
    </div>

    <?php include 'inc/routing.inc.php'; ?>
  </div>

  <div id="nav">
    <h2>Навигация по сайту</h2>
    <ul>
      <li><a href='index.php'>Домой</a></li>
      <li><a href='index.php?id=contact'>Контакты</a></li>
      <li><a href='index.php?id=about'>О нас</a></li>
      <li><a href='index.php?id=info'>Информация</a></li>
      <li><a href='index.php?id=gbook'>Гостевая книга</a></li>
    </ul>
  </div>

  <div id="footer">
    &copy; Супер-мега сайт, 2000 &ndash; <?= date('Y')?>
  </div>
</body>
</html>
