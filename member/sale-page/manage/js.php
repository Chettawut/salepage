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

            var fcard, bcard = '</div></div>'
            var arrobject = ['', 'ข้อความ', 'ปุ่ม', 'รูปภาพ', 'ยูทูป']
            var objcheck = '';
            var btnhtml = '';
            var editobject = ['', 'modal_edit_text', 'modal_edit_button', 'modal_edit_picture',
                'modal_edit_youtube'
            ]
            for (count = 0; count < result.objcode.length; count++) {
                if (objcheck != result.objcode[count]) {
                    if (btnhtml != '') {
                        $("#divresult").append(fcard + btnhtml + bcard)
                        btnhtml = ''
                    }
                    objcheck = result.objcode[count]
                }

                fcard =
                    '<div class="card" data-toggle="modal" data-target="#' + editobject[parseInt(result
                        .typecode[count])] + '" data-whatever="' + result.objcode[count] +
                    '"><div class="card-header border-0"><h3 class="card-title">' +
                    arrobject[parseInt(result.typecode[count])] +
                    '</h3><div class="card-tools"><a href="#" class="btn btn-tool btn-sm"><i class="fas fa-download"></i></a><a href="#" class="btn btn-tool btn-sm"><i class="fas fa-bars"></i></a></div></div><div class="card-body table-responsive p-0">'


                if (parseInt(result.typecode[count]) === 1)
                    $("#divresult").append(fcard + result.text[count] + bcard + '<br>')
                else if (parseInt(result.typecode[count]) === 2) {
                    if (result.type[count] === 'fb' && result.text[count].replace(/\s/g, '') != '')
                        btnhtml +=
                        '<a href="https://m.me/100069488625633" target="_blank"><img src="img/inbox-button.gif" width="400"></a><br>';
                    else if (result.type[count] == 'line' && result.text[count].replace(/\s/g, '') != '')
                        btnhtml +=
                        '<a href="https://line.me/ti/p/~100069488625633" target="_blank"><img src="img/line-button.gif" width="400"></a><br>';
                    else if (result.type[count] == 'tel' && result.text[count].replace(/\s/g, '') != '')
                        btnhtml +=
                        '<a href="tel:+0915028316" target="_blank"><img src="img/tel-button.gif" width="400"></a><br>';
                } else if (parseInt(result.typecode[count]) === 3) {
                    $("#divresult").append(fcard +
                        '<img src="uploads/' + result.objcode[count] + '/' + result.url[count] +
                        '" width="400">' + bcard + '<br>'
                    )
                    // console.log(result.objcode[count]);
                } else if (parseInt(result.typecode[count]) === 4) {
                    if (parseInt(result.autoplay[count]) === 1)
                        $("#divresult").append(fcard + '<iframe width="420" height="315" src="' + result
                            .url[
                                count] + '?autoplay=1"></iframe>' + bcard + '<br>')
                    else
                        $("#divresult").append(fcard + '<iframe width="420" height="315" src="' + result
                            .url[
                                count] + '"></iframe>' + bcard + '<br>')
                    // $("#divresult").append('<iframe width="420" height="315" src="https://www.youtube.com/embed/vqwvN8q36JM?autoplay=1"></iframe><br>')
                }


            }
            $("#spno").val(count)

            if (btnhtml != '') {
                $("#divresult").append(fcard + btnhtml + bcard)
                btnhtml = ''
            }
        }
    });
}

$('#modal_edit_text').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)

    $("#edittextid").val(recipient)

    $.ajax({
        type: "POST",
        url: "ajax/getsup_text.php",
        data: "idcode=" + recipient,
        success: function(result) {
            // alert(result.text[0])
            $('#edittext').text(result.text[0])
        }
    });
    //   modal.find('.modal-body input').val(recipient)
})

$('#modal_edit_button').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget)
    var recipient = button.data('whatever')
    var modal = $(this)

    $("#editbuttonid").val(recipient)

    $.ajax({
        type: "POST",
        url: "ajax/getsup_button.php",
        data: "idcode=" + recipient,
        success: function(result) {
            // alert(result.line[0])
            $('#txteditbtnfb').val(result.fb[0])
            $('#txteditbtnline').val(result.line[0])
            $('#txteditbtntel').val(result.tel[0])
        }
    });
    //   modal.find('.modal-body input').val(recipient)
})

$("#btnEditText").click(function() {
    alert($('#edittextid').val() + ' ' +$("#edittext").val());

    // $.ajax({
    //     type: "POST",
    //     url: "ajax/edit_text.php",
    //     data: {
    //         idcode: $('#edittextid').val(),
    //         text: $('#txteditarea_text').text()
    //     },
    //     success: function(result) {
    //         // alert(result)
    //         if (result.status == 1) // Success
    //         {
    //             alert(result.message);
    //             window.location.reload();
    //             // console.log(result.message);
    //         }
    //     }
    // });
});

$("#btnEditBtn").click(function() {
    // console.log($("#txtbtnfb").val());
    if ($('#txteditbtnfb').val() == '' && $('#txteditbtnline').val() == '' && $('#txteditbtntel').val() == '')
        alert('กรุณามีข้อมูลอย่างน้อย 1 ปุ่ม')
    else {
        $.ajax({
            type: "POST",
            url: "ajax/edit_button.php",
            data: {
                idcode: $('#editbuttonid').val(),
                fb: $('#txteditbtnfb').val(),
                line: $('#txteditbtnline').val(),
                tel: $('#txteditbtntel').val(),
                spno: $('#spno').val(),
                spcode: $('#spcode').val()
            },
            success: function(result) {
                // alert(result)
                if (result.status == 1) // Success
                {
                    alert(result.message);
                    window.location.reload();
                    // console.log(result.message);
                }
            }
        });
    }
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

    // console.log($("#txtbtnfb").val());
    if ($('#txtbtnfb').val() == '' && $('#txtbtnline').val() == '' && $('#txtbtntel').val() == '')
        alert('กรุณากรอกข้อมูลอย่างน้อย 1 ปุ่ม')
    else {
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
    }
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