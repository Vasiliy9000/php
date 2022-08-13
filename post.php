<html> 
    <head> 
        <meta charset="utf-8"> 
        <title> Запишется в файл hello.txt </title> 
        <title>Отправится письмо</title> 
    </head> 
<body> 
    <form action="index.php" method="POST"> 
        <label for="fname"> Запишется в файл hello.txt</label><br> 
        <input type="text" id="fname" name="fname" ><br> 
        <input type="submit" value="Записать"> 
        <label for="fname">Отправится письмо на указанную почту</label><br> 
        <input type="text" name="$to"  value="mr.nightexpres@gmail.com" ><br> 
        <input type="text" name="$subject"  value="Тема письма" ><br> 
        <input type="text" name="$message"  value="Само письмо" ><br>
        <input type="submit" value="Отправить"> 
    </form> 
    <?php 
        if (isset($_POST['fname'])) 
        { 
            $str = $_POST['fname']; 
            $fd = fopen("hello.txt", 'w') or die("не удалось создать файл"); 
            fwrite($fd, $str); 
            fclose($fd); 
            echo "$str"; 
        } 
    ?> 
    <?php // из супер переменной берем знчения
        if (isset($_POST['$to'],$_POST['$subject'],$_POST['$message'])) 
        {
            $to = $_POST['$to'];
            $subject = $_POST['$subject'];
            $message = $_POST['$message'];
            mail($to, $subject, $message);

        }
    ?>

</body> 
</html> 