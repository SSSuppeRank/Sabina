<?php
    $postTitle = $_POST['postTitle'];
    $postContent = $_POST['postContent'];

    $link = mysqli_connect( "localhost", "root", "", "sabina" )
        or die( "Error: " . mysqli_error( $link ) );

    $query = "INSERT INTO `post` (`postTitle`, `postContent`, `postDate`) VALUES ('$postTitle', '$postContent', now())";
    $result = mysqli_query( $link, $query )
        or die( "Error: " . mysqli_error( $link ) );

    $newURL = "../blog.php";
    header( 'Location: ' . $newURL ); 
?>