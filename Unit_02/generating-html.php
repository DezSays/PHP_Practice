<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generating HTML</title>
    <style> 
        .class-1 { background-color: lightblue;}
        .class-2 { background-color: lightcoral;}
        .class-3 { background-color: lightgreen;}
        .class-4 { background-color: lightpink;}
        .class-5 { background-color: lightsalmon;}
        .class-6 { background-color: lightseagreen;}
    </style>
</head>
<body class="class-<?php echo rand(1,6) ?>">
    <?php
        echo '<h1>I am an h1 tag that is displayed using the php echo command.</h1>'
    ?>
</body>
</html>