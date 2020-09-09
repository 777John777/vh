<!DOCTYPE html>
<html lang="ru">
<link href="style.css" media="screen" rel="stylesheet" type="text/css">
<form class="form" action="third.php" method="post">
    <h1>Авторизация</h1>
    <?php
        echo $_GET['error'];
    ?>
    <p class="field">
        <input type="text" name="email" placeholder="Email" required>
    </p>
        <p class="field">
            <input type="text" name="pass" placeholder="Пароль" class="password" required>
        </p>
        <p class="submit">
           <button type="submit" name="submit">Авторизация</button>
        </p>
</form>
<html>