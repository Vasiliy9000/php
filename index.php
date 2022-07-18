<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title>Отправится письмо</title> 
    </head> 
<body> 
    <form action="index.php" method="POST"> 
        <label for="fname">Отправится письмо на указанную почту</label><br> 
        <input type="text" name="$to"  value="mr.nightexpres@gmail.com" ><br> 
        <input type="text" name="$subject"  value="Тема письма" ><br> 
        <input type="text" name="$message"  value="Само письмо" ><br>
        <input type="submit" value="Отправить"> 
    </form> 
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