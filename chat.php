<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/join.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Chat</title>
  <?php
    session_start();

    $action = "signUpPage.php";
    $warning = "You are not registered on system!";
    $user = "NULL";
    $operation = "Sign up";
    $mode = "danger";
    $inSytem = false;

    $link = mysqli_connect( "localhost", "root", "", "sabina" )
      or die( "Error: " . mysqli_error( $link ) );

    $query = "SELECT * FROM `messages`";
      $result = mysqli_query( $link, $query );

    if( isset( $_SESSION['inSystem'] ) ) {
      $action = "script/sendMessage.php";
      $warning = "";
      $user = $_SESSION['userName'];
      $operation = "Send";
      $mode = "success";
      $inSytem = true;
    }
    
  ?>
</head>
<body class="full-height-grow">
  <header class="main-header">
    <a href="#" class="brand-logo">
      <img src="images/2702761.png">
      <div class="brand-logo-name">Kuandyk Sultaniyar</div>
    </a>
    <nav class="main-nav">
      <ul>
        <li><a href="main.php">Main</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li><a href="chat.php">Chat</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="personal.php">Personal</a></li>
      </ul>
    </nav>
  </header>
  <div class="row">
    <div class="col-4">
      <div class="container full-height-grow">
        <section class="join-main-section">
          <h1 class="join-text">
            <span class="accent-text">Chat</span>
          </h1>
        </section>
      </div>
      <form action="<?php echo $action;?>" class="bg-dark p-3 m-4 text-white" style="border-radius: 15px;" method="POST">
        <label for="message">User: <span class="text-<?php echo $mode ?>"><?php echo $user; ?></span></label>
        <textarea name="message" id="" class="form-control text-white" style="background: none;" placeholder="My message"></textarea>
        <div id="passwordHelpBlock" class="form-text">
          <?php
            echo $warning;
          ?>
        </div>
        <button type="submit" class="btn btn-outline-success form-control" name="signUp" ><?php echo $operation ?></button>
      </form>
      <?php
        if( $inSytem == true ) {
          echo '<form action="script/logOut.php" class="p-3 m-4">';
          echo '<button class="btn btn-outline-dark form-control">Log out</button>';
          echo '</form>';
        }
      ?>
    </div>
    <div class="col-6">
        <?php
          while( $row = mysqli_fetch_array( $result ) ) {
            $userID = $row['userID'];
            $query = "SELECT * FROM `users` WHERE `userID` = '$userID'";
            
            $userNameQuery = mysqli_query( $link, $query );
            $userSurnameQuery = mysqli_query( $link, $query );

            $userName = mysqli_fetch_array( $userNameQuery )['userName'];
            $userSurname = mysqli_fetch_array( $userSurnameQuery )['userSurname'];

            echo '<div class="card m-4 bg-light">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title" >' . $userName . ' ' . $userSurname . ' at ' . $row['messagePostDate'] . '</h5>';
            echo '<div class="card-text">';
            echo $row['messageText'];
            echo '</div>';
            echo '</div>';
            echo '</div>';
          }
        ?>
    </div>
  </div>

  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>