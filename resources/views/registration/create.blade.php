<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #3498db;
        }

        form {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        div.error {
            color: #d9534f;
            margin-bottom: 10px;
        }

        ul.error-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
            color: #d9534f;
        }

        ul.error-list li {
            margin-bottom: 5px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
        }

        .login-link a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<form method="post" action="{{ route('registration.create') }}">
    <h1>User Registration</h1>
    @csrf

    @if($errors->any())
        <div class="error">
            <ul class="error-list">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <label for="firstName">First Name:</label>
    <input type="text" name="firstName" placeholder="Enter your name" required />

    <label for="lastName">Last Name:</label>
    <input type="text" name="lastName" placeholder="Enter your name" required />

    <label for="email">Email Address:</label>
    <input type="email" name="email" placeholder="Enter your email" required />

    <label for="address">Email Address:</label>
    <input type="text" name="address" placeholder="Enter your address" required />

    <label for="phoneNumber">Phone Number:</label>
    <input type="text" name="phoneNumber" placeholder="Enter your phone number" required />

    <label for="password">Password:</label>
    <input type="password" name="password" placeholder="Enter your password" required />

    <label for="confirmPassword">Confirm Password:</label>
    <input type="password" name="confirmPassword" placeholder="Confirm your password" required />

    <input type="submit" value="REGISTER" />

    <div class="login-link">
        <p>Already have an account? <a href="{{ route('session.create') }}">Login instead</a></p>
    </div>
</form>
</body>
</html>
