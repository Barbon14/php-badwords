<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>

<body>
    <?php

    $name = 'Mattia';
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores eum nemo corporis odio nulla quisquam provident ex. Nobis beatae aperiam saepe dolorum, laborum non ea labore rem sunt eaque repellendus.';
    $censure = $_GET['censure'];
    ?>
    <h1>
        Hello <?php echo $name ?>
    </h1>
    <p>
        <?php 
            echo str_replace($censure, '***', $text) . ' Lunghezza ' . strlen($text);
        ?>
    </p>
</body>

</html>