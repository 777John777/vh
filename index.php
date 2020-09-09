<!DOCTYPE html>
<html lang="ru">
<link href="style.css" media="screen" rel="stylesheet" type="text/css">
<form class="form" action="second.php" method="post">
    <h1>Регистрация</h1>
    <p class="field">
        <input type="text" name="name"  placeholder="Имя"required >
    </p>
    <p class="field">
        <input type="email" name="email" placeholder="Email" required>
    </p>
    <p class="field">
        <input type="tel" name="tel" placeholder="Телефон" required>
    </p>
    <p class="field">
        <input type="text" name="pass" placeholder="Пароль" class="password1" required>
    </p>
    <p class="field">
        <input type="text" name="pass_p" placeholder="Подтверждение пароля" class="password2" required>
    </p>
    <p class="submit">
        <button type="submit" name="submit" >Регистрация</button>
    </p>
</form>
<html>
