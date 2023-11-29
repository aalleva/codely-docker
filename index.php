<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World App</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .message {
            padding: 20px;
            background-color: #fff;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .message h1 {
            margin: 0;
            color: #4CAF50;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php echo '<h1>Hello World!</h1>'; ?>
    </div>
</body>
</html>

