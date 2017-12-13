
            $(document).ready(function() {
                $('#submit').click(function() {
                    $('#submit').attr('value', 'Please wait...');
                    $.post("sendemail.php", $("#contactform").serialize(), function(response) {
                        $('#success').html(response);
                        $('#submit').attr('value', 'SEND');
                    });
                    return false;
                });
            });
    </script>
