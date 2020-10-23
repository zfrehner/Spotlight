// ajax
$(document).ready(function () {
    $("#refresh").click(function () {
        $("#gym3").load("loadGym3.php");
        $("#gym2").load("loadGym2.php");
        $("#gym1").load("loadGym.php");
    });
});