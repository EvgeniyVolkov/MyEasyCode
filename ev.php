<?php
$myName = '�������';
$mySurname = '������';
$myAge = 28;
$myHobby = '�����';

echo '���� ����� ' . $myName . ' ' . $mySurname . '. ��� ' . $myAge . ' ���. ��� �����: ' . $myHobby . '.';

echo "\r\n\r\n";

$myInfo = array(
	'myName' => '�������',
	'mySurname' => '������',
	'myAge' => 28,
	'myHobby' => '�����'
	);

print_r($myInfo);

echo "\r\n";

echo '���� ����� ' . $myInfo['myName'] . ' ' . $myInfo['mySurname'] . '. ��� ' . $myInfo['myAge'] . ' ���. ��� �����: ' . $myInfo['myHobby'] . '.';

