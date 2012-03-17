<div class='title'>Добавление блюда</div>

<form method='post' id='addCourse'>
    <table>
        <tr><td colspan=2><span class='error'>{$error}</span></td></tr>
        <tr><td>Название</td><td><input type='text' name='course[name]' value='{$course.name}'></td></tr>
        <tr>
            <td>Категория</td>
            <td>
                <select name='course[id_category]'>
                    {foreach from=$select item=category}
                        {capture}
                        {if $course.id_category == $category.id}
                            {$selected = "selected='selected'"}
                        {else}
                            {$selected = ""}
                        {/if}
                        {/capture}
                        <option value='{$category.id}' {$selected}>{$category.name}</option>
                    {/foreach}
                </select>
            </td>
        </tr>
        <tr><td colspan=2><input type='submit' value=' Сохранить '></td></tr>
    </table>
</form>