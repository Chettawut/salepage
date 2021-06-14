<script>
$(document).ready(function() {
    // modal_add_content
    $("#btnSave_text").click(function() {
        // alert(("#txtarea_text").val());
        alert(("#test1").val());

    });
});


// $.ajax({
//         type: "POST",
//         url: "ajax/get_All.php",
//         data: {
//             topiccode: topic
//         },
//         success: function(
//             result) {
//                 //console.log(result.amount);
//             if (isInt(topic)) {

//                 $('#txtTotalpeople' + topic).text(result.amount);
//                 $('#txtTotalamount' + topic).text(formatMoney(result.total, 0));
//                 $('#txtTotalpercen' + topic).text('100.00 %');
//             } else {
//                 $('#txtTotalpeople' + topic.replace(".", "_")).text(result.amount);
//                 $('#txtTotalamount' + topic.replace(".", "_")).text(formatMoney(result.total, 0));
//                 $('#txtTotalpercen' + topic.replace(".", "_")).text('100.00 %');

//             }



//         }
//     });



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

    // Output the result in an element with id="demo"
    document.getElementById("countdown").innerHTML = hours + "h " +
        minutes + "m " + seconds + "s ";

    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1000);
</script>