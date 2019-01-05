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
                // console.log(data);
                $('#nik').val(data.nik);
                $('#nama').val(data.nama);
                $('#rt').val(data.rt);
            }

        });

    })

})