$(document).ready(function (){
    $('#form1').submit(function (event) {
        event.preventDefault();
        var submit = $('#btnapprove');
        $('#message').load('update.php', {
            submit: submit
        });
    });
 
});