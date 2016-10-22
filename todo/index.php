<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'cookie.php';
?>
<?php
if (isset($_GET['header']) && $_GET['header'] != '') {
    saveData($_GET['header'], $_GET['text']);
}
showImage();
?>
<form action="">
    Заголовок: <input type="text" name="header"> <br />
    Текст: <textarea name="text"></textarea><br />
    <input type="submit">
</form>
<?php
foreach (getData() as $key => $data):
?>
    <div class="post">
        <h1><?= $data['header'] ?></h1>
            <?php
            if (!isset($_COOKIE[$imgID])) {
            ?>
                <img width="300px" height="300px" src="https://habrastorage.org/files/bbb/6d0/ce5/bbb6d0ce5b2e409aa9f8fe986d87eeec.png" alt="">
                <form>
                    <input type="submit" name="<?= $imgID; ?>" value="Do not show me this image again">
                </form>
            <?php
            }
            print_r($_GET);
            ?>
        <p><?= $data['text'] ?></p>
        (<?= isset($data['date_creation']) ? $data['date_creation'] : 'Дата отсутствует' ?>)
        Осталось до удаления: <?= $data['time_left'] ?>
    </div>
<?php endforeach; ?>