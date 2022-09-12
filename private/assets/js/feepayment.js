// Hide/Show your selected payment method
$(document).ready(function() {

    $('#momo_form').css("display", "none");
    $('#card_form').css("display", "none");

    $('select').click(function() {
        var option = $(this).val()

        if (option == 1 || option == 2 || option == 3) {
            $('#card_form').css("display", "none");
            $('#momo_form').css("display", "block");



        } else if (option == 4 || option == 5) {

            $('#momo_form').css("display", "none");

            $('#card_form').css("display", "block");

        }
    })

})


//validating fields in the payment card selected 
$(function($) {
    $('[data-numeric]').payment('restrictNumeric');
    $('.cc-number').payment('formatCardNumber');
    $('.cc-exp').payment('formatCardExpiry');
    $('.cc-cvc').payment('formatCardCVC');
    $.fn.toggleInputError = function(erred) {
        this.parent('.form-group').toggleClass('has-error', erred);
        return this;
    };
    $('form').submit(function(e) {
        e.preventDefault();
        var cardType = $.payment.cardType($('.cc-number').val());
        $('.cc-number').toggleInputError(!$.payment.validateCardNumber($('.cc-number').val()));
        $('.cc-exp').toggleInputError(!$.payment.validateCardExpiry($('.cc-exp').payment('cardExpiryVal')));
        $('.cc-cvc').toggleInputError(!$.payment.validateCardCVC($('.cc-cvc').val(), cardType));
        $('.cc-brand').text(cardType);
        $('.validation').removeClass('text-danger text-success');
        $('.validation').addClass($('.has-error').length ? 'text-danger' : 'text-success');
    });
});
