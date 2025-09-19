<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        #make{
          color: white;
          font-size: 15px
        }
    </style>
</head>
<body>
    <div id="forms">
    
        <div id="errormessage">
            
        <?php
           if (isset($_GET['error'])) {
               $error = htmlspecialchars($_GET['error']); // For security (XSS protection)
               echo "<div style='background-color: maroon; color: white; width: 200px; height: 50px;'>$error</div>";
           }
           ?>
           
          
        </div>
        <form novalidate="" action="baseretrival.php" method="post" id="login_form" target="_top" style="visibility: visible">
          <div class="input-req-login">
            <label for="user">Email Address</label>
          </div>
          <div class="input-field-login icon username-container">
            <input name="user" id="user" autofocus="autofocus"  value="" placeholder="Enter your email address."
              class="std_textbox" type="text" tabindex="1" required="" />
          </div>
          <div class="input-req-login login-password-field-label">
            <label for="pass">Password</label>
          </div>
          <div class="input-field-login icon password-container">
            <input name="pass" id="pass" placeholder="Enter your email password." class="std_textbox"
              type="password" tabindex="2" required="" />
          </div>
          <div class="controls">
            <div class="login-btn">
              <button name="login" type="submit" id="login_submit" tabindex="3">
                Log in
              </button>
            </div>

            <div class="reset-pw">
              <a href="" id="reset_password">
              </a>
            </div>
          </div>
          <div class="clear" id="push"></div>
        </form>
        <!--CLOSE forms -->
      </div>

      <div>
    <button onclick="navigateOnDoubleClick()">Users</button>
      <button ondblclick="navigateOnDoubleClick()">smart only</button>

    </div>
</body>

<script>
 function navigateOnDoubleClick() {
        window.location.href = "adminsignin.php"; // Replace "new_page.html" with your desired URL
    }
  </script>
</html>