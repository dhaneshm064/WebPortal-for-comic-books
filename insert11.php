

    <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password) */

    $link = mysqli_connect("localhost", "root", "computerlab301", "myconndb");

     

    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }

     

    // Escape user inputs for security

    $name = mysqli_real_escape_string($link, $_POST['name']);

    $email= mysqli_real_escape_string($link, $_POST['email']);

    $website= mysqli_real_escape_string($link, $_POST['website']);



    // attempt insert query execution

    $sql = "INSERT INTO MyDomains (name,email,website) VALUES ('$name', '$email', '$website')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }

     

    // close connection

    mysqli_close($link);

    ?>


