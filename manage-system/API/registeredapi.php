<?php
    include("config.php");
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    include('PHPMailer/src/Exception.php');
    include('PHPMailer/src/PHPMailer.php');
    include('PHPMailer/src/SMTP.php');

    if(isset($_POST["firstname"]) && isset($_POST['iduser']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['date'])
    && isset($_POST['nationality']))
    {
        $id_user = $_POST['iduser'];
        $usenames_user = $_POST['username'];
        $firstname_user = $_POST['firstname'];
        $lastname_user = $_POST['lastname'];
        $email_user = $_POST['email'];
        $password_user = $_POST['password'];
        $date_user = $_POST['date'];
        $nationality_user = $_POST['nationality'];

        $generator = "1357902468";
        $verification_code = "";
        for ($i = 1; $i <= 7; $i++) {
            $verification_code .= substr($generator, (rand()%(strlen($generator))), 1);
        }

        $sqlcheckuser = "SELECT * FROM `user_datas` WHERE Username = '$usenames_user'";
        $resultquery = mysqli_query($conn,$sqlcheckuser);
        $usercheck = mysqli_num_rows($resultquery);

        if($usercheck == 1)
        {
            echo "already";
        }
        else 
        {
            // $qry = "INSERT INTO `user_datas`(`ID`, `Username`, `First Name`, `Last Name`, `Email`, `Password`, `Date`, `Nationality`) VALUES ('".addslashes($_POST['iduser'])."', 
            // '".addslashes($_POST['username'])."', '".addslashes($_POST['firstname'])."', '".addslashes($_POST['lastname'])."', '".addslashes($_POST['email'])."', '".addslashes($_POST['password'])."',
            // '".addslashes($_POST['date'])."', '".addslashes($_POST['nationality'])."')";
            // mysqli_query($conn,$qry);

            $hashing = password_hash($password_user, PASSWORD_DEFAULT);
            $qry = "INSERT INTO `user_datas`(`ID`, `Username`, `First Name`, `Last Name`, `Email`, `Password`, `Date`, `Nationality`, `TokenID`) VALUES ('$id_user' , '$usenames_user' , '$firstname_user' ,
            '$lastname_user' , '$email_user' , '$hashing' , '$date_user' , '$nationality_user' , '$verification_code')";
            $results = mysqli_query($conn,$qry);
            

            if(!$results)
            {
                echo "fail";
            }
            else 
            {
                $email_pengirim = 'pramputro62@gmail.com';
                $nama_pengirim = 'PT.Laforant Game Indonesia';
                $email_penerima = $_POST['email'];
                $subject = 'Activation account';
                $pesan = '<h1> hi, ' . $firstname_user . ' ' . $lastname_user . '</h1><br><p>'.'Your username is '.$usenames_user.'<br>'.'your verification code = '.$verification_code.'</p>';

                $mail = new PHPMailer;
                $mail->isSMTP();

                $mail->Host = 'smtp.gmail.com';
                $mail->Username = $email_pengirim;
                $mail->Password = 'pnibypvdvybbjgiv';
                $mail->Port = 465;
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'ssl';
                $mail->SMTPDebug = 2;

                $mail->setFrom($email_pengirim, $nama_pengirim);
                $mail->addAddress($email_penerima);
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $pesan;

                $sending = $mail->send();
                       
            }
            
        }
        echo "success"; 
    }

?>