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
    $("#aa1").click(function() {
        $("#sociallist").toggleClass("remove");
        $(".btnopenclose").toggleClass("as_selected");
    });
});
$(window).on('scroll ', function() {
    if ($(window).scrollTop() < 800) {
        $('#socialarea').fadeOut();
    }
    if ($(window).scrollTop() > 900) {
        $('#socialarea').fadeIn();
    }
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