$(function(){

    $('.modaltampil').on('click', function(){

        console.log('oukay');
        $('#ModalLabel').html('Data Pasien');
        $('.modal-footer button[type=submit]').html('Tutup');
    
        const id = $(this).data('id');
        console.log(id);

        $.ajax({

            url: 'pasien/detilpasien',
            data: {id: id},
            method: 'post',
            
            success: function(data){
                console.log(data);
            }

        });

    })

})