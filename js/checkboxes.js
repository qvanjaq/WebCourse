max =
<?php
    $params = include __DIR__ . '/../application/config/main.php';
    echo $params['coursePerGroup'];
?>;

$(function(){
    $('#checkboxs input[type="checkbox"]').click(function(){
        $('.cbBlock').each(function(index, block) {
            var boxs = $(block).children('label').children();
            
            if(boxs.filter(':checked').length == max)
                boxs.filter(':not(:checked)').attr('disabled', 'disabled');
            else
                boxs.removeAttr('disabled');
        });
    });
    
    $('#order').click(function() {
        //alert($('#form').length);
        //alert($('#form').serialize());
        $.post('', $('#form').serialize(), function(data) {
            $('#message').text(data);
        });
        return false;
    });
});

