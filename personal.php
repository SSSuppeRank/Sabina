<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/join.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Personal</title>
</head>
<body class="full-height-grow">
  <div class="container full-height-grow">
    <header class="main-header">
      <a href="#" class="brand-logo">
        <img src="images/2702761.png">
        <div class="brand-logo-name">Kuandyk Sultaniyar</div>
      </a>
      <nav class="main-nav">
        <ul>
          <li><a href="main.php">Main</a></li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="personal.php">Personal</a></li>
        </ul>
      </nav>
    </header>
    <section class="join-main-section">
      <h1 class="join-text">
        <span class="accent-text">Authorization</span>
      </h1>
      <form class="join-form text-white" method="POST" action="check.php">
        <div class="input-group">
          <label>Log in:</label>
          <input type="login" placeholder="Log in" name="login">
        </div>
        <div class="input-group">
          <label>Password:</label>
          <input type="password" placeholder="Password" name="pass" class="color-white">
        </div>
        <div class="input-group">
          <button type="submit" class="btn btn-outline-success">Authorization</button>
        </div>
        <div class="alert alert-danges">
          <?php
            session_start();
            if( isset( $_SESSION['error'] ) ) {
              $error = $_SESSION['error'];
              echo "<script>";
              echo "alert( '" . $_SESSION['error'] . "' );";
              echo "</script>";
              unset( $_SESSION['error'] );
            }
          ?>
        </div>
      </form>
    </section>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>
</body>
</html>