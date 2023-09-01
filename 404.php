<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #e74c3c;
        }

        .error-message {
            font-size: 1.5rem;
            color: #333;
        }

        .go-back-link {
            margin-top: 20px;
            color: #e74c3c;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        .go-back-link:hover {
            color: #ff786a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="error-code">404</div>
        <div class="error-message"><?= $message ? $message : "";?></div>
        <p><a href="/" class="go-back-link">Atgriezties</a></p>
    </div>
</body>
</html>