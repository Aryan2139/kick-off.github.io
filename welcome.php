<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel = "stylesheet" href="style.css">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Welcome</title>
  </head>
  <body>
    <?php require '_nav.php' ?>
    <script> alert("Welcome - <?php echo $_SESSION['username']?>"); </script>
    <!-- Optional JavaScript -->
    <div id="container">
      <div id="logo" style="left: 1%; top: 12px">
        <img src="logo.png" height="213" width="218">
      </div>
      <!--div#navbar>ul>li*5>a-->
      <div id="navbar" style="left: 180px; top: 55px">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a class="active" href="#News">News </a></li>
          <li><a class="active" href="#Clubs">Clubs</a></li>
          <li><a class="active" href="#Exercises">Exercises</a></li>
          <li><a class="active" href="#Rules">Rules</a></li>
          <li><a class="active" href="#Contacts">Contacts</a></li>
        </ul>
      </div>
      <div id="image">
        <img src="a.png ">
      </div>
      <div id="content">
        <h2>KICK OFF</h2>
        <h4>SPORTS</h4>
      </div>
    </div>
    <p>
      <div class="wrapper">
        <div class="contain" style="left: -180px; top: 530px">
          <table>
            <tr>
              <th><font size="20px " color="white" >+</font></th>
              <th><span class="num" data-val="100">000</span></th>
            </tr>
            <tr>            
              <th> </th>
              <th><span class="text">Clubs</span> </th>
            </tr>
          </table>
        </div>
        <div class="contain" style="left: -420px; top: 530px">
          <table>
            <tr>
              <th><font size="20px " color="white" >+</font></th>
              <th><span class="num" data-val="150">000</span></th>
            </tr>
            <tr>            
              <th> </th>
              <th><span class="text">Members</span> </th>
            </tr>
          </table>
        </div>
        <div class="contain" style="left: -660px; top: 530px">
          <table>
            <tr>
              <th><font size="20px " color="white" >+</font></th>
              <th><span class="num" data-val="550">000</span></th>
            </tr>
            <tr>            
              <th> </th>
              <th><span class="text">Traffic</span> </th>
            </tr>
          </table>
        </div>
      </div>
    </p>
    <br><br><br><br><br>
        
    <script src ="style.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    

 <div class="load">   
<div class="conta">

<h1 class="heading">our daily posts</h1>

<div class="box-container" id="News">

   <div class="box">
      <div class="image">
         <img src="images/img-1.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-2.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-3.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-4.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-5.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-6.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-7.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-8.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-9.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

</div>

<div id="load-more"> load more </div>

</div>


<div class="contai">

<h1 class="heading">our daily posts</h1>

<div class="box-container" id="Clubs">

   <div class="box">
      <div class="image">
         <img src="images/img-1.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-2.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-3.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-4.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-5.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-6.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-7.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-8.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

   <div class="box">
      <div class="image">
         <img src="images/img-9.jpg" alt="">
      </div>
      <div class="conten">
         <h3>blog title goes here</h3>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, adipisci!</p>
         <a href="#" class="btn">read more</a>
         <div class="icons">
            <span> <i class="fas fa-calendar"></i> 21st may, 2022 </span>
            <span> <i class="fas fa-user"></i> by admin </span>
         </div>
      </div>
   </div>

</div>

<div id="load-moree"> load more </div>

</div>

</div>
<a href="#top" align="center">
<img src="top.gif" height="90px" width="120px" class="auto-style5"></a></p>
<script>

let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
let boxes = [...document.querySelectorAll('.conta .box-container .box')];
for (var i = currentItem; i < currentItem + 3; i++){
   boxes[i].style.display = 'inline-block';
}
currentItem += 3;

if(currentItem >= boxes.length){
   loadMoreBtn.style.display = 'none';
}     
}

</script>
<script>

let loadMoreBtn = document.querySelector('#load-moree');
let currentItem = 3;

loadMoreBtn.onclick = () =>{
let boxes = [...document.querySelectorAll('.contai .box-container .box')];
for (var i = currentItem; i < currentItem + 3; i++){
   boxes[i].style.display = 'inline-block';
}
currentItem += 3;

if(currentItem >= boxes.length){
   loadMoreBtn.style.display = 'none';
}     
}
</script>
<footer>
          <table>
            <tr>
               <td>
                <div class="image2">
                  <img src="logo.png" height="413" width="413">
                </div>
                <br><br><br><br><br><br><br><br><br><br><br>
               </td>
              <td align="left">
                <br><br>
                <img src="loca.png" height="34" width="34"> &nbsp; MIET NH-58,Baghpat Road,UP,Uttar Pradesh 201206<br><br>
                <i id="Contacts" class="fa fa-phone" style="font-size:24px" ></i> &nbsp; +912323232323<br><br>
                <i class="fa fa-envelope" style="font-size:24px"></i> &nbsp; mietians@gmail.com<br><br>        
                <img src="wapp.png" height="34" width="34"> &nbsp; +917676767676<br><br><br>
                &nbsp; &nbsp;&nbsp;
                <a href ="www.instagram.com"><img src="insta.png" height="34" width="34"></a> &nbsp;
                <a href ="www.facebook.com"><img src="face.png" height="34" width="34"></a> &nbsp;
                <a href ="www.linked in.com"><img src="link.png" height="34" width="34"></a> &nbsp;
              </td>
             </tr>
          </table>
<br><br><br>
<hr class= "new">
  <p><u style= "color: white">mietians</u>, All Right Reserved.</p>
  <p>Home <b style= "color: black">|</b> Cookies <b style= "color: black">|</b> Help</p>
</footer> 
</body>
</html>
