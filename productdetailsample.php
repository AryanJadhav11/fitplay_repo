<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- start -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>

<div class="wrapper">
  
  <div class="col-1-2">
    <div class="product-wrap">
      <div class="product-shot">
        <img src="https://s3-us-west-2.amazonaws.com/hypebeast-wordpress/image/2009/10/smart-magazine-stussy-stock-link-tshirt-3.jpg" alt="" />
      </div>
    </div>
  </div>
  
  <div class="col-1-2">
    <div class="product-info">
      <h2>Stussy Varsity Raglan</h2>
      <div class="desc">
        From its humble origins as a surfwear brand, Stussy has gone on to become one of the biggest streetwear labels in the industry. Mixing various influences ranging from surf to music and everything in between, Stussy and it’s iconic signature graphic has grown to encapsulate a full range of apparel, home goods and limited-edition collaborations. 100% premium cotton raglan tee with 3/4 -length contrasting sleeves and graphic print on chest.
      </div>
      <ul class="sizing-list">
        <li class="size">S</li>
        <li class="size active">M</li>
        <li class="size">L</li>
      </ul>
      <a href="" class="button">Add to Cart</a>
    </div>
    
  </div>
</div>
 

<style>
    html{ font-family: 'Lato', sans-serif; }

img{ max-width: 100%; }

.wrapper{
  width: 960px;
  margin: 100px auto;
}

.col-1-2{
  float: left;
  width: 50%;
}

.product-wrap{
  margin: 0 auto;
  width: 350px;
  
  
  .product-shot{
    padding-top: 30px;
    transition: all 0.5s ease;
    &:hover{ transform: scale(1.1); }
  }
}

.product-info{
  h2{
    padding-bottom: 15px;
    font-size: 32px; 
    border-bottom: 1px solid #d9d9d9;
  }
  
  .desc{ 
    margin-top: 25px;
    font-size: 16px;
    line-height: 1.6;
  }
  
  .sizing-list{
    margin-top: 25px;
    padding: 0px;
    list-style-type: none; 
  }
  
  .size{ 
    display: inline;
    margin-right: 10px;
    padding: 10px 15px; 
    color: rgb(194, 194, 194);
    border: 1px solid rgb(194, 194, 194);
    cursor: pointer;
    
    &.active{
      color: white;
      background-color: rgb(194, 194, 194);
    }
  }
   
}

.button{
  display: inline-block;
  margin-top: 35px;
  padding: 12px 25px;
  font-size: 16px;
  text-decoration: none;
  background-color: #505050;
  color: white;
  transition: 0.25s ease;
}

.button:hover{
  background-color: #323232;
}
</style>

<script>
    document.body.addEventListener("click", function(event){
    event.target.classList.toggle('active');
});
</script>
    <!-- end -->
</body>
</html>