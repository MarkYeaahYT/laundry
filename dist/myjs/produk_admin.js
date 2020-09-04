$(document).ready(function () {

    $("#tambah_o").on("click", function () {
        $("#myModal").modal("show");
    });
    
    /**
     * input data to server
     */
    $("#btn_add").on("click", function () {
        
        var nama = $("#nama").val();
        var berat = $("#berat").val();
        var harga = $("#harga").val();
        
        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=produk",
            data: {
                action: "c",
                nama: nama,
                berat: berat,
                harga: harga,
            },
            dataType: "JSON",
            success: function (response) {
                $("#myModal").modal("hide");
                mytable.ajax.reload();
            }
        });
    });

    /**
     * delete pop up
     */
    $("#mytable").on("click", ".btndel",function () {
        var id = $(this).data("id");
        $("#id_delete").val(id);
        $("#Modal_Delete").modal("show");
    });

    $("#btn_delete").on("click", function () {
        var id = $("#id_delete").val();
        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=produk",
            data: {
                action: "d",
                id: id,
            },
            dataType: "JSON",
            success: function (response) {
                $("#Modal_Delete").modal("hide");
                mytable.ajax.reload();
            }
        });
    });

    /**
     * update pop up
     */

     $("#mytable").on("click", ".btnedt",function () {
         var nama = $(this).data("nama");
         var berat = $(this).data("berat");
         var harga = $(this).data("harga");
         var id = $(this).data("id");

         $("#nama_e").val(nama);
         $("#berat_e").val(berat);
         $("#harga_e").val(harga);
         $("#id_e").val(id);

         $("#modal_edit").modal("show");
     });

     $("#btn_edt").on("click", function () {
         var nama = $("#nama_e").val();
         var berat = $("#berat_e").val();
         var harga = $("#harga_e").val();
         var id = $("#id_e").val();

         $.ajax({
             type: "POST",
             url: url+"/laundry/dist/core.php?page=produk",
             data: {
                 action: "u",
                 nama: nama,
                 berat: berat,
                 harga: harga,
                 id: id
             },
             dataType: "JSON",
             success: function (response) {
                 mytable.ajax.reload();
                 $("#modal_edit").modal("hide");
             }
         });
     });
});