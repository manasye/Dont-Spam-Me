$(document).ready(function() {

    $('.navigation__link').on('click',function(){
        $('.navigation__checkbox').prop('checked',false);
    });

    $('#kmp').on('click', function() {
        var command = 'kmp';
        var keywords = $('#inputcolumn').val();
        var post = JSON.stringify(result);

        $.ajax({
            type : "POST",
            url : "./proc.php",
            data : {
                cmd : command,
                key : keywords,
                posts : post
            },
            success : function(response) {
                // var re = jQuery.parseJSON(response);
                // console.log(re);
                console.log(response);
            }
        });

    });

    $('#bm').on('click', function () {
        var command = 'bm';
        var keywords = $('#inputcolumn').val();
        var post = JSON.stringify(result);

        // $.ajax({
        //     type: "POST",
        //     url: "./proc.php",
        //     data: {
        //         cmd: command,
        //         key: keywords,
        //         posts: post
        //     },
        //     success: function (response) {
        //         console.log(response);
        //     }
        // });

        $('.default-box').each(function(i, obj) {
            console.log(i);
            $(this).attr('class', 'box-not-spam');
        });

    });

    $('#regex').on('click', function () {
        var command = 'regex';
        var keywords = $('#inputcolumn').val();
        var post = JSON.stringify(result);

        $.ajax({
            type: "POST",
            url: "./proc.php",
            data: {
                cmd: command,
                key: keywords,
                posts: post
            },
            success: function (response) {
                console.log(response);
            }
        });

    });

});
