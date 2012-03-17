<div class='title'>Вход</div>


<form method='post' id='login'>
    <table>
    <tr><td colspan=2><a href='{$_SERVER.REMOTE_HOST}/site/registration'>Регистрация</a></td></tr>
    <tr><td colspan=2><span class='error'>{$error}</span></td></tr>
    <tr><td>Email</td><td><input type='text' name='login[mail]' value='{$login.mail}'></td></tr>
    <tr><td>Пароль</td><td><input type='password' name='login[password]' value='{$login.password}'></td></tr>
    <tr><td colspan=2><input type='submit' value=' Вход '></td></tr>
    </table>
</form>