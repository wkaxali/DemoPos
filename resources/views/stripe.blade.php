<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="page-header">Checkout</h1>
            <h3>Your total: 50</h3>
            <div id="checkout-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : '' }}">
         
            </div>
            <form action="./checkout" method="post" id="checkout-form2">
            {{ csrf_field() }}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" id="address" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-name">Card Holder Name:</label>
                            <input type="text" id="card-name" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-number">Credit card number:</label>
                            <input type="text" id="card-number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-month">Expiration month:</label>
                                    <input type="text" id="card-expiry-month" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="card-expiry-year">Expiration year:</label>
                                    <input type="text" id="card-expiry-year" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="card-cvc">CVC:</label>
                            <input type="text" id="card-cvc" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" onclick="goBabygo()">Buy now</button>
            </form>

        </div>
    </div>
    

<button onclick="goBabygo()">whatyyy
</button>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ asset('/js/charge.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function goBabygo(){

            Stripe.setPublishableKey('pk_test_51Hx51vDF9fotRLlU8pjZ4gMuQfwitpojiEk8W6shYrfBsHTvWOpn3FfrxBPrfeBwwOY7vUBRxf6YrA8PnfSYjts800HR4tMgOw');

var $form = $('#checkout-form2');
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
        }




        function stripeResponseHandler(status, response) {
    alert(status);
    if(response.error) {
        $('#checkout-error').removeClass('hidden');
        $('#checkout-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        alert(token);
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {

                    alert("Blay  " + this.responseText + " is Updated");


                }
            };
        xhttp.open("POST", "./Checkout/" + token, true);
    xhttp.send();
       
    }
}
        </script>





    
   