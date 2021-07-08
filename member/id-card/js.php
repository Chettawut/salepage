<script>
$(document).ready(function() {
    
    $("#download").click(function() {
        // alert("The paragraph was clicked.");
        window.location.href = 'download.php?file=' + $("#idno").val() + '.png';
        // href="download.php?file=.png 
    });
    
});


</script>