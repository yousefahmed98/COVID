$(function() {
    $("#datepicker").datepicker();
});
$(document).ready(function() {

    $(".tempCard").hover(
        function() {
            $(this).addClass('shadow-lg').css('cursor', 'pointer');
        },
        function() {
            $(this).removeClass('shadow-lg');
        }
    )
});
$("#bootstrapForm").submit(function(event) {
    var vForm = $(this);

    if (vForm[0].checkValidity() === false) {
        event.preventDefault()
        event.stopPropagation()
    } else {
        alert("your form is valid and ready to send");

    }
    vForm.addClass('was-validated');
});