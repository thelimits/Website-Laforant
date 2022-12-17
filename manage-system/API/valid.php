<?php
    session_start();
    include("config.php");
        
    if(isset($_POST["usernms"]) && isset($_POST['passlogin']))
    {
        $user = $_POST['usernms'];
        $pass_users = $_POST['passlogin'];
        // $hashing = password_hash($pass_users, PASSWORD_DEFAULT);
        $sqlcheckuser = "SELECT * FROM `user_datas` WHERE Username = '$user'";
        $resultquery = mysqli_query($conn,$sqlcheckuser);
        $usercheck = mysqli_num_rows($resultquery);
        $row = mysqli_fetch_array($resultquery);
        
        if( $usercheck > 0)
        {
            if(password_verify($pass_users, $row['Password'])
               && $row['Verification'] == "True"){
                echo "already";
                $_SESSION["Username"] = $row['Username'];
                $_SESSION["Pass"] = $row['Password'];
                
            }
            elseif($row['Verification'] == ""){
                echo "Act";
            }
            else{
                echo "wrongs";
            }
            
        }
        else 
        {
            echo "not_found";
        }
    
    }



?>