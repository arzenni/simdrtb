$(function(){        

    //halaman Pasien
    $('.modaltambah').on('click', function(){
        $('.modal-title').html('Tambah Pasien');
        $('#modal form').attr('action', "pasien/tambahpasien");
        $('.modal-footer button[type=submit]').html('tAMBAH');

                 $('#inama').val(null);
                 $('#inoRm').val(null);
                 $('#inik').val(null);
                 $('#ijnsK').val(null);
                 $('#itglahir').val(null);
                 $('#iibu').val(null);
                 $('#idsn').val(null);
                $('#irt').val(null);
                $('#irw').val(null);
                $('#ikecamatan').val(null);
                $('#ikelurahan').val(null);
                $('#ikota').val(null);    
    });

    

    $('.modaledit').on('click', function(){
        //$('#modal form').attr();
        // console.log('oukay');
        $('.modal-title').html('Ubah Data Pasien');
        $('#modal form').attr('action', "pasien/ubahpasien");
        $('.modal-footer button[type=submit]').html('Simpan');
    
        const id = $(this).data('id');
        // console.log(id);

        $.ajax({

            url: 'pasien/detilpasien',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                 console.log(data);
                 $('#inama').val(data.nama);
                 $('#inoRm').val(data.noRm);
                 $('#inik').val(data.nik);
                 $('#ijnsK').val(data.jnsK);
                 $('#itglahir').val(data.tglahir);
                 $('#iibu').val(data.ibu);
                 $('#idsn').val(data.dsn);
                $('#irt').val(data.rt);
                $('#irw').val(data.rw);
                $('#ikecamatan').val(data.kecamatan);
                $('#ikelurahan').val(data.kelurahan);
                $('#ikota').val(data.kota);    
            }

        });

    })

    $('.modaltampil').on('click', function(){

        // console.log('oukay');
        $('.modal-title').html('Detil Pasien');
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
                 $('#noRm').html(data.noRm);
                 $('#nik').html(data.nik);
                 $('#jnsK').html(data.jnsK);
                 $('#tglahir').html(data.tglahir);
                 $('#ibu').html(data.ibu);
                 $('#dusun').html(data.dsn);
                $('#rt').html(data.rt);
                $('#rw').html(data.rw);
                $('#kecamatan').html(data.kecamatan);
                $('#kota').html(data.kota);
                $('#kelurahan').html(data.kelurahan);
            }

        });

    })
    //end Halaman Pasien

    //Halaman Pemeriksaan
    $('.modaltambahperiksa').on('click', function(){
        $('.modal-title').html('Tambah Hasil Pemeriksaan');
        $('#modal form').attr('action', "pemeriksaan/tambahpemeriksaan");
        $('.modal-footer button[type=submit]').html('Tambah');

                 $('#inama').val(null);
                 $('#inoRm').val(null);
                 $('#inik').val(null);
                 $('#ijnsK').val(null);
                 $('#itglahir').val(null);
                 $('#iibu').val(null);
                 $('#idsn').val(null);
                $('#irt').val(null);
                $('#irw').val(null);
                $('#ikecamatan').val(null);
                $('#ikelurahan').val(null);
                $('#ikota').val(null);    
    });
});