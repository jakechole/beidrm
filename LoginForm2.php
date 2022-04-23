<html>
<head>
<title>LoginForm.php</title>
<!-- Using external stylesheet to make the registration form look attractive -->
<link rel = "stylesheet" type = "text/css" href="Style.css"/>
<!-- Javascript validation for user inputs -->
<meta charset="UTF-8">

    <script src="jquery.js"></script>
<script type="text/javascript">
    function validate()
    {
    var username = document.login.username.value;
    var password = document.login.password.value;
 
    if (username==null || username=="")
    {
      alert("Username can't be blank");
      return false;
    }
    else if (password==null || password=="")
    {
      alert("password can't be blank");
      return false;
    }
    }
</script>
</head>
<body>
 

    <div class='loginbody'>
        <div class='loginpic'>
                <img src="bg2.jpeg" height="100%" width="100%">
        </div>
        <div class='loginform'>  <i aria-hidden="true" class="fa fa-user"></i>
             <form method="post" action="Logincode2.php">
                <h1>Login</h1>
                <br>

                <div class="row">
                        <div class="inline-block">
                         <input type="text" name="username"  placeholder="Enter Username"  required>
                        </div>
                    </div>
                      <br><br>
                    <div class="row">
                        <div class="inline-block">
                         <input type="password" name="password" placeholder="Enter Password" required ><br><br>
                        </div>
                    </div>

                
              
               
                <!-- <input type="checkbox" name="remember" id="checkme"><p>Remember Me</p><span>Forget Password?</span> -->
                 <br> <br> <br>
            <div class="dropdown">
          <input type="submit" value="Login" name="submit" >
            <div class="dropdown-content">
            <a href="Logincode.php"> Secondary</a>
            <a href="#"> Schoolhead</a> 
            </div>
             </div>
            </form>

 



        </div>
    </div>
</body>
</html>

<style>

body, html {
  height: 100%;
 background-image: url('a3.jpg');
 background-repeat: no-repeat;
  position: fixed;
  background-size: cover;
    width: 100%;

  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;
  

}

            .loginform h1
            {
              text-align: center;
              font-family: 'Courier New', Courier, monospace;
            }
             input[type=submit]
            {
                padding: 6px;
                width: 80px;
                background-color: lightseagreen;
                border: 0px;
                color: white;
                position: absolute;
                left: 510px;
                bottom: 60px;

                

            }

.row {
    margin: 6px 0px;
    text-align: center;
}



            
.dropdown {
  
                padding: 6px;
                width: 80px;
              
                border: 0px;
                color: white;
                position: absolute;
                left: 510px;
                bottom: 60px;
                text-align: center;


}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.dropdown-content a:hover {
  color: ;
  opacity: 60%;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 70px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 3px 16px;
  z-index: 1;

}
.dropdown-content p
{
  color:black;
  font-size:13px;
}
.dropdown:hover .dropdown-content {
  display: block;
}