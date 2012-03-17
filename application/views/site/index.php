<a href='{$_SERVER.SERVER_NAME}/site/logout' class='logout'>Выход</a>
<div id='checkboxs'>
   <div id='message'></div>
   <form method='post' id='form'>
      {foreach from=$courses key=category item=cs}
         <h3>{$category}</h3>
         <div class='cbBlock'>
         {capture}{$i++}{/capture}
         {foreach from=$cs item=course}
            <label>
               <input type='checkbox' name='courses[{$i - 1}][]' value='{$course.id}'>{$course.name}
            </label><br>
         {/foreach}
         </div>
      {/foreach}
      <button id='order'>Заказать</button>
   </form>
</div>