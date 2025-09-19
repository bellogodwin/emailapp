<!DOCTYPE html>
<html lang="en">
<head>
    <?php

        session_start();
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

@media screen and('min-width: 300px') {

   
    #content{
        margin-top: 40px;
       
    }
    #background-cover{
            width: 100%;
            height: auto;
           text-align: center;
           margin-left: auto;
           margin-right:auto;
          
        }
        #sugar{ 
    display: block;
}

        #pinky{
            color: whitesmoke;
        }
        h3{
            color:whitesmoke;
        }
        h4{
            color:whitesmoke;
        }
        button{
            background: white;
            color: black;
            width:150px;
            height:38px;
            cursor: pointer;
            border: 1px solid lightgray;
            box-shadow: 0px 0px 5px whitesmoke;
            border-radius: 5px;
        }
        button:hover{
            box-shadow: 0px 0px 7px maroon;
            background-color: goldenrod;
            color: black;
            
        }
        #content{
            width: 80%;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            flex-direction: horizontal;
            justify-content: space-between;
            margin-left: auto;
            margin-right: auto;
            column-gap: 20px;
            row-gap: 20px;
            margin-bottom: 20px;
            padding-bottom: 20px;
            
        }
        #first{
            width: 400px;
            height: 400px;
            background-color: darkgoldenrod;
            color: aliceblue;
            text-align: center;
        }
        #second{
            width: 400px;
            height: 400px;
            background-color: khaki;
             color: maroon;
            text-align: center;
        }

    }

    body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
           
           background-image: url("resources/images/90595.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            z-index: -1;
        }


      
   
          

        #sugar{ 
    display : none;
}

        #background-cover{
            width: 30%;
            height: 200px;
           text-align: center;
           margin-left: auto;
           margin-right:auto;
          
        }
        #pinky{
            color: whitesmoke;
        }
        h3{
            color:whitesmoke;
        }
        h4{
            color:whitesmoke;
        }
        button{
            background: white;
            color: black;
            width:150px;
            height:38px;
            cursor: pointer;
            border: 1px solid lightgray;
            box-shadow: 0px 0px 5px whitesmoke;
            border-radius: 5px;
        }
        button:hover{
            box-shadow: 0px 0px 7px maroon;
            background-color: goldenrod;
            color: black;
            
        }
        #content{
            width: 80%;
            display: flex;
            flex-flow: row;
            flex-wrap: wrap;
            flex-direction: horizontal;
            justify-content: space-between;
            margin-left: auto;
            margin-right: auto;
            column-gap: 20px;
            row-gap: 20px;
            margin-bottom: 20px;
padding-bottom: 20px;
            
        }
        #first{
            width: 400px;
            height: 400px;
            background-color: darkgoldenrod;
            color: aliceblue;
            text-align: center;
        }
        #second{
            width: 400px;
            height: 400px;
            background-color: khaki;
             color: maroon;
            text-align: center;
        }

     
    </style>
</head>
<body>
    <!-- <div id="sugar">
    <button onclick="window.open('https://www.gmail.com')">click to redirect</button>

    </div> -->
<!-- <button onclick="window.open('https://www.gmail.com')">click to redirect</button> -->

    <div id="background-cover" style="background-color: transparent;">
        <h3>welcome to WebMail <?php echo $_SESSION['user']   ?></h3>
        <button onclick="window.open('https://www.gmail.com')">click to redirect</button>
            <h1 id="pinky"> Your Webmail is troushooting on Detailed Request</h1>
            <!--h4>Looking to Buy a domain or Hosting at a good price, Our WebMail has some of the best Mail Service</h4-->
            <h4>Click here to redirect to your email Signin</h4>
            
    </div>
    <div id="content">
        <div id="first">
            <h1>WEBMAIL</h1>
            <h2>Get Affordable and Reliable Email Hosting</h2>
            <img src="resources/images/email.jpg" style="border-radius: 50%;" alt="">
        </div>
        <div id="second">
            <h1>WEBMAIL</h1>
             <h2>Free Email with much Offer to different Client On Domain Node</h2>
             <img src="resources/images/email2.jpg" style="border-radius: 50%;" alt="">
        </div>
    </div>
</body>
</html>