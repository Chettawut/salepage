<script>
$(document).ready(function() {

    $.ajax({
        type: "POST",
        url: "ajax/get_salepage.php",
        data: "&username=" + $('#txtusername').val(),
        success: function(result) {
            
            alert(result.firstname)
        }
    });



    $("#btnAddSP").click(function() {
        $('#modal_add_salepage').modal('show');
    });

    $("#btnAddSo").click(function() {
        $('#modal_add_salepage').modal('show');
    });

});
</script>