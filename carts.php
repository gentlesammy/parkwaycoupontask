<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>

    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/bootstrap.css">
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
                <hr/>
            </div>
        </div>

        

        <div class="couponsection">
        </div>

        <div class="summary">
        </div>
        </div>
    </section>
    

    <script src="./scripts/script.js"></script>
</body>
</html>