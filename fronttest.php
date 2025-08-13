
<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) === true){
    header("location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/328c6c7d5a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Frontpage/test.css">
    <link rel="stylesheet" href="Frontpage/slider.css">
    <link rel="stylesheet" href="Frontpage/login.css">
    <link rel="stylesheet" href="Frontpage/register.css">
    <link rel="stylesheet" href="Frontpage/navbar.css">
    
    <title>Document</title>
</head>

<body>
    <nav class="nav">
        <label class="logo">Saneflii </label>
        <div class="right-container">
            <div class="item">
                <a href="aboutus.html" id="aboutUs">About us</a>
            </div>
            <div class="item">
                <button type="button" class= "login-button" onclick="openlogin()">
                    Log in
                </button>
            </div>
            <div class="item">
               <button type="button" class="register-button" onclick="openRegister()">
                    Sign up
                </button>
            </div>
        </div>
    </nav>
    <div class="Bigman">
        <div class="sideshow-container">
            <div class="mySlide">
                <div class="getyournext">
                    <h1>Get your next</h1>
                </div>
                <div class="changer">
                    <h1> Dinner Idea</h1>
                </div>
            </div>
            <div class="mySlide">
                <div class="getyournext">
                <h1>Get your next</h1>
                </div>
                <div class="changer">
                <h1>Diet</h1>
                </div>
            </div>
            <div class="mySlide">
                <div class="getyournext">
                <h1>Get your next</h1>
                </div>
                <div class="changer">
                <h1>Meal Plan</h1>
                </div>
            </div>
            <br>
            <div style="text-align:center;z-index: 1;">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="lekbir">
            
            <div class="ta7tlekbir">
                <div class="container">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/1.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/2.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/3.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/4.avif">
                    </div>

                </div>
                <div class="container beforelast">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/5.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/6.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/7.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/8.avif">
                    </div>

                </div>
                <div class="container nextomid">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/9.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/10.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/11.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/12.avif">
                    </div>

                </div>
                <div class="container mid">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/13.avif">
                    </div>
                    <div class="card" id="scrollto">
                        <img src="Frontpage/images/Avif version/14.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/15.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/16.avif">
                    </div>

                </div>
                <div class="container nextomid">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/17.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/18.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/19.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/20.avif">
                    </div>

                </div>
                <div class="container beforelast">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/21.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/22.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/23.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/24.avif">
                    </div>

                </div>
                <div class="container">
                    <div class="card">
                        <img src="Frontpage/images/Avif version/25.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/26.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/26.avif">
                    </div>
                    <div class="card">
                        <img src="Frontpage/images/Avif version/28.avif">
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="page-scroll-arrow" onclick="ScrollDown()">
        <i class='fas fa-angle-down' id="Arrow" ></i>
    </div>
    <div class="page-scroll-arrow up" onclick="ScrollUp()">
        <i class='fas fa-angle-down' id="Arrow" ></i>
    </div>
    <div class="login-page">
        
        <form action="login.php" class="login-form" method="post">
            <button  type="button" class="closebtn" onclick="closelogin()">
                <i class="fa-thin fa-x"></i>
            </button>
            <h1>Login</h1>
            <div class="txtb">
            <input type="text" name="username" id="username" required>
            <span data-placeholder="Username"></span>
            </div>
            <div class="txtb">
            <input type="password" name="password" id="password" required>
            <span data-placeholder="Password"></span>
            </div>
            <input type="submit" class= "logbtn" value="Login">
            <div class="bottom-text">
            Don’t have account ? <a style="cursor: pointer;" onclick="closelogin();openRegister();">Sign up</a>
            </div>
            </form>
    </div>
    <div class="register-page" >
        <form  action="register.php" class="register-form"  method="post">
            <button  type="button" class="closebtn" onclick="closeRegister()">
                <i class="fa-thin fa-x"></i>
            </button>
            <h1>Register</h1>
            <div class="txtb">
            <input type="text" id="username" name="username" placeholder="Username" required>
            </div>
            <div class="txtb">
            <input type="password" id="password"  name="password" placeholder="Password" required>
            </div>
            <div class="txtb">
                <input type="password" id="password" name="confirm_password" placeholder="Confirm Passowrd" required>
            </div>
            <input type="submit" class= "logbtn" value="Register">
            </form>
    </div>
    <div class="faded-footer">
    </div>
    <script src="Frontpage/script.js">
    </script>
     <script>
         
         const username = document.getElementById('username');
         const password = document.getElementById('password');
         username.addEventListener("focus",()=>{
           username.classList.add('focus');
         });
         password.addEventListener("focus",()=>{
           password.classList.add('focus');
         });
         username.addEventListener("blur",()=>{
             if(username.value==""){
                username.classList.remove('focus');
             }
         });
         password.addEventListener("blur",()=>{
            if(password.value==""){
                password.classList.remove('focus');
             }
           
         });
        // document.querySelector('.txtb input').addEventListener("focus",()=>{
        //     document.querySelector('.txtb input').classList.add('focus');
        // });
        // document.querySelector('.txtb input').addEventListener("blur",()=>{
        //     if(document.querySelector('.txtb input').value==""){
        //         document.querySelector('.txtb input').classList.remove('focus');
        //     }
            
        // });
    </script>
</body>

</html>