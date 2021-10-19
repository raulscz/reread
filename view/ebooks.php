<!DOCTYPE html>
<html lang="en">

<head>
    <title>Re-Read ebooks</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="icon" href="../img/icon.png">

</head>

<body>

    <div class="logo">
        <h1>Re-Read</h1>
    </div>

    <div class="header">
        <h1>Re-Read</h1>
        <p>En Re-Read podrás encontrar libros de segunda mano en perfecto estado. También vender los tuyos. Porque siempre hay libros leídos y libros por leer. Por eso Re-compramos y Re-vendemos para que nunca te quedes sin ninguno de los dos.</p>
    </div>

    <div class="row">
        <div class="column middle">
            <div class="topnav">
                <a href="../index.php">Re-Read</a>
                <a href="libros.php">Libros</a>
                <a href="ebooks.php" class="active">eBooks</a>
            </div>
            
            <div class="textpage">
                <h3>Toda la actualidad en eBook</h3>
                <?php
                        require_once '../services/connection.php';

                        $sql= "SELECT books.Title, books.Description, books.img FROM `books` WHERE books.eBook = 1";
                        $result = mysqli_query($conn,$sql);

                        foreach ($result as $registro){             
                    ?>
                <div class="gallery">
                    <img src="../img/<?php echo"$registro[img]";?>">
                    <div><?php echo"$registro[Title]";?></div>
                    <div><?php echo"$registro[Description]";?></div>
                </div>
                <?php } ?>
                <!-- <div class="gallery">
                    <img src="" alt="El ciclo del hombre lobo">
                    <div class="desc">Una escalofriante revisión del mito del hombre lobo por el rey de la literatura de terror...</div>
                </div>

                <div class="gallery">
                    <img src="" alt="El resplandor">
                    <div class="desc">Esa es la palabra que Danny había visto en el espejo. Y, aunque no sabía leer, entendió que era un mensaje de horror...</div>
                </div>

                <div class="gallery clear">
                    <img src="" alt="doctorsleep">
                    <div class="desc">Una novela que entusiasmará a los millones de lectores de El resplandor y que encantará...</div>
                </div>

                <div class="gallery">
                    <img src="" alt="Mientras escribo">
                    <div class="desc">Pocas veces un libro sobre el oficio de escribir ha resultado tan clarificador, útil y revelador.</div>
                </div> -->
                
            </div>
        </div>
        <div class="column side">
            <h2>Top ventas</h2>
            <p>Cien años de soledad.</p>
            <p>Crónica de una muerte anunciada.</p>
            <p>El otoño del patriarca.</p>
            <p>El general en su laberinto.</p>
        </div>
    </div>

</body>

</html>