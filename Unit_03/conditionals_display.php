<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
        include 'data_types.php';
        
        // If only returning one thing, can be written in one line
        if($name === 'Dez') echo "Welcome to the website!"; 

        // Otherwise, we write it like always
        if($name === 'maintenance'){
            echo "Sorry, \n";
            echo "Our website is currently under maintenance. Please try again later.";
        } 

        // Ideally, use an if/else if/else for multiple conditional statements, just like in js.
        ?>
    </pre>
</body>
</html>