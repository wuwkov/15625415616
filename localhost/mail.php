<?php
	// получим данные с элементов формы
	$text = $_POST['name'];
	$tel = $_POST['phone'];
	// обработаем полученные данные
	$text = htmlspecialchars($text); // преобразование символов в сущности (мнемоники)
	$tel = htmlspecialchars($tel);
	$text = urldecode($text); // декодирование URL
	$tel = urldecode($tel);
	$text = trim($text); // удаление пробельных символов с обоих сторон
	$tel = trim($tel);
    $data = "ФИО клиента: ".$text."\n"."Номер телефона: ".$tel."\n";
    file_put_contents('data.txt',$data, FILE_APPEND);
    echo
        ('Заявка успешно отправлена!');
	// отправляем данные на почту
	//if (mail("dimakennys@gmail.com",
	//	"Здравствуйте, хочу оставить запись.",
	//	"ФИО клиента: ".$text."\n".
	//	"Номер телефона клиента: ".$tel)
	//) {
	//	echo ('Заявка успешно отправлена! Ожидайте звонка для уточнения информации и назначении встречи.');
	//}
	//else {
	//	echo ('Есть ошибки! Проверьте данные...');
	//}
?>