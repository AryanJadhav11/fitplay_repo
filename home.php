<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Background</title>
<style>
  .video-container {
    position: relative;
    width: 100%;
    height: 100vh; /* Adjust the height as needed */
    overflow: hidden;
  }
  .video-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    filter: blur(7px);
  }
  .content {
    position: relative;
    z-index: 1;
    text-align: center; 
    padding: 20px;
    font-size:7rem;
    margin-top:290px;
    letter-spacing: 14px;
    margin-left:50px;
    font-family: "Arvo",sans-serif;
  font-weight: 800;
  font-style: normal;
  }
  .overlay {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  background-color: #000; /* Dark transparent overlay */
  
}
  
</style>
</head>
<body>

<div class="video-container overlay" >
  <video autoplay muted loop>
    <source src="video111.mp4" type="video/mp4" style="">
  </video>
  <!-- text start -->
  <style>
    .hello,.anime{
  transition: .5s linear
}
.hello:hover .anime:nth-child(1){
  margin-right: 5px
}
.hello:hover .anime:nth-child(1):after{
  content: "";
}
.hello:hover .anime:nth-child(2){
  margin-left: 30px
}
.hello:hover .anime{
  color: #1BFC02;
  text-shadow: 0 0 2px #1BFC02,
               0 0 3px #1BFC02, 
               0 0 4px #1BFC02;
}
.hello:hover .anime2{
  color: #EAEAEA;
  text-shadow: 0 0 2px #EAEAEA,
               0 0 3px #EAEAEA, 
               0 0 4px #EAEAEA;
}
  </style>
  <a href="home.php"><h1 class=" content hello"><span class="anime2">FIT</span><span class="anime">PLAY</span></h1>
  <!-- <h1 class="content hello">FITPLAY</h1> -->
  <p class="text-center"><span class="content" style="font-size:20px;color:#1BFC02">HEALTHY LIFESTYLE</span></p></a>
  <!-- text end -->
</div>
<!-- paralax start -->
<div id="parallax-world-of-ugg">
  
<section>
  
  <div class="main">
  <h1 style="font-size:60px;letter-spacing: 20px;font-family:'Rowdies','serif';"><b>WE PROVIDE</b> <div class="roller">
    <span id="rolltext"><a href="turf.php"style="color:green;">TURFS</a><br/>
    <span ><a href="gym.php"style="color:blue;">GYMS</a></span><br/>
    <span ><a href="shop.php"style="color:grey;">SHOP</a></span><br/>
   <br/>
    </div>
    </h1>
    
  </div>
  
  <style>

    .main{
  margin-top:30px;
  height:25vh;
  width:100%;  
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  font-family: 'Arvo';
}
h1{
  text-align:center;
  text-transform: uppercase;
  color: #F1FAEE; 
  font-size: 10px;
}

.roller{
  height: 4.125rem;
  line-height: 4rem;
  position: relative;
  overflow: hidden; 
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  
  color: #1D3557;
}


#spare-time{
  font-size: 20px;
  letter-spacing: 10px;
  margin-top: 0;
  color: blue;
  
}

.roller #rolltext {
  position: absolute;
  top: 0;
  animation: slide 5s infinite;  
}

@keyframes slide {
  0%{
    top:0;
  }
  25%{
    top: -4rem;    
  }
  50%{
    top: -8rem;
  }
 
}

@media screen and (max-width: 600px){
  h1{
  text-align:center;
  text-transform: uppercase;
  color: #F1FAEE; 
  font-size: 2.125rem;
}
  .roller{
  height: 2.6rem; 
  line-height: 2.125rem;  
  }
  
  #spare-time {
    font-size: 1rem;
    letter-spacing: 0.1rem;
  }
  
  .roller #rolltext {  
  animation: slide-mob 5s infinite;  
}
  
  @keyframes slide-mob {
  0%{
    top:0;
  }
  25%{
    top: -2.125rem;    
  }
  50%{
    top: -4.25rem;
  }
  72.5%{
    top: -6.375rem;
  }
}
}
  </style>
</section>

<section>
    <div class="parallax-one">
    <h2 style="color: white;">TURFS</h2>
      
    </div>
</section>

<section>
  <div class="row block">
    <div class="col-lg-6">
      <img src="https://wallpaperaccess.com/full/8096028.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-lg-6">
      <h2 style="color: black;">FOOTBALL</h2>
      <div class="center">
        <p id="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate incidunt praesentium, rerum voluptatem in reiciendis officia harum repudiandae tempore suscipit ex ea, adipisci ab porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat iusto repudiandae atque distinctio ipsum ea voluptates veritatis omnis, dolor recusandae? Omnis consequatur accusantium dolorum, tempore incidunt, in sequi officiis quasi repudiandae labore unde quae error tenetur qui veniam asperiores nihil, cumque dolore quis facere odio. Delectus qui perferendis illo commodi quo. Eveniet commodi quod quo nihil voluptatem fugit blanditiis, repellat impedit necessitatibus consectetur pariatur asperiores molestias dolorem quibusdam natus culpa dolorum non! Repellendus aperiam dolorem consequuntur suscipit, dolore, fugiat explicabo cupiditate quas ducimus et quisquam, inventore fugit molestias unde autem nam neque nihil? Minima, excepturi! Nihil officiis at rerum esse.</p>
      </div>
</div>
  </div>
  
  <!-- counter start -->
  <section class="wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
                <div class="row">
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <i class="fa fa-beer medium-icon"></i>
                        <span id="anim-number-pizza" class="counter-number"></span>
                        <span class="timer counter alt-font appear" data-to="0" data-speed="7000">120</span>
                        <p class="counter-title">TURFS</p>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                        <i class="fa fa-heart medium-icon"></i>
                         <span class="timer counter alt-font appear" data-to="980" data-speed="1000">980</span>
                        <span class="counter-title">Happy Clients</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                        <i class="fa fa-anchor medium-icon"></i>
                         <span class="timer counter alt-font appear" data-to="810" data-speed="7000">98</span>
                        <span class="counter-title">GYMS</span>
                    </div>
                    <!-- end counter -->
                    <!-- counter -->
                    <div class="col-md-3 col-sm-6 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                        <i class="fa fa-user medium-icon"></i>
                         <span class="timer counter alt-font appear" data-to="600" data-speed="7000">600</span>
                        <span class="counter-title">Clients Served</span>
                    </div>
                    <!-- end counter -->
                </div>
            </div>
        </section>
        <style>
                  .counter-section i { display:block; margin:0 0 10px}
.counter-section span.counter { font-size:40px; color:#000; line-height:60px; display:block; font-family: "Oswald",sans-serif; letter-spacing: 2px}
.counter-title{ font-size:12px; letter-spacing:2px; text-transform: uppercase}
.counter-icon {top:25px; position:relative}
.counter-style2 .counter-title {letter-spacing: 0.55px; float: left;}
.counter-style2 span.counter {letter-spacing: 0.55px; float: left; margin-right: 10px;}
.counter-style2 i {float: right; line-height: 26px; margin: 0 10px 0 0}
.counter-subheadline span {float: right;}  

.medium-icon {
    font-size: 40px !important;
    margin-bottom: 15px !important;
} 

        </style>
        <script>
          $(document).ready(function() {

        $('.counter').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 9000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
}); 
 
});  
        </script>

  <!-- counter end -->

  
</section>




<section>
  <div class="parallax-two">
    <h2 style="color: white;">GYM</h2>
  </div>
</section>

<section>
  <div class="block">
    <p><span class="first-character ny">B</span>reaking into the New York fashion world is no easy task. But by the early 2000's, UGG Australia began to take it by storm. The evolution of UGG from a brand that made sheepskin boots, slippers, clogs and sandals for an active, outdoor lifestyle to a brand that was now being touted as a symbol of a stylish, casual and luxurious lifestyle was swift. Much of this was due to a brand repositioning effort that transformed UGG into a high-end luxury footwear maker. As a fashion brand, UGG advertisements now graced the pages of Vogue Magazine as well as other fashion books. In the mid 2000's, the desire for premium casual fashion was popping up all over the world and UGG was now perfectly aligned with this movement.</p>
    <p class="line-break margin-top-10"></p>
    <p class="margin-top-10">Fueled by celebrities from coast to coast wearing UGG boots and slippers on their downtime, an entirely new era of fashion was carved out. As a result, the desire and love for UGG increased as people wanted to go deeper into this relaxed UGG experience. UGG began offering numerous color and style variations on their sheepskin boots and slippers. Cold weather boots for women and men and leather casuals were added with great success. What started as a niche item, UGG sheepskin boots were now a must-have staple in everyone's wardrobe. More UGG collections followed, showcasing everything from knit boots to sneakers to wedges, all the while maintaining that luxurious feel UGG is known for all over the world. UGG products were now seen on runways and in fashion shoots from coast to coast. Before long, the love spread even further.</p>
  </div>
</section>


<section>
  <div class="parallax-three">
    <h2 style="color: white;">SHOP</h2>
  </div>
</section>

<section>
  <div class="block">
    <p><span class="first-character atw">W</span>hen the New York fashion community notices your brand, the world soon follows. The widespread love for UGG extended to Europe in the mid-2000's along with the stylish casual movement and demand for premium casual fashion. UGG boots and shoes were now seen walking the streets of London, Paris and Amsterdam with regularity. To meet the rising demand from new fans, UGG opened flagship stores in the UK and an additional location in Moscow. As the love spread farther East, concept stores were opened in Beijing, Shanghai and Tokyo. UGG Australia is now an international brand that is loved by all. This love is a result of a magical combination of the amazing functional benefits of sheepskin and the heightened emotional feeling you get when you slip them on your feet. In short, you just feel better all over when you wear UGG boots, slippers, and shoes.</p>
    <p class="line-break margin-top-10"></p>
    <p class="margin-top-10">In 2011, UGG will go back to its roots and focus on bringing the active men that brought the brand to life back with new styles allowing them to love the brand again as well. Partnering with Super Bowl champion and NFL MVP Tom Brady, UGG will invite even more men to feel the love the rest of the world knows so well. UGG will also step into the world of high fashion with UGG Collection. The UGG Collection fuses the timeless craft of Italian shoemaking with the reliable magic of sheepskin, bringing the luxurious feel of UGG to high end fashion. As the love for UGG continues to spread across the world, we have continued to offer new and unexpected ways to experience the brand. The UGG journey continues on and the love for UGG continues to spread.</p>
  </div>
</section>
  
</div>

<style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:300,400,700);
@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic);

/* Override UGG site */
#main {width: 100%; padding:0;}
.content-asset p {margin:0 auto;}
.breadcrumb {display:none;}

/* Helpers */
/**************************/
.margin-top-10 {padding-top:10px;}
.margin-bot-10 {padding-bottom:10px;}

/* Typography */
/**************************/
#parallax-world-of-ugg h1 {font-family:'Oswald', sans-serif; font-size:24px; font-weight:400; text-transform: uppercase; color:black; padding:0; margin:0;}
#parallax-world-of-ugg h2 {font-family:'Oswald', sans-serif; font-size:70px; letter-spacing:10px; text-align:center; color:#1BFC02; font-weight:400; text-transform:uppercase; z-index:10; opacity:.9;font-weight: 800;}
#parallax-world-of-ugg h3 {font-family:'Oswald', sans-serif; font-size:14px; line-height:0; font-weight:400; letter-spacing:8px; text-transform: uppercase; color:black;}
#parallax-world-of-ugg p {font-family:'Oswald', sans-serif; font-weight:500; font-size:18px; line-height:24px;}
.first-character {font-weight:300; float: left; font-size: 84px; line-height: 64px; padding-top: 4px; padding-right: 8px; padding-left: 3px; font-family: 'Source Sans Pro', sans-serif;}

.sc {color: #3b8595;}
.ny {color: #3d3c3a;}
.atw {color: #c48660;}

/* Section - Title */
/**************************/
#parallax-world-of-ugg .title {background: white; padding: 60px; margin:0 auto; text-align:center;}
#parallax-world-of-ugg .title h1 {font-size:35px; letter-spacing:8px;}

/* Section - Block */
/**************************/
#parallax-world-of-ugg .block {background: white; width:1300px; margin:0 auto; text-align:justify;}
#parallax-world-of-ugg .block-gray {background: #f2f2f2;padding: 60px;}
#parallax-world-of-ugg .section-overlay-mask {position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.70;}

/* Section - Parallax */
/**************************/
#parallax-world-of-ugg .parallax-one {padding-top: 200px; padding-bottom: 200px; overflow: hidden; position: relative; width: 100%; background-image: url(https://wallpaperaccess.com/full/871906.jpg); background-attachment: fixed; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-repeat: no-repeat; background-position: top center;}
#parallax-world-of-ugg .parallax-two {padding-top: 200px; padding-bottom: 200px; overflow: hidden; position: relative; width: 100%; background-image: url(https://wallpaperaccess.com/full/6375353.jpg); background-attachment: fixed; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-repeat: no-repeat; background-position: center center;}
#parallax-world-of-ugg .parallax-three {padding-top: 200px; padding-bottom: 200px; overflow: hidden; position: relative; width: 100%; background-image: url(https://images.unsplash.com/photo-1440688807730-73e4e2169fb8?dpr=1&auto=format&fit=crop&w=1500&h=1001&q=80&cs=tinysrgb&crop=); background-attachment: fixed; background-size: cover; -moz-background-size: cover; -webkit-background-size: cover; background-repeat: no-repeat; background-position: center center;}

/* Extras */
/**************************/
#parallax-world-of-ugg .line-break {border-bottom:1px solid black; width: 150px; margin:0 auto;}

/* Media Queries */
/**************************/
@media screen and (max-width: 959px) and (min-width: 768px) {
  #parallax-world-of-ugg .block {padding: 40px; width:620px;}
}
@media screen and (max-width: 767px) {
  #parallax-world-of-ugg .block {padding: 30px; width:420px;}
  #parallax-world-of-ugg h2 {font-size:30px;}
  #parallax-world-of-ugg .block {padding: 30px;}
  #parallax-world-of-ugg .parallax-one, #parallax-world-of-ugg .parallax-two, #parallax-world-of-ugg .parallax-three {padding-top:100px; padding-bottom:100px;}
}
@media screen and (max-width: 479px) {
  #parallax-world-of-ugg .block {padding: 30px 15px; width:290px;}
}
</style>
<!-- paralax end -->

   <!-- footer start -->
   <?php include('footer.php') ?>
<!-- End Footer -->

</body>
</html>
 