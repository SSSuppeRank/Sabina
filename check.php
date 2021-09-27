<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    session_start();
    $login = $_POST["login"];
    $pass = $_POST["pass"];

    if( $login == "sabinaproject7" && $pass == "sultokblog5" ) {
      // чета надо сделать
    } else {
      header( 'Location: personal.php' );
      $_SESSION['error'] = "Неверный логин или пароль (на английсском)";
    }
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/join.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <title>Contact</title>
</head>
<body class="full-height-grow">
  <div class="container full-height-grow">
    <header class="main-header">
      <a href="/" class="brand-logo">
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
    <div class="row">
      <div class="col-3"></div>
      <section class="join-main-section">
        <form class="join-form text-white" action="script/newPost.php" method="POST">
          <div class="input-group">
            <label>Title:</label>
            <input type="text" style="font-size:14pt;" name="postTitle">
          </div>
          <div class="input-group">
            <label>Text:</label>
            <textarea name="postContent" cols="30" rows="10" style="background: none; border: 1px solid #2E3852; border-radius: 5px; color: white"></textarea>
          </div>
          <div class="input-group">
            <button type="submit" class="btn btn-outline-success">Post</button>
          </div>
        </form>
      </section>
    </div>
  </div>
  <div class="join-page-circle-1"></div>
  <div class="join-page-circle-2"></div>
</body>
</html>