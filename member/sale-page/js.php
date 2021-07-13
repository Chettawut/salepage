<script>
$(document).ready(function() {


    $.ajax({
        type: "POST",
        url: "ajax/get_salepage.php",
        data: "&username=" + $('#txtusername').val(),
        success: function(result) {
            
            for (count = 0; count < result.pagecode.length; count++) {

                $('#tablesalepage tbody').append(
                    '<tr data-toggle="modal" data-dismiss="modal"  id="' + result
                    .pagecode[count] + '" onClick="onClick_tr(this.id,\'' + result.pagecode[
                        count] + '\');"><td>' + (count+1) + '</td><td>' +
                    result.pagename[count] + '</td><td>กำลังใช้งาน</td><td><button type="button" class="btn btn-danger"><i class="fa fa-times"></i> ลบ</button></td></tr>');


            }
        }
    });



    $("#frmaddsalepage").submit(function() {
        $.ajax({
            type: "POST",
            url: "ajax/add_salepage.php",
            data: $("#frmaddsalepage").serialize() + "&username=" + $('#txtusername').val(),
            success: function(result) {

                if (result.status == 1) // Success
                {
                    alert(result.message);
                    window.location.reload();
                    // console.log(result.message);
                }
            }
        });
    });

    $("#btnAddSP").click(function() {

        $('#modal_add_salepage').modal('show');
    });

    $("#btnRefresh").click(function() {
        window.location.reload();
    });

});
</script>