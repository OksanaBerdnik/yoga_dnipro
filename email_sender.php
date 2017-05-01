<?
        $to = 'Berdnikoksana77@gmail.com'; // Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = "Заказ на Йогамарафон Днепр";  //Загаловок сообщения
        $message = '
                <html>
                    <head>
                        <title>Заявка / FK /'.$subject.'</title>
                    </head>
                    <body>
                        <p><b>Имя:</b> '.$_GET['name'].'</p>
                        <p><b>Телефон:</b> '.$_GET['phone'].'</p>  
                        <p><b>Email:</b> '.$_GET['email'].'</p>                                   
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
?>