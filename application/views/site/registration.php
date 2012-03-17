<div class='title'>Регистрация</div>

<form method='post' id='login'>
    <table>
    <tr><td colspan=2><span class='error'>{$error}</span></td></tr>
    <tr><td>Email</td><td><input type='text' name='reg[mail]' value='{$reg.mail}'></td></tr>
    <tr><td>Пароль</td><td><input type='password' name='reg[password]' value='{$reg.password}'></td></tr>
    <tr><td colspan=2><input type='submit' value=' Регистрация '></td></tr>
    </table>
</form>