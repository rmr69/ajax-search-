<
script >

    $('#search').on('keyup', function() {
        //alert('test');
        $value = $(this).val();
        //alert($value);
        $.ajax({
            type: 'get',
            url: '{{ URL::to(' / pms / profile / update / 9 ') }}',
            url: '{{ URL::route('
            profileupdate ', '
            ') }}',
            data: { 'profileupdate': $value },
            success: function(data) {
                //console.log(data);
                $('#profilefolder').html(data);
            }

        });

    });

<
/script >
