<?php
$age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
if ($age === false) {
  print 'В поле возраст указано неверное значение, попробуй еще раз';

} else {
  print 'Все отдлично, данные отправлены';
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo htmlentities($_SERVER['SCRIPT_NAME']); ?>" method="post">
    <input type="text" placeholder="Имя" name="firsName">
    <input type="text" placeholder="Фамилия" name="lastName">
    <input type="text" placeholder="Возраст" name="age">
    <input type="submit" name="Отправить">
  </form>

</body>
</html>