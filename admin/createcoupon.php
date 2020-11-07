<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin: Coupon Management</title>

    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/bootstrap.css">
</head>
<body>
    <section class="couponaddArea">
        <div class="container py-5">
            <h1 class="text-center">Add New Coupon</h1>
            <p class="text-center">Fill in Details of the new coupon here</p>
            <div class="row py-5 my-2">
                <div class="col-md-3"></div>
                <div class="col-md-6">

                    <form action="./process/couponprocess.php" method="post" id="couponcreationForm" class="bg-primary p-2">
                    <div class="form-group">
                        <label for="coupon Name">Coupon Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                        <small id="helpline" class="form-text">This is what customers enter to claim discount</small>
                    </div>

                    <div class="form-group">
                        <label for="coupon-Name">Coupon Benefit Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="percent">Percentage</option>
                            <option value="amount">Amount</option>
                        </select>
                        <small id="helpline" class="form-text">You can select between Percentage or amount</small>
                    </div>

                    <div class="form-group">
                        <label for="coupon Name">Coupon Benefit Value</label>
                        <input type="number" class="form-control" id="value" name="value">
                        <small id="helpline" class="form-text">What is the value of this coupon?</small>
                    </div>

                    <div class="form-group">
                        <label for="coupon expiry date">Coupon Expiry Date</label>
                        <input type="date" class="form-control" id="expires" name="expires">
                        <small id="helpline" class="form-text">When does this coupon expires?</small>
                    </div>


                    <div class="form-group">
                        <label for="coupon constraint price">Coupon Price Constraint</label>
                        <input type="number" class="form-control" id="priceconstraint" name="priceconstraint" value="10">
                        <small id="helpline" class="form-text">What Minimum Purchase can benefit from this coupon?</small>
                    </div>

                    <div class="form-group">
                        <label for="coupon constraint quantity">Coupon Item Quantity Constraint</label>
                        <input type="number" class="form-control" id="qtyconstraint" name="qtyconstraint" value="1">
                        <small id="helpline" class="form-text">What Minimum Cart Quantity can benefit from this coupon?</small>
                    </div>

                    <button type="submit" class="btn btn-danger mb-2">Create Coupon</button>



                            
                    </form>

                </div>
                <div class="col-md-3"></div>
            </div>
            
        
    
        </div>
    </section>
    

    <script src="../scripts/adminscript.js"></script>
</body>
</html>