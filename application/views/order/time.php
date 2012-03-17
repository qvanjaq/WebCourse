<div class='title'>Выберите диапазон дат</div>

<form method='post'>
    <table>
        <tr><td colspan=2><span class='error'>{$error}</span></td></tr>
        <tr><td>Начальное время</td><td><input type='text' name='time[begin]' value='{$time.begin}'></td></tr>
        <tr><td>Конечное время</td><td><input type='text' name='time[end]' value='{$time.end}'></td></tr>
        <tr><td colspan=2><input type='submit' value=' Отобразить '></td></tr>
    </table>
</form>

<script>
    $('input[type=text]').datepicker();
</script>