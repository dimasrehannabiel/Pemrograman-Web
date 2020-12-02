$(document).ready(function()
{
    load_pendidikan();

    $('form').on('submit',function(e){  
        // e.preventDefault();
        $.ajax({
            type:$(this).attr('method'),
            url:$(this).attr('action'),
            data:$(this).serialize(),
            success:function(){
                load_pendidikan();
            }
        });
    })
})

function load_pendidikan()
{
    $.get('data_riwayat_pendidikan.php', function(data)
    {
        $('#display-riwayat').html(data)
        $('.hapusData').click(function(e){
            e.preventDefault();
            $.ajax({
                type:'get',
                url:$(this).attr('href'),
                success:function(){
                    load_pendidikan();
                }
            });
        })
    });
}