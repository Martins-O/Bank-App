<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        nav {
            background-color: #3498db;
            padding: 15px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav .logo {
            font-size: 24px;
            font-weight: bold;
        }

        nav ul {
            list-style-type: none;
            display: flex;
        }

        nav ul li {
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: #ecf0f1;
        }

        .settings-container {
            max-width: 600px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        .setting-option {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: bold;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
<nav>
    <div class="logo">Your Logo</div>
    <ul>
        <li><a href="{{ route('registration.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('registration.userProfile') }}">Profile</a></li>
        <li><a href="{{ route('registration.setting') }}">Settings</a></li>
        <li><a href="{{ route('session.destroy') }}">Logout</a></li>
    </ul>
</nav>

<div class="settings-container">
    <h1>Settings</h1>
    <form method="post" action="{{ route('your.route.name') }}">
        @csrf

    <div class="setting-option">
        <label for="theme">Choose Theme:</label>
        <select id="theme" name="theme">
            <option value="light">Light</option>
            <option value="dark">Dark</option>
        </select>
    </div>

    <div class="setting-option">
        <label for="notifications">Enable Notifications:</label>
        <input type="checkbox" id="notifications" name="notifications">
    </div>

    <div class="setting-option">
        <button type="submit">Save Settings</button>
    </div>
    </form>
</div>
</body>
</html>
