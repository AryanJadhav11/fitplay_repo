
<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap");
* {
  margin: 0;
  padding: 0;
  text-decoration: none;
  font-family: "Nunito", sans-serif;
  box-sizing: border-box;
  -webkit-tap-highlight-color: transparent;
}

body {
  background: whitesmoke;
  overflow-x: hidden;
  -ms-overflow-style: none;
  scrollbar-width: none;
  max-width: 100%;
  min-width: 360px;
}

body::-webkit-scrollbar {
  display: none;
}

hr {
  border: 0.5px solid rgb(235, 235, 235);
  margin: 0 30px;
}

header {
  margin-top: 40px;
  height: 40px;
}

header h1 {
  font-size: 36px;
  display: inline-block;
  opacity: 80%;
  text-align: center;
  padding: 10px 10px 10px 40px;
  vertical-align: middle;
}

header p {
  display: inline-block;
  font-size: 12px;
  padding: 10px;
  color: gray;
  vertical-align: middle;
  text-align: center;
}

.container {
  width: 96%;
  background: white;
  margin: 50px auto;
  position: relative;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  padding: 30px 20px 50px;
}

.heading {
  height: 60px;
  position: relative;
}

.odetails-1 {
  background: rgb(225, 225, 225);
  padding: 6px 14px;
  display: inline;
  border: none;
  border-radius: 20px;
}

.odetails-1 p {
  display: inline-block;
  font-size: 13px;
}

.odetails-1 p:nth-child(2) {
  color: blue;
}

.odetails-2 {
  margin-top: 10px;
  display: inline-block;
}

.odetails-2 p {
  color: gray;
  display: inline;
  font-size: 12px;
  margin-left: 20px;
}

.heading button {
  position: absolute;
  top: -5px;
  right: 0;
  margin-right: 10px;
  background: #644dbd;
  outline: none;
  border: none;
  cursor: pointer;
  font-size: 12px;
  padding: 8px 20px 8px 32px;
  color: white;
  border-radius: 20px;
}

.heading button i {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  font-size: 18px;
  left: 10px;
}

.card-container {
  width: 100%;
  position: relative;
  margin-top: 20px;
}

.card {
  height: 160px;
  width: 96%;
  margin: 0 auto;
  position: relative;
  display: block;
  cursor: pointer;
  overflow: hidden;
  transition: 1s cubic-bezier(0.215, 0.61, 0.355, 1);
}

.card .img {
  width: 150px;
  height: 150px;
  display: inline;
}

.card .img img {
  width: 140px;
  height: 140px;
}

.card .parent {
  position: absolute;
  left: 150px;
  top: 0;
}

.card .content {
  position: relative;
  width: 240px;
  display: inline-block;
  padding: 10px 10px;
  overflow-wrap: break-word;
  hyphens: auto;
  vertical-align: top;
}

.card .content .details-1 {
  width: 200px;
  display: block;
}

.card .content .details-1 h1 {
  font-size: 13px;
  width: 100%;
}

.card .content .details-1 p {
  font-size: 11px;
  color: gray;
  margin-top: 5px;
  width: 100%;
}

.card .content .details-2 {
  display: block;
  margin-top: 30px;
}

.card .content .details-2 p {
  display: inline;
  color: gray;
  font-size: 12px;
}

.card .content .details-2 p:nth-child(3) {
  display: inline;
  color: gray;
  font-size: 12px;
  padding-left: 5px;
}

.card .content .details-2 p:nth-child(3) {
  color: black;
  padding-left: 8px;
}

.status {
  display: inline-block;
  width: 200px;
  padding: 10px 10px;
  margin-left: 40px;
}

.status .sec1 {
  display: block;
}

.status .sec1 p {
  color: gray;
  font-size: 12px;
}

.status .sec1 h2 {
  color: #644dbd;
  font-size: 16px;
}

.status .sec2 {
  display: block;
  margin-top: 15px;
}

.status .sec2 p {
  color: gray;
  font-size: 12px;
}

.status .sec2 h3 {
  color: #644dbd;
  font-size: 16px;
}

.card-bottom {
  width: 100%;
  position: absolute;
  left: 50%;
  bottom: 8px;
  transform: translateX(-50%);
}

.card-bottom button {
  background: none;
  outline: none;
  border: none;
  border-right: 2px solid rgb(235, 235, 235);
  padding: 10px 14px;
  color: gray;
  font-size: 12px;
  cursor: pointer;
  margin-left: 20px;
  display: inline;
}

.card-bottom h1 {
  font-size: 15px;
  display: inline;
  float: right;
  opacity: 88%;
  padding: 8px 10px;
  margin-right: 20px;
}

@media screen and (max-width: 800px) {
  .container {
    padding: 30px 10px 50px;
  }

  .heading button p {
    display: none;
  }

  .heading button {
    padding: 18px;
    border-radius: 50%;
  }

  .heading button i {
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .card .content .details-1 {
    width: 160px;
  }

  .status {
    display: none;
  }

  .card.toggle {
    height: 300px;
    transform-origin: top;
    transition: 1s cubic-bezier(0.215, 0.61, 0.355, 1);
  }

  .card.toggle .status {
    display: block;
    width: 100%;
    margin-top: 20px;
    margin-left: 0;
    text-align: start;
  }

  .card .content .details-2 {
    margin-top: 20px;
  }

  .card .content .details-2 p:nth-child(3) {
    padding: 0;
    display: block;
    margin-top: 5px;
  }

  .odetails-2 {
    display: block;
  }

  header p {
    padding: 0 0 0 40px;
  }

  .container {
    margin-top: 70px;
  }
}

    </style>
<header>
  <h1>My Orders</h1>
  <p>View all of your pending orders here.</p>
</header>
<div class="container">
  <div class="heading">
    <div class="odetails-1">
      <p><b>Order</b></p>
      <p>#R86F854G7665</p>
    </div>
    <div class="odetails-2">
      <p>Order Placed: Mon 12Th Jan 22</p>
    </div>

    <button><i class="fa-solid fa-location-crosshairs"></i>
      <p>TRACK ORDER</p>
    </button>
  </div>

  <hr>

  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="https://www.maxpixel.net/static/photo/1x/Shoes-Nike-Jordan-1-Fashion-Sneakers-Jordan-5418992.jpg" alt="Nike Air Jordan 1">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>NIKE AIR JORDAN 1 HIGH RETRO SPORTS SHOES</h1>
            <p>By NIKE</p>
          </div>
          <div class="details-2">
            <p>Size: 10</p>
            <p>Qty: 1</p>
            <p><b>₹13,995</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>In-Transit</h2>
          </div>
          <div class="sec2">
            <p>Delivery Expected By</p>
            <h3>17 January 2022</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="card-container">
    <div class="card">
      <div class="img">
        <img src="https://static.nike.com/a/images/q_auto:eco/t_product_v1/f_auto/dpr_1.0/w_383,c_limit/dd682b9b-c58c-4bd2-985f-c715116d4a0b/air-max-intrlk-shoes-clCM4d.png" alt="Nike Air Jordan 1">
      </div>
      <div class="parent">
        <div class="content">
          <div class="details-1">
            <h1>Nike Air Max INTRLK</h1>
            <p>By NIKE</p>
          </div>
          <div class="details-2">
            <p>Size: 9</p>
            <p>Qty: 1</p>
            <p><b>₹9,695</b></p>
          </div>
        </div>
        <div class="status">
          <div class="sec1">
            <p>Status</p>
            <h2>In-Transit</h2>
          </div>
          <div class="sec2">
            <p>Delivery Expected By</p>
            <h3>17 January 2022</h3>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>

  <div class="card-bottom">
    <button>✖ CANCEL ORDER</button>
    <h1>₹23,690</h1>
  </div>
</div>
<script>
    $(document).ready(function () {
  $(".card").click(function () {
    $(this).toggleClass("toggle");
  });
});

</script>
</body>
</html>