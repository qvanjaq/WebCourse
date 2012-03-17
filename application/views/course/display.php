<div class='title'>Блюда</div>
<a href='{$_SERVER.REMOTE_HOST}/course/add'>Добавить</a>
<table class='admin'>
    <tr>
        <th>Название блюда</th>
        <th>Тип блюда</th>
        <th>Действие</th>
    </tr>
    
{foreach from=$courses item=course}
    <tr>
        <td>{$course.course_name}</td>
        <td>{$course.category_name}</td>
        <td>
            <a href='{$_SERVER.REMOTE_HOST}/course/delete/id/{$course.id}'>Удалить</a>
            <a href='{$_SERVER.REMOTE_HOST}/course/update/id/{$course.id}'>Обновить</a>
        </td>
    </tr>
{/foreach}
</table>