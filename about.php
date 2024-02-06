<?php 

$paragrafo = $_GET['paragrafo'];
$censura = $_GET['censure'];
$censuraParagrafo = str_replace($censura, '***', $paragrafo);

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h2>
            paragrafo
        </h2>
        <p>
            <?php
                echo  $paragrafo;
                echo '"Lunghezza della stringa: '.strlen($paragrafo).'"';
            ?>
        </p>
        <h2>
            parolada censurare:
        </h2>
        <span>
            <?php echo  $censura   ?>
        </span>
        <section>
            <hr>
            <h2>
                paragrafo censurato
            </h2>
            <p>
                <?php 
                    echo $censuraParagrafo;
                    
                ?>
            </p>
            <p>
                <?php 
                    echo strlen($censuraParagrafo);
                    
                ?>
            </p>
        </section>
    </body>
</html>