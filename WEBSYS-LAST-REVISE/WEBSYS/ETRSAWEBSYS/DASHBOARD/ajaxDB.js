$(document).ready(function () {
    var newCount = 2;
    var newCount2 = 2;
    $('#btn').click(function () {
        newCount = newCount + 2;
        $('.show-content').load('load-events.php', {
            newCount: newCount
        });
    });

    $('#btnfunds').click(function () {
        newCount2 = newCount2 + 2;
        $('.show-funds-details').load('load-details.php', {
            newCount2: newCount2
        });
    });

});