<?php
    $title = array(
            'BMW',
            'Lamborghini',
            'Mustang',
            'Bugatti',
            'Ferrari'
    );

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
        <div class="class container">
            <div class="class row">
            <?php
                foreach ($title as $name)
                {
            ?>

                 <div class="row">
                     <div class="class-col-sm-2">
                         <div>
                             <h1><?php echo $name; ?></h1>
                         </div>
                         <div>
                             <img src="https://images.pexels.com/photos/544542/pexels-photo-544542.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="" width="700px">
                         </div>
                             <p>
                         Автомоби́ль — моторное дорожное транспортное средство, используемое для перевозки людей или грузов. Основное назначение автомобиля заключается в совершении транспортной работы
                             </p>
                         </div>
                         <div>
                             <?php echo date("Y.m.d"); ?>
                         </div>
                         <div>
                     </div>
                 </div>
            <?php
                }
            ?>

            </div>
        </div>

</body>
</html>


