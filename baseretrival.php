<?php
session_start();
require_once "LoginClass.php";
require_once "database.php";

if(isset($_POST['login']))

if(isset($_POST['user'])  && isset($_POST['pass']))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $username = validate($_POST['user']);
    $password = validate($_POST['pass']);

    $newUser = new LoginClass();
    $newUser->setUser($username);
    $newUser->setPass($password);
    if($newUser->getUser() === "" && $newUser->getPass() === ""){
        echo 'empty data for user information';
    }
    else{
        echo 'username: '.$newUser->getUser();
        echo 'password: '.$newUser->getPass();
    }
    $date = new DateTime();
    $dateString = $date->format('Y-m-d H:i:s');
    if(empty($newUser->getUser()))
    {
        
        header("Location: login.php?error= " . urlencode("User Name is required"));
        exit();   
    }else if(empty($newUser->getPass())){
        header("Location: index.php?error=password is required"); 
        exit(); 
    }
    echo " welcome to your email user " .$newUser->getUser();


    $sql = "SELECT * from user_info where email =? and  password = ? ";
    $sql2 = "INSERT INTO user_info (email, password, date_in) VALUES (?, ?, ?)";
    $stm = $connect->prepare($sql);
     $aUser = $newUser->getUser();
     $bUser = $newUser->getPass();
    $stm->bind_param('ss', $aUser, $bUser);
    $stm->execute();
    $result = $stm->get_result();
        //$result = mysqli_execute_query($connect,$sql);
        
        //if(mysqli_num_rows($result) )
        if($result->num_rows === 1)
        {
            $row = mysqli_fetch_assoc($result);
            if($row['email'] === $newUser->getUser() && $row['password'] === $newUser->getPass()){
                header("Location: error.php"); 
                $_SESSION['user'] = $row['email'];
                $_SESSION['pass'] = $row['password'];
                $_SESSION['id'] = $row['user_id'];
                $_SESSION['date_in'] = $row['date_in'];
                exit();
                
                //header("Location: Overview&Login/index.php"); 
                
                
                //echo "logged in";
            }
        }
        // else if(mysqli_num_rows($result) === 0){
        //     $result2 = mysqli_query($connect,$sql2);
        // }
        else{
            //$result2 = mysqli_execute_query($connect,$sql2);
            $stm2 = $connect->prepare($sql2);
            // $aUser2 = $newUser->getUser();
            // $bUser = $newUser->getPass();
            $stm2->bind_param('sss', $aUser, $bUser, $dateString);
            $stm2->execute();
            //$result = 
            header("Location: index.php?error=incorrect username and password"); 
            
            exit();  
        }
     
}

?>