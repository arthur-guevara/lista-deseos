$('#btn-enviar-wish').on('click', function () {

    $.ajax({
        type: "POST",
        url: url,
        data: { wish: $('#wishlist').val(), id: id },
        dataType: "JSON",
        success: function (response) {

            Toastify({
                text: response.msg,
                style: {
                    background: response.status == 1 ? '#008f39' : '#FF0000' ,
                },
                close: true,
            }).showToast();

        },
    });

});


