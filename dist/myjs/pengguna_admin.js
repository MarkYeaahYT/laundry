$(document).ready(function () {
    /**
     * pop up add
     */
    $("#tambah_o").on("click", function () {
        $("#myModal").modal("show");
    });

    $("#btn_add").on("click", function () {
        var username = $("#username").val();
        var password = $("#password").val();
        var role = $("#role").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=pengguna",
            data: {
                action: "c",
                u: "pg",
                username: username,
                password: password,
                role: role
            },
            dataType: "JSON",
            success: function (response) {
                tablepg.ajax.reload();
                $("#myModal").modal("hide");
            }
        });
    });

    /**
     * pop up edit
     */
    $("#tablepg").on("click", ".btnedt",function () {
        var username = $(this).data("username");
        var password = $(this).data("password");
        var role = $(this).data("role");
        var id = $(this).data("id");

        $("#username_epg").val(username);
        $("#password_epg").val(password);
        $("#role_epg").val(role);
        $("#id_epg").val(id);

        $("#modal_editpg").modal("show");
    });

    $("#btn_editpg").on("click", function () {
        var username = $("#username_epg").val();
        var password = $("#password_epg").val();
        var role = $("#role_epg").val();
        var id = $("#id_epg").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=pengguna",
            data: {
                action: "u",
                u: "pg",
                username: username,
                password: password,
                role: role,
                id: id
            },
            dataType: "JSON",
            success: function (response) {
                tablepg.ajax.reload();
                $("#modal_editpg").modal("hide");
            }
        });

    });

    /**
     * pop up del
     */
    $("#tablepg").on("click", ".btndel", function () {
        var id = $(this).data("id");

        $("#id_delete").val(id);
        $("#modal_delete").modal("show");

    });

    $("#btn_delete").on("click", function () {
        var id = $("#id_delete").val();
        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=pengguna",
            data: {
                action: "d",
                u: "pg",
                id: id
            },
            dataType: "JSON",
            success: function (response) {
                tablepg.ajax.reload();
                $("#modal_delete").modal("hide");
            }
        });
    });

    /**
     * PL pop up add
     */
    $("#tambah_pl").on("click", function () {
        $("#modal_pl").modal("show");
    });

    $("#btn_addpl").on("click", function () {
        var nama = $("#namapl").val();
        var username = $("#usernamepl").val();
        var password = $("#passwordpl").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=pengguna",
            data: {
                action: "c",
                u: "pl",
                nama: nama,
                username: username,
                password: password
            },
            dataType: "JSON",
            success: function (response) {
                tablepl.ajax.reload();
                $("#modal_pl").modal("hide");
            }
        });
    });

    /**
     * PL pop up edit
     */
    $("#tablepl").on("click", ".btnedt",function () {
        console.log("yeah");
        var nama = $(this).data("nama");
        var username = $(this).data("username");
        var password = $(this).data("password");
        var id = $(this).data("id");

        $("#nama_epl").val(nama);
        $("#username_epl").val(username);
        $("#password_epl").val(password);
        $("#id_epl").val(id);

        $("#modal_editpl").modal("show");
    });

    $("#btn_editpl").on("click", function () {
        var nama = $("#nama_epl").val();
        var username = $("#username_epl").val();
        var password = $("#password_epl").val();
        var id = $("#id_epl").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=pengguna",
            data: {
                action: "u",
                u: "pl",
                username: username,
                password: password,
                nama: nama,
                id: id
            },
            dataType: "JSON",
            success: function (response) {
                tablepl.ajax.reload();
                $("#modal_editpl").modal("hide");
            }
        });
    });

    /**
     * PL delete
     */
    $("#tablepl").on("click", ".btndel",function () {
        var id = $(this).data("id");
        $("#id_deletepl").val(id);

        $("#modal_deletepl").modal("show");
    });

    $("#btn_deletepl").on("click", function () {
        var id = $("#id_deletepl").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?page=pengguna",
            data: {
                action: "d",
                u: "pl",
                id: id
            },
            dataType: "JSON",
            success: function (response) {
                tablepl.ajax.reload();
                $("#modal_deletepl").modal("hide");
            }
        });
    });
});