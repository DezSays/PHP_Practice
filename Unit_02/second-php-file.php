<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second PHP File</title>
</head>
<body>
    <h1> 
        <?php 
            echo 'Howdy from the PHP block!'; 
        ?>
    </h1>
    <h2>
        This is my second PHP file. Although it is saved with a .php extension, it is rendered as HTML.
    </h2>
    <h3> 
        Roll the dice: 
        <?php 
            echo rand(1, 6); 
        ?>
    </h3>
</body>
</html>