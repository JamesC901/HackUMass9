<?php

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $sname = "hackumass2021.cmurgkgmoz2q.us-east-1.rds.amazonaws.com";
    $uname = "admin";
    $cpassword = "949567421";
    $db_name = "hackathon";

    if(!empty($username) || !empty($password)){

        $conn = mysqli_connect($sname, $uname, $cpassword, $db_name, 4306);
        if (!$conn) {
            echo "Connection failed!";
            exit();
        }
         else {
    
            $SELECT1 = "Select username from login WHERE login.username = '{$username}'";
            
            $SELECT2 = "Select password from login WHERE login.username = '{$username}'";


            $result1 = mysqli_query($conn, $SELECT1);
            $result2 = mysqli_query($conn, $SELECT2);


            $user = mysqli_fetch_assoc($result1);
            $pass = mysqli_fetch_assoc($result2);

            $userString = $user['username'];
            $passString = $pass['password'];            
            
            if(strcmp($userString, $username) == 0){  
                if(strcmp($passString, $password) == 0){
                    header('Location: http://localhost/DigWallet/index.html');
                }else{
                   header('Location: http://localhost/DigWallet/failLogin.html');
                }
            }else{
                header('Location: http://localhost/DigWallet/failLogin.html');
            }
        
            $conn->close();
        }
    } else{
        echo "All field are required ppoop";
        die();
    }

?>