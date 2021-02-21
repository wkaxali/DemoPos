Stripe.setPublishableKey('pk_test_51Hx51vDF9fotRLlU8pjZ4gMuQfwitpojiEk8W6shYrfBsHTvWOpn3FfrxBPrfeBwwOY7vUBRxf6YrA8PnfSYjts800HR4tMgOw');

var $form = $('#checkout-form2');

function goBabygo() {
    $('#checkout-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp_month: $('#card-expiry-month').val(),
        exp_year: $('#card-expiry-year').val(),
        name: $('#card-name').val()
    }, stripeResponseHandler);
    alert(Stripe.card.token);
    return false;
};

function stripeResponseHandler(status, response) {
    alert(status);
    if(response.error) {
        $('#checkout-error').removeClass('hidden');
        $('#checkout-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));
        $form.get(0).submit();
    }
}