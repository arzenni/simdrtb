$(function(){

    $('.modaltampil').on('click', function(){

        // console.log('oukay');
        $('#ModalLabel').html('Detil Pasien');
        $('.modal-footer button[type=submit]').html('Tutup');
    
        const id = $(this).data('id');
        // console.log(id);

        $.ajax({

            url: 'pasien/detilpasien',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                 console.log(data);
                 $('#nama').html(data.nama);
                 $('noRm').html(data.noRm);
                 $('#nik').html(data.nik);
                 $('#ibu').html(data.ibu);
                 $('#dusun').html(data.dsn);
                $('#rt').html(data.rt);
                $('#rw').html(data.rw);
                $('jnsk').html(data.jnsk);
                
            }

        });

    })

})