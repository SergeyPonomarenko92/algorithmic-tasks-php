//Спросите город пользователя с помощью формы. Результат запишите в переменную $city. Выведите на экран фразу 'Ваш город: %Город%'.
<?php
if (!empty($_GET['city'])){
    $city = $_GET['city'];
    echo "your city is" . $city;
}
?>
<form action="" method="GET">
    <input type="text" name="city"><br><br>
    <input type="submit">
</form>

//Решим предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать нам сайт. Для этого при записи содержимого поля в переменную $city обработаем его (содержимое, то есть $_REQUEST['city']) функцией strip_tags, которая удалит теги (можно вместо нее обработать функцией htmlspecialchars):
<?php
if (!empty($_GET['city'])){
    $city = strip_tags($_GET['city']);
    echo "your city is" . $city;
}
?>
<form action="" method="GET">
    <input type="text" name="city"><br><br>
    <input type="submit">
</form>

// сделаем так, чтобы форма после отправки скрывалась:
<?php
//Если город пустой - покажем форму
if (empty($_REQUEST['city'])) {
    ?>
    <form action="" method="GET">
        <input type="text" name="name">
        <input type="submit">
    </form>
    <?php
}
?>

<?php
//Если форма была отправлена и город не пустой:
if (isset($_REQUEST['city'])) {
    $age = strip_tags($_REQUEST['age']);
    echo 'Ваш город: '.$age;
}
?>

// Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'.
<?php
if (!empty($_GET['name'])){
    $name = $_GET['name'];
    echo "your name is" . $name;
}
?>
<form action="" method="GET">
    <input type="text" name="name"><br><br>
    <input type="submit">
</form>

//Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.
почему это не правильно
<?php
if (isset($_REQUEST['age']) and ($_REQUEST['name']) and ($_REQUEST['textarea'])) {
    $age = strip_tags($_REQUEST['age']);
    $name = strip_tags($_REQUEST['name']);
    $textarea = strip_tags($_REQUEST['textarea']);
    echo "Привет, $name, $age <br> твое сообщение: $textarea";
}
if (empty($_REQUEST)){
?>
<form action="" method="GET">
    <input type="text" name="name"><br><br>
    <input type="text" name="age"><br><br>
    <textarea type="text" placeholder="please enter your message in hear" name="textarea"></textarea>
    <input type="submit">
</form>
<?php
}
?>

// Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее.
<?php
if (isset($_REQUEST['age'])){
    $age = strip_tags($_REQUEST['age']);
    echo  $age;
}
?>
<?php
if (empty($_REQUEST['age'])) {
    ?>
    <form action="" method="GET">
        <input type="text" name="age"><br><br>
        <input type="submit">
    </form>
    <?php
}
?>

// Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.
<?php
$FormLogin = 'db value';
$FormPassword = 123;
$login = trim(strip_tags($_POST['login']));
$password = trim(strip_tags($_POST['password']));
if (isset($_POST['password']) == $FormPassword and ($_POST['login']) == $FormLogin){
    echo  'Access added';
}
?>
<?php
if (!isset($_POST['password']) and ($_POST['login'])){
    echo "Access denied!";
    ?>
    <form action="" method="post">
        <input type="text" name="login"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit">
    </form>
    <?php
}
?>

//  Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.
<?php
if (isset($_POST['name'])){
    $name = trim(strip_tags($_POST['name']));
    echo 'your name' . $name;
}
?>
<?php
if (!isset($_POST['name'])){
    ?>
    <form action="" method="post">
        <input type="text" placeholder="enter your name please" value="<?php if(!isset($_POST['name'])) echo $_POST['name'] ?>" name="name"><br><br>
        <input type="submit">
    </form>
    <?php
}
?>

// Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). Сделайте так, чтобы после отправки формы значения его полей не пропадали.
<?php
if (isset($_POST['name']) and ($_POST['textarea'])){
    $name = trim(strip_tags($_POST['name']));
    $textarea = trim(strip_tags($_POST['textarea']));
}
?>
<?php
if (!isset($_POST['name']) and ($_POST['textarea'])){
    ?>
    <form action="" method="post">
        <input type="text" placeholder="enter your name please" value="<?php if(!isset($_POST['name'])) echo $_POST['name'] ?>" name="name"><br><br>
        <textarea type="text" placeholder="enter your name please" name="textarea"><?php if(!isset($_POST['textarea'])) echo $_POST['textarea']?></textarea>
        <input type="submit">
    </form>
    <?php
}
?>
