<?php if (isset($_COOKIE['login'])): ?>
    Привет, <?= $_COOKIE['login'] ?>!
    <br />
    Дата последнего логина: <?= $_COOKIE['lastLoginTime'] ?>
<?php else: ?>
    <form action="cookie_handler.php">
        Login: <input type="text" name="login" /><br />
        Cookie's lifetime: <input type="text" name="cookiesLifeTime" />
        <input type="submit" value="Send" />
    </form>
<?php endif; ?>
