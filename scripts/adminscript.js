//select coupon creation form
const couponcreationForm = document.querySelector("#couponcreationForm");
//function to process coupon info in form and process it
couponcreationForm.addEventListener("submit", (e) => {
  e.preventDefault();
  let name = document.querySelector("#name").value;
  let type = document.querySelector("#type").value;
  let cValue = document.querySelector("#value").value;
  let expires = document.querySelector("#expires").value;
  let priceconstraint = document.querySelector("#priceconstraint").value;
  let qtyconstraint = document.querySelector("#qtyconstraint").value;

  //   console.log({ name, type, cValue, expires, priceconstraint, qtyconstraint });

  //check if expired date given is ahead
  const correctExpiredDateGiven = () => {
    const currentDate = new Date();
    const expiredDateGiven = new Date(expires);
    return expiredDateGiven > currentDate;
  };
  if (name == "") {
    alert("Coupon name is required");
  } else if (cValue == "" || cValue < 0) {
    alert("Coupon value cannot be less than zero");
  } else if (expires == "" || correctExpiredDateGiven() == false) {
    console.log(correctExpiredDateGiven());
    alert("You cannot enter Expired Coupon");
  } else if (priceconstraint < 5) {
    alert(
      "Are You for real? are we doing charity? Check price constraint please!"
    );
  } else if (qtyconstraint < 1) {
    alert("At least one product should be inside cart or what do you think?");
  } else {
    //     //coupon form is correct send to php processor
    const formCode = "couponCode";
    let couponInfo = {
      name,
      type,
      cValue,
      expires,
      priceconstraint,
      qtyconstraint,
      formCode,
    };
    fetch("../process/couponprocess.php", {
      method: "POST",
      body: JSON.stringify(couponInfo),
      headers: { "Content-type": "application/json; charset=UTF-8" },
    })
      .then((response) => response.json())
      .then((json) => {
        if (json.code == 200) {
          document.querySelector("#name").value = "";
          document.querySelector("#value").value = "";
          document.querySelector("#expires").value = "";
          document.querySelector("#priceconstraint").value = "";
          document.querySelector("#qtyconstraint").value = "";
          alert(json.msg);
        } else {
          alert(json.msg);
        }
      })
      .catch((err) => console.log(err));
  }
});
