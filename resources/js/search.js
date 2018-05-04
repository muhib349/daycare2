$(document).ready(function () {
    $('#src').keyup(function (e) {
        var name=$(this).val();
        if(name != ''){
            $.ajax({
                type :"POST",
                url :"ajax/search.php",
                data :{name:name},
                success: function (data) {
                    alert(data);
                }
                });
        }
        else {

        }
    })
});