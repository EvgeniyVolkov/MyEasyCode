<form action="" name="test">
    URL: <input type="text" name="URL"><br />
    Заменить это слово: <input type="text" name="word1"> на это слово: <input type="text" name="word2"><br />
    <input type="submit" value="Get data!">
</form>

<?php

if (isset($_GET['URL'])) {
	$url = $_GET['URL'];
	$html = file_get_contents($url);
	// echo $html;
	$word1 = $_GET['word1'];
	$word2 = $_GET['word2'];
	$result = str_replace($word1, $word2, $html);
	echo $result;
} else {
	echo 'Please, insert URL';
}

?>