<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    require_once "classes/car.php";
    
    /*
    $a = new car('volvo', 'black');
    //print_r($a->color);//shouldnt do like this
    var_dump($a);
    print_r($a->get_car_info('2006'));
    //print_r($a->year);
    */

    $b=new car('merc', 'blue');
    $b->set_car_model('bimmer');
    var_dump($b->get_car_model());

    $c=new car('bimmer', 'blue');
    $c->set_car_model('bimmer');
    var_dump($c->get_car_model());
    $c->set_color('pink');
    var_dump($c->get_color());
    ?>
</body>

</html>