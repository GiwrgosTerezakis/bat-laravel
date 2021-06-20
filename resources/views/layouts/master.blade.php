<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Simple CMS" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="/css/app.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@yield("content")
</body>
</html>

<script>
    $(document).ready(function() {
        if ($('.alert-danger').length) {
            setTimeout(function () {
                $('.alert-danger').fadeOut();
            }, 3000);
        }
        if ($('.alert-success').length) {
            setTimeout(function () {
                $('.alert-success').fadeOut();
            }, 3000);
        }
        $('#modal-to-close').on('click', function () {
            $('#modalLoginForm').remove();
        });

        $('#Sensitive').on('change',function (){
            let column_name = $('#Sensitive').find(":selected").val();
            $.ajax({
                url: '/returnSensitive/'+column_name+'',
                type: 'GET',
                dataType: 'json',
                success: (data) => {
                    $('#Privileged').empty();
                    $('#Unprivileged').empty();
                    $.map(data, function(val, key) {

                        let div_data = "<option style='color: black !important;' value=" + val + ">" + val + "</option>";
                        $(div_data).appendTo('#Privileged');
                        $(div_data).appendTo('#Unprivileged');

                    });

                }
            });
        })
    });
</script>
