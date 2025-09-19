<!DOCTYPE html>
<html lang="en">   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/fontawesome-free-6.6.0-web/css/all.css">
    <link rel="icon" href="resources/images/LOGO_MAIN.jpg">
    <title>Sign In. Sunlyn Export Group</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: url("resources/images/Pink & Light Green Flower Quote Motivational Desktop Wallpaper.png");
            background-attachment: fixed;
            background-size: cover;
        }
        
        @media screen and (min-width: 320px){
            .carry{
                background-color: white; 
                height: 100vh; 
                width: 100%; 
                align-content: center;
            }

            .twin{
                display: none;
                grid-template-columns: 480px 480px;
                justify-content: center;
            }

            .tablet-div{
                display: none;
                column-count: 2;
                justify-content: space-between;
                width: 890px; 
                height: 600px; 
                background-color: white; 
            }

            .wrapper-4-tab{
                display: flex; 
                justify-content: center;
            }

            .for-smaller-tabs{
                display: flex; 
                justify-content: center;
                margin-top: -550px;
            }

            .size{
                width: 100%;
            }

            .logo{
                width: 120px;
            }

            .start{
                color: green;
                margin-left: 5%; 
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
                font-weight: 600;
            }

            .welcome{
                color: gray; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
                margin-left: 5%;
            }

            hr{
                width: 94%; 
                margin-left: 5%; 
                position: relative; 
                top: 8px; 
                opacity: 0.4;
            }

            .label {
                display: flex;
                flex-direction: column;
                gap: 5px;
                height: -moz-fit-content;
                height: fit-content;
            }
            .label:has(input:focus) .title {
                top: 0;
                left: 3%;
                color: green;
            }
            .label .title {
                padding: 0 10px;
                transition: all 300ms;
                font-size: 12px;
                color: black;
                font-weight: 600;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: -moz-fit-content;
                width: fit-content;
                top: 14px;
                position: relative;
                left: 30px;
                background: white;
            }
            .input-field {
                width: 92%;
                margin-left: 5%;
                height: 35px;
                text-indent: 15px;
                border-radius: 5px;
                row-gap: 30px;
                outline: none;
                background-color: transparent;
                border: 1px solid #21262e;
                transition: all 0.3s;
                caret-color: black;
                color: black;
            }

            .input-field:hover {
                border-color: green;
            }

            .input-field:focus {
                border-color: black;
            }

            #eye{
                position: relative; 
                top: -32px; 
                left: 19rem;
                cursor: pointer;
            }

            .forget{
                position: relative;
                right: 5px;
                transition: 0.3s;
                font-size: small; 
                color: #000; 
                text-decoration: none; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .forget:hover{
                color: green;
            }

            .submit{
                width: 95%; 
                padding: 8px; 
                margin-left: 5%; 
                border-radius: 5px; 
                border: none; 
                background-color: green; 
                cursor: pointer;
                color: #fff;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .dont{
                text-align: center; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .sign{
                color: green; 
                text-decoration: none;
            }

        }

        @media screen and (min-width: 500px){
            .carry{
                background-color: white; 
                height: 100vh; 
                width: 100%; 
                align-content: center;
            }

            .twin{
                display: none;
                grid-template-columns: 480px 480px;
                justify-content: center;
            }

            .tablet-div{
                display: none;
                column-count: 2;
                justify-content: space-between;
                width: 890px; 
                height: 600px; 
                background-color: white; 
            }

            .wrapper-4-tab{
                display: flex; 
                justify-content: center;
            }

            .for-smaller-tabs{
                display: flex; 
                justify-content: center;
            }

            .size{
                width: 500px;
            }

            .logo{
                width: 120px;
                margin-left: 2%
            }

            .start{
                color: green;
                margin-left: 5%; 
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
                font-weight: 600;
            }

            .welcome{
                color: gray; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
                margin-left: 5%;
            }

            hr{
                width: 94%; 
                margin-left: 5%; 
                position: relative; 
                top: 8px; 
                opacity: 0.4;
            }

            .label {
                display: flex;
                flex-direction: column;
                gap: 5px;
                height: -moz-fit-content;
                height: fit-content;
            }
            .label:has(input:focus) .title {
                top: 0;
                left: 3%;
                color: green;
            }
            .label .title {
                padding: 0 10px;
                transition: all 300ms;
                font-size: 12px;
                color: black;
                font-weight: 600;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: -moz-fit-content;
                width: fit-content;
                top: 14px;
                position: relative;
                left: 30px;
                background: white;
            }
            .input-field {
                width: 92%;
                margin-left: 5%;
                height: 35px;
                text-indent: 15px;
                border-radius: 5px;
                row-gap: 30px;
                outline: none;
                background-color: transparent;
                border: 1px solid #21262e;
                transition: all 0.3s;
                caret-color: black;
                color: black;
            }

            .input-field:hover {
                border-color: green;
            }

            .input-field:focus {
                border-color: black;
            }

            #eye{
                position: relative; 
                top: -32px; 
                left: 19rem;
                cursor: pointer;
            }

            .forget{
                position: relative;
                right: 5px;
                transition: 0.3s;
                font-size: small; 
                color: #000; 
                text-decoration: none; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .forget:hover{
                color: green;
            }

            .submit{
                width: 95%; 
                padding: 8px; 
                margin-left: 5%; 
                border-radius: 5px; 
                border: none; 
                background-color: green; 
                cursor: pointer;
                color: #fff;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .dont{
                text-align: center; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .sign{
                color: green; 
                text-decoration: none;
            }

        }

        @media screen and (min-width: 900px){
            .carry{
                background-color: white; 
                height: 100vh; 
                width: 100%; 
            }

            .twin{
                display: none;
                grid-template-columns: 480px 480px;
                justify-content: center;
            }

            .tablet-div{
                display: flex;
                column-count: 2;
                justify-content: space-between;
                width: 890px; 
                height: 100vh; 
                background-color: white; 
            }

            .wrapper-4-tab{
                display: flex; 
                justify-content: center;
            }

            .for-smaller-tabs{
                display: none; 
                justify-content: center;
            }

            .arrange{
                width: 440px; 
                height: 100vh;
                align-content: center;
                background-color: #fff;
            }

            .logo{
                width: 120px;
            }

            .start{
                color: green;
                margin-left: 5%; 
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
                font-weight: 600;
            }

            .welcome{
                color: gray; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
                margin-left: 5%;
            }

            hr{
                width: 94%; 
                margin-left: 5%; 
                position: relative; 
                top: 8px; 
                opacity: 0.4;
            }

            .label {
                display: flex;
                flex-direction: column;
                gap: 5px;
                height: -moz-fit-content;
                height: fit-content;
            }
            .label:has(input:focus) .title {
                top: 0;
                left: 3%;
                color: green;
            }
            .label .title {
                padding: 0 10px;
                transition: all 300ms;
                font-size: 12px;
                color: black;
                font-weight: 600;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: -moz-fit-content;
                width: fit-content;
                top: 14px;
                position: relative;
                left: 30px;
                background: white;
            }
            .input-field {
                width: 92%;
                margin-left: 5%;
                height: 35px;
                text-indent: 15px;
                border-radius: 5px;
                row-gap: 30px;
                outline: none;
                background-color: transparent;
                border: 1px solid #21262e;
                transition: all 0.3s;
                caret-color: black;
                color: black;
            }

            .input-field:hover {
                border-color: green;
            }

            .input-field:focus {
                border-color: black;
            }

            #eye{
                position: relative; 
                top: -32px; 
                left: 19rem;
                cursor: pointer;
            }

            .forget{
                position: relative;
                right: 5px;
                transition: 0.3s;
                font-size: small; 
                color: #000; 
                text-decoration: none; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .forget:hover{
                color: green;
            }

            .submit{
                width: 95%; 
                padding: 8px; 
                margin-left: 5%; 
                border-radius: 5px; 
                border: none; 
                background-color: green; 
                cursor: pointer;
                color: #fff;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .dont{
                text-align: center; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .sign{
                color: green; 
                text-decoration: none;
            }

            .arrange2{
                width: 440px; 
                height: 100vh; 
                background-color: #fff;
                border-radius: 10px;
            }

            .slideshow-container {
                position: relative;
                max-width: 100%;
                height: 100vh;
                overflow: hidden;
            }

            .slide {
                position: absolute;
                width: 100%;
                height: 100%;
                opacity: 0;
                animation: fade 15s infinite;
            }

            .slide img {
                width: 100%;
                height: 100%;
                border-radius: 10px;
            }

            /* Fade animation */
            @keyframes fade {
            0% { opacity: 0; }
            8% { opacity: 1; }
            33.33% { opacity: 1; }
            41.66% { opacity: 0; }
            100% { opacity: 0; }
            }

            /* Delay each slide */
            .slide:nth-child(1) { animation-delay: 0s; }
            .slide:nth-child(2) { animation-delay: 5s; }
            .slide:nth-child(3) { animation-delay: 10s; }
        }

        @media screen and (min-width: 1024px){
            .carry{
                background-color: white; 
                height: 90vh; 
                width: 70%; 
                position: absolute; 
                top: 5%; 
                left: 15%; 
                border-radius: 10px;
            }

            .twin{
                display: grid;
                grid-template-columns: 480px 480px;
                justify-content: center;
            }

            .tablet-div{
                display: none;
                width: 890px; 
                height: 600px; 
                background-color:yellow; 
                margin-top: 2.5vh;
        }

            .first-twin{
                background-color: white; 
                height: 90vh; 
                border-radius: 10px;
                align-content: center;
            }

            .inner-first-twin{
                width: 70%; 
                height: auto; 
                background-color: #fff; 
                margin-left: 15%;
            }

            .logo{
                width: 120px;
            }

            .start{
                color: green;
                margin-left: 5%; 
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
                font-weight: 600;
            }

            .welcome{
                color: gray; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; 
                margin-left: 5%;
            }

            hr{
                width: 94%; 
                margin-left: 5%; 
                position: relative; 
                top: 8px; 
                opacity: 0.4;
            }

            .label {
                display: flex;
                flex-direction: column;
                gap: 5px;
                height: -moz-fit-content;
                height: fit-content;
            }
            .label:has(input:focus) .title {
                top: 0;
                left: 3%;
                color: green;
            }
            .label .title {
                padding: 0 10px;
                transition: all 300ms;
                font-size: 12px;
                color: black;
                font-weight: 600;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                width: -moz-fit-content;
                width: fit-content;
                top: 14px;
                position: relative;
                left: 30px;
                background: white;
            }
            .input-field {
                width: 92%;
                margin-left: 5%;
                height: 35px;
                text-indent: 15px;
                border-radius: 5px;
                row-gap: 30px;
                outline: none;
                background-color: transparent;
                border: 1px solid #21262e;
                transition: all 0.3s;
                caret-color: black;
                color: black;
            }

            .input-field:hover {
                border-color: green;
            }

            .input-field:focus {
                border-color: black;
            }

            .forget{
                position: relative;
                right: 5px;
                transition: 0.3s;
                font-size: small; 
                color: #000; 
                text-decoration: none; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .forget:hover{
                color: green;
            }

            .submit{
                width: 95%; 
                padding: 8px; 
                margin-left: 5%; 
                border-radius: 5px; 
                border: none; 
                background-color: green; 
                cursor: pointer;
                color: #fff;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .dont{
                text-align: center; 
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }

            .sign{
                color: green; 
                text-decoration: none;
            }

            .second-twin{
                background-color: white; 
                height: 90vh; 
                border-radius: 10px;
                align-content: center;
            }

            .other{
                background-color: #fff; 
                width: 96.3%; 
                height: 85vh; 
                border-radius: 10px;
            } 

            .slideshow-container {
                position: relative;
                max-width: 100%;
                height: 85vh;
                overflow: hidden;
            }

            .slide {
                position: absolute;
                width: 100%;
                height: 100%;
                opacity: 0;
                animation: fade 15s infinite;
            }

            .slide img {
                width: 100%;
                height: 100%;
            }

            /* Fade animation */
            @keyframes fade {
            0% { opacity: 0; }
            8% { opacity: 1; }
            33.33% { opacity: 1; }
            41.66% { opacity: 0; }
            100% { opacity: 0; }
            }

            /* Delay each slide */
            .slide:nth-child(1) { animation-delay: 0s; }
            .slide:nth-child(2) { animation-delay: 5s; }
            .slide:nth-child(3) { animation-delay: 10s; }

        }
    </style>
</head>
<body>
    <!--THIS IS THE LOGIN FORM THAT WILL DISPLAY FOR THE LAPTOP / DESKTOP VIEW-->
    
    <div class="carry">
       <div class="twin">
        <div class="first-twin">
            <div class="inner-first-twin">
                <!--img src="resources/images/LOGO_MAIN.png" alt="Sunlyn Logo" class="logo"-->
                <div>
                    <h4 class="start">
                        <?php
                            // Get the current hour
                            $currentHour = date("H");

                            // Determine the greeting based on the time of day
                              if ($currentHour <= 11) {
                                echo "Good Morning";
                            } elseif ($currentHour <= 16) {
                                echo "Good Afternoon";
                            } elseif ($currentHour <= 23) {
                                echo "Good Evening";
                            }
                        ?>
                    </h4>
                    <p class="welcome">Welcome to Email Portal - Login to continue</p>
                </div>
                <hr>
                <br>

                <?php
                        if (isset($_GET['error'])) {
                            $error = htmlspecialchars($_GET['error']); // For security (XSS protection)
                            echo "<div style='background-color: maroon; color: white; width: 350px; height: 40px;padding-top:15px;text-align:center;font-weight:bold'>
                            $error
                            </div>";
                        }
                ?>
           
          
        </div>
                    <form  method="post" action="admin.php" >
                      <label for="name" class="label">
                        <span class="title">Phone / Email</span>
                        <input
                          class="input-field"
                          type="text"
                          name="email"
                          placeholder="Enter Phone or Email"
                          value=""
                        />
                      </label>
                      <br>
                      <label for="password" class="label">
                        <span class="title">Password</span>
                        <input
                          id="serialCardNumber"
                          class="input-field"
                          type="password"
                          name="password"
                          placeholder="Enter Password"
                          value=""
                        />
                      </label>                     
                      <p style="text-align: right;"><a href="forget password.php" class="forget">Forget password?</a></p>
                      <input
                        type="submit" 
                        value="Log in" 
                        class="submit"
                        name="submit"
                       />
                      <p class="dont">Don't have an account? <a href="sign-up.php" class="sign">Sign up</a></p>
                    </form>
            </div>
        </div>
        <div class="second-twin">
            <!-- <div class="other">
                <!-- <div class="slideshow-container">
                    <div class="slide fade"><img src="resources/images/Hair Doctor 1B.jpg" alt="Slide 1"></div>
                    <div class="slide fade"><img src="resources/images/Green and Pink Modern Grocery Store Instagram Story.png" alt="Slide 2"></div>
                    <div class="slide fade"><img src="resources/images/Hair Doctor 1B.jpg" alt="Slide 3"></div>
                </div> -->
            </div> -->
        </div>
       </div>
    <!--THIS IS THE LOGIN FORM TO DISPLAY FOR TABLET VIEW-->
    <div class="wrapper-4-tab">
        <div class="tablet-div">
            <div class="arrange">
                <img src="resources/images/LOGO_MAIN.png" alt="Sunlyn Logo" class="logo">
                <div>
                    <h4 class="start">
                        <?php
                            // Get the current hour
                            $currentHour = date("H");
    
                            // Determine the greeting based on the time of day
                            if ($currentHour <= 11) {
                            echo "Good Morning";
                            } elseif ($currentHour <= 16) {
                                    echo "Good Afternoon";
                            } elseif ($currentHour <= 23) {
                                    echo "Good Evening";
                                }
                            ?>
                        </h4>
                        <p class="welcome">Welcome to Sunlyn - Login to continue</p>
                    </div>
                    <hr>
                    <br>

                    <?php
                        if (isset($_GET['error'])) {
                            $error = htmlspecialchars($_GET['error']); // For security (XSS protection)
                            echo "<div style='background-color: maroon; color: white; width: 350px; height: 40px;padding-top:15px;text-align:center;font-weight:bold'>
                            $error
                            </div>";
                        }
                     ?>
                        <form  action="admin.php" method="post">
                          <label for="name" class="label">
                            <span class="title">Phone / Email</span>
                            <input
                              class="input-field"
                              type="text"
                              name="email"
                              placeholder="Enter Phone or Email"
                            />
                          </label>
                          <br>
                          <label for="password" class="label">
                            <span class="title">Password</span>
                            <input
                              id="serialCardNumber"
                              class="input-field"
                              type="password"
                              name="password"
                              placeholder="Enter Password"
                            />
                          </label>                     
                          <p style="text-align: right;"><a href="forget password.php" class="forget">Forget password?</a></p>
                          <input
                            type="submit" 
                            value="Log in" 
                            class="submit"
                            name="submit"
                           />
                          <p class="dont">Don't have an account? <a href="sign-up.php" class="sign">Sign up</a></p>
                        </form>
            </div>
            <!-- <div class="arrange2">
                 <div class="slideshow-container">
                    <div class="slide fade"><img src="resources/images/Hair Doctor 1B.jpg" alt="Slide 1"></div>
                    <div class="slide fade"><img src="resources/images/Green and Pink Modern Grocery Store Instagram Story.png" alt="Slide 2"></div>
                    <div class="slide fade"><img src="resources/images/Hair Doctor 1B.jpg" alt="Slide 3"></div>
                </div> 
        </div> -->
    </div>
<!--THIS IS THE LOGIN FORM TO DISPLAY FOR SMALLER TABLETS AND PHONES-->
<div class="for-smaller-tabs">
<div class="size">
    <!-- <img src="resources/images/LOGO_MAIN.png" alt="Sunlyn Logo" class="logo"> -->
                <div>
                    <h4 class="start">
                        <?php
                            // Get the current hour
                            $currentHour = date("H");
    
                            // Determine the greeting based on the time of day
                            if ($currentHour <= 11) {
                            echo "Good Morning";
                            } elseif ($currentHour <= 16) {
                                    echo "Good Afternoon";
                            } elseif ($currentHour <= 23) {
                                    echo "Good Evening";
                                }
                            ?>
                        </h4>
                        <p class="welcome">Welcome to Sunlyn - Login to continue</p>
                    </div>
                    <hr>
                    <br>

                    <?php
                        if (isset($_GET['error'])) {
                            $error = htmlspecialchars($_GET['error']); // For security (XSS protection)
                            echo "<div style='background-color: maroon; color: white; width: 350px; height: 40px;padding-top:15px;text-align:center;font-weight:bold'>
                            $error
                            </div>";
                        }
                    ?>
                        <form  method="POST"  action="admin.php">
                          <label for="name" class="label">
                            <span class="title">Phone / Email</span>
                            <input
                              class="input-field"
                              type="text"
                              name="email"
                              placeholder="Enter Phone or Email"
                            />
                          </label>
                          <br>
                          <label for="password" class="label">
                            <span class="title">Password</span>
                            <input
                              id="serialCardNumber"
                              class="input-field"
                              type="password"
                              name="password"
                              placeholder="Enter Password"
                            />
                          </label>                     
                          <p style="text-align: right;"><a href="forget password.php" class="forget">Forget password?</a></p>
                          <input
                            type="submit" 
                            value="Log in" 
                            class="submit"
                            name="submit"
                           />
                          <p class="dont">Don't have an account? <a href="sign-up.php" class="sign">Sign up</a></p>
                        </form>
            </div>
    </div>
</div>
</div>
</body>
</html>