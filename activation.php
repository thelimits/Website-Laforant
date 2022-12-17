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
    <title>Activation</title>
</head>

<body>
   <div class="bg">
    <div class="bg-video">
        <iframe class="videos" src="https://www.youtube.com/embed/-M_r8MKQ3mo?playlist=-M_r8MKQ3mo&amp;loop=1&amp;mute=1&amp;showinfo=0&amp;controls=0&amp;start=35&amp;autoplay=1" frameborder="0" type ="video/mp4" ></iframe>
    </div>
       <div class="form-login">
            <!-- bagian email awalnya email ,jadi diganti dengan username namun id nya tetap email -->
            <form id="activate" class="input-form" style="margin-left: 50px;">
                <div class="input-field " style="margin-bottom: 50px;">
                    <input required type="text" id="otp" class="input-field" placeholder="activation code" style="color: black; padding-left: 30px;">
                </div>

                <button type="submit" class="regis-buttons" id="regis-buttons" >Activate</button>

                <a class="back" href="index.php">BACK</a>
                
            </form>
       </div>
   </div>
   <div class="bggg"></div>
   <div class="lds-ring"><div></div><div></div><div></div><div></div></div>

   <script src="manage-system/activ.js"></script>
   
</body>

</html>