<?php
    session_start();

    $link = mysqli_connect( "localhost", "root", "", "sabina" )
      or die( "Error: " . mysqli_error( $link ) );

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if( $pass1 == $pass2 ) {
        $query = "INSERT INTO `users` (`userName`, `userSurname`, `userEmail`, `userPassword`) VALUES ('$name', '$surname', '$email', '$pass1')";
        $result = mysqli_query( $link, $query )
            or die( "Error: " . mysqli_error( $link ) );
    }

    mysqli_close( $link );

    header( 'Location: ../personal.php' );
?>