<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- sample start -->
    <div class="centeri">
<div class="card">
  

  <img src="https://media-bom1-1.cdn.whatsapp.net/v/t61.24694-24/376138611_2209667269243347_6529814736193139918_n.jpg?ccb=11-4&oh=01_AdScQHtqtZ98RoIDAiSJGl1oaoLWHP9mkgQNf49XIVCuqg&oe=65E8024A&_nc_sid=e6ed6c&_nc_cat=109" class="foto" style="width:100%">
   <header>
     <h1>NIKE AM90id</h1>
  </div>
</div>
<style>
      @import url('https://fonts.googleapis.com/css2?family=Anonymous+Pro&display=swap');
    		@import url('https://fonts.googleapis.com/css?family=Montserrat:300&display=swap');
        		@import url('https://fonts.googleapis.com/css?family=Big+Shoulders+Display&display=swap');
            
body{
  background: grey;
}
img{
    position: fixed;
  top: -8%;
  left: 0%;
  border-radius: 50px;
  opacity:0.9;
  transition: 0.5s;

   
}
h1{
  	   transition: transform 2s;
    font-size: 60px;
color: white;
 font-family: 'Big Shoulders Display', cursive;
}
.card:hover > p{
    opacity:1;
       transform: scale(1.5)
    top:80%;
 
}
img:hover .card{
        
  
}
img, #parent {
    cursor: pointer;
    
}
.card:hover > img{
    opacity:1;
       transform: scale(1.4);
             
}
.card header {
    position:absolute;
 
  top: 120%;
  left: 0%;
    padding: 1px;
    border-radius:  25px;
   width: 450px;
         height: 90px;
     transition: all .5s;
    opacity:0;
}
.card:hover > header{
  
    opacity:1;
         width: 450px;
         height: 90px;
             transform: translateY(-120px);
}

 .card {

    	   transition: transform .7s;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
border-radius: 500px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background: white;
    width: 450px;
  height: 450px;
}
.card:hover{

   transform: scale(1.08)
}
  .centeri{ 
  position: fixed;
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  }
  span{
    
    position: relative;
  }
  
</style>
</body>
</html>
