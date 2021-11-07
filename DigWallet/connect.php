<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

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

            $INSERT = "INSERT Into login (username, password) values(?,?)";
    
            $SELECT = "Select count(*) as count from login WHERE login.username = '{$username}'";

            $query = mysqli_query($conn, $SELECT);

            $result = mysqli_fetch_array($query);

            $count = $result['count'];

            if($count == 0){


                $stmt = $conn->prepare($INSERT);

                if($stmt == false){
                    echo mysqli_error($conn);
                    exit();
                }


                $stmt->bind_param('ss',$username,$password);
                $stmt->execute();
                header('Location: http://localhost/DigWallet/login.html');
                $stmt->close();
            } else {
                echo "Someone already has this username";
            }
            
            $conn->close();
        }
    } else{
        echo "All field are required";
        die();
    }

?>