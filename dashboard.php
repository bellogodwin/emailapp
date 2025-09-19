<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
  <meta name="google" content="notranslate" />
  <meta name="apple-itunes-app" content="app-id=1188352635" />
        <link rel="stylesheet" href="resources/fontawesome-free-5.15.3-web/css/all.css">
        <style>
@media screen and(min-width:300px) {
    .sidebar{
        display: none;
    }
    #sidemobile{
         display: block;
    }

}

@media screen and(min-width:800px) {
    .sidebar{
        display:block;
    }
    #sidemobile{
         display: none;
    }

}


            *{
                margin: 0;
                padding: 0;
                border: none;
                outline: none;
                box-sizing: border-box;
                font-family: 'Courier New', Courier, monospace;
            }
            body{
                display: flex;
            }
            .sidebar{
                position: sticky;
                top: 0;
                left: 0;
                bottom: 0;
                width: 60px;
                height: 100vh;
                padding: 0 0.3rem;
                color: #fff;
                overflow: hidden;
                transition: all 0.5s linear ;
                /*background: rgba(11, 99, 186, 255);*/
                background: rgb(27, 36, 48);
            }
            .sidebar:hover{
                width: 210px;
                transition: 0.5s;
            }


            .logo{
                height: 80px;
                padding: 16px;
            }
            .menu{
                height: 88% ;
                position: relative;
                list-style: none;
            }
            .menu li{
                padding: 1rem;
                margin: 8px 0;
                border-radius: 8px;
                transition: all 0.5s ease-in-out;
            }
            .menu li:hover, .active{
                background: #e0e0e058;
            }
            .menu a{
                color: #fff;
                font-size: 14px;
                text-decoration: none;
                display: flex;
                align-items: center;
                gap: 10px;
            }
            .menu a span{
                overflow: hidden;
            }
            .menu a i{
                font-size: 1.2rem;
            }
            .logout{
                position: absolute;
                bottom: 0;
                left: 0;
                width: 100%;
            }


.main-content{
    position: relative;
    /*background: #ebe9e9;*/
    background: white;
    width: 100%;
    padding: 1rem;
}

.header-wrapper img{
 width: 50px;
 height: 50px;
 cursor: pointer;
 border-radius: 50%;
}

.header-wrapper{
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    /*background: #fff;*/
    background: whitesmoke;
    border-radius: 10px;
    padding: 10px 2rem;
    margin-bottom: 1rem;
}

.header-title{
    color: rgba(113, 99, 186, 255);
}
.user-info{
    display: flex;
    align-items: center;
    gap: 1rem;
}
.search-box{
    /*background: rgba(237, 237, 237);*/
    background: white;
    border-radius: 15px;
    color: rgba(113, 93, 136, 255);
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 4px 12px;
}

.search-box input{
    background: transparent;
    padding: 10px;
}
.search-box i{
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.5s ease-out;

}
.search-box i:hover{
    transform: scale(1.2);
}


.card-container{
    /*background: #fff;*/
    background: whitesmoke;
    padding: 2rem;
    border-radius: 10px;
}
.card-wrapper{
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.main-title{
    color: rgba(113, 99, 186, 255);
    padding-bottom: 10px;
    font-size: 15px;
}

tr{
    height:40px;
   
    
}
td{
    align: center;
}

tr:nth-child(even){
    background: whitesmoke;
}

table tr{
    border:1px solid gray;
    
}
tr:hover{
    background: black;
    color: snow;
    
}
table{
    border:1px solid gray;
    width:50%;
    margin-left:auto;
    margin-right:auto;
    margin-top:30px;
     box-shadow: 0px 0px 10px gray;
}

#dash{
    width:100%;
    height:500px;
    overflow-y: scroll;
    scrollbar-width: thin;
    scroll-behavior: smooth;
    scrollbar-color: lightslategray;
   
}
.fa:hover{
    transform: scale(1.2);
    
    cursor:pointer;
}
#sidemobile{
         display: none;
    }




        </style>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo">

            </div>
            <ul class="menu">
                <li class="active">
                    <a href="#">
                      <i class="fa fa-th-list"></i> 
                      <span>Dashboard</span> 
                    </a>
                </li>
                <li>
                    <a href="#">
                      <i class="fa fa-bell"></i> 
                      <span>Notification</span> 
                    </a>
                </li>
                <li>
                    <a href="#">
                      <i class="fa fa-envelope"></i> 
                      <span>email</span> 
                    </a>
                </li>
                
                <li>
                    <a href="#">
                      <i class="fa fa-suitcase"></i> 
                      <span>Scheduling</span> 
                    </a>
                </li>
                
                <li>
                    <a href="#">
                      <i class="fa fa-print"></i> 
                      <span>Print</span> 
                    </a>
                </li>
                <li class="logout">
                    <a href="error.php">
                      <i class="fa fa-share-square"></i> 
                      <span>Logout</span> 
                    </a>
                </li>
            </ul>
        </div>

        <div class="main-content">
        <div id="sidemobile">
                            <button>side</button>
                    </div>
            <div class="header-wrapper">
                   
                <div class="header-title">
                    <span>Primary</span>
                    <h2>Dashboard</h2>
                </div>
                <div class="user-info">
                    <div class="search-box">
                        <i class="fa fa-solid fa-search"></i>
                        <input type="text" placeholder="Search" />
                    </div>
                    <img src="resources/images/bello.jpg" alt=" " />
                   
                </div>
            </div>
            <div class="card-container">
                <h3 class="main-title">Todays Body</h3>
                <div class="card-wrapper">
                    <div class="payment-card">
                        <div class="card-header">
                            <div class="amount">
                                <span class="title">
                                    Payment Amount
                                </span>
                                <span class="amount-value">$500.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="dash">
                <?php
        require_once 'database.php';
        require_once 'loginclass.php';

        $sql4 = "SELECT * from user_info";
       
        $stm = $connect->prepare($sql4);
        $stm->execute();
        $result = $stm->get_result();
        
?>
                                <table border="1px" cellpadding="20px" cellspacing="5px" rules="all"   style="">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>UserName</th>
                                            <th>Password</th>
                                            <th>Date Registered</th>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    

<?php
    
   // $user = new LoginClass();
    if (mysqli_num_rows($result) > 0) {
       
        while ($row = mysqli_fetch_assoc($result)){

        $userid = $row["user_id"];
        $email = htmlspecialchars($row["email"]);
        $pass = htmlspecialchars($row["password"]);
        $datein = htmlspecialchars($row["date_in"]);
            echo '<tr>';
            echo '<td align="center">' .$userid. '</td>';
            echo '<td align="center">' .$email. '</td>';
            echo '<td>' .$pass. '</td>';
            echo '<td>' .$datein. '</td>';
            echo '<td> <span class="fa fa-trash" title="delete record"> </span> </td>';
            echo '</tr>';
            }       
    } 
    else {
        echo '<tr><td colspan="5">No records found</td></tr>';
    }


    //mysqli_close($connect);
    ?>
            </div>



        </div>
    </body>
</html>