$(document).ready(function () {
    var datenow = new Date().toISOString().slice(0, 10);

    /**
     * pop up bayar
     */
    var temptotal;
    var tempbayar;
    var tempid;
    var temppid;
    var tempprid;
    $("#mytable_b").on("click", ".btnbayar",function () {
        var berat = $(this).data("berat");
        var harga = $(this).data("harga");
        var id = $(this).data("id");
        var pid = $(this).data("pid");
        tempprid = $(this).data("prid");
        harga = parseInt(harga) * parseInt(berat);
        temptotal = parseInt(harga);

        tempid = id;
        temppid = pid;

        $(".tbrt").text(berat+" Kg");
        $(".ttot").text("Rp "+harga.toLocaleString());
        $("#modal_bayar").modal("show");
    });

    $("#ibayar").on("keyup", function () {
        var bayar = $("#ibayar").val();
        bayar = parseInt(bayar);
        tempbayar = bayar;
        if(bayar >= temptotal){
            $(".kembali").text("Rp "+(bayar - temptotal).toLocaleString());
        }else{
            $(".kembali").text("");
        }
    });

    $("#btn_bayar").on("click", function () {
        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=transaksi",
            data: {
                action: "c",
                total: temptotal,
                bayar: tempbayar,
                oid: tempid,
                date: datenow,
                prid: tempprid,
                pid: temppid
            },
            dataType: "JSON",
            success: function (response) {
                $("#modal_bayar").modal("hide");
                mytable.ajax.reload();   
                table_s.ajax.reload();  
            }
        });
    });
});