<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connectionObject = mysqli_connect("localhost", "root", "28fKq179tZm50", "evgeniy");

$resource = mysqli_query($connectionObject, 
	"SELECT
   `a`.`id`, `a`.`name`, `a`.`age`, count(*)
FROM `author` AS `a`
INNER JOIN `author_book` AS `ab`
  ON `a`.`id` = `ab`.`author_id`
  GROUP BY `a`.`id`, `a`.`name`, `a`.`age`;"
 );

$rows = array();
while (true) {
    $row = mysqli_fetch_assoc($resource);
    if ($row === null) {
        break;
    }

    $rows[] = $row;
}

echo '<pre>';
print_r($rows);
echo '</pre>';
?>

<table style="border: #000 1px solid">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Age</td>
        <td>Books quantity</td>
    </tr>
    
<?php
foreach($rows as $index => $author) {
?>
	<tr>
    	<td><?= $author['id'] ?></td>
    	<td><?= $author['name'] ?></td>
    	<td><?= $author['age'] ?></td>
    	<td><?= $author['count(*)'] ?></td>
    </tr>
<?php
}
?>
</table>