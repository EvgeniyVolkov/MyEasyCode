<?php
$login = $_GET['login'];
$date = date('Y-m-d H:i:s');
setcookie('lastVisitTime', $date, $time);
if (isset($_COOKIE['login'])): ?>
Привет, <?= $_COOKIE['login'] ?>!
<br />
Дата последнего логина: <?= $_COOKIE['lastLoginTime'] ?>
<br />

<?php else: ?>
    <form action="cookie_handler.php">
        Login: <input type="text" name="login" /><br />
        Cookie's lifetime: <input type="text" name="cookiesLifeTime" />
        <input type="submit" value="Send" />
    </form>

    Дата последнего посещения: <?= $_COOKIE['lastVisitTime'] ?>

<?php endif; ?>


