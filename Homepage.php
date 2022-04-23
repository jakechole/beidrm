<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

																		
</head>
<body>

<!-- END OF MODAL FOR DISTRICT-SUPERVISOR TEACHER -->

  

           <div class="top">
    <header>

      <div class="logo">

          <img src="exceed.png" width="100" heigh="100"/>  
    </div>
    <div class="logo2">
            <img src="deped.png" width="100" height="100"/>  
    </div>
    
     </header>
    
             <div class="title">
                                    <h1> <center>Basic Education Institution Data Repository </center>  
                               <center>Monitoring System </center> </h1>
            </div>




   </div>
   



	<div class='footerdiv'>
        <div class='footerimgs'>
      
            <img src="call.png" class="call" height="25px" width="25px" style="position: absolute;margin-top: .7%;"><p2 style="margin-top: 5%; margin-left: 4.5%; width: 40%"> &nbsp;&nbsp;+63 967-834-391</p2>
            <img src="messageicon.png" class="mess" height="25px" width="25px" style="position: absolute;margin-top: .5%;"><p3 style="margin-top: 4.8%; margin-left: 4.5%;color: orangered; width: 40%"> &nbsp;&nbsp;beidrms@gmail.com</p3>
        </div>
 

        <div class='footercontent'>
                 
         <a data-toggle="modal" data-target="#myModal" target="_blank">About</a>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                             
                              <div class="modal-body">
                                <b> <h3 style="color: orangered;">BEIDRM System</h3>  is created by BSIT student who is given a change to help the teachers or instructors to update their perspective yearly profile.
                                        Everything that is in here, is just for the hepl of the user and we dont have any intentions to copyright the other systems.
                                         
                                    </b>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>
         



        </div>
 
    </div>

            <div class="signIn">
                <a href="choice.php" class="button" target="_blank">Login</a>  
            </div>
            <div class="space">
             <a  target="_blank">|</a>  
             </div>
            <div class="Register">
             <a href="RegistrationForm.php" target="_blank">SignUp</a>  
             </div>
<!-- carousel -->
<div id="myCarousel" class="carousel container slide">
<div class="carousel-inner">
        <div class="active item one"></div>
        <div class="item two"></div>
        <div class="item three"></div>
</div>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('.carousel').carousel({interval: 4000});
  });
</script>

</body>

<style>



  body, html {

    font-family:Footlight MT Light;
    position: fixed; 
    left: 32%;
    transform: translateX(-50% -50%);
    margin: 0px auto;
    z-index: -99; 
 }

a:link {
  color: black;
  background-color: transparent;
  text-decoration:;
}
a:visited {
  color: #00FFFF;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
/*carousel css*/
.carousel { z-index: -99; } /* keeps this behind all content */
.carousel .item {
    position: fixed; 
    width: 100%; height: 100%;
    -webkit-transition: opacity 1s;
    -moz-transition: opacity 1s;
    -ms-transition: opacity 1s;
    -o-transition: opacity 1s;
    transition: opacity 1s;

}
.carousel .one {
    background: url(a3.jpg);
    background-size: cover;
    -moz-background-size: cover;
}
.carousel .two {
    background: url(bg3.jpg);
    background-size: cover;
    -moz-background-size: cover;
}
.carousel .three {
    background: url(a2.jpg);
    background-size: cover;
    -moz-background-size: cover;
}
.carousel .active.left {
    left:0;
    opacity:0;
    z-index:2;
}
/*end of carousel css */

.top {

        height: 150px;
        width: 1295px;
          position: absolute;
           bottom: -100px;
           left: -415px;
   
       }
/*blacckkkkkkk     one  */
.footerdiv {
  position: absolute;
  margin-top:25%;
  height: 35px;
  width: 1295px;
  background-color: rgb(45, 45, 45);
  left: -410px;
  bottom: -578px;
}
.footerimgs img {
  border-radius: 50%;
}
.footerimgs {
  padding-top: -10px;
  margin-left: 15%;
  width: 45%;
  height: 18vh;
  display: inline-block;
}
/*about us*/
.footercontent {
  display: inline-block;
  width: 30%;
  height: 3vh;
  position: absolute;
  left: 1000px;
  bottom: 8px;

}

/*modal body*/
.modal-content {
  background-color: #fefefe;
  margin: 5% auto; /* 15% from the top and centered */
  padding: 10px;
  width: 80%; /* Could be more or less, depending on screen size */
}
.modal-dialog
{
position:absolute;
top: 100;
left: 730px;
bottom: -25px;
}

/* location icon*/
.loc  
 {
    position: absolute;
  left:270px;
  bottom: 5px;
 }
/*contact number*/
.footerimgs p2 {
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 1.8vh;
  font-weight: 400;
   position: absolute;
  left: 270px;
  bottom: 8px;
}
/*contact us*/
.call
 {
    position: absolute;
  left:310px;
  bottom: 5px;
 }


.footerimgs p3 {
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 1.8vh;
  font-weight: 400;
   position: absolute;
  left: 590px;
  bottom: 8px;
}
.mess
 {
    position: absolute;
  left:630px;
  bottom: 5px;
 }

.title h1
{
   font-family:Footlight MT Light;
 color:#FFFF00;
 text-shadow: 2px 2px #1F1015;
 position: absolute;
 bottom:-190px;
 left:150px;
 font-size: 10vh;

}

.logo {

    position: absolute;
     bottom: -30px;
    left:80px;

  
}
/*excedd logo css*/
.logo2 {

    position:absolute;
    bottom: -30px;	
    left: 1110px;
    
}

.signIn
{

  position: absolute;
     bottom: -420px;
    left: 150px;
     font-size: 5vh;
  font-family: "Courier New", Courier, monospace;
     color: #00FFFF;
     text-shadow: 2px 2px #1F1015;


}
.Register
{
  position: absolute;
     bottom: -420px;
    left: 260px;
      font-size: 5vh;
  font-family: "Courier New", Courier, monospace;
     text-shadow: 2px 2px #1F1015;


}
.space
{
  position: absolute;
     bottom: -420px;
    left: 240px;
      font-size: 5vh;
  font-family: "Courier New", Courier, monospace;
     color: white;
     text-shadow: 2px 2px #1F1015;

}
</style>



</style>
</head>

</html>
