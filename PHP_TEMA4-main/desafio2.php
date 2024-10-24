<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Loop For</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .number-list {
            list-style: none;
            padding: 0;
        }

        .number-item {
            margin-bottom: 5px;
            padding: 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Números Inteiros de 100 a 200:</h2>
    <ul class="number-list">
        <?php
        for ($i = 100; $i <= 200; $i+=2) {
            echo "<li class='number-item'>$i</li>";
        }
        ?>
    </ul>
</body>
</html>