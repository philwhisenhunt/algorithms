<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">

        <style>
        /* header{
            background: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
        
         */
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
            <h1>
           
            </h1>
        </header>


        
        <script src="" async defer></script>


        <ul>

<?php

echo 'This person has the following traits: ';
foreach ($person as $feature => $trait ): 

?>
<li><strong><?= ucwords($feature); ?></strong> <?= $trait ?> </li>


<?php endforeach ?>

<?php foreach ($fruits as $fruit) :?>
<li><?= $fruit ?></li>
<?php endforeach ?>

<?= $tasks['completed'] ? 'Yes' : 'Not yet' ?>


    <?php if (!$tasks['completed']) : ?>
        <span class = "icon">&#9989;</span>
        <?php else :
            echo "It was true";
        ?>
    <?php endif; ?>


        </ul>
    </body>
</html>