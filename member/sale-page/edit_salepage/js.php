<script>
$(document).ready(function() {

    getSpDetail($('#spcode').val())

});

function getSpDetail(spcode) {
    $.ajax({
        type: "POST",
        url: "ajax/getsup_salepage.php",
        data: "idcode=" + spcode,
        success: function(result) {

            // alert(result.objcode)
            for (count = 0; count < result.objcode.length; count++) {
                if (parseInt(result.typecode[count]) === 1)
                    $("#divresult").append(result.text[count] + '<br>')
                else if (parseInt(result.typecode[count]) === 2) {
                    if (result.type[count] === 'fb')
                        $("#divresult").append(
                            '<a href="https://m.me/100069488625633" target="_blank"><img src="img/inbox-button.gif" width="400"></a><br>'
                        )
                    else if (result.type[count] == 'line')
                        $("#divresult").append(
                            '<a href="https://line.me/ti/p/~100069488625633" target="_blank"><img src="img/line-button.gif" width="400"></a><br>'
                        )
                    else if (result.type[count] == 'tel')
                        $("#divresult").append(
                            '<a href="tel:+0915028316" target="_blank"><img src="img/tel-button.gif" width="400"></a><br>'
                        )

                } else if (parseInt(result.typecode[count]) === 3)
                    $("#divresult").append(
                        '<img src="uploads/'+result.objcode[count]+'/'+result.url[count]+'" width="400"><br>'
                    )
                else if (parseInt(result.typecode[count]) === 4)
                {
                    if(parseInt(result.autoplay[count]) === 1)
                    $("#divresult").append('<iframe width="420" height="315" src="'+result.url[count]+'?autoplay=1"></iframe><br>')
                    else
                    $("#divresult").append('<iframe width="420" height="315" src="'+result.url[count]+'"></iframe><br>')
                        // $("#divresult").append('<iframe width="420" height="315" src="https://www.youtube.com/embed/vqwvN8q36JM?autoplay=1"></iframe><br>')
                }
                    
                    

            }
        }
    });
}


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
        url: "ajax/add_picture.php",
        type: "post",
        data: formData,
        processData: false, //Not to process data
        contentType: false, //Not to set contentType
        success: function(result) {

            if (result.status == 1) // Success
            {
                alert(result.message);
                window.location.reload();
                // console.log(result.message);
            }
            $('#modal_add_picture').modal('toggle');
        }
    });

});

$('#modal_add_picture').on('shown.bs.modal', function(e) {
    $('#imagespno').val($('#spno').val())
    $('#imagespcode').val($('#spcode').val())
    // alert($('#imagespno').val() + ' ' + $('#imagespcode').val())
})


$("#imgaddpic").click(function() {
    $('#inputFile').trigger('click');
});

$("#btnyoutube").click(function() {

    var valueauto
    if ($("#chkautoplay").prop("checked") === true)
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