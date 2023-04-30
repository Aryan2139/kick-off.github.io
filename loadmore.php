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
        
          <script src ="style.js"></script>

          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
          <div class="boxes">
            <table border="2px">
              <tr>
                <td>
                  <section id = "News" class="section1">News</section>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox1"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox2">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox3">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox4"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox5">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox6">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox7"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox8">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox9">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div2 id="load-more">LOAD MORE</div2>
                </td>
              </tr>
              <tr>
                <td>
                  <section id = "Clubs" class="section2">Clubs</section>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="clubsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="clubsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="clubsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div2 id="load-more">LOAD MORE</div2>
                </td>
              </tr>
              <tr>
                <td>
                  <section id = "Exercises" class="section3">Exercises</section>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="exercisesbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="exercisesbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="exercisesbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div2 id="load-more">LOAD MORE</div2>
                </td>
              </tr>
              <tr>
                <td>
                  <section id = "Rules" class="section4">Rules</section>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="rulesbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="rulesbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="rulesbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="newsbox"> aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                  <div class="newsbox">
                    aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <div2 id="load-more">LOAD MORE</div2>
                </td>
              </tr>
              <tr>
                <td align="left">
                  <hr class ="new1">
                  <br><br>
                  <i id="Contacts" class="fa fa-phone" style="font-size:24px" ></i> &nbsp; +912323232323<br><br>
                  <i class="fa fa-envelope" style="font-size:24px"></i> &nbsp; abc@gmail.com<br><br>        
                  <img src="insta.png" height="34" width="34"> &nbsp; abcd123<br><br>
                  <img src="wapp.png" height="34" width="34"> &nbsp; +917676767676<br><br>
                </td>
              </tr>
              <tr>
                <td>11:26
                  <div1 class="image2">
                    <img src="logo.png" height="413" width="413">
                  </div1>
                </td>
              </tr>
          </div>
          <script>
            let loadMoreBtn = document.querySelector('#load-more');
            let currentItem = 3;
            loadMoreBtn.onclick = () =>
            {
              let boxes =[...document.querySelectorAll('.container .box-container .box')];
              for (var i = currentItem; i < currentItem + 3; i++)
              {
                boxes[i].style.display = 'inline-box';
              }
              currentItem += 3;
              if(currentItem >= boxes.length){
                loadMoreBtn.style.display = 'none';
              }
            }
          </script>

  </body>
</html>




cssss------   
.boxes table tr td section {
  font-family: 'Pussycat','Algerian','Broadway';
  color:white;
  font-size: xx-large;
  text-align: center;
}
.boxes table {
  width: 1535px;
  height: 150px;
}
.boxes table tr td div {
  background-color: lightgrey;
  width: 300px;
  border: 15px solid green;
  padding: 50px;
  margin: 20px;
  display: none;
}
.boxes table tr td .newsbox1:nth-child(1),
.boxes table tr td .newsbox2:nth-child(2),
.boxes table tr td .newsbox3:nth-child(3)
{
  display: inline-block;
}
hr.new1{
  border: 1.5px solid white;
}
.image2{
  position: absolute;
  bottom: calc(50% - 4130px);
  right: 2%;
}
#load-more{
  margin-top: 20px;
  display: inline-blocks;
  padding: 10px 30px;
  border: 1px solid #334;
  color: #334;
  font-size: 16px;
  background-color: #fff;
}
#load-more:hover{
  background-color: crimson;
  border-color: crimson;
  color: #fff;
}