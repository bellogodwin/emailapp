<html>
    <head>


</head>

<body>

<?php
        require_once 'database.php';
        require_once 'loginclass.php'

        $sql = "SELECT * from user_info";
       
        $stm = $connect->prepare($sql);
        $stm->execute();
        $result = $stm->get_result();
        
?>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>UserName</th>
                                            <th>Password</th>
                                            <th>Date Registered</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

<?php
    
    $user = new LoginClass();
    if (mysqli_num_rows($result) > 0) {
       
        while ($row = mysqli_fetch_assoc($result)){

        $userid = $user->getUserId($row["user_id"]);
        $email = $user->getUser(htmlspecialchars($row["email"]));
        $pass = $user->getPass(htmlspecialchars($row["password"]));
        $datein = $user->getUserReg(htmlspecialchars($row["date_in"]));
            echo '<tr>';
            echo '<td>' .$userid. '</td>';
            echo '<td>' .$email. '</td>';
            echo '<td>' .$pass. '</td>';
            echo '<td>' .$datein. '</td>';
            echo '</tr>';
            }       
    } 
    else {
        echo '<tr><td colspan="5">No records found</td></tr>';
    }


    mysqli_close($connect);
    ?>
         <tbody>
     </table>

</body>

<html>