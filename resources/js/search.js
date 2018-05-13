$(document).ready(function () {
    $('#src').keyup(function (e) {
        var name=$(this).val();
        if(name != ''){
            $.ajax({
                type :"POST",
                url :"ajax/searchVerify.php",
                data :{name:name},
                success: function (data) {
                    $('#out').html(data);
                }
                });
        }
        else {
            $('#out').html("");
        }
    })
});