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
    <ul>
         <?php foreach ($tasks as $task) : ?>
       <li><?= $task->description; ?></li>
     <?php endforeach; ?>
     </ul>
        <header>
            <h1>
           
            </h1>
        </header>


        
        <script src="" async defer></script>



      
    </body>
</html>