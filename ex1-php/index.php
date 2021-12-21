<?php  include './database.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img class="logo" src="../img/logo.png" alt="logo">
    </header>


    <main>

        <div class="container"> 

            <div class="row">
                
                <?php  foreach($database as $key) { ?>
                    <div class="col-4">

                        <div class="card-container mb-3 p-3 m-5  ">

                            <img src="<?php echo $key['poster']; ?> " alt="poster">
                            <h5> <?php echo $key['title']; ?> </h5>
                            <span> <?php echo $key['author']; ?> </span>
                            <span> <?php echo $key['year']; ?> </span>
                            <span> <?php echo $key['genre']; ?> </span>

                        </div>
                    </div>

                    <?php  } ?>

            </div>
        </div>


    </main>

</body>
</html>