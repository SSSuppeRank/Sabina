<?php
    session_start();

    $link = mysqli_connect( "localhost", "root", "", "sabina" )
      or die( "Error: " . mysqli_error( $link ) );

    $message = $_POST['message'];
    $userID = $_SESSION['userID'];

    $query = "INSERT INTO `messages` (`messageText`, `messagePostDate`, `userID`) VALUES ('$message', now(), '$userID')";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    mysqli_close( $link );

    header( 'Location: ../chat.php' );
?>