<?php
    include("config.php");
    if(isset($_POST["activate"]))
    {
        $tok = $_POST["activate"];
        $tr = 'True';
        $sqlcheckuser = "UPDATE user_datas SET Verification = '$tr' WHERE TokenID = '$tok'";
        if(mysqli_query($conn,$sqlcheckuser)){
            $sqlcheckuser = "UPDATE user_datas SET TokenID = '' WHERE TokenID = '$tok'";
            mysqli_query($conn,$sqlcheckuser);
            echo "already";
        }
            
    }
?>