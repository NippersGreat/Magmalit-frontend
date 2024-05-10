<?php

$name = iconv("utf-8", "windows-1251", $_POST['name']
);
$tel = $_POST['tel'];



$email = htmlspecialchars($name);
$phone = htmlspecialchars($tel);

$email = urldecode($name);
$phone = urldecode($tel);

$email = trim($name);
$phone = trim($tel);

if(mail("tov.magmalit@gmail.com",
"Новое письмо с сайта ООО Магмалит",
"Имя, или организация: ".$name."\n".
"Телефон: ".$tel."\n",
"From: Magmalit.in.ua \r\n")
)

{
	header('location: thank-you.html');
}

else
{
	header('location: ERROR.html');
}

?>
