<!DOCTYPE HTML> 
<html> 
    <head> 
        <meta charset="utf-8"> 
        <title> Запишется в файл hello.txt </title> 
    </head> 
<body> 
    <form action="index.php" method="POST"> 
        <label for="fname"> Запишется в файл hello.txt</label><br> 
        <input type="text" id="fname" name="fname" ><br> 
        <input type="submit" value="Записать"> 
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
</body> 
</html>