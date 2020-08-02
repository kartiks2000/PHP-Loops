<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Loops in PHP</h1>
    <?php    
        
        // While Loop

        $count = 0;
        while($count <= 10){
            echo "Hello" . " " . $count . "<br>";
            $count++;
        }


        // For Loop

        $count = 0;
        for($count = 0; $count <= 10; $count++){
            echo "Hello" . " " . $count . "<br>";
        }


        // Foreach Loop

        $nums = [23,65,45,9,54];
        foreach($nums as $n){
            echo $n."<br>";
        }

    ?>
</body>
</html>
