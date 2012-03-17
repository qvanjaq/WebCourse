<div class='title'>Вход администратора</div>


<form method='post' id='login'>
    <table>
    <tr><td colspan=2><span class='error'>{$error}</span></td></tr>
    <tr><td>Логин</td><td><input type='text' name='login[login]' value='{$login.login}'></td></tr>
    <tr><td>Пароль</td><td><input type='password' name='login[password]' value='{$login.password}'></td></tr>
    <tr><td colspan=2><input type='submit' value=' Вход '></td></tr>
    </table>
</form>