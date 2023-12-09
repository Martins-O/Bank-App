<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the Bank</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #3498db;
            padding: 20px;
            color: white;
            text-align: center;
        }

        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .welcome-text {
            max-width: 600px;
        }

        .start-button {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .start-button:hover {
            background-color: #2980b9;
        }

        footer {
            background-color: #3498db;
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Welcome to the Bank</h1>
</header>

<main>
    <div class="welcome-text">
        <h2>Your Financial Journey Begins Here</h2>
        <p>
            Experience the ease of managing your finances with our secure and user-friendly banking app.
        </p>
        <a href="{{ route('registration.create') }}" class="start-button">Get Started</a>
    </div>
</main>

<footer>
    &copy; 2023 Bank. All rights reserved.
</footer>
</body>
</html>
