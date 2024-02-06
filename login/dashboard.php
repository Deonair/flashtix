<?php 
session_start();
if(isset($_SESSION['user'])){
    header("Location: index.html");
}

if(isset($_GET['logout'])=='yes'){
    session_destroy();
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand"><?php echo $_SESSION['user'] ?></a>
            </div>
        <p class="navbar-text navbar-right"><a href="?logout=yes">Logout</a></p>
</div>
</nav>

<div class="container">
    <div class="jumbotron">
        <h1><?php echo $_SESSION['user'] ?></h1>
        <p>Login</p>
        <p><a href="?logout=yes" class="btn btn-primary">Logout</a></p>
</div>
</div>

    
</body>
</html>