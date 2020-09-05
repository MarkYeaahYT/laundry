$(document).ready(function () {
    $(".btnlogin").on("click", function () {
        var username = $("#inputUsername").val();
        var password = $("#inputPassword").val();

        $.ajax({
            type: "POST",
            url: url+"/laundry/dist/core.php?login=yes",
            data: {
                username: username,
                password: password
            },
            dataType: "JSON",
            success: function (r) {
                console.log(r);
                if(r != null){
                    window.location = url+"/laundry/dist/admin.php";
                }else{
                    alert("wrong");
                }
            }
        });
    });
});