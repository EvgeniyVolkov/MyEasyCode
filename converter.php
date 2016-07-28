<!-- Создать форму для конвертации валюты. Доступная валюта: USD, EUR, UAH.
Форма должна содержать:
1. Select с выбором валюты из которой конвертируем
2. Select с выбором валюты в которую конвертируем 
3. Сумму

Курс для каждой из валют задается в массиве в php  файле -->

<form action="" name="test-form" method="GET">
    Ковертируем из: <br />
    <select name="valuta_from">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="UAH">UAH</option>
    </select><br />
    Ковертируем в: <br />
    <select name="valuta_to">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="UAH">UAH</option>
    </select><br />
    Сумма:<br />
    <input type="text" name="sum" /> <br /><br />
    <input type="submit" value="Convert!">
</form>

<?php

$courses = ['USD' => 25, 'EUR' => 28, 'UAH' => 1];

$valuta_from = $_GET['valuta_from'];
$valuta_to = $_GET['valuta_to'];
$sum = $_GET['sum'];

if ($valuta_from != $valuta_to) {
	foreach ($courses as $valuta1 => $course1) {
		if ($valuta_from == $valuta1) {
			foreach ($courses as $valuta2 => $course2) {
				if ($valuta_to == $valuta2) {
					$result = $sum * $course1 / $course2;
					echo $result;
				}
			}
		}
	}

} else {
	echo "Выберите валюту для конвертации!";
}

?>