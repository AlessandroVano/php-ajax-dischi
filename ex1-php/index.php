<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img class="logo" src="../img/logo.png" alt="logo">
    </header>
    <main>
        <?php 
        include './database.php'; ?>

        <?php  foreach($database as $key) { ?>
            <img src="<?php echo $key['poster']; ?> " alt="poster">
            <h5> <?php echo $key['title']; ?> </h5>
            <span> <?php echo $key['author']; ?> </span>
            <span> <?php echo $key['year']; ?> </span>
            <span> <?php echo $key['genre']; ?> </span>

     <?php   } ?>
    </main>

</body>
</html>