
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap.css">
</head>
<body>
    <section class="cartsection">
        <div class="container py-5">
            <h1 class="text-center">CART ITEMS</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="productlist">
                
                </div>
            </div>

            <div class="col-md-4 bg-dark pt-2">
                <h4 class="text-center text-white">Summary</h4>
                <hr/>
                <div class="form-group px-4">
                    <label for="" class="text-white pl-2">Coupon Code</label>
                    <input type="text" name="couponcode" id="couponcode" class="form-control">
                    <small class="text-white-50 pl-2">Enter a Valid Code to reduce price</small>
                    <input type="button" value="Validate"  class="btn btn-primary btn-sm mt-2" id="couponvalidator">
                </div>
                <hr/>
                <div class="benefit px-4 pt-2">
                    <p class="title">Benefit</p>
                    <p class="value">0%</p>
                </div>
                <hr/>
                <div class="total px-4 pt-2 ">
                    <p class="title">Total</p>
                    <p class="total" id="totalcost"></p>
                    
                </div>
                <div class="payment text-center">
                        <button class="btn btn-primary payment_action">Pay Now</button>
                    </div>
                <hr/>
            </div>
        </div>

        

        <div class="couponsection">
        </div>

        <div class="summary">
        </div>
        </div>
    </section>
    <section class="checkout">

        <form id="paymentForm">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input class="form-control" type="email" id="email-address" required />
            </div>
            <div class="form-group">
                <label for="first-name">First Name</label>
                <input type="text" class="form-control" id="first-name" />
            </div>
            <div class="form-group">
                <label for="last-name">Last Name</label>
                <input type="text" class="form-control" id="last-name" />
            </div>
            <div class="form-submit">
                <button type="submit" onclick="payWithPaystack()" class="btn btn-primary form-control"> Pay </button>
            </div>
        
            
        </form>
    </section>
    

    <script src="./scripts/script.js"></script>
    <script>
        let payment_action = document.querySelector(".payment_action");
        payment_action.addEventListener("click", ()=>{
            let checkout = document.querySelector(".checkout");
            checkout.classList.add("show-checkout");
        })
    </script>
    <script src="https://js.paystack.co/v1/inline.js"></script> 

    <script>
            const paymentForm = document.getElementById('paymentForm');
            paymentForm.addEventListener("submit", payWithPaystack, false);
            function payWithPaystack(e) {
            e.preventDefault();
            let handler = PaystackPop.setup({
                key: 'pk_test_f720381dd55d058a7e65208e8c441a053cf57a31', // Replace with your public key
                email: document.getElementById("email-address").value,
                amount: 160 * 100,
                ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
                // label: "Optional string that replaces customer email"
                onClose: function(){
                alert('Window closed.');
                },
                callback: function(response){
                let message = 'Payment complete! Reference: ' + response.reference;
                window.location = "http://localhost/couponsystemtask/verify_transaction.php?reference=" + response.reference
                alert(message);
                }
            });
            handler.openIframe();
            }
    </script>

</body>
</html>
