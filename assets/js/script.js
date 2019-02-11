$(function(){        
    let pasientambah = ""
    let pasienubah = ""
    let pasiendetil = ""
    let pemeriksaandetil = ""
    let pemeriksaantambah = ""
    let pemeriksaanupdate = ""
    let pemeriksaanautolfill = ""
    let autocomplete = ""
    let detiltcm = ""
    let ubahtcm = ""
    let tambahtcm = "" 
    
    // if(bowser.chrome === true){
    //     pasientambah = "tambahpasien"
    //     pasienubah = "ubahpasien"
    //     pasiendetil = "detilpasien"
    //     pemeriksaanupdate = "updatePemeriksaan"
    //     pemeriksaandetil = "detil";
    //     pemeriksaantambah = "tambahpemeriksaan"
    //     pemeriksaanautolfill = "autofill"
    //     autocomplete = "autocomplete"
    //     //console.log(pemeriksaandetil);
        
    // } else {
        pasientambah = "pasien/tambahpasien"
        pasienubah = "pasien/ubahpasien"
        pasiendetil = "pasien/detilpasien"
        // ==============================================
        pemeriksaanupdate = "pemeriksaan/updatePemeriksaan"
        pemeriksaandetil = "pemeriksaan/detil";
        pemeriksaantambah = "pemeriksaan/tambahpemeriksaan"
        pemeriksaanautolfill = "pemeriksaan/autofill"
        autocomplete = "pemeriksaan/autocomplete"
        // =================================================
        // pemeriksaanupdate = "updatePemeriksaan"
        // pemeriksaandetil = "detil";
        // pemeriksaantambah = "tambahpemeriksaan"
        // pemeriksaanautolfill = "autofill"
        // autocomplete = "autocomplete"
        // ====================================================
        detiltcm = "tes_tcm/detiltcm"
        ubahtcm = "tes_tcm/ubahtcm"
        tambahtcm = "tes_tcm/tambahtcm"

        function pasienkosong(){
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
        }

    $('.modaltambah').on('click', function(){
        $('.modal-title').html('Tambah Pasien');
        $('#modal form').attr('action', pasientambah);
        $('.modal-footer button[type=submit]').html('Tambah'); 
        pasienkosong()   
    });

    $('.modaledit').on('click', function(){
        //$('#modal form').attr();
        // console.log('oukay');
        $('.modal-title').html('Ubah Data Pasien');
        $('#modal').show();
        $('#modal form').attr('action', pasienubah);
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modaledit form input, .modaledit form select').val(null);
        const id = $(this).data('id');
        console.log(id);
        pasienkosong();
        $.ajax({
            url: pasiendetil,
            data: {id: id},
            method: 'get',
            dataType: 'json',
            success: function(data){
                 console.log(data);
                 $('#inama').val(data.nama);
                 $('#inoRm').val(data.noRm);
                 $('#inik').val(data.nik);
                 $('#ijnsK').val(data.jnsK);
                 $('#itglahir').val(data.tglahir);
                 $('#itgregis').val(data.tglregistrasi);
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
        // console.log(data);

        console.log('tmapil');
        $.ajax({

            url: pasiendetil,
            data: {id: id},
            method: 'get',
            dataType: 'json',
            success: function(data){
                 console.log(data);
                 $('#nama').html(data.nama);
                 $('#noRm').html(data.noRm);
                 $('#nik').html(data.nik);
                 $('#jnsK').html(data.jnsK);
                 $('#tglahir').html(data.tglahir);
                 $('#tgregis').html(data.tglregistrasi);
                 $('#dusun').html(data.dsn);
                $('#rt').html(data.rt);
                $('#rw').html(data.rw);
                $('#kecamatan').html(data.kecamatan);
                $('#kota').html(data.kota);
                $('#kelurahan').html(data.kelurahan);
            }

        });

    })

//END HALAMAN

//----------------------------------------------------------------------------------------------------------------
//================================================================================================
//DI HALAMAN PEMERIKSAAN/DIAGNOSA

function kosong(){
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
                 
                 $('#fkultur').val(null);
                 $('#fnkultur').val(null);

                 $('#ftgltcepat').val(null);
                 $('#fblnpengobatan').val(null);
                 $('#fmikkonv').val(null);
                 $('#fnilaikonv').val(null);
                 $('#fmiktgl').val(null);
                 $('#fthoraks').val(null);
                 $('#fhasilpengobatan').val(null);
                 $('#ftglhenti').val(null);
                 $('#fkettambahan').val(null);
    
}

    $('.linkdetil').on('click', function(){ //..tombol detil

        const id = $(this).data('id'); //..ambil data id dari tombol
        
        $(".dis").prop( "disabled", true ); //..elemen dengan class .dis disable (input form)
        $("#tubah,#tombol").show(); //..munculkan tombol(on/off)
        $('#form1 button[type=submit]').prop("disabled", true); //..tombol submit disable
        $('#tubah').html('ON') // tombol menjadi off
        $('#utama').remove() // hilangkan elemen tambahan
        console.log(id)
        kosong();
        $.ajax({
            
            url: pemeriksaandetil,
            data: {id: id},
            method: 'get',
            dataType: 'json',
            success: function(data){
                console.log(data);
                console.log(data.idPeriksa);
                 $('#fidPeriksa').val(data.idPeriksa);
                 $('#fnorm').val(data.noRm);
                 $('#ftglmulai').val(data.tglmulai);
                 $('#fpanduanoat').val(data.panduanoat);
                 $('#fnoat').val(data.noat);
                 $('#fklasifikasi').val(data.klasifikasi);
                 $('#friwayat').val(data.riwayat);

                 $('#ftempatvct').val(data.tmptvct);
                 $('#ftglvct').val(data.tglvct);
                 $('#fhasilvct').val(data.hasilvct);
                 $('#fart').val(data.terapi);
                 $('#fdm').val(data.dm);
                 $('#fpengobatandm').val(data.pengobatandm);
                 $('#fstokoat').val(data.stokoat);
                 $('#fntempatoat').val(data.ntempat);
                 $('#flanjutoat').val(data.lanjutoat);
                 $('#fntempatloat').val(data.tempatloat);
                 
                 $('#ftcmtgl').val(data.tglmtcm);
                 $('#fdetect').val(data.mhasildetect);
                 $('#fresis').val(data.mhasilresist);

                 $('#fkultur').val(data.kultur);
                 $('#fnkultur').val(data.nkultur);

                 $('#fblnpengobatan').val(data.blnpengobatan);
                 $('#fmikkonv').val(data.konversi);
                 $('#fnilaikonv').val(data.nilaikonversi);
                 $('#fmiktgl').val(data.tglkeluar);
                 $('#fthoraks').val(data.thoraks);
                 $('#fhasilpengobatan').val(data.hasil);
                 $('#ftglhenti').val(data.tglhenti);
                 $('#fkettambahan').val(data.kettambahan);
                 
                }

        });
                    
    });

    //---------------------------------------------------------------------------------------

    $('#tubah').on('click', function(){ //..tombol on/off (muncul ketika tombol detil di klik)
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        if($(".dis").prop( "disabled") == true){ //..jika elemen dengan class .dis disable
            
            $(".dis").prop( "disabled", false ); //..enable elemen dengan class .dis    
            $('#form1').attr('action', pemeriksaanupdate); //..ubah atribut action pada form
            $('#form1 button[type=submit]').prop("disabled", false); //..enable tombol submit
            $('#form1 button[type=submit]').html('Ubah Data'); //..ubah tombol simpan menjadi ubah data
            $('#tubah').html('OFF') //..ubah tombol on menjadi off

        }else if($(".dis").prop( "disabled") == false){ //..jika elemen dengan class .dis enable
            
            $(".dis").prop( "disabled",true ); //..disable elemen dengan class .dis 
            //$("#form1 #fidPeriksa").prop("disabled", true); //..--------------------------------------
            $('#utama').remove() //..menghapus elemen tambahan dibawah input norm
            $('#form1').attr('action',""); //..kosongkan atribut action pada form
            $('#form1 button[type=submit]').prop("disabled", false); //..tombol submit disable
            $('#form1 button[type=submit]').html('Tambah Data'); //..ubah tombol menjadi tambah data
            $('#form1 button[type=submit]').prop("disabled", true); //..disable tombol submit
            $('#tubah').html('ON') //..ubah tombol menjadi on
        }
    });

    //--------------------------------------------------------------------------------------------

    $('.hid').on('click', function(){ //..tombol bersihkan
        if($(".dis").prop( "disabled") == true){
            $(".dis").prop( "disabled", false ); //..enable input ketika diklik
        }
        $("#tubah,#tombol").hide();//..tombol on/off diisembunyikann
        $('#utama').remove() //..menghapus elemen tambahan dibawah input norm
        $('#form1').attr('action', pemeriksaantambah);//..ubah attribut action dari form
        $('#form1 button[type=submit]').prop("disabled", false); //..disable tombol tambah data
        $('#form1 button[type=submit]').html('Tambah Data'); //..ubah menjadi tombol ubah data
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //..mengubah input menjadi null
        kosong();
                
    });

    //------------------------------------------------------------------------------------------

    $('#fnorm').on('keyup', function(){ //..autofill kolom berdasarkan data pemeriksaan terakhir
                                        //.. jika kosong, hanya menampilkan nama dan tglahir dari norm
         $('#utama').remove()
         const norm = $(this).val(); //ambil norm dari input norm
         console.log(norm)
         //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        //buat elemen untuk nama dan tglahir dibawah norm
        let divisi = $("<div>").attr('id','utama').attr('class', "col form-group");
        let divtglahir = $("<div>").attr('id', "dtglahir");
        let labeltglahir = $("<label>").attr('id',"tglahir").attr('class','col-form-label col-sm-12')
        let divnama = $("<div>").attr('id', "dnama");
        let labelnama = $("<label>").attr('id',"nama").attr('class','col-form-label col-sm-12')
        //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        // kosong();
        $.ajax({
            url: pemeriksaanautolfill,
            data: {norm: norm},
            method: 'get',
            dataType: 'json',
            success: function(data){
                //~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
                //tambah elemen dibawah input norm untuk menampilkan nama dan tglahir
                console.log(data);
                $("#rekam").append(divisi);
                $("#utama").append(divnama);
                $("#dnama").append(labelnama.html(data.nama))
                $("#utama").append(divtglahir);
                $("#dtglahir").append(labeltglahir.html(data.tglahir))
        //======================================================================
                    $('#fnorm').val(data.noRm);
                    $('#ftglmulai').val(data.tglmulai);
                  $('#fpanduanoat').val(data.panduanoat);
                  $('#fnoat').val(data.noat);
                  $('#fklasifikasi').val(data.klasifikasi);
                  $('#friwayat').val(data.riwayat);
                  $('#ftempatvct').val(data.tmptvct);
                  $('#ftglvct').val(data.tglvct);
                 $('#fhasilvct').val(data.hasilvct);
                 $('#fart').val(data.terapi);
                 $('#fdm').val(data.dm);
                 $('#fpengobatandm').val(data.pengobatandm);
                 $('#fstokoat').val(data.stokoat);
                 $('#fntempatoat').val(data.ntempat);
                 $('#flanjutoat').val(data.lanjutoat);
                 $('#fntempatloat').val(data.tempatloat);
                }
            });
            // $('#utama').remove()
    })

    $("#fnorm").ready(function(){ //..belum berfungsi untuk auto complete norm
        $( "#fnorm" ).autocomplete({
          source: autocomplete
        });

    });


    //END HALAMAN DIAGNOSA/PEMERIKSAAN
//================================================================================================
//-------------------------------------------------------------------------------------------------

$("button[href^='.']").click(function(e) {
	e.preventDefault();
	
	var position = $('.forma').offset().top;

	$("body, html").animate({
		scrollTop: position
	}, 500 );
});

$('.bersih').click(function(){
    $('form').attr('action', tambahtcm)
    $('form input, form select').val(null)
    $('.bersih').hide()
})

$(".detiltcm").click(function(){
    $('form').attr("action", ubahtcm);
    $('.bersih').show()
    const id = $(this).data('id');
    // $('#formtcm button[type=submit]').html('buaya')
    // $('#formtcm button[type=submit]').prop("disabled", true);
    // $('input').hide()
    // $('input').val('lokall')
    $('form input, form select').val(null)
    $.ajax({
        url: detiltcm,
        data: {id: id},
        method: 'get',
        dataType: 'json',
        success: function(data){
                console.log(data.noRm);
                console.log(data);
                $('#fgenxpert').val(data.idreg);
                $('#fnrm').val(data.noRm);
                 $('#ftcmtgl').val(data.tglperiksa);
                 $('#ftcmwkt').val(data.wktperiksa);
                 $('#fruang').val(data.ruang);
                 $('#frawat').val(data.rawat);
                 $('#fbhnperiksa').val(data.bahanperiksa);
                 $('#fdetect').val(data.hasildetect);
                 $('#fresis').val(data.hasilresist);
                 $('#fkethasiltcm').val(data.kethasil);
                 $('#fketklinik').val(data.ketklinik);
                 $('#fkettambahantcm').val(data.kettambahan);
            }
            // console.log('datakososng')

    });

});
// ==========================================================================================================
// FILTER TABLE

  $(document).ready(function(){
    $(".search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("table tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });

//   ==============================================================
// TCM
// ================================================================




});