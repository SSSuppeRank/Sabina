<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/join.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <title>Blog</title>
  <?php
    session_start();
    $link = mysqli_connect( "localhost", "root", "", "sabina" )
      or die( "Error: " . mysqli_error( $link ) );

    $query = "SELECT * FROM `post`";
    $result = mysqli_query( $link, $query );
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
            <span class="accent-text">Your posts</span>
          </h1>
        </section>
      </div>
    </div>
    <div class="col-6">
      <?php
        while( $row = mysqli_fetch_array( $result ) ) {
          echo '<div class="card m-4 bg-light">';
          echo '<div class="card-body">';
          echo '<h5 class="card-title">'. $row['postTitle'] . '</h5>';
          echo '<p class="card-text">' . $row['postContent'] . '</p>';
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