<?php


// if(isset($_COOKIE['user'])){
//     header("Location: https://managethenow.net/mtn-live/");
// exit();
    
// }else{
?>


<!DOCTYPE html>
<html>
  <head>
    <title>MTN Live Stream</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="view/css/login.css?<?php echo time(); ?>" />
    
    <!--FAV ICON IN TAB-->
    <!--<link rel="icon" type="image/png" sizes="1000x1000" href="view/imgs/mtn live icon.png" />-->
    <link rel="apple-touch-icon" sizes="180x180" href="view/imgs/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="view/imgs/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="view/imgs/favicon/favicon-16x16.png">
    <link rel="manifest" href="view/imgs/favicon/site.webmanifest">
    <link rel="mask-icon" href="view/imgs/favicon/safari-pinned-tab.svg" color="#121680">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">


    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container">
      <div class="screen">
        <div class="screen__content">
          <form class="login" action="controller/login_handler.php" method="post">
            <h1>MTN Live <span id="stream_word">Stream</span></h1>
            <h2>LOGIN</h2>

            <?php if (isset($_GET['error'])) { ?>
            <div class="error alert alert-danger " role="alert" >
              <?php echo'
              
              <i class="fa-solid fa-circle-xmark fs-5">
              '.$_GET['error'].'
              </i>
              
              ';  ?>
            </div>
            
            
            <?php } ?>
            <div class="login__field">
              <i class="login__icon fas fa-user"></i>
              <input
                type="text"
                class="login__input"
                placeholder=" Username"
                name="username"
              />
            </div>
            <div class="login__field">
              <i class="login__icon fas fa-lock"></i>
              <input
                type="password"
                class="login__input"
                placeholder=" Password"
                name="qrcode_text"
              />
            </div>
        

            <button id="login-btn" type="submit" class="button login__submit">
              <span class="button__text">LOG IN </span>
            </button>
            <br />
            <div>
              <p id="not-member">Not a member ?</p>
              <button
                id="signup_now-btn"
                class="button login__submit signup_now"
              >
                <a href="#" class="py-1">Sign up Now </a>
              </button>
            </div>
          </form>
        </div>
        <div class="screen__background">
          <span
            class="screen__background__shape screen__background__shape4"
          ></span>
          <span
            class="screen__background__shape screen__background__shape3"
          ></span>
          <span
            class="screen__background__shape screen__background__shape2"
          ></span>
          <span
            class="screen__background__shape screen__background__shape1"
          ></span>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
// }
?>