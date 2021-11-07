<?php
    $username = $_POST['username']
    $password = $_POST['password']

    if(!empty($username) || !empty($password)){

        $conn = new mysqli('hackumass2021.cmurgkgmoz2q.us-east-1.rds.amazonaws.com','admin''949567421','login')
        if(mysqli_connect_error()){
            die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
            $SELECT = "SELECT email From register Where email = ? Limit 1"; 
            $INSERT = "INSERT Into register (username, password) values(?,?)";
            
            $stmt = $conn->prepare($SELECT);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($username);
            $stmt->store_result();
            $rnum = $stmt ->num_rows;

            if($rnum==0){
                $stmt->close();

                $stmt = $conn->prepare($INSERT);
                $stmt->bind-param("ss",$username,$password);
                $stmt->execute();
                echo "New user register";
            } else {
                echo "Someone already has this username";
            }
            $stmt->close();
            $conn->close();
        }
    } else{
        echo "All field are required";
        die();
    }

?>