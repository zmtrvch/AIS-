<!doctype html>
<html lang="ru">
<head>
<title>Админ-панель</title>
</head>
<body>
<?php
    $host="localhost";
    $user="root1";
    $pass="1234"; //установленный вами пароль
    $db_name="bokdb";
    $link=mysqli_connect($host,$user,$pass,$db_name );
?>

<?php
//Если переменная Name передана
if (isset($_POST['table_number'])) {
    //Вставляем данные, подставляя их в запрос
    $sql = mysqli_query($link, "INSERT INTO Halls (1,table_number) 
                              VALUES (1,table_number)");
    //Если вставка прошла успешно
    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }
}
?>
</body>

<table>
<form action="" method="post">
    <tr>
        <td>Количество столов:</td>
        <td><input type="text" name="table_number"></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="OK"></td>
    </tr>
</form>
</table>

