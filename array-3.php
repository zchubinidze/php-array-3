<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo "php-arrays-3 "  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="m-5 ">
    <?php

    $emptyArray = [];

    for($i=1; $i <= 40; $i++){
        if($i % 2 !== 0){
          $emptyArray[] = $i;  
        }
    }

    foreach($emptyArray as $array){
        echo $array. ",  ";
    }

   
    ?>

</div>
</body>
</html>