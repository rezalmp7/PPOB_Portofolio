$(".totop").hide();
$(window).scroll(function () {
    if ($(window).scrollTop() >= 6) {
        $(".totop").show("slow");
    }
    else {
        $(".totop").hide("slow");
    }
});

$(document).ready(function () {
    $('#datatable').DataTable({
        ordering: false
    });
});

$(document).ready(function () {
    ClassicEditor
        .create(document.querySelector('#editor'), {

            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    'strikethrough',
                    'link',
                    'bulletedList',
                    'numberedList',
                    'fontColor',
                    'fontSize',
                    'fontFamily',
                    'superscript',
                    'subscript',
                    '|',
                    'outdent',
                    'indent',
                    '|',
                    'imageUpload',
                    'imageInsert',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'codeBlock'
                ]
            },
            language: 'id',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },


        })
        .then(editor => {
            window.editor = editor;








        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
            console.warn('Build id: ls79v1k3frdo-zf4llyit6q5i');
            console.error(error);
        });
});

$(document).ready(function () {
    $("#select-all").change(function () {

        if (!$('#select-all').is('checked')) {
            $('input:checkbox').attr('checked', 'checked');
        } else {
            $('input:checkbox').removeAttr('checked');
        }
    });
});

function showPassword() {
    var x = document.getElementById("myInput");
    var button = document.getElementById("buttonShowPassword");
    if (x.type === "password") {
        x.type = "text";
        button.innerHTML = "<span class='iconify' data-icon='bx:bxs-hide' data-inline='false'></span>";
    } else {
        x.type = "password";
        button.innerHTML = "<span class='iconify' data-icon='bx:bxs-show' data-inline='false'></span>";
    }
}

$(document).ready(function() {
    $("#create-pin").show();
    $("#konfirmasi-pin").hide(); 
    $("#to-konfirmasi-pin").click(function() {
        $("#create-pin").hide();
        $("#konfirmasi-pin").show();
    });
    $("#to-create-pin").click(function () {
        $("#create-pin").show();
        $("#konfirmasi-pin").hide();
    });
});

$(document).ready(function() {
    $(".produk").show();
    $("#form_pulsa").hide();
    $("#form_paket_data").hide();
    $("#form_voucher_game").hide();
    $("#form_steam_wallet").hide();
    $("#form_itunes").hide();
    $("#form_tix_id").hide();
    $("#form_gojek_customer").hide();
    $("#form_gojek_driver").hide();
    $("#form_grab_customer").hide();
    $("#form_shopeepay").hide();
    $("#form_dana").hide();
    $("#form_link_aja").hide();
    $("#form_telkom").hide();
    $("#form_asuransi").hide();
    $("#form_pdam").hide();
    $("#form_etool").hide();
    $("#form_ovo").hide();
    $("#form_pln").hide();

    $(".form_close").click(function () {
        $(".produk").show();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#pulsa").click(function () {
        $(".produk").hide();
        $("#form_pulsa").show();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#paket_data").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").show();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#voucher_game").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").show();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#steam_wallet").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").show();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#itunes").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").show();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#tix_id").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").show();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#gojek_customer").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").show();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#gojek_driver").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").show();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#grab_customer").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").show();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#shopeepay").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").show();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#dana").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").show();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#link_aja").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").show();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#telkom").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").show();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#asuransi").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").show();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#pdam").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").show();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#etool").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").show();
        $("#form_ovo").hide();
        $("#form_pln").hide();
    });
    $("#ovo").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").show();
        $("#form_pln").hide();
    });
    $("#pln").click(function () {
        $(".produk").hide();
        $("#form_pulsa").hide();
        $("#form_paket_data").hide();
        $("#form_voucher_game").hide();
        $("#form_steam_wallet").hide();
        $("#form_itunes").hide();
        $("#form_tix_id").hide();
        $("#form_gojek_customer").hide();
        $("#form_gojek_driver").hide();
        $("#form_grab_customer").hide();
        $("#form_shopeepay").hide();
        $("#form_dana").hide();
        $("#form_link_aja").hide();
        $("#form_telkom").hide();
        $("#form_asuransi").hide();
        $("#form_pdam").hide();
        $("#form_etool").hide();
        $("#form_ovo").hide();
        $("#form_pln").show();
    });
});