<div class='title'>Выберите пользователя</div>
<table class='admin'>
    <tr>
        <th>email</th>
        <th>Действие</th>        
    </tr>
    
{foreach from=$users item=user}
    <tr>
        <td>{$user.mail}</td>
        <td><a href='{$_SERVER.REMOTE_HOST}/order/show/id/{$user.id}'>Просмотр заказа</a></td>        
    </tr>
{/foreach}
</table>