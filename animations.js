$(document).ready(function () {

    $('.navigation__link').on('click', function () {
        $('.navigation__checkbox').prop('checked', false);
    });

    $('#kmp').on('click', function () {
        var command = 'kmp';
        var keywords = $('#inputcolumn').val();
        console.log(result);

        $.ajax({
            type: "POST",
            url: "./proc.php",
            data: {
                cmd: command,
                key: keywords,
                posts: result
            },
            success: function (response) {
                console.log(response);
            }
        });

    });

    $('#bm').on('click', function () {
        var command = 'bm';
        var keywords = $('#inputcolumn').val();
        console.log(result);

        $.ajax({
            type: "POST",
            url: "./proc.php",
            data: {
                cmd: command,
                key: keywords,
                posts: result
            },
            success: function (response) {
                console.log(typeof response);
                console.log(response);
            }
        });

    });

    $('#regex').on('click', function () {
        var command = 'regex';
        var keywords = $('#inputcolumn').val();
        console.log(result);

        $.ajax({
            type: "POST",
            url: "./proc.php",
            data: {
                cmd: command,
                key: keywords,
                posts: result
            },
            success: function (response) {
                console.log(response);
            }
        });

    });

});