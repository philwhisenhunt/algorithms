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
       
        </style>
    </head>
    <body>
        <nav>
            <ul>
                <li>
                <a href="/about.php">About Page</a> </li>
                <li>
                <a href="/contact.php">Contact Page</a>

                </li>
            </ul>
        </nav>
    <ul>
         <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>

                    <strike> <?= $task->description; ?> </strike>

                <?php else: ?>

                    <?= $task->description; ?>

                <?php endif ?>
            </li>
        <?php endforeach; ?>
           
     </ul>
  
    </body>
</html>
