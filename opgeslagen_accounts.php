<?php
/* connect database */
$conn = mysqli_connect("localhost", "root", "", "flashtix");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// voorkomen van sql injections
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

// query invoegen
$sql = "INSERT INTO users (username, password) VALUES ('$username','$password')";
if(mysqli_query($conn, $sql)){

    echo"
        <script>window.location.replace('index.php');</script>
    opgeslagen
    ";
} else{
    echo "ERROR: We konden je account niet aanmaken $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);


?>
