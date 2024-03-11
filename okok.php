<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id='app'></div>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat&display=swap");
:root {
  font-size: 16px;
  color: white;
  font-family: "Montserrat", sans-serif;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

div {
  display: -webkit-box;
  display: flex;
}

button {
  border: none;
  background: none;
  outline: none;
  color: white;
  cursor: pointer;
  -webkit-transition: 0.5s;
  transition: 0.5s;
}


@-webkit-keyframes animate {
  0% {
    -webkit-transform: translateY(0) rotate(0deg);
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-100vh) rotate(360deg);
    transform: translateY(-100vh) rotate(360deg);
    opacity: 0;
  }
}
@keyframes animate {
  0% {
    -webkit-transform: translateY(0) rotate(0deg);
    transform: translateY(0) rotate(0deg);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(-100vh) rotate(360deg);
    transform: translateY(-100vh) rotate(360deg);
    opacity: 0;
  }
}
.card {
  position: relative;
  flex-shrink: 0;
  height: 300px;
  width: 200px;
  background-color: #010101;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 7px 5px -5px #4d4b4b;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  .img-container {
    position: absolute;
    height: 185px;
    width: 185px;
    margin: 0 auto;
    left: 0;
    right: 0;
    transform: translateY(35px);
    img {
      width: 100%;
      align-self: center;
    }
    .out-of-stock-cover {
      position: absolute;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.25);

      justify-content: center;
      align-items: center;
      display: none;
      span {
        font-weight: 900;
        color: rgba(255, 200, 200, 0.75);
        font-size: 1.5rem;
      }
    }
  }
}

.top-bar {
  transform: translateY(0.5rem);
  width: 100%;
  justify-content: space-between;
  align-items: baseline;
  padding: 0 1rem;
  .fa-apple {
    font-size: 1.5rem;
  }
  .stocks {
    font-size: 0.8rem;
    color: lightgreen;
  }
}
.card .details {
  position: absolute;
  height: 220px;
  width: 100%;
  background-color: #2e2f33;
  border-radius: 20px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: justify;
  justify-content: space-between;
  padding: 20px;
  bottom: -165px;
  -webkit-transition: 0.25s;
  transition: 0.25s;
}

.card .details .name-fav {
  -webkit-box-pack: justify;
  justify-content: space-between;
}
.card .details .name-fav strong {
  font-weight: 600;
}

.fav {
  color: red;
}

.card .details .wrapper {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: justify;
  justify-content: space-between;
  -webkit-transform: translateY(5px);
  transform: translateY(5px);
  display: none;
}

.details .wrapper p {
  font-size: 0.9rem;
  padding: 5px 0;
  font-weight: light;
}

.card .details .purchase {
  width: 100%;
  -webkit-box-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  align-items: center;
}
.card .details .purchase p {
  font-weight: 500;
}

.details .purchase .add-btn {
  border-radius: 20px;
  border: 1px solid white;
  background: none;
  color: white;
  padding: 6px 10px;
}

.details .purchase .add-btn:hover {
  background: white;
  color: black;
}

.main-cart .card:hover {
  height: 450px;
  width: 260px;
  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}

.main-cart .card:hover .details {
  bottom: 0;
}

.main-cart .card:hover .wrapper {
  display: block;
}


@media (max-width: 768px) {
  .side-nav {
    width: 80%;
  }
  .invoice .order {
    width: 60%;
  }
  .main-cart {
    overflow: scroll;
  }
}
@media (max-width: 576px) {
  .side-nav {
    width: 100%;
    .cart-img {
      display: none;
    }
  }
  .invoice .order {
    width: 80%;
  }
  .nav {
    width: 576px;
    height: 4rem;
    background: rgba(255, 255, 255, 0.5);
    backdrop-filter: blur(5px);
    filter: invert(1);
  }
  .main-cart {
    justify-content: flex-start;
    flex-wrap: nowrap;
    flex-direction: column;
    height: 95%;
    top: 4rem;

    .card {
      margin: 20px auto;
    }
  }
}
</style>
<script>
    const productDetails = [
  {
    name: "Airpods Pro",
    price: 24900,
    imageUrl:
      "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTJiKtlpQGkIeOyAPV3qQMNkl8uuRzfGWZtIDb_WgDnam8WjhpL&usqp=CAU",
    qty: 10,
    heading: "Wireless Noise Cancelling Earphones",
    des:
      "AirPods Pro have been designed to deliver active Noise Cancellation for immersive sound. Transparancy mode so much can hear your surroundings."
  },
];
const cartDetails = [];

//click events {






function sideNav(handler) {
  let sideNav = document.getElementsByClassName("side-nav")[0];
  let cover = document.getElementsByClassName("cover")[0];
  sideNav.style.right = handler ? "0" : "-100%";
  cover.style.display = handler ? "block" : "none";
  CartIsEmpty();
}

function buy(handler) {
  if (cartDetails.length == 0) return;
  sideNav(!handler);
  document.getElementsByClassName("purchase-cover")[0].style.display = handler
    ? "block"
    : "none";
  document.getElementsByClassName("order-now")[0].innerHTML = handler
    ? Purchase()
    : "";
}

function okay(event) {
  let container = document.getElementsByClassName("invoice")[0];
  if (event.target.innerText == "continue") {
    container.style.display = "none";
    document.getElementsByClassName("purchase-cover")[0].style.display = "none";
  } else {
    event.target.innerText = "continue";
    event.target.parentElement.getElementsByClassName(
      "order-details"
    )[0].innerHTML = `<em class='thanks'>Thanks for shopping with us</em>`;
    container.style.height = "180px";
  }
}
//}

// button components for better Ux {
function AddBtn() {
  return `
<div>
  <button onclick='addItem(this)' class='add-btn'>Add <i class='fas fa-chevron-right'></i></button>
</div>`;
}

function QtyBtn(qty = 1) {
  if (qty == 0) return AddBtn();
  return `
<div>
  <button class='btn-qty' onclick="qtyChange(this,'sub')"><i class='fas fa-chevron-left'></i></button>
  <p class='qty'>${qty}</p>
  <button class='btn-qty' onclick="qtyChange(this,'add')"><i class='fas fa-chevron-right'></i></button>
</div>`;
}
//}

//Ui components {
function Product(product = {}) {
  let { name, price, imageUrl, heading, des } = product;
  return `
<div class='card'>
  <div class='top-bar'>
    <i class='fab fa-apple'></i>
    <em class="stocks">In Stock</em>
  </div>
  <div class='img-container'>
    <img class='product-img' src='${imageUrl}' alt='' />
    <div class='out-of-stock-cover'><span>Out Of Stock</span></div>
  </div>
  <div class='details'>
    <div class='name-fav'>
      <strong class='product-name'>${name}</strong>
      <button onclick='this.classList.toggle("fav")' class='heart'><i class='fas fa-heart'></i></button>
    </div>
    <div class='wrapper'>
      <h5>${heading}</h5>
      <p>${des}</p>
    </div>
    <div class='purchase'>
      <p class='product-price'>₹ ${price}</p>
      <span class='btn-add'>${AddBtn()}</span>
    </div>
  </div>
</div>`;
}

function CartItems(cartItem = {}) {
  let { name, price, imgSrc, qty } = cartItem;
  return `
<div class='cart-item'>
  <div class='cart-img'>
    <img src='${imgSrc}' alt='' />
  </div>
  <strong class='name'>${name}</strong>
  <span class='qty-change'>${QtyBtn(qty)}</span>
  <p class='price'>₹ ${price * qty}</p>
  <button onclick='removeItem(this)'><i class='fas fa-trash'></i></button>
</div>`;
}

function Banner() {
  return `
<div class='banner'>
  <ul class="box-area">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  </ul>
  <div class='main-cart'>${DisplayProducts()}</div>

  <div class='nav'>
    <button onclick='sideNav(1)'><i class='fas fa-shopping-cart' style='font-size:2rem;'></i></button>
    <span class= 'total-qty'>0</span>
  </div>
  <div onclick='sideNav(0)' class='cover'></div>
  <div class='cover purchase-cover'></div>
  <div class='cart'>${CartSideNav()}</div>
  <div class='stock-limit'>
    <em>You Can Only Buy 10 Items For Each Product</em>
    <button class='btn-ok' onclick='limitPurchase(this)'>Okay</button>
  </div>
<div  class='order-now'></div>
</div>`;
}

function CartSideNav() {
  return `
<div class='side-nav'>
  <button onclick='sideNav(0)'><i class='fas fa-times'></i></button>
  <h2>Cart</h2>
  <div class='cart-items'></div>
  <div class='final'>
    <strong>Total: ₹ <span class='total'>0</span>.00/-</strong>
    <div class='action'>
      <button onclick='buy(1)' class='btn buy'>Purchase <i class='fas fa-credit-card' style='color:#6665dd;'></i></button>
      <button onclick='clearCart()' class='btn clear'>Clear Cart <i class='fas fa-trash' style='color:#bb342f;'></i></button>
    </div>
  </div>
</div>`;
}

function Purchase() {
  let toPay = document.getElementsByClassName("total")[0].innerText;
  let itemNames = cartDetails.map((item) => {
    return `<span>${item.qty} x ${item.name}</span>`;
  });
  let itemPrices = cartDetails.map((item) => {
    return `<span>₹ ${item.price * item.qty}</span>`;
  });
  return `
<div class='invoice'>
  <div class='shipping-items'>
    <div class='item-names'>${itemNames.join("")}</div>
    <div class='items-price'>${itemPrices.join("+")}</div>
  </div>
<hr>
  <div class='payment'>
    <em>payment</em>
    <div>
      <p>total amount to be paid:</p><span class='pay'>₹ ${toPay}</span>
    </div>
  </div>
  <div class='order'>
    <button onclick='order()' class='btn-order btn'>Order Now</button>
    <button onclick='buy(0)' class='btn-cancel btn'>Cancel</button>
  </div>
</div>`;
}

function OrderConfirm() {
  let orderId = Math.round(Math.random() * 1000);
  let totalCost = document.getElementsByClassName("total")[0].innerText;
  return `
<div>
  <div class='order-details'>
    <em>your order has been placed</em>
    <p>Your order-id is : <span>${orderId}</span></p>
    <p>your order will be delivered to you in 3-5 working days</p>
    <p>you can pay <span>₹ ${totalCost}</span> by card or any online transaction method after the products have been dilivered to you</p>
  </div>
  <button onclick='okay(event)' class='btn-ok'>okay</button>
</div>`;
}
//}

//updates Ui components {
function DisplayProducts() {
  let products = productDetails.map((product) => {
    return Product(product);
  });
  return products.join("");
}

function DisplayCartItems() {
  let cartItems = cartDetails.map((cartItem) => {
    return CartItems(cartItem);
  });
  return cartItems.join("");
}

function RenderCart() {
  document.getElementsByClassName(
    "cart-items"
  )[0].innerHTML = DisplayCartItems();
}

function SwitchBtns(found) {
  let element = found.getElementsByClassName("btn-add")[0];
  element.classList.toggle("qty-change");
  let hasClass = element.classList.contains("qty-change");
  found.getElementsByClassName("btn-add")[0].innerHTML = hasClass
    ? QtyBtn()
    : AddBtn();
}

function ToggleBackBtns() {
  let btns = document.getElementsByClassName("btn-add");
  for (let btn of btns) {
    if (btn.classList.contains("qty-change")) {
      btn.classList.toggle("qty-change");
    }
    btn.innerHTML = AddBtn();
  }
}

function CartIsEmpty() {
  let emptyCart = `<span class='empty-cart'>Looks Like You Haven't Added Any Product In The Cart</span>`;
  if (cartDetails.length == 0) {
    document.getElementsByClassName("cart-items")[0].innerHTML = emptyCart;
  }
}

function CartItemsTotal() {
  let totalPrice = cartDetails.reduce((totalCost, item) => {
    return totalCost + item.price * item.qty;
  }, 0);
  let totalQty = cartDetails.reduce((total, item) => {
    return total + item.qty;
  }, 0);
  document.getElementsByClassName("total")[0].innerText = totalPrice;
  document.getElementsByClassName("total-qty")[0].innerText = totalQty;
}

function Stocks() {
  cartDetails.forEach((item) => {
    productDetails.forEach((product) => {
      if (item.name == product.name && product.qty >= 0) {
        product.qty -= item.qty;
        if (product.qty < 0) {
          product.qty += item.qty;
          document.getElementsByClassName("invoice")[0].style.height = "180px";
          document.getElementsByClassName(
            "order-details"
          )[0].innerHTML = `<em class='thanks'>Stocks Limit Exceeded</em>`;
        } else if (product.qty == 0) {
          OutOfStock(product, 1);
        } else if (product.qty <= 5) {
          OutOfStock(product, 0);
        }
      }
    });
  });
}

function OutOfStock(product, handler) {
  let products = document.getElementsByClassName("card");
  for (let items of products) {
    let stocks = items.getElementsByClassName("stocks")[0];
    let name = items.getElementsByClassName("product-name")[0].innerText;
    if (product.name == name) {
      if (handler) {
        items.getElementsByClassName("out-of-stock-cover")[0].style.display =
          "flex";
        stocks.style.display = "none";
      } else {
        stocks.innerText = "Only Few Left";
        stocks.style.color = "orange";
      }
    }
  }
}

function App() {
  return `
<div>
  ${Banner()}
</div>`;
}
//}

// injects the rendered component's html
document.getElementById("app").innerHTML = App();

</script>
</body>
</html>