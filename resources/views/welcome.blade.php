<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($trains as $train)
    <ul style="list-style: none;">
        <li><h4> <?php echo $train->company ?> </h4></li>
        <li>Codice del treno: <?php echo $train->train_number?></li>
        <li>Da: <?php echo $train->from?></li>
        <li>In arrivo a: <?php echo $train->to?></li>
        <li>Data: <?php echo substr($train->departure, 0, -9) ?></li>
        <?php if ($train->cancelled == 0) {
            echo "       
            <li>Orario di partenza: ".substr($train->departure, 11, -3)."</li>
            <li>Orario di arrivo: ".substr($train->arrival, 11, -3)."</li>";
        }
        ?>
        <li>Binario: <?php echo $train->platform?></li>
        <br>
        <li>
            <?php if ($train->on_time == 1 && $train->cancelled == 0) {
                echo 'In orario';
            } else if ($train->on_time == 0 && $train->cancelled == 0) {
                echo 'In ritardo';
            }else if ($train->cancelled == 1) {
                echo 'CANCELLATO';
            }
            ?>
        </li>
    </ul>
    @endforeach
</body>
</html>