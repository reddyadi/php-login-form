<?php
  ob_start();//output buffer on
  session_start();
?>

<html lang="en">
<head>
  <title> Session </title>
</head>
<body>
  <h1> Please enter your Username and Password </h1>
  <div>
    <?php
    $msg='';
    if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
      if($_POST['username'] == 'Yoobee' && $_POST['password'] == '1234'){
        $_SESSION['valid']=true;
        $_SESSION['timeout']=time();
        $_SESSION['username']='Yoobee'; //setting session variable username
        echo('\t You have entered the correct username and password');
      } else {
        echo('\t Wrong username and password');
      }
    }
    ?>
  </div>
  <div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
      <h4><?php echo $msg; ?></h4>
      <input type="text" name="username" required autofocus><br>
      <input type="password" name="password" required autofocus><br>
      <button type="submit" name="login">Login</button>
    </form>
    Click here to clean session <a href="logout.php" title="Logout"> Session </a>
  </div>
