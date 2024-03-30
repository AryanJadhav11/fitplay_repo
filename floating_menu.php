<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        /* FLOATING MENU */
   
#float-menu {
    position:fixed;
    margin-top:44px;
    left:16px;
    width:26px;
    height:238px;
    z-index:1000;
}

#float-menu nav ul {   
    margin: 0;
    padding: 0;
    width:100%;
    height:100%;
}

#float-menu li{
    position:relative;
    display: block;
    width:26px;
    height:26px;
    margin-bottom:8px;
}

#float-menu nav a {
    position:relative;
    left:-50px;
    display: block;
    width:26px;
    height:26px;
    z-index:2;
}

#float-menu a{ 
  background-color:#bada11;
  border-radius:50%;
}

#float-menu nav li:hover,
#float-menu nav a:hover,
#float-menu nav li.active,
#float-menu nav li.active a{    
  background-color:#aecd00;
  border-radius:50%;
}
    </style>

    
    <script>
        var query = $("#float-menu a");

TweenMax.staggerTo(query, 1.2, {
  css: { left: 0 },
  delay: 0.3, 
  ease: Elastic.easeOut }, 0.1);
    </script>
<div id="float-menu" class="site-nav">
  <nav>
    <ul class="clearfix">
      <li class="home-btn">
        <a href="#zone1"></a>
      </li>
      <li>
        <a href="#zone2"></a>
      </li>
      <li>
        <a href="#zone3"></a>
      </li>
      <li>
        <a href="#zone4"></a>
      </li>
      <li>
        <a href="#zone5"></a>
      </li>
      <li>
        <a href="#zone6"></a>
      </li>
      <li>
        <a href="#zone7"></a>
      </li>
      <li>
        <a href="#zone8"></a>
      </li>
    </ul>
  </nav>
</div>

</body>
</html>