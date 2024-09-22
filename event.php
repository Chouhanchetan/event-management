<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="event.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Gowun+Batang:wght@400;700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
        h1{
            font-family: "Dancing Script", cursive;
    font-optical-sizing: auto;
    font-weight: 800;
    font-style: normal;
    color: rgb(223, 168, 52);
    font-size: xxx-large;
    align-items: center;
    
        }
        body{
          background:rgb(240, 234, 223);

        }

    hr{
    width: 80%;
    opacity: 0.5;
}
.hello1{            
    justify-content: center;
    align-items: center;
    display: flex;
    padding: 10px;
    gap: 3rem;
    overflow: hidden; 
}
.list img{
    height: 500px;
    width: 224px;
  }
  .container{
    width: 80%;
    height: 500px;
    margin: auto;
    background: white;
    display: flex;
    justify-content: space-between;
  }
 
  p{
    font-family: "Open Sans", system-ui;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
  }
  .color{
    padding-left:30px;
    width: 43%;
  }
  .color2{
    padding-left:55px;
    color: #2D4A3A;
  }
.im{
    width: 399px;
    height: 399px;
}
.color2 a{
  text-decoration:none;
  color: #2D4A3A;

}
</style>

</head>
<body>
    <?php
    include('nav.html');
    ?><br>
         <center><hr class="hr"></center>

     <div class="hello1">
<div class="list"><img src="" alt=""></div>
<div class="list"><img src="" alt=""></div>
<div class="list"><img src="" alt=""></div>
<div class="list"><img src="" alt=""></div>
</div><br><br><br><br>

<div class="container">
      <div class="color">
          <h1>Your Story. Our Creative.</h1>
          <p>Full Service Intentional Events</p>
          <p>Every single client is unique and the design of an event should speak to that. We believe in curating our designs by honoring our clients stories, personalities and inspirations. Whether you are looking to host your event in the Pacific NW or define your style with a unique destination, we support you with the intention your journey deserves.</p>
      <br>
    <div class="color2">
       <a href="destination.php"><p><b>>DESTINATION WEDDINGS</b></p></a>
       <a href="Engagement.php"><p><b>>ENGAGEMENT PARTY</b></p></a>
       <a href="corporate.php"><p><b>>CORPORATE EVENTS</b></p></a>
       <a href="birthday.php"><p><b>>BIRTHDAY PARTY</b></p></a>       
    </div>
</div>
<img class="im" src="" alt="">
</div><br><br><br>

     <center><hr class="hr"></center>
    <?php
    include('footer.html');
    ?>

</body>
</html>
