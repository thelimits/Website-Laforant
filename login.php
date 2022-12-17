<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='style/asset/Omen_artwork.svg' rel='shortcut icon'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.1.16/require.js"></script>
    <!-- link jquery script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style/login.css">
    <title>login</title>
</head>

<body>
   <div class="bg">
    <div class="bg-video">
        <iframe class="videos" src="https://www.youtube.com/embed/-M_r8MKQ3mo?playlist=-M_r8MKQ3mo&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=35&amp;autoplay=1" frameborder="0" type ="video/mp4" ></iframe>
    </div>
       <div class="form-login">
            <div class="button-box">
                <div id="buttons"></div>
                <button type="button" class="button-button" id="butss" style="color: black;" onmouseover="hover(this)" onclick="login()">log in</button>
                <button type="button" class="button-button" id="butss1" onmouseover="hover(this)" onclick="register()">Register</button>
            </div>
            <!-- bagian email awalnya email ,jadi diganti dengan username namun id nya tetap email -->
            <form id="Login" class="input-form" enctype="multipart/form-data">
                <div class="input-field ">
                    <input type="text" id="email1" class="input-field" placeholder="username" >
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="email1"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="email1"></i>
                    <small id="first1" class="small">error  massage</small>
                </div>

                <div class="input-field ">
                    <input type="password" id="pass1" class="input-field passid" placeholder="password">
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="pass1"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="pass1"></i>
                    <small id="second1">error  massage</small>
                </div>
                <span class="eye">
                    <i class="fas fa-eye" id="hide1"></i>
                    <i class="fas fa-eye-slash" id="hide2"></i>
                </span>
                
                <input type="checkbox" class="check-box" id="check-box" ><label for="check-box"><span style="color:#BF953F ;">Remember Me</span></label>
                <button type="submit" class="submit-buttons" id="submit-buttons submit-buttonslogin">Log In</button>
                <a class="back" href="index.php">BACK</a>
            </form>

            <form id="Registered-form" class="input-form" enctype="multipart/form-data">
                
                <div class="input-field ">
                    <input type="text" class="fn" id="txtfirstname"  placeholder="First Name" name="firstname" >
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="firstname"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="firstname"></i>
                    <small id="first" class="small">error  massage</small>
                </div>
                <div class="input-field ">
                    <input type="text" class="input-field" id="lastname" placeholder="Last Name" name="lastname">
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="lastname"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="lastname"></i>
                    <small id="second">error  massage</small>
                </div>
                <div class="input-field ">
                    <input type="email" class="input-field" id="email" placeholder="Email" name="email" >
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="email"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="email"></i>
                    <small id="tree">error  massage</small>
                </div>
                <div class="input-field ">
                    <input type="password" class="input-field" id="pass" placeholder="Enter Password" name="pass" >
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="pass"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="pass"></i>
                    <small id="forth">error  massage</small>
                </div>
                <div class="input-field">
                    <input type="password" class="input-field" id="checkpass" placeholder="Confirm Password" name="checkpass">
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="checkpass"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="checkpass"></i>
                    <small id="five">error  massage</small>
                </div>
                <div class="input-field">
                    <input type="date" name="date" id="date" min="" style="color: gray;">
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="date"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="date"></i>
                    <small id="six">error  massage</small>
                </div>
                <div class="input-field">
                    <input type="text" class="input-field" id="txtNationality"  placeholder="Nationality" name="National" >
                    <i class="fas fa-check-circle" style="height: 25px; width: 25px;" id="National"></i>
                    <i class="fas fa-exclamation-circle" style="height: 25px; width: 25px;" id="National"></i>
                    <small id="seven" class="small">error  massage</small>
                </div>
                
                <input type="checkbox" class="check-box" id="checkbox-terms" ><label for="checkbox-terms"><span class="ckc-bx" >  I agree to the <a class="aggremet" href="#">terms</a> & <a class="aggremet" href="#">conditions</a> </span></label>
                <button type="submit" class="regis-buttons" id="regis-buttons" >Register</button>

                <a class="back" href="index.php">BACK</a>
                
            </form>
       </div>
   </div>
   <div class="bggg"></div>
   <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
   <script>
       let logn = document.getElementById("Login");
       let regis = document.getElementById("Registered-form");
       let butons = document.getElementById("buttons");
       let butonss = document.querySelector("#butss");
       let butonss1 = document.querySelector("#butss1");
       let box = document.querySelector(".form-login");   
       let eye = document.querySelector(".eye");
       function register()
       {
            logn.style.left = "-400px";
            regis.style.left = "50px";
            butons.style.left = "110px";
            box.style.height = "680px";
            butonss.style.color = "white";
            butonss1.style.color = "black";
            eye.style.display = "none";
       }

       function login()
       {
            logn.style.left = "50px";
            regis.style.left = "-400px";
            butons.style.left = "0";
            box.style.height = "453px";
            butonss.style.color = "black";
            butonss1.style.color = "white";
            eye.style.display = "none";
       }

       function hover(x)
       {
           x.style.color = "#ffa500";
       }
       
   </script>

   <script src="manage-system/validation.js"></script>
   
</body>

</html>