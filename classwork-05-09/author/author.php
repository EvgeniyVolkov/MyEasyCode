<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'query.php';

$connectionObject = getDbConnection();

if(isset($_GET['id'])) {

    $authorName = $_GET['id'];
    echo 'Author: ' . $authorName;

    $rows = getAuthorsBooks($authorName);

    ?>

    <table>
        <tr>
            <td>Books:</td>
        </tr>

        <?php foreach($rows as $index => $author): ?>
            <tr>
                <td><?= $author['name']; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

    <a href="index.php">На главную</a>

<?php
}
?>