<?php
header("Content-type: text/html; Charset=windows-1251");
?>
<!-- 1. ������� ����� � ������ ������:
���
�������
���� ����������������, ������� ���
����, ������� ����� �� ������� -->

<!--
<form action="" name="test-form" method="POST">
    ���: <input type="text" name="name" /> <br />
    �������: <input type="text" name="lastname" /> <br />
    ���� ����������������, ������� ���: <input type="text" name="lang1" /> <br />
    ����, ������� ����� �� �������: <input type="text" name="lang2" /> <br />
    <input type="submit" value="���!">
</form>
-->

<!-- 2.  ������� ������ � ������� ��������� ����� �� ��������:
������!
���� ����� <���> <�������>. � ������ <���� ����������������>. ����� �� ������� <���� ����������������>. -->

<?php
// echo "������!<br />
// ���� ����� " . $_POST['name'] . " " . $_POST['lastname'] . ". " . "� ������ " . $_POST['lang1'] . ". ����� �� ������� " . $_POST['lang2'] . ".";
?>

<!-- 
<form action="" name="test-form" method="GET">
    �����: <input type="text" name="word" /> <br />
    ���-�� ����������: <input type="text" name="repeat" /> <br />
    <input type="submit" value="Start!">
</form>
 -->

<?php
/*
$n = $_GET['repeat'];
$i = 0;
while ($i < $n) {
	echo $_GET['word'] . '<br />';
	$i++;
}
*/
?>

<form action="" name="test-form" method="POST">
    �����: <input type="text" name="word" /> <br />
    ���-�� ����������: 
    <select name="repeat">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
    </select>
    <input type="submit" value="Start!">
</form>

<?php

$n = $_POST['repeat'];
$i = 0;
while ($i < $n) {
	echo strrev($_POST['word']) . '<br />';
	$i++;
}

?>
