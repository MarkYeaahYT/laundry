$(document).ready(function () {
    var datenow = new Date().toISOString().slice(0, 10);
    $("#tambah_o").on("click", function () {

        /**
         * pop up add
         */
        var oplength = $("#produk > option").length;
        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=outlet",
            data: {
                action: "rp"
            },
            dataType: "JSON",
            success: function (response) {
                if(oplength < 1){
                    response.forEach(el => {
                        $("#produk").append($('<option>').val(el.id).text(el.nama));
                    });
                }
            }
        });
        $("#myModal").modal("show");
    });

    $("#btn_add").on("click", function () {
        var nama = $("#nama").val();
        var berat = $("#berat").val();
        var produk = $("#produk").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=outlet",
            data: {
                action: "c",
                nama: nama,
                berat: berat,
                produk: produk,
                date: datenow
            },
            dataType: "JSON",
            success: function (response) {
                mytable.ajax.reload();
                $("#myModal").modal("hide");
            }
        });
    });

    /**
     * Pop up delete
     */
    $("#mytable").on("click", ".btndel", function () {
        var id = $(this).data("id");

        $("#id_delete").val(id);
        $("#modal_delete").modal("show");
    });

    $("#btn_delete").on("click", function () {
        var id = $("#id_delete").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=outlet",
            data: {
                action: "d",
                id: id
            },
            dataType: "JSON",
            success: function (response) {
                mytable.ajax.reload();
                $("#modal_delete").modal("hide");
            }
        });
    });

    /**
     * pop up updt
     */
    $("#mytable").on("click", ".btnedt",function () {
        var id = $(this).data("id");
        var berat = $(this).data("berat");
        var prdid = $(this).data("prdid");


        var oplength = $("#produk_e > option").length;
        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=outlet",
            data: {
                action: "rp"
            },
            dataType: "JSON",
            success: function (response) {
                if(oplength < 1){
                    response.forEach(el => {
                        $("#produk_e").append($('<option>').val(el.id).text(el.nama));
                    });
                }

                // show modal
                $("#berat_e").val(berat);
                $("#produk_e").val(prdid);
                $("#id_e").val(id);
                $("#modal_edit").modal("show");
            }
        });
    });

    $("#btn_edt").on("click", function () {
        var id = $("#id_e").val();
        var berat = $("#berat_e").val();
        var produk = $("#produk_e").val();

        $.ajax({
            type: "POST",
            url: "/laundry/dist/core.php?page=outlet",
            data: {
                action: "u",
                id: id,
                berat: berat,
                produk: produk
            },
            dataType: "JSON",
            success: function (response) {
                mytable.ajax.reload();
                $("#modal_edit").modal("hide");
            }
        });
    });
});