<?php
      session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link type="image/png" sizes="120x120" rel="shortcut icon" href="favico.svg">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="styles/style.css" type="text/css">
      <title>USI</title>
</head>
<!-- viewBox="0 0 2300 1000" -->
<body id="body">
      <section class="header">
            <div class="container">
                  <div class="mobile-content">
                        Мобильная версия сайта в разработке
                  </div>
                  <div class="header__content">
                        <div class="logo center">
                              <span class="header-logo-text">usi</span>
                              <svg class="header-logo-circle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 2000 2000">
                                    <defs>
                                          <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250"
                                                id="textcircle">
                                                <animateTransform attributeName="transform" begin="0s" dur="10s"
                                                      type="rotate" from="0 250 250" to="360 250 250"
                                                      repeatCount="indefinite" />
                                          </path>
                                    </defs>
                                    <text dy="20" textLength="1220">
                                          <textPath xlink:href="#textcircle">
                                                us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;industries</textPath>
                                    </text>
                              </svg>
                        </div>
                        <div class="header__title">
                              <div class="header__title-main">
                                    <span class="header__title-letter">a</span>
                                    <span class="header__title-letter">d</span>
                                    <span class="header__title-letter">v</span>
                                    <span class="header__title-letter">e</span>
                                    <span class="header__title-letter">n</span>
                                    <span class="header__title-letter">t</span>
                                    <span class="header__title-letter">u</span>
                                    <span class="header__title-letter">r</span>
                                    <span class="header__title-letter">e</span>
                                    <span class="header__title-letter">s</span>
                              </div>
                              <a href="#" class="header__title-parent">
                                    <span class="header__title-letter-parent">a</span>
                                    <span class="header__title-letter-parent">r</span>
                                    <span class="header__title-letter-parent">e&nbsp</span>
                                    <span class="header__title-letter-parent">h</span>
                                    <span class="header__title-letter-parent">e</span>
                                    <span class="header__title-letter-parent">r</span>
                                    <span class="header__title-letter-parent">e</span>
                              </a>
                        </div>
                        <?php
                              if(isset($_SESSION['user']) == ''):
                        ?>
                        <div class="header__content-btn">
                              <a href="#" onclick="show('block'); login()" class="header-btn center">Log in</a>
                              <div class="slashbetweenbtns">/</div>
                              <a href="#" onclick="show('block'); register()" class="header-btn center">Register</a>
                        </div>

                  </div>
                  <div class="background-mask" onclick="show('none')" id="background-mask"></div>
                  <div class="form-box" id="form-box">
                        <a class="cl-btn-4" onclick="show('none')"></a>
                        <div class="button-box">
                              <div id="btn"></div>
                              <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                              <button type="button" class="toggle-btn" onclick="register()">Register</button>
                        </div>
                        <form id="login-form" action="backend/signin/signin.php" method="post"
                              enctype="multipart/form-data" class="input-group">
                              <input type="text" name="login" class="input-field" placeholder="Username" required>
                              <input type="password" name="password" class="input-field" placeholder="Password"
                                    required>
                              <div class="checkbox-block">
                                    <input type="checkbox" class="checkbox"><span>Remember password</span>
                              </div>
                              <button type="submit" class="submit-btn">
                                    Log in
                              </button>
                              <?php 
                                    if (isset($_SESSION['message'])) {
                                          echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                                    }
                                    unset($_SESSION['message']);
                              ?>
                        </form>
                        <form id="register-form" action="backend/signup/signup.php" method="post"
                              enctype="multipart/form-data" class="input-group">
                              <?php 
                                    if (isset($_SESSION['message'])) {
                                          echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
                                    }
                                    unset($_SESSION['message']);
                              ?>
                              <input type="text" name="login" class="input-field" placeholder="Username" required>
                              <input type="email" name="email" class="input-field" placeholder="Email" required>
                              <input type="password" name="password" class="input-field" placeholder="Password" required
                                    minlength="7" maxlength="15">
                              <input type="password" name="repeat_password" class="input-field"
                                    placeholder="Repeat password" required minlength="7" maxlength="15">
                              <div class="checkbox-block">
                                    <input type="checkbox" class="checkbox"><span>I agree to the <a href="#"
                                                class="checkbox-rules">terms</a> & <a href="#"
                                                class="checkbox-rules">conditions</a></span>
                              </div>
                              <button type="submit" class="submit-btn">
                                    Register
                              </button>
                        </form>
                  </div>
                  <?php else: ?>
                  <div class="profile_tab">
                        <li><span>Profile</span>
                              <ul class="profile_tab-content">
                                    <li class="username">
                                          <?= $_SESSION['user']['login'] ?>
                                    </li>
                                    <li><a href="">Settings</a></li>
                                    <li><a href="backend/logout.php">Logout</a></li>
                              </ul>
                        </li>
                  </div>
                  <?php
                        endif;
                  ?>
            </div>
      </section>
      <section class="main">
            <div class="container">
                  <div class="terminal">
                        <div class="terminal-border">
                              <?php if(isset($_SESSION['user']) == ''): ?>
                              <h5 class="terminal-border_title">user@user: ~</h5>
                              <?php else: ?>
                              <h5 class="terminal-border_title">usi@<?= $_SESSION['user']['login'] ?>: ~
                              </h5>
                              <?php endif; ?>
                              <div class="terminal-border-btns">
                                    <a href="#" class="terminal-border_btn red"></a>
                                    <a href="#" class="terminal-border_btn orange"></a>
                                    <a href="#" class="terminal-border_btn green"></a>
                              </div>
                        </div>
                        <div class="terminal-content">
                              <div class="typing-demo">
                                    Soon.
                              </div>
                        </div>
                  </div>
            </div>
      </section>
      <div class="fixed__social">
            <a href="#" target="_blank" class="fixed__social-icon telegram_ic"></a>
            <a href="#" target="_blank" class="fixed__social-icon inst_ic"></a>
            <a href="#" target="_blank" class="fixed__social-icon github_ic"></a>
      </div>
      <footer>
            <div class="container">
                  <div class="footer__support">
                        <span class="footer">support: admin@usindustries.tech</span>
                  </div>
            </div>
      </footer>
      <script src="scripts/form.js"></script>
      <script src="https://kit.fontawesome.com/b1d3aae742.js" crossorigin="anonymous"></script>
      <script src="scripts/headerTitle.js"></script>
</body>

</html>