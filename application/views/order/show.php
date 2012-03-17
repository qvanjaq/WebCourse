<div class='title'>Заказ</div>
<div><a href='{$_SERVER.REQUEST_HOST}/order/delete/id/{$id}'>Удалить заказ</a></div>
<div>Время заказа: {$time}</div>
<table class='admin'>
    <tr>
        <th>Название блюда</th>
        <th>Тип бюлюда</th>        
    </tr>
    
{foreach from=$courses item=course}
    <tr>
        <td>{$course.courseName}</td>
        <td>{$course.categoryName}</td>        
    </tr>
{/foreach}
</table>