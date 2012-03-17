<div class='title'>Результат запроса по времени</div>


{foreach from=$info item=item}
   <h3>{$item['user']['mail']}</h3>

   <table class='admin'>
       <tr>
           <th>Название блюда</th>
           <th>Тип блюда</th>
       </tr>
       
      {foreach from=$item['order'] item=course}
          <tr>
              <td>{$course.courseName}</td>
              <td>{$course.categoryName}</td>
          </tr>
      {/foreach}
   </table>
{/foreach}
