$(document).ready(function () {
    $('#meeting').change(function (e) {
        var date = $(this).val();
            $.ajax({
                type :"POST",
                url  :"../ajax/searchVerify.php",
                data :{date:date},
                success:function (data) {
                    alert(data);
                }
            });
    })
});