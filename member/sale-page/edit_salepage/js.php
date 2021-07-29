<script>
$(document).ready(function() {



    // $.ajax({
    //     type: "POST",
    //     url: "ajax/getsup_salepage.php",
    //     data: "idcode=" + recipient,
    //     success: function(result) {
    //         modal.find('.modal-body #code').val(result.code);
    //         modal.find('.modal-body #editstcode').val(result.stcode);
    //         modal.find('.modal-body #editstname1').val(result.stname1);
    //         modal.find('.modal-body #editstorage_id').val(result.storage_id);
    //         modal.find('.modal-body #editunit').val(result.unit);
    //         modal.find('.modal-body #editstmin1').val(result.stmin1);
    //         modal.find('.modal-body #editstmin2').val(result.stmin2);
    //         modal.find('.modal-body #editsellprice').val(result.sellprice);
    //         modal.find('.modal-body #editstatus').val(result.status);


    //     }
    // });
});

$("#btnSaveText").click(function() {
    // alert($("#txtarea_text").val());
    $.ajax({
        type: "POST",
        url: "ajax/add_text.php",
        data: {
            text: $('#txtarea_text').val(),
            spno: $('#spno').val(),
            spcode: $('#spcode').val()
        },
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

$("#btnSaveBtn").click(function() {
    // alert($("#txtbtnfb").val());
    $.ajax({
        type: "POST",
        url: "ajax/add_button.php",
        data: {
            fb: $('#txtbtnfb').val(),
            line: $('#txtbtnline').val(),
            tel: $('#txtbtntel').val(),
            spno: $('#spno').val(),
            spcode: $('#spcode').val()
        },
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

$("#formimages").on("submit", function(event) {
    event.preventDefault(); //prevent default submitting
    var formData = new FormData($(this)[0]);
    $.ajax({
        url: "ajax/submit_upload_file.php",
        type: "post",
        data: formData,
        processData: false, //Not to process data
        contentType: false, //Not to set contentType
        success: function(data) {
            alert('เพิ่มรูปภาพสำเร็จ');
            $('#modal_add_picture').modal('toggle');
        }
    });

});

$("#imgaddpic").click(function() {
    $('#inputFile').trigger('click');
});

$("#btnyoutube").click(function() {
    
    var valueauto
    if($("#chkautoplay").prop("checked") === true)
    valueauto = 1
    else
    valueauto = 0
    // alert(valueauto);

    $.ajax({
        type: "POST",
        url: "ajax/add_youtube.php",
        data: {
            youtube: $('#txtyoutube').val(),
            autoplay: valueauto,
            spno: $('#spno').val(),
            spcode: $('#spcode').val()
        },
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




// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output 
    // document.getElementById("countdown").innerHTML = hours + "h " +
    //     minutes + "m " + seconds + "s ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>