$(function () {
    $('#signUP').click(function () {
        $('#mod')
            .modal('show')
        ;
    });

    $('.ui.form')
        .form({
            pass: {
                identifier  : 'pass',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter a gender'
                    }
                ]
            },
            name: {
                identifier  : 'name',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Please enter your name'
                    }
                ]
            }
        })
    ;
});