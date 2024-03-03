$(document).ready(function () {
    $('form1').submit(function (event) {
        event.preventDefault();
        var amount = $('#amount').val();
        var firstname = $('#firstNameInput').val();
        var lastname = $('#lastNameInput').val();
        var email = $('#email').val();
        var btnMoney = $('#btnMoney').val();
        $('#message').load('home.php', {
            amount: amount,
            firstname: firstname,
            lastname: lastname,
            email: email,
            btnMoney: btnMoney
        });
    });
    $("#amount, #firstNameInput, #lastNameInput, #email").removeClass();
    var errorEmpty = "<?php echo $errorEmpty; ?>";
    var errorEmail = "<?php echo $errorEmail; ?>";

    if(errorEmpty == true){
        $("#amount, #firstNameInput, #lastNameInput, #email").addClass('input-error');
    }
    if(errorEmail == true){
        $("#email").addClass('input-error');
    }
    if(errorEmail == false && errorEmpty == false){
        $("#amount, #firstNameInput, #lastNameInput, #email").val('');
    }
});