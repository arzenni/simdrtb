$(function(){        

    //halaman Pasien
    $('.modaltambah').on('click', function(){
        $('.modal-title').html('Tambah Pasien');
        $('#modal form').attr('action', "pasien/tambahpasien");
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
        $('.modal-title').html('Detil Pasien');
        $('.modal-footer button[type=submit]').html('Tutup');
        const id = $(this).data('id');
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
    $('#linkdetil').on('click', function(){
        const id = $(this).data('id');
        $(".dis").prop( "disabled", true );
        $("#tubah,#tombol").show();
        $('#form1 button[type=submit]').prop("disabled", true);
        $('#tubah').html('OFF')

        console.log(id);
        $.ajax({

            url: 'pemeriksaan/detil',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                console.log('ntaps');
                 console.log(data);
                 console.log(data.noRm);

                 $('#fidPeriksa').val(data.idPeriksa);
                 $('#fnorm').val(data.noRm);
                 $('#ftglmulai').val(data.tglmulai);
                 $('#fpanduanoat').val(data.panduanoat);
                 $('#fnoat').val(data.noat);
                 $('#fklasifikasi').val(data.klasifikasi);
                 $('#friwayat').val(data.riwayat);
                 $('#ftempatvct').val(data.tmptvct);
                 $('#ftglvct').val(data.tglvct);
                 $('#fhasilvct').val(data.dm);
                 $('#fart').val(data.terapi);
                 $('#fdm').val(data.dm);
                 $('#fpengobatandm').val(data.pengobatandm);
                 $('#fstokoat').val(data.stokoat);
                 $('#fntempatoat').val(data.ntempat);
                 $('#flanjutoat').val(data.lanjutoat);
                 $('#fntempatloat').val(data.tempatloat);
                 $('#ftcepat').val(data.tempat);
                 $('#fntcepat').val(data.ntcepat);
                 $('#fkultur').val(data.kultur);
                 $('#fnkultur').val(data.nkultur);
                 $('#ftgltcepat').val(data.tanggal);
                 $('#fblnpengobatan').val(data.blnpengobatan);
                 $('#fmikkonv').val(data.konversi);
                 $('#fnilaikonv').val(data.nilaikonversi);
                 $('#fmiktgl').val(data.tglkeluar);
                 $('#fgenxpert').val(data.idreg);
                 $('#ftcmtgl').val(data.tglperiksa);
                 $('#ftcmwkt').val(data.wktperiksa);
                 $('#fruang').val(data.ruang);
                 $('#frawat').val(data.rawat);
                 $('#fbhnperiksa').val(data.bahanperiksa);
                 $('#fdetect').val(data.hasildetect);
                 $('#fresis').val(data.hasilresist);
                 $('#fkethasiltcm').val(data.kethasil);
                 $('#fketklinik').val(data.ketklinik);
                 $('#fkettambahantcm').val(data.kettcm);
                 $('#fthoraks').val(data.thoraks);
                 $('#fhasilpengobatan').val(data.hasil);
                 $('#ftglhenti').val(data.tglhenti);
                 $('#fkettambahan').val(data.kettambahan);
                 
                }

        });
                    
    });

    $('#tubah').on('click', function(){
        if($(".dis").prop( "disabled") == true){
            $(".dis").prop( "disabled", false );    
            console.log('ubahhh');
            $('#form1').attr('action','pemeriksaan/updatePemeriksaan');
            $('#form1 button[type=submit]').prop("disabled", false);
            $('#form1 button[type=submit]').html('Ubah Data');
            $('#tubah').html('OFF')
        }else if($(".dis").prop( "disabled") == false){
            $(".dis").prop( "disabled",true );
            $('#form1 button[type=submit]').prop("disabled", false);
            $('#tubah').html('ON')
            console.log('ubah lagi');
            $('#form1').attr('action',"");
            $('#form1 button[type=submit]').html('Tambah Data');
        }
    });

    $('.hid').on('click', function(){
        if($(".dis").prop( "disabled") == true){
            $(".dis").prop( "disabled", false ); 
        }
        $("#tubah,#tombol").hide();
        $('#form1').attr('action','pemeriksaan/tambahpemeriksaan');
        $('#form1 button[type=submit]').prop("disabled", false);
        $('#form1 button[type=submit]').html('Tambah Data');

                $('#fidPeriksa').val(null);
                 $('#fnorm').val(null);
                 $('#ftglmulai').val(null);
                 $('#fpanduanoat').val(null);
                 $('#fnoat').val(null);
                 $('#fklasifikasi').val(null);
                 $('#friwayat').val(null);
                 $('#ftempatvct').val(null);
                 $('#ftglvct').val(null);
                 $('#fhasilvct').val(null);
                 $('#fart').val(null);
                 $('#fdm').val(null);
                 $('#fpengobatandm').val(null);
                 $('#fstokoat').val(null);
                 $('#fntempatoat').val(null);
                 $('#flanjutoat').val(null);
                 $('#fntempatloat').val(null);
                 $('#ftcepat').val(null);
                 $('#fntcepat').val(null);
                 $('#fkultur').val(null);
                 $('#fnkultur').val(null);
                 $('#ftgltcepat').val(null);
                 $('#fblnpengobatan').val(null);
                 $('#fmikkonv').val(null);
                 $('#fnilaikonv').val(null);
                 $('#fmiktgl').val(null);
                 $('#fgenxpert').val(null);
                 $('#ftcmtgl').val(null);
                 $('#ftcmwkt').val(null);
                 $('#fruang').val(null);
                 $('#frawat').val(null);
                 $('#fbhnperiksa').val(null);
                 $('#fdetect').val(null);
                 $('#fresis').val(null);
                 $('#fkethasiltcm').val(null)
                 $('#fketklinik').val(null);
                 $('#fkettambahantcm').val(null);
                 $('#fthoraks').val(null);
                 $('#fhasilpengobatan').val(null);
                 $('#ftglhenti').val(null);
                 $('#fkettambahan').val(null);
    });

    $('#fnorm').on('change', function(){ 
        console.log("nyambung");
        const norm = $(this).val();
        console.log(norm);
        $.ajax({

            url: 'pemeriksaan/autofill',
            data: {norm: norm},
            
            method: 'post',
            dataType: 'json',
            success: function(data){
                  console.log('data');
                  console.log(data);
                  console.log(norm);
                  $('#fnorm').val(data.noRm);
                  $('#ftglmulai').val(data.tglmulai);
                  $('#fpanduanoat').val(data.panduanoat);
                  $('#fnoat').val(data.noat);
                  $('#fklasifikasi').val(data.klasifikasi);
                  $('#friwayat').val(data.riwayat);
                // $('#rt').html(data.rt);
                // $('#rw').html(data.rw);
                // $('#kecamatan').html(data.kecamatan);
                // $('#kota').html(data.kota);
                // $('#kelurahan').html(data.kelurahan);
            }

        });

    })

});