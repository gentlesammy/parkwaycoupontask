//get all products in json file to display on page
const getAllProducts = async () => {
  const response = await fetch("./scripts/products.json");
  const products = await response.json();
  return products;
};

//display products on cart
const displayCartOnPage = async () => {
  const products = await getAllProducts();
  const productlist = document.querySelector(".productlist");
  const proMap = products.products.map((pro) => {
    return `
            <div class='single'>
                <h4 class='pro-title'>${pro.name}</h4>
                <div class='img-container'>
                  <img src=./images/${pro.coverImage} class='img-fluid'>
                </div>
                <h6 class='pro-price'>$${pro.price}</h6>
            </div>
    `;
  });

  productlist.innerHTML = `
    ${proMap.join("")}
  `;
  cartTotalCalc();
};
displayCartOnPage();

// calculate cart total and show in the right column
const cartTotalCalc = async (discount = 0) => {
  const products = await getAllProducts();
  var totalPrice = 0;
  for (let i = 0; i < products.products.length; i++) {
    totalPrice = totalPrice + products.products[i].price;
  }
  //if discount is available, deduct discount
  const priceCol = document.querySelector("#totalcost");
  priceCol.innerHTML = "$" + totalPrice;
};

//validate coupons,
//TODO
//check code in frontend using length : done
// check if coupon exist
// check if coupon is not outdated
//check if coupon is still active
//validate coupon cart Items requirement
//validate totalprice requirement for coupon
//if coupon condition is satisfied modify total price to reflect the coupon
const couponvalidator = document.querySelector("#couponvalidator");
couponvalidator.addEventListener("click", () => {
  const couponCode = document.querySelector("#couponcode").value;
  if (couponCode.length < 5) {
    alert("Invalid Coupon code. Please enter the correct code and validate");
  } else {
    fetch("../process/couponvalidator.php", {
      method: "POST",
      body: JSON.stringify(couponCode),
      headers: { "Content-type": "application/json; charset=UTF-8" },
    })
      .then((response) => response.json())
      .then((json) => {})
      .catch((err) => console.log(err));
  }
});
