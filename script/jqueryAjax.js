// ajax
$(document).ready(function () {
    $("#refresh").click(function () {
        $("#gym1").load("loadGym.php");
    });
});